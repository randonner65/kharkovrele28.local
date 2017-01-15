<?php //print_r ($_GET);

//function __autoload($class_name) {require_once "../classes/".$class_name.".php"; }//автоподключение нужного класса
//$ps = new PropertiesSwitcher();//создание объекта класса PropertiesSwitcher
//$PS = $ps->getPropSwitch($name);//получить свойства переключателя
//print_r ($synterr);
//print_r ($logicerr);
ob_start(); // Начинаем сохрание выходных данных в буфер
    include ("switchers_list.txt"); // Отправляем в буфер содержимое файла
    $switchers_list = ob_get_clean(); // Очищаем буфер и возвращаем содержимое
	$SL = explode(" ", $switchers_list);
	for($i=0; $i<count($SL); $i++){
		$SL[$i] = str_replace('Х', 'X', trim($SL[$i]));//замена русской буквы Х на латинскую Х
		$SL[$i] = str_replace('С', 'C', trim($SL[$i]));//замена русской буквы С на латинскую С
		$SL[$i] = str_replace('А', 'A', trim($SL[$i]));//замена русской буквы A на латинскую A
		$SL[$i] = str_replace('В', 'B', trim($SL[$i]));//замена русской буквы B на латинскую B
		$SL[$i] = str_replace('М', 'M', trim($SL[$i]));//замена русской буквы M на латинскую M
		}
 //print_r($SL);
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Харьковреле - перечень переключателей</title>
<meta http-equiv="Content-type" content="text/html; charset=utf8"/>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<meta name="Author" content="Дмитрий Коржов" />
<link href="/images/icon1.ico" rel="shortcut icon" type="image/x-icon" />
<link  rel="stylesheet" type="text/css" href="/styles/styles.css" />
</head>
  
<body>
  <?php require_once "../blocks/header.html";?>
 <div id = "content" >
  <?php require_once "../blocks/left_panel.html";?>
   <div id = "main_content">
	<h1>Перечень переключателей производства ЧП Харьковреле</h1>
<center></center><br/><br/> 
<?php /*for($i=0; $i<count($SL); $i++){
			$PS = $ps->getPropSwitch($SL[$i]);//получить свойства переключателя
	if($PS[syntaxerror] == "" && $PS[logicerror] == "")	echo "<a href='passport1.php?name_switcher=".$SL[$i]."' style = 'color: blue;font-size: 100%;'>".$SL[$i]."</a></br>";
	else if($PS[syntaxerror] != "" && $PS[logicerror] == "")	echo "<a href='passport1.php?name_switcher=".$SL[$i]."' style = 'color: red;font-size: 100%;'>".$SL[$i]."</a>  ".$PS[syntaxerror]."</br>";
	else if($PS[syntaxerror] == "" && $PS[logicerror] != "")	echo "<a href='passport1.php?name_switcher=".$SL[$i]."' style = 'color: black;font-size: 100%;'>".$SL[$i]."</a>  ".$PS[logicerror]."</br>";
	else if($PS[syntaxerror] != "" && $PS[logicerror] != "")	echo "<a href='passport1.php?name_switcher=".$SL[$i]."' style = 'color: green;font-size: 100%;'>".$SL[$i]."</a></br>";
	
	}*/
	?>
<center>
<div > 
<table  width="auto" border="0" align="center" cellpadding="4" cellspacing="0" style="background:transparent;" >
	<tr>
<?php
for ($i=0; $i<count($SL); ){
	if(($i % 7 == 0) && ($i != 0)) echo "</tr><tr>";
	//$PS = $ps->getPropSwitch($SL[$i]);//получить свойства переключателя
		//if($PS[syntaxerror] == "" && $PS[logicerror] == "")
	echo "<td><a href = 'passport1.php?name_switcher=".$SL[$i]. "' title = 'переключатель ".$SL[$i]."'>".$SL[$i]."</a></td>";
	 $i++;
	}
 
?>	
	</tr>
 </table>
</div>

		
  </center>


 </div>
 <div class="clear"></div>
 
<?php require_once "../blocks/footer.html";?>
 
</body>
</html>