<?php
//КЛАСС БИБЛИОТЕКИ ТЕКСТОВЫХ ЭЛЕМЕНТОВ
class TextDraw extends Element {

public function __construct($PREL, $PRGR = array()){
parent::__construct($PREL,  $PRGR);
 
 if(!isset($this->size)) $this->size= 10;//размер шрифта
 if(!isset($this->angle)) $this->angle = 0;//угол текста
 if(!isset($this->font)) $this->font = "arial";//шрифт текста
 if(!isset($this->text)) $this->text = "text";// текст
 if(!isset($this->color)) $this->text = "black";// текст
 
 
	}
	
//Метод вывода маркировки положений ручки переключателя
	//Вывод линии в браузер
public function out(){
$color1 = $this->color;
$color = self::$$color1;//получение цвета
$font = $_SERVER['DOCUMENT_ROOT']."/fonts/".$this->font.".ttf";//получение шрифта
imageTtfText($this->i, $this->S($this->size), $this->angle, $this->X($this->x), $this->Y($this->y), $color, $font, $this->text);
	}
//Перемещение
public function move($dx, $dy){
$this->x += $dx; 
$this->y += $dy; 
	}
//Поворот
 public function rotate($x, $y, $angle){
$COORDINATES = $this->rotate_point($this->x, $this->y, $x, $y, $angle); 
$this->x = $COORDINATES["x"]; 
$this->y = $COORDINATES["y"]; 
$this->angle -= $angle;
	}	
 //Симметрия относительно горизонтальной оси
public function mirrorX($y){} //$y - вертикальная  координата оси симметрии
	
 //Симметрия относительно вертикальной оси
public function mirrorY($x){} //$x - горизонтальная координата оси симметрии

}
?>