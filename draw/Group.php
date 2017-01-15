<?php
//КЛАСС ГРУППЫ ЭЛЕМЕНТОВ
class Group extends Draw {

public function __construct($PRGR, $PRPARGR = array()){

	if(isset($PRPARGR["x0"]) && !isset($PRGR["x0"])) 	{
	$PRGR["x0"] = $PRPARGR["x0"];
	}
	else if(isset($PRPARGR["x0"]) && isset($PRGR["x0"])) 	{
	$PRGR["x0"] = $PRGR["x0"] + $PRPARGR["x0"];
	}
	
	if(isset($PRPARGR["y0"]) && !isset($PRGR["y0"])) 	{
	$PRGR["y0"] = $PRPARGR["y0"];
	}
	else if(isset($PRPARGR["y0"]) && isset($PRGR["y0"])) 	{
	$PRGR["y0"] = $PRGR["y0"] + $PRPARGR["y0"];
	}
	
$this->PRGR = array_merge ($PRPARGR, $PRGR);//слияние массивов свойств данной группы и родительской группы с приоритетом у данной группы	
//echo "<pre>";print_r($PRPARGR);echo "</pre>";exit;	
$this->GROUP =array();//создание массива группы элементов чертежа
	}
	
//Добавление элемента в массив группы элементов чертежа
public function add($Element){
	if(count($Element->GROUP) == 0)
		$this->GROUP[] = $Element;//добавление нового элемента в массив группы элементов чертежа
		
	else for($i=0; $i<count($Element->GROUP); $i++)
		$this->GROUP[] = $Element->GROUP[$i];//добавление нового элемента в массив группы элементов чертежа
			
	}
	
	//Перемещение
public function move($dx, $dy){
	for($i=0; $i<count($this->GROUP); $i++)
		$this->GROUP[$i]->move($dx, $dy);
	}
//Изменение цвета
public function color($r, $g, $b){
	for($i=0; $i<count($this->GROUP); $i++)
		$this->GROUP[$i]->color($r, $g, $b);
	}
//Изменение ширины линии
public function width($width){
	for($i=0; $i<count($this->GROUP); $i++)
		$this->GROUP[$i]->width($width);
	}  
//Поворот
 public function rotate($x, $y, $angle){
	for($i=0; $i<count($this->GROUP); $i++)
		$this->GROUP[$i]->rotate($x, $y, $angle);
		}
 //Изменение масштаба
public function scale($scale){
for($i=0; $i<count($this->GROUP); $i++)
		$this->GROUP[$i]->scale($scale);
	}
//Симметрия относительно горизонтальной оси
public function mirrorX($y){ //$y - вертикальная  координата оси симметрии
for($i=0; $i<count($this->GROUP); $i++)
		$this->GROUP[$i]->mirrorX($y);
	}
//Симметрия относительно вертикальной оси
public function mirrorY($x){ //$x - горизонтальная  координата оси симметрии
for($i=0; $i<count($this->GROUP); $i++)
		$this->GROUP[$i]->mirrorY($x);
	}

}
?>