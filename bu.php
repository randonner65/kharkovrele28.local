<?php
require_once "config.php";

  class Backup {
       
        private $source_dirs = array();
        private $offset_dirs = false; // Служебная переменная, служащая для устранения лишних папок в архиве
        public $dump_dir = false; // Директория, куда будут помещаться архивы
        private $delay_delete = false; // Время в секундах, через которое архивы будут удаляться
        public $filezip = false; // Имя архива
        private $allfiles = array(); // Массив со списком всех файлов, которые будут помещены в архив
        private $zip = false;
        private $exclude = array(); // Массив с именами файлов или папок, которые не нужно включать в архив
               
        /* Параметры подключения к базе данных */
        private $db_names = array(); // Массив с именами баз данных (имя базы данных можно посмотреть в phpMyAdmin)
        private $host = HOST; // Хост MySQL
        private $user = USER; // Имя пользователя БД
        private $password = PASSWORD; // Пароль пользователя БД
        private $db_files = array(); // Массив, куда будут помещаться файлы с дампом баз данных
 
       
        public function __construct() {
                /* Пишем в массив имен названия БД, которые нужно забэкапить. У меня одна :) */
                $this->db_names[] = DB;
                $this->zip = new ZipArchive(); // Создаём объект класса ZipArchive
                /* Пишем в массив имен названия каталогов, которые нужно забэкапить. У меня один, корневой каталог сайта :) */
                $this->source_dirs[] = $_SERVER['DOCUMENT_ROOT'];
                $this->offset_dirs = strlen(dirname($_SERVER['DOCUMENT_ROOT'])."/"); // Служебная переменная, служащая для устранения лишних папок в архиве
                $this->dump_dir = $_SERVER['DOCUMENT_ROOT']."/backup"; // Директория, куда будут помещаться архивы
                //$this->delay_delete = 35 * 24 * 3600; // Время в секундах, через которое архивы будут удаляться
                $this->filezip = "khrl ".date("Hч iм sс  d. m. Y").".zip"; // Имя архива
                $this->allfiles = array(); // Массив со списком всех файлов, которые будут помещены в архив
                if(!file_exists($this->dump_dir)){
                        try{
                                if(is_writable(dirname($this->dump_dir))){
                                        mkdir($this->dump_dir, 0777);
                                }
                        }
                        catch(Exception $e){
                                echo "Не удалось создать папку: ".$e->getMessage();
                        }
                }
        }
 
        public function createBackup($exclude = array()) {
                $this->exclude = $exclude; // Массив с именами файлов или папок для исключения из архива
                $this->deleteOldArchive(); // Удаляем все старые архивы
                $this->createDataBaseBackup(); // Делаем дамп базы
                if ($this->zip->open($this->dump_dir."/".$this->filezip, ZipArchive::CREATE) === true){
                        for ($i = 0; $i < count($this->source_dirs); $i++){
                                /* Рекурсивный перебор всех директорий */
                                if (is_dir($this->source_dirs[$i])){
                                        $this->recoursiveDir($this->source_dirs[$i]);
                                }
                                else{
                                        $this->allfiles[] = $this->source_dirs[$i]; // Добавляем файл в итоговый массив
                                }
                                foreach ($this->allfiles as $val){
                                        /* Добавляем в ZIP-архив все полученные файлы */
                                        $local = substr($val, $this->offset_dirs);
                                        $this->zip->addFile($val, $local);
                                }
                        }
                        $this->zip->close();
                }
                foreach ($this->db_files as $file){
                        // Удаляем файлы дампа SQL. Они уже есть у нас в архиве - нахуй они нам больше не нужны ))
                        unlink($file);
                }
				
		$this->saveFileOnPC();		
        }
 
        /* Метод для рекурсивного перебора и сохранения всех файлов и папок в массив, который затем возвращается */
        private function recoursiveDir($dir){
                if ($files = glob($dir."/{,.}*", GLOB_BRACE)) {
                        foreach($files as $file){
                                $b_name = basename($file);
                                if (($b_name == ".") || ($b_name == "..") || in_array($file, $this->exclude)){
                                        continue;
                                }
                                if (is_dir($file)){
                                        $this->recoursiveDir($file);
                                }
                                else{
                                        $this->allfiles[] = $file;
                                }
                        }
                }
        }
 
        /* Метод для удаления всех старых архивов */
        private function deleteOldArchive(){
                $ts = time();
                $files = glob($this->dump_dir."/*.zip");
                foreach ($files as $file){
                        // Удаляем файлы старше установленного времени
                        //if ($ts - filemtime($file) > $this->delay_delete){
                                unlink($file);
                        //}
                }
        }
       
        /* Метод для создания дампа всех БД на хосте */
        private function createDataBaseBackup(){
                for ($i = 0; $i < count($this->db_names); $i++) {
                        $filename = $this->db_names[$i].".sql"; // Имя файла с дампом базы данных
                        $this->db_files[] = $this->dump_dir."/".$filename; // Помещаем файл в массив
                        $fp = fopen($this->dump_dir."/".$filename, "a"); // Открываем файл
                        $db = new mysqli($this->host, $this->user, $this->password, $this->db_names[$i]); // Соединяемся с базой данных
                        $db->query("SET NAMES 'utf8'"); // Устанавливаем кодировку соединения
                        $result_set = $db->query("SHOW TABLES"); // Запрашиваем все таблицы из базы
                        while (($table = $result_set->fetch_assoc()) != false) {
                                /* Перебор всех таблиц в базе данных */
                                $table = array_values($table);
                                if ($fp) {
                                        $result_set_table = $db->query("SHOW CREATE TABLE `".$table[0]."`"); // Получаем запрос на создание таблицы
                                        $query = $result_set_table->fetch_assoc();
                                        $query = array_values($query);
                                        fwrite($fp, "\r\n".$query[1].";\r\n"); // Добавляем результат в файл
                                        $rows = "SELECT * FROM `".$table[0]."`";
                                        $result_set_rows = $db->query($rows); // Получаем список всех записей в таблице
                                        while (($row = $result_set_rows->fetch_assoc()) != false) {
                                                $query = "";
                                                /* Путём перебора всех записей добавляем запросы на их создание в файл */
                                                foreach ($row as $field) {
                                                        if (is_null($field)) $field = "NULL";
                                                        else $field = "'".$db->real_escape_string($field)."'"; // Экранируем значения
                                                        if ($query == "") $query = $field;
                                                        else $query .= ", ".$field;
                                                }
                                                $query = "INSERT INTO `".$table[0]."` VALUES (".$query.");\r\n";
                                                fwrite($fp, $query);
                                        }
                                }
                        }
                        fclose($fp); // Закрываем файл
                        $db->close(); // Закрываем соединение с базой данных и переходим к следующей
                }
        }
	
/* Метод записи файла резервной копии сайта на компъютер */
	private function saveFileOnPC(){
	$content = file_get_contents($this->dump_dir."/".$this->filezip);
  header('Content-Type: content=text/html; charset=utf-8');
  header("Content-Disposition: attachment; filename=".$this->filezip);

  ob_end_clean();
  ob_start();
  echo $content;
  ob_end_flush();
	
	
	}
}
 
$backup = new Backup();
$excl = array();
$excl[] = $_SERVER['DOCUMENT_ROOT']."/fonts";
$excl[] = $_SERVER['DOCUMENT_ROOT']."/images";
$excl[] = $_SERVER['DOCUMENT_ROOT']."/switcher/MPDF57";
$backup->createBackup($excl);


?>