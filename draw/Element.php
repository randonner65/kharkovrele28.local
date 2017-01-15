<?php
//КЛАСС ОДИНОЧНЫХ ЭЛЕМЕНТОВ ЧЕРТЕЖА 
//require_once "../../config.php";
class Element extends Draw{

public function __construct($PREL,  $PRGR){
//echo "<pre>";print_r($PRGR);echo "</pre>";exit;
$PR = Array(//массив обязательных свойств элементов чертежа
	"i" => "#",		//дескриптор холста
	"color" => "black",	//цвет элементов чертежа
	"scale" => 1,	//масштаб
	"width" => 3	//ширина линии
	);

$this->GROUP = Array();//создание пустого массива элементов
$this->PREL = $PREL;//начальные свойства элемента чертежа
$this->PRGR = $PRGR;//свойства группы элементов чертежа

if(isset($PRGR["x0"]) && !isset($PREL["x0"])) 	$this->x0 = $PREL["x0"] = $PRGR["x0"];
	else if(isset($PRGR["x0"]) && isset($PREL["x0"])) 	$this->x0 = $PREL["x0"] = $PRGR["x0"] + $PREL["x0"];
	else $this->x0 = $PREL["x0"] = 0;
	if(isset($PRGR["y0"]) && !isset($PREL["y0"])) 	$this->y0 = $PREL["y0"] = $PRGR["y0"];
	else if(isset($PRGR["y0"]) && isset($PREL["y0"])) 	$this->y0 = $PREL["y0"] = $PRGR["y0"] + $PREL["y0"];
	else $this->y0 = $PREL["y0"] = 0;	
	
$PREL = array_merge ($PRGR, $PREL);//слияние массивов свойств елемента и группы элементов с приоритетом у элемента
$PREL = array_merge ($PR, $PREL);//слияние массивов свойств елемента и обязательных свойств с приоритетом у элемента
//echo "<pre>";print_r($PREL);echo "</pre>";exit;
foreach($PREL as $nameProp => $value){
 	$this->$nameProp = $value;
		}
//echo "<pre>";print_r($this);echo "</pre>";exit;
	}
//Поворот точки
public function rotate_point($xp, $yp, $xc, $yc, $angle){
//$xp - горизонтальная координата точки
//$yp - вертикальная координата точки
//$xc - горизонтальная координата центра вращения
//$yc - вертикальная координата центра вращения
//$angle - угол поворота
$angle = $angle * M_PI / 180;
$yr1 = $yp - $yc;
$xr1 = $xp - $xc;
	if($xr1 == 0 && $yr1 == 0){//если точка совпадает с центром вращения
		$COORDINATES["x"] =  $xp;
		$COORDINATES["y"] =  $yp;
		return $COORDINATES;	
	} 
$r = hypot($xr1, $yr1);
	if($xr1 == 0) $angle_begin = -($yr1/abs($yr1)) * (M_PI / 2);// + или - 90 градусов
	else $angle_begin = atan($yr1 / $xr1);
$angle_end = $angle_begin + $angle;
	if($xr1 > 0){ 
	$xr2 = $r * cos($angle_end);
	$yr2 = $r * sin($angle_end);
	}
	else {
	$xr2 = $r * cos($angle_end  + M_PI);
	$yr2 = $r * sin($angle_end + M_PI);
	}
$COORDINATES["x"] =  $xr2 + $xc;
$COORDINATES["y"] =  $yr2 + $yc;
return $COORDINATES;
	}


//Изменение цвета
public function color($r, $g, $b){
$this->r = $r; 
$this->g = $g; 
$this->b = $b; 
	}
//Изменение ширины линии
public function width($width){
$this->width = $width; 
	}
 //Изменение масштаба
public function scale($scale){
$this->scale = $scale; 
	}
//Метод вычисления угла наклона линии 	
function angle ($x1, $y1, $x2, $y2){
	if($x1 == $x2) return M_PI/2;
		else return atan(($y2 - $y1) / ($x2 - $x1));//угол наклона линии
	}
//Горизонтальная координата с учетом базовой точки и масштаба
public function X($x){
return $this->scale*($this->x0 + $x);
	}
//Вертикальная координата с учетом базовой точки и масштаба
public function Y($y){
return $this->scale*($this->y0 + $y);
	}
//расстояние с учетом масштаба
public function S($s){
return $this->scale*$s;
	}	
}
  
?>