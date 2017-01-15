<?php
//КЛАСС ВЫЧЕРЧИВАНИЯ ТОЧКИ
class Point extends Element {

public function __construct($PREL, $PRGR = array()){
parent::__construct($PREL, $PRGR);
 $group = Array();//создание пустого массива элементов
 
}

//Перемещение
public function move($dx, $dy){
$this->x += $dx; 
$this->y += $dy; 
}

//Поворот
 public function rotate($x, $y, $angle){
$begin = $this->rotate_point($this->x1, $this->y1, $x, $y, $angle); 
$this->x1 = $begin["x"]; 
$this->y1 = $begin["y"]; 
$end = $this->rotate_point($this->x2, $this->y2, $x, $y, $angle); 
$this->x2 = $end["x"]; 
$this->y2 = $end["y"]; 
 }

public function out(){

imageSetThickness($this->i, $this->width);//толщина линии
$color1 = $this->color;
$color = self::$$color1;//получение цвета
imageSetPixel($this->i, $this->X($this->x), $this->Y($this->y), $color);
	}
  }
?>