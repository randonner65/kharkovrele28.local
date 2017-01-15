<?php
function __autoload($class_name) {require_once "../classes/".$class_name.".php"; }//автоподключение нужного класса
$propswitcher = new PropertiesSwitcher();//создание объекта класса PropertiesSwitcher
$errors = new Errors();//создание объекта класса Errors
$name_switcher = mb_strtoupper(str_replace(" ", "+", $_GET['name_switcher']), "UTF-8");//перевод в верхний регистр;
$propswitch = $propswitcher->getPropSwitch($name_switcher);
//$save = true;
//include ("drawing_technical_characteristics.php");
//include ("drawing_switcher.php");
/*$b = strpos($name_switcher, "EC");
if($b) $short_name_switcher = substr($name_switcher, 0, $b);//обрезание коробки*/
echo "<img src='drawing_technical_characteristics.php?name_switcher=".$name_switcher." ' width='0%'/>";
echo "<img src='drawing_switcher.php?flag=1&name=".$name_switcher."' width='0%'/>";
echo "<img src='drawing_fix_holes.php?flag=1&name=".$name_switcher."'  width='0%'/>";
echo "<img src='../pages/blocks/outscheme.php?flag=1&number=".$propswitch[number]."'  width='0%'/>";
echo "<img src='../pages/blocks/outmaplegend.php?flag=1&number=".$propswitch[number]."'  width='0%'/>";
echo "<img src='../foto/foto_switcher_print.php?flag=1&name=".$name_switcher."'  width='0%'/>";
//header( 'Location: passport_print1.php', true, 303 );

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?=$title?></title>
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
	<br><center><form name = "pdf_file" action = "passport_print1.php?name_switcher=<?= $name_switcher?>"  method = "get">
		<input type = "hidden" name = "name_switcher" value = "<?= $name_switcher?>" />
		<input type = "submit" value = "Записать PDF - файл" />
	</form></center>
 </div>
 </div>
 <div class="clear"></div>
 
<?php require_once "../blocks/footer.html";?>
 
</body>
</html>	