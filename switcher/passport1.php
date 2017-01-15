<?php
function __autoload($class_name) {
if(file_exists("../classes/".$class_name.".php"))
require_once "../classes/".$class_name.".php";
else 
require_once "classes/".$class_name.".php"; 
}//автоподключение нужного класса
$propswitcher = new PropertiesSwitcher();//создание объекта класса PropertiesSwitcher

$errors = new Errors();//создание объекта класса Errors
$text = new  Text();//создание объекта класса Текст
$name_switcher = str_replace("%20", "", mb_strtoupper($name, "UTF-8"));//перевод в верхний регистр, замена пробелов на +

$propswitch = $propswitcher->getPropSwitch($name_switcher);
extract($propswitch);
//echo "<pre>";print_r($propswitch); echo "<pre>";exit();
$scheme = new  Schemas($number);//создание объекта класса Schemas
$errors->write('syntax', $syntaxerror);//запись в БД синтаксической ошибки
if($syntaxerror != ""){
 header( 'Location: passport.php?name='.$name_switcher.'&namestyle='.$nameswitchstyle, true, 303 );
 exit();
}
else 
$errors->write('logic', $logicerror);//запись в БД логической ошибки
if($logicerror != ""){

 header( 'Location: passport.php?name='.$name_switcher.'&namestyle='.$nameswitchstyle, true, 303 );
}
$title =$text->genphras_epithets_switch($number)."переключатель ";
	if($moment == 1) $title .= "с самовозвратом ";
	if($ip54 == 1) $title .= "и ip54 ";
	$title .= $name_switcher;
 
if($fix == "L") $keywords = $title = "Переключатель на din рейку, переключатель на дин рейку";
else if($fix == "P") $keywords = $title = "Переключатель в коробке, переключатель  в корпусе";

else $keywords = "Переключатель на ".$current."А";

$description = $text->npos($qpos)." переключатель ";
	if($moment == 1) $description .= "с самовозвратом ";
	if($ip54 == 1) $description .= ", ip54 ";
	$description .= $name_switcher." на ".$current."А, ".$scheme->mark.", технические характеристики,
 габаритный чертеж, схема, диаграмма замыканий ";


 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?=$title?></title>
<meta http-equiv="Content-type" content="text/html; charset=utf8"/>
<meta name="Keywords" content="<?=$keywords ?>" />
<meta name="Description" content="<?=$description?>" />
<meta name="Author" content="Дмитрий Коржов" />
<link href="/images/icon1.ico" rel="shortcut icon" type="image/x-icon" />
<link  rel="stylesheet" type="text/css" href="/styles/styles.css" />
</head>
  
<body>
  <?php require_once "blocks/header.html";?>
 <div id = "content" >
  <?php require_once "blocks/left_panel.html";?>
   <div id = "main_content">
	<br><center>
<table  class="schema_title" width="70%" border="0" align="center" >
	<tr>
		<td>
			<form name = "pdf_file" action = "passport_print.php?"  method = "get">
			<input type = "hidden" name = "name_switcher" value = "<?= $name_switcher?>" />
			<input type = "submit" value = "Скачать PDF - файл" />
			</form>
		</td>
		<td>
			<form name = "order_switcher" action = "../pages/order_switcher/order_switcher3.php?name_switcher=<?= $name_switcher?>"  method = "get">
			<input type = "hidden" name = "name_switcher" value = "<?= $name_switcher?>" />
			<input type = "submit" value = "Заказать переключатель <?= $name_switcher?>" />
			</form>
		</td>
	</tr>
</table>	
	</center>
	<h1>Переключатель <?=$name_switcher?></h1>
<script type="text/javascript">
  function openImageWindow(src) {
    var image = new Image();
    image.src = src;
    var width = image.width;
    var height = image.height;    window.open(src,"Image","width="+width+",height="+height+",directories=no");
  }
</script>
<?php if(!($fix == "P" && $handle == "key")) echo "
 <img src='../foto/foto_switcher.php?name=".$name_switcher."' alt='Переключатель ".$name_switcher ."' width='30%' 
onclick = 'openImageWindow(this.src);' title='Нажмите для увеличения изображения'/></br>";
else  if(strpos($box, "400")) echo "
 <img src='../images/passport2/25pk_foto.jpg' alt='Переключатель ".$name_switcher ."' width='30%' 
onclick = 'openImageWindow(this.src);' title='Нажмите для увеличения изображения'/></br>";
else echo "
 <img src='../images/passport2/25pkpg_foto.jpg' alt='Переключатель ".$name_switcher ."' width='30%' 
onclick = 'openImageWindow(this.src);' title='Нажмите для увеличения изображения'/></br>";
?> 
<h3>1 Общие сведения об изделии</h3>
<p>Электрический кулачковый галетный поворотный пакетный переключатель <b><?=$name_switcher ?></b> (далее по тексту переключатель)  предназначен для коммутации электрических цепей постоянного и переменного тока.</p>
 <p>Переключатель соответствует: 
ТУ У 31.2-32676972-001:2005, EN 947-3, (EN 60 947-3,
IEC 60 947-3), EN 60 204-1, VDE 0660.</p><p>
Все зажимы и соединения защищены от прямого соприкосновения (IP 21).</p>
<p>Переключатель имеет <?=$handleText.$boardText ?>.</p>
 <p><?=$ip54Text?></p>	
 <p>Переключатель <?=$fixText?>.</p>	
 <p>Количество положений ручки - <?=$qpos?>.</p>	
 <p>Количество контактных групп - <?=$qcont?>.</p>
 <p>Угол поворота ручки - <?=360/$angle?> градусов.</p>
 <p><?=$momentText?></p>

<h3>2 Технические характеристики переключателя</h3>

<table  class="propswitch" width="auto" border="0" align="lкеeft" cellpadding="4" cellspacing="0" style="background:  #C4DFF0; " >
<tr><td width="60%">Номинальное рабочее напряжение, В, не более</td><td><?=$operating_voltage?></td></tr>
<tr><td>Электрическая прочность изоляции, В, не менее</td><td>2500</td></tr>
<tr><td>Сопротивление изоляции, МОм, не менее</td><td>50</td></tr>
<tr><td>Сопротивление контактов на стадии поставки, Ом, не более</td><td>0,5</td></tr>
<tr><td>Номинальный переменный ток для активной и слабоиндуктивной нагрузки, А, не более</td><td><?=$current?></td></tr>
<tr><td>Номинальный переменный ток для асинхронных однофазных электродвигателей (220-240В) при запуске / отключении по ходу, А, не более</td><td><?=$motor_current_1_phase_220V[$current]?></td></tr>
<tr><td>Номинальный переменный ток для асинхронных трехфазных электродвигателей (220-240В) при запуске / отключении по ходу, А, не более</td><td><?=$motor_current_3_phase_220V[$current]?></td></tr>
<tr><td>Номинальный переменный ток для асинхронных трехфазных электродвигателей (380-400В) при запуске / отключении по ходу, А, не более</td><td><?=$motor_current_3_phase_380V[$current]?></td></tr>
<tr><td>Номинальный переменный ток для асинхронных трехфазных электродвигателей (500В) при запуске / отключении по ходу, А, не более</td><td><?=$motor_current_3_phase_500V[$current]?></td></tr>
<?php if($current == 10)
echo "<tr><td>Номинальный постоянный ток (6В), А, не более</td><td>".$DC_6V[$current]."</td></tr>"?>
<tr><td>Номинальный постоянный ток (24В), А, не более</td><td><?=$DC_24V[$current]?></td></tr>
<tr><td>Номинальный постоянный ток (48В), А, не более</td><td><?=$DC_48V[$current]?></td></tr>
<tr><td>Номинальный постоянный ток (110В), А, не более</td><td><?=$DC_110V[$current]?></td></tr>
<tr><td>Номинальный постоянный ток (220В) при активной нагрузке, А, не более</td><td><?=$DC_220V_resistive_load[$current]?></td></tr>
<tr><td>Номинальный постоянный ток (220В) для электродвигателей, А, не более</td><td><?=$DC_220V_electric_motors[$current]?></td></tr>
<tr><td>Номинальный кратковременный ток (<=1c), А, не более</td><td><?=$short_time_current[$current]?></td></tr>
<tr><td>Износостойкость механическая, переключений, не менее</td><td><?=$mechanical_wear_resistance[$current]?></td></tr>
<tr><td>Износостойкость при максимальной нагрузке, переключений, не менее</td><td><?=$wear_resistance_at_maximum_load[$current]?></td></tr>
<tr><td>Сечение подключаемых проводников,  мм. кв.</td><td><?=$wire_size[$current]?></td></tr>



</table></br>	
<h3>3 Общий вид, габаритные и присоединительные размеры переключателя</h3></br>
<img src="drawing_switcher.php?name=<?=$name_switcher ?>" alt="<?='Переключатель '.$name_switcher ?>" width="100%"/></br>
<?php if($fix != "P" && $fix != "L") echo "<h4>Разметка крепежных отверстий</h4></br>
<img src='drawing_fix_holes.php?name=".$name_switcher."' alt='Переключатель ".$name_switcher."' height='300'/></br></br>";?>

	<div style="  float:left ">
<h3>4 Схема переключателя</h3>
<img style="margin-left: 5px; margin-top: 5px; " src="../pages/blocks/outscheme.php?number=<?=$number ?>" alt="схема переключателя <?=$number ?>"></br>
	</div>
	<div style=" margin-left: 550px;">
<?php 
if(file_exists("images/functional/".$number.".jpg"))
	echo "
		<h3>Рекомендуемая схема подключения</h3>
		<img src='../images/functional/".$number.".jpg'  height='250'/>";	
?>	
	
	</div>
<ddiv class="clear">
</br>
<h4>Условные обозначения</h4>
<img style="margin-left: 5px; margin-top: 5px; " src="../pages/blocks/outmaplegend.php?number=<?=$number ?>" alt="Условные обозначения">

<?php 

if($current < 30) $current = 25;
	else if($current < 80) $current = 32;
	else $current = 100;


if($board == 0 && $fix == "_" && $handle == "black" && $ip54 == 0 && $moment == 0) echo '</br>
<h4>Установка переключателя на лицевую панель</h4>
<img src="../images/passport2/'.$current.'.jpg"  width="100%"/>';
if($board == 1 && $fix == "_" && $handle == "red" && $ip54 == 0 && $moment == 0) echo '</br>
<h4>Установка переключателя на лицевую панель</h4>
<img src="../images/passport2/'.$current.'dr.jpg"  width="100%"/>';
if($board == 1 && $fix == "_" && $handle == "black" && $ip54 == 0 && $moment == 0) echo '</br>
<h4>Установка переключателя на лицевую панель</h4>
<img src="../images/passport2/'.$current.'d.jpg"  width="100%"/>';
if($board == 1 && $fix == "_" &&  $handle == "black" && $ip54 == 0 && $moment == 1) echo '</br>
<h4>Установка переключателя на лицевую панель</h4>
<img src="../images/passport2/'.$current.'dv.jpg"  width="100%"/>';
if($board == 0 && $fix == "_" &&  $handle == "black" && $ip54 == 0 && $moment == 1) echo '</br>
<h4>Установка переключателя на лицевую панель</h4>
<img src="../images/passport2/'.$current.'v.jpg"  width="100%"/>';
if($board == 1 && $fix == "_" &&  $handle == "black" && $ip54 == 1 && $moment == 1) echo '</br>
<h4>Установка переключателя на лицевую панель</h4>
<img src="../images/passport2/'.$current.'dvg.jpg"  width="100%"/>';
if($board == 0 && $fix == "_" &&  $handle == "black" && $ip54 == 1 && $moment == 1) echo '</br>
<h4>Установка переключателя на лицевую панель</h4>
<img src="../images/passport2/'.$current.'vg.jpg"  width="100%"/>';


if($board == 1 && $fix == "_" &&  $handle == "t" && $ip54 == 0 && $moment == 0) echo '</br>
<h4>Установка переключателя на лицевую панель</h4>
<img src="../images/passport2/'.$current.'dt.jpg"  width="100%"/>';
if($board == 1 && $fix == "_" &&  $handle == "t" && $ip54 == 1 && $moment == 0) echo '</br>
<h4>Установка переключателя на лицевую панель</h4>
<img src="../images/passport2/'.$current.'dgt.jpg"  width="100%"/>';

if( ($handle == "ur" || $handle == "ub") && $ip54 == 0 && $fix == "_") echo '</br>
<h4>Установка переключателя на лицевую панель</h4>
<img src="../images/passport2/'.$current.'u.jpg"  width="100%"/>';
if( ($handle == "ur" || $handle == "ub") &&  $ip54 == 0  && $fix == "B") echo '</br>
<h4>Установка переключателя на монтажную панель</h4>
<img src="../images/passport2/'.$current.'bu.jpg"  width="100%"/>';
if($board == 0 && $fix == "B" && $handle == "black") echo '</br>
<h4>Установка переключателя на монтажную панель</h4>
<img src="../images/passport2/'.$current.'b.jpg"  width="100%"/>';
if($board == 1 && $fix == "B" && $handle == "black") echo '</br>
<h4>Установка переключателя на монтажную панель</h4>
<img src="../images/passport2/'.$current.'db.jpg"  width="100%"/>';
if($board == 1 && $fix == "L" && $handle == "black"  && $moment == 0) echo '</br>
<h4>Установка переключателя на din - рейку</h4>
<img src="../images/passport2/'.$current.'dl.jpg"  width="100%"/>';
if($board == 0 && $fix == "L" && $handle == "black"  && $moment == 0) echo '</br>
<h4>Установка переключателя на din - рейку</h4>
<img src="../images/passport2/'.$current.'l.jpg"  width="100%"/>';
if($board == 0 && $fix == "L" && $handle == "black"  && $moment == 1)
echo '</br>
<h4>Установка переключателя на din - рейку</h4>
<img src="../images/passport2/'.$current.'vl.jpg"  width="100%"/>';
if($board == 1 && $fix == "L" && $handle == "black"  && $moment == 1) echo '</br>
<h4>Установка переключателя на din - рейку</h4>
<img src="../images/passport2/'.$current.'dvl.jpg"  width="100%"/>';

if($board == 1 && $fix == "O" && $handle == "black"  && $moment == 0) echo '</br>
<h4>Установка переключателя на монтажную панель</h4>
<img src="../images/passport2/'.$current.'do.jpg"  width="100%"/>';
if($board == 0 && $fix == "O" && $handle == "black"  && $moment == 0) echo '</br>
<h4>Установка переключателя на монтажную панель</h4>
<img src="../images/passport2/'.$current.'o.jpg"  width="100%"/>';
if($board == 0 && $fix == "O" && $handle == "black"  && $moment == 1) echo '</br>
<h4>Установка переключателя на монтажную панель</h4>
<img src="../images/passport2/'.$current.'ov.jpg"  width="100%"/>';
if($board == 1 && $fix == "O" && $handle == "black"  && $moment == 1) echo '</br>
<h4>Установка переключателя на монтажную панель</h4>
<img src="../images/passport2/'.$current.'dov.jpg"  width="100%"/>';

if($board == 1 && $fix == "_" &&  $ip54 == 1 && $handle == "black"  && $moment == 0) echo '</br>
<h4>Установка переключателя на лицевую панель</h4>
<img src="../images/passport2/'.$current.'dg.jpg"  width="100%"/>';
if($board == 0 && $handle == "black" && $fix == "_" &&  $ip54 == 1  && $moment == 0) echo '</br>
<h4>Установка переключателя на лицевую панель</h4>
<img src="../images/passport2/'.$current.'g.jpg"  width="100%"/>';
if($board == 1 && $fix == "P" &&  $handle == "black"){
if(strpos($box, "400")) echo '</br> <img src="../images/passport2/'.$current.'pd.jpg"  width="100%"/>';//с резинками
	 else echo '</br> <img src="../images/passport2/'.$current.'pdpg.jpg"  width="100%"/>';//с сальниками
	} 
if($fix == "P" &&  $handle == "ur"){
if(strpos($box, "400")) echo '</br> <img src="../images/passport2/'.$current.'pu.jpg"  width="100%"/>';//с резинками
	 else echo '</br> <img src="../images/passport2/'.$current.'pupg.jpg"  width="100%"/>';//с сальниками
	}
if($fix == "P" &&  $handle == "key"){

	if(strpos($box, "400")) echo '</br> <img src="../images/passport2/'.$current.'pk.jpg"  width="100%"/>';//с резинками
	 else echo '</br> <img src="../images/passport2/'.$current.'pkpg.jpg"  width="100%"/>';//с сальниками
	 }
if(( $handle == "ur" || $handle == "ub") &&  $ip54 == 1 && $fix == "_") echo '</br>
<h4>Установка переключателя на лицевую панель</h4>
<img src="../images/passport2/'.$current.'ug.jpg"  width="100%"/>';
if($handle == "key" && $fix != "P") echo '</br>
<h4>Установка переключателя на лицевую панель</h4>
<img src="../images/passport2/'.$current.'k.jpg"  width="100%"/>';

?>

<h3>5 Комплектность</h3></br>
<table  class="propswitch" width="auto" border="1" align="lкеeft" cellpadding="4" cellspacing="0" style="background:  #C4DFF0; " >
<tr><td>№п/п</td><td width="60%" align="center">Наименование</td><td>Количество, шт.</td></tr>
<tr><td align="center">1</td><td>Переключатель <?= $name_switcher?></td><td align="center">1</td></tr>
<tr><td align="center">2</td><td>Паспорт ЧПХР.642310.001 ПС</td><td align="center">1</td></tr>

</table></br>	
<h3>6 Гарантии изготовителя</h3></br>
<p>Изготовитель гарантирует соответствие переключателя требованиям ТУ У 31.2-32676972-001:2005 при соблюдении потребителем условий эксплуатации, транспортирования, хранения и монтажа.
</br> Гарантийный срок 3 года (исчисляется с даты отгрузки). </p><p>
ИЗГОТОВИТЕЛЬ: ЧП «Харьковреле» </p><p>
61009 Украина, г. Харьков,
 ул. Достоевского, 13
 </p>
 </div>
 </div>
 <div class="clear"></div>
 
<?php require_once "blocks/footer.html";?>
 
</body>
</html>