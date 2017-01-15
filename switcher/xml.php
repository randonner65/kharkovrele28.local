<?php

//Проверка корректности наименований переключателей
function __autoload($class_name) {require_once "../../classes/".$class_name.".php"; }//автоподключение нужного класса
$ps = new PropertiesSwitcher();//создание объекта класса PropertiesSwitcher
ob_start(); // Начинаем сохрание выходных данных в буфер
include ("switchers_list.txt"); // Отправляем в буфер содержимое файла
    $switchers_list = ob_get_clean(); // Очищаем буфер и возвращаем содержимое
	$SL = explode(" ", $switchers_list);

	$sitemap1 = "";
for ($i=0; $i<count($SL);$i++){
	//echo $i."<br>";
	$sitemap1 = $sitemap1."<url>
  <loc>http://khrl.com.ua/pages/passport_switcher/passport1.php?name_switcher=".$SL[$i]."</loc>
</url>";
	}
	file_put_contents ( "sitemap1.xml", $sitemap1);//запись переменной в файл
  //print_r($sitemap);
?>	
