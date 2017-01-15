<?php
require_once "config.php";
mb_internal_encoding("UTF-8");
  //$url = $_GET['url'];
  $url = ltrim($_SERVER['REQUEST_URI'], '/');
  $url = str_replace("%D0%A4", "Ф", $url);
  $url = str_replace("%D0%A9", "Щ", $url);
  $url = str_replace("%D0%9B", "Л", $url);
  $url = str_replace("%D0%A5", "Х", $url);
  $url = str_replace("%D1%85", "х", $url);
//echo $url;
//echo "</br>";
//echo ltrim($_SERVER['REQUEST_URI'], '/');
  $url = rtrim($url, '/');
  $url = explode('/', $url);
  if ($url[0] == "") {
  //echo "main page";
  require 'pages/main_page/main_page.php';
  exit();
  }

else if ($url[1] == "" ) {
	if ($url[0] == "index.php" || $url[0] == "index.php/") {
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: /");
	}
else 	
require_once "static_page.php";//подключение файла статические страницы
exit();
	}
	else 

	require $url[0].'/'.$url[0].'.php';//подключение класса вывода страницы с параметром
	$param = $url[1];
	//print_r($url);
	//print_r($param);
	$page = new $url[0]($url[1]);//создание объекта класса вывода страницы с параметром
	
   //$page->$url[0]($param);//вызов метода класса вывода страницы с параметром

?>
