<?php
function __autoload($class_name) {require_once "../classes/".$class_name.".php"; }//автоподключение нужного класса
$propswitcher = new PropertiesSwitcher();//создание объекта класса PropertiesSwitcher
$errors = new Errors();//создание объекта класса Errors
$name_switcher = mb_strtoupper(str_replace(" ", "+", $_GET['name_switcher']), "UTF-8");//перевод в верхний регистр;
$propswitch = $propswitcher->getPropSwitch($name_switcher);
//print_r($propswitch);
$b = strpos($name_switcher, "EC");
if($b) $short_name_switcher = substr($name_switcher, 0, $b);//обрезание коробки
extract($propswitch);
if($current < 30) $current = 25;
else if($current < 80) $current = 32;
else $current = 100;

if($board == 0 && ($handle == "black" || $handle == "red") && $fix == "_"  &&  $ip54 == 0 && $moment == 0) {
$head = "Установка переключателя на лицевую панель";
$img = $current."_print.jpg" ;
	}
else if($board == 1 && $fix == "_"  &&  $ip54 == 0 && $moment == 0 ) {
$head = "Установка переключателя на лицевую панель";
$img = $current."d_print.jpg" ;
	}
else if($board == 1 && $fix == "_"  &&  $ip54 == 0 && $moment == 1 ) {
$head = "Установка переключателя на лицевую панель";
$img = $current."dv_print.jpg" ;
	}
else if($board == 0 && $fix == "_"  &&  $ip54 == 0 && $moment == 1 ) {
$head = "Установка переключателя на лицевую панель";
$img = $current."v_print.jpg" ;
	}
else if($board == 1 && $fix == "_"  &&  $ip54 == 1 && $moment == 1 ) {
$head = "Установка переключателя на лицевую панель";
$img = $current."dvg_print.jpg" ;
	}
else if($board == 0 && $fix == "_"  &&  $ip54 == 1 && $moment == 1 ) {
$head = "Установка переключателя на лицевую панель";
$img = $current."dv_print.jpg" ;
	}
	
else if($board == 1 && $fix == "_" &&  $handle == "t" &&  $ip54 == 0 && $moment == 0 ) {
$head = "Установка переключателя на лицевую панель";
$img = $current."dt_print.jpg";
	}
else if($board == 1 && $fix == "_" &&  $handle == "t" &&  $ip54 == 1 && $moment == 0 ) {
$head = "Установка переключателя на лицевую панель";
$img = $current."dgt_print.jpg";
	}	
	
else if( ($handle == "ur" || $handle == "ub") &&  $ip54 == 0 && $fix == "_") {
$head = "Установка переключателя на лицевую панель";
$img = $current."u_print.jpg";
	}
else if( ($handle == "ur" || $handle == "ub") &&  $ip54 == 0 && $fix == "B") {
$head = "Установка переключателя на лицевую панель";
$img = $current."bu_print.jpg";
	}
else if($board == 0 && $fix == "B" && $handle == "black") {
$head = "Установка переключателя на монтажную панель";
$img = $current."b_print.jpg" ;
	}
else if($board == 1 && $fix == "B" && $handle == "black") {
$head = "Установка переключателя на монтажную панель";
$img = $current."db_print.jpg" ;
	}
else if($board == 0 && $fix == "L" && ($handle == "black" || $handle == "red")  && $moment == 0) {
$head = "Установка переключателя на din - рейку";
$img = $current."l_print.jpg";
	}	
else if($board == 1 && $fix == "L" && ($handle == "black" || $handle == "red")  && $moment == 0) {
$head = "Установка переключателя на din - рейку";
$img = $current."dl_print.jpg";
	}
else if($board == 0 && $fix == "L" && ($handle == "black" || $handle == "red")  && $moment == 1) {
$head = "Установка переключателя на din - рейку";
$img = $current."vl_print.jpg";
	}	
else if($board == 1 && $fix == "L" && ($handle == "black" || $handle == "red")  && $moment == 1) {
$head = "Установка переключателя на din - рейку";
$img = $current."dvl_print.jpg";
	}	
	
else if($board == 1 && $fix == "O" && ($handle == "black" || $handle == "red")  && $moment == 0) {
$head = "Установка переключателя на монтажную панель";
$img = $current."do_print.jpg";
	}
else if($board == 0 && $fix == "O" && ($handle == "black" || $handle == "red")  && $moment == 0) {
$head = "Установка переключателя на монтажную панель";
$img = $current."o_print.jpg";
	}
else if($board == 0 && $fix == "O" && ($handle == "black" || $handle == "red")  && $moment == 1) {
$head = "Установка переключателя на монтажную панель";
$img = $current."ov_print.jpg";
	}	
else if($board == 1 && $fix == "O" && ($handle == "black" || $handle == "red")  && $moment == 1) {
$head = "Установка переключателя на монтажную панель";
$img = $current."dov_print.jpg";
	}	
	
else if($board == 1 && $fix == "_" &&  $ip54 == 1 && ($handle == "black" || $handle == "red")  && $moment == 0) {
$head = "Установка переключателя на лицевую панель";
$img = $current."dg_print.jpg";
	}
else if($board == 0 && $fix == "_" &&  $ip54 == 1 &&($handle == "black" || $handle == "red")  && $moment == 0) {
$head = "Установка переключателя на лицевую панель";
$img = $current."g_print.jpg";
	}	
else if($board == 1 && $fix == "P" &&  ($handle == "black" || $handle == "red")) {
$head = "";
	if(strpos($box, "400")) $img = $current."pd_print.jpg";//с резинками
	else $img = $current."pdpg_print.jpg";//с сальниками

	}
else if($fix == "P" &&  ( $handle == "ur" || $handle == "ub")) {
$head = "";
	if(strpos($box, "400")) $img = $current."pu_print.jpg";//с резинками
	else $img = $current."pupg_print.jpg";//с сальниками

	}	
else if(($handle == "ur" || $handle == "ub") &&  $ip54 == 1 && $fix == "_" ) {
$head = "Установка переключателя на лицевую панель";
$img = $current."ug_print.jpg";
	}
else if($handle == "key" && $fix != "P") {
$head = "Установка переключателя на лицевую панель";
$img = $current."k_print.jpg";
	}
else if($handle == "key" && $fix == "P") {
$head = "";
	if(strpos($box, "400")) $img = $current."pk_print.jpg";//с резинками
	else $img = $current."pkpg_print.jpg";//с сальниками
	}	
else $img = "white_square.jpg";	

ob_start(); // Начинаем сохрание выходных данных в буфер
if($fix == "P" || $fix == "L") include ("passport_print_P.tpl"); // Отправляем в буфер содержимое файла
    else include ("passport_print.tpl"); // Отправляем в буфер содержимое файла
    $html = ob_get_clean(); // Очищаем буфер и возвращаем содержимое
	if($fix == "P" && $handle == "key"){//если коробка с ключем - вставляем готовые картинки
	if(strpos($box, "400"))	$html = str_replace("/%name_switcher%_print.png", "2/25pk_foto_print.png", $html);
	else $html = str_replace("/%name_switcher%_print.png", "2/25pkpg_foto_print.png", $html);
	}
	$html = str_replace(
		array(
			"%name_switcher%",
			"%short_name_switcher%",
			"%propswitch[handleText]%",
			"%propswitch[boardText]%",
			"%propswitch[ip54Text]%",
			"%propswitch[fixText]%",
			"%propswitch[qpos]%",
			"%propswitch[qcont]%",
			"%360/propswitch[angle]%",
			"%propswitch[momentText]%",
			"%propswitch[operating_voltage]%",
			"%propswitch[current]%",
			"%propswitch[motor_current_1_phase_220V][propswitch[current]]%",
			"%propswitch[motor_current_3_phase_220V][propswitch[current]]%",
			"%propswitch[motor_current_3_phase_380V][propswitch[current]]%",
			"%propswitch[motor_current_3_phase_500V][propswitch[current]]%",
			"%propswitch[DC_6V][propswitch[current]]%",
			"%propswitch[DC_24V][propswitch[current]]%",
			"%propswitch[DC_48V][propswitch[current]]%",
			"%propswitch[DC_110V][propswitch[current]]%",
			"%propswitch[DC_220V_resistive_load][propswitch[current]]%",
			"%propswitch[DC_220V_electric_motors][propswitch[current]]%",
			"%propswitch[short_time_current][propswitch[current]]%",
			"%propswitch[mechanical_wear_resistance][propswitch[current]]%",
			"%propswitch[wear_resistance_at_maximum_load][propswitch[current]]%",
			"%propswitch[wire_size][propswitch[current]]%",
			"%propswitch[number]%",
			"%propswitch[qcont]%",
			"%propswitch[qcont]%",
			"%propswitch[qcont]%",
			"%head%",
			"%img%"
			),
    array (
			$name_switcher,
			$short_name_switcher,
			$handleText,
			$boardText,
			$ip54Text,
			$fixText,
			$qpos,
			$qcont,
			360/$angle,
			$momentText,
			$operating_voltage,
			$current,
			$motor_current_1_phase_220V[$current],
			$motor_current_3_phase_220V[$current],
			$motor_current_3_phase_380V[$current],
			$motor_current_3_phase_500V[$current],
			$DC_6V[$current],
			$DC_24V[$current],
			$DC_48V[$current],
			$DC_110V[$current],
			$DC_220V_resistive_load[$current],
			$DC_220V_electric_motors[$current],
			$short_time_current[$current],
			$mechanical_wear_resistance[$current],
			$wear_resistance_at_maximum_load[$current],
			$wire_size[$current],
			$number,
			$qcont,
			$qcont,
			$qcont,
			$head,
			$img
			),
    $html);
	

	if(file_exists("../images/functional/".$number.".jpg")){
		$html = str_replace("%wiring_diagram%", $number, $html);
		$html = str_replace("%wiring_scheme%", "Рекомендуемая схема подключения", $html);
		}
		else {
		$html = str_replace("%wiring_diagram%", "white_square", $html);
		$html = str_replace("%wiring_scheme%", "", $html);
	}
	//exit( $html);
	include("MPDF57/mpdf.php");

//$mpdf=new mPDF('utf-8','A4', 12,'Helvetica',32,25,27,25,16);
$mpdf=new mPDF('utf-8','A4', 12,'Helvetica',10, 10, 7, 7, 10, 10);
$mpdf->allow_charset_conversion = true;
$mpdf->charset_in = 'utf-8';
$mpdf->SetDisplayMode('fullpage');
//$stylesheet = file_get_contents('../../styles/styles.css');
$mpdf->WriteHTML($stylesheet, 1);
$mpdf->list_indent_first_level = 0;
$mpdf->WriteHTML($html, 2);
	if(file_exists($name_switcher.'.pdf')) unlink ($name_switcher.'.pdf');//удаление старого файла
	
$mpdf->Output($name_switcher.'.pdf', 'F');//запись PDF-файла
 //$filename =  "../images/passport/".$number.".jpg";
unlink("../images/passport/".$number.".jpg");//удаление файла схемы
unlink("../images/passport/".$number."_map_legend.jpg");//удаление файла условных обозначений схемы
unlink("../images/passport/".$name_switcher.".jpg");//удаление файла габаритного чертежа
unlink("../images/passport/".$name_switcher."_fix_holes.jpg");//удаление файла крепежных отверстий 
unlink("../images/passport/".$name_switcher."_technical_characteristics.jpg");//удаление файла технических характеристик
unlink("../images/passport/".$name_switcher."_print.png");//удаление файла контурного фото переключателя
//if(unlink($filename)) echo "файл ".$filename." удален"; else "не удалось удалить файл ".$filename;
//Скачивание PDF-файла в папку загрузок посетителя сайта
  $content = file_get_contents($name_switcher.'.pdf');
  header('Content-Type: '.$ctype.'; charset=utf-8');
  header("Content-Disposition: attachment; filename=".$name_switcher.".pdf");
		if(file_exists($name_switcher.'.pdf')) unlink ($name_switcher.'.pdf');//удаление созданного файла
 
  ob_end_clean();
  ob_start();
  echo $content;
 
  ob_end_flush();
  //exit();
 
 

//echo $html;


 ?>
