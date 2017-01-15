<?php
//КЛАСС ВЫВОДА СПИСКА СХЕМ ПЕРЕКЛЮЧАТЕЛЕЙ
class schemes  {
public function __construct($options){

function __autoload($class_name) {require_once "classes/".$class_name.".php"; }//автоподключение нужного класса
$scheme = new Schemas();//создание объекта класса Schemas
$text = new Text();//создание объекта класса Schemas
	if($options[0] == "p") {
	$nameProperty = "qP";
	$options = substr($options, 1);//обрезание первого символа опции
	$title = "Cхемы кулачковых переключателей на ".$options.$text->polozhenie($options).
	" (".$text->npos($options)." переключатель)";
	}
	else if($options[0] == "c") {
	$nameProperty = "qC";
	$options = substr($options, 1);//обрезание первого символа опции
	$title = "Cхемы кулачковых переключателей на ".$options.$text->contgruppy($options).
	" (".$text->one($options)."полюсный переключатель)";
	}
	else if($options[0] == "m") {
	$nameProperty = "mark";
	$options = substr($options, 1);//обрезание первого символа опции
	$options = str_replace("-", " ", $options);
	$title = "Cхемы кулачковых переключателей с маркировкой ".$options."(переключатель ".$options.")";
	if($options == "on off on ") $options = "1 0 2 ";
	}
	else exit("Задан неправильный параметр");
	//$options = substr($options, 1);//обрезание первого символа опции
	
	
	$condition = $nameProperty." = '".$options."'";
	$SL = $scheme->select("name", $condition);
	
	for ($i=0; $i<count($SL); $i++) $SL[$i] = $SL[$i]["name"];
	




require_once "list.php";	
	}
}
?>
