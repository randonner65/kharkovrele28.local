<?php //print_r ($_GET);
//Проверка корректности наименований переключателей
function __autoload($class_name) {require_once "../../classes/".$class_name.".php"; }//автоподключение нужного класса
$ps = new PropertiesSwitcher();//создание объекта класса PropertiesSwitcher

ob_start(); // Начинаем сохрание выходных данных в буфер
    include ("switchers_list.txt"); // Отправляем в буфер содержимое файла
    $switchers_list = ob_get_clean(); // Очищаем буфер и возвращаем содержимое
	$SL = explode(" ", $switchers_list);//разбивка строки на элементы массива
	for($i=0; $i<count($SL); $i++){
		$SL[$i] = str_replace('Х', 'X', trim($SL[$i]));//замена русской буквы Х на латинскую Х
		$SL[$i] = str_replace('С', 'C', trim($SL[$i]));//замена русской буквы С на латинскую С
		$SL[$i] = str_replace('А', 'A', trim($SL[$i]));//замена русской буквы A на латинскую A
		$SL[$i] = str_replace('В', 'B', trim($SL[$i]));//замена русской буквы B на латинскую B
		$SL[$i] = str_replace('М', 'M', trim($SL[$i]));//замена русской буквы M на латинскую M
		}
 //print_r($SL);
 

for ($i=0; $i<count($SL);$i++){
	echo $i."<br>";
	$PS = $ps->getPropSwitch($SL[$i]);//получить свойства переключателя
		if($PS[syntaxerror] != "" || $PS[logicerror] != "") unset($SL[$i]);//если в имени ошибка удаляется имя переключателя
		else echo $PS[syntaxerror].$PS[logicerror];
	}
	$switchers_list = implode(" ", $SL);//запись массива в переменную
	file_put_contents ( "switchers_list.txt", $switchers_list);//запись переменной в файл
 
?>	
