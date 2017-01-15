<?php
//КЛАСС ВЫЧЕРЧИВАНИЯ ДУГИ ОКРУЖНОСТИ
class Arc extends Element {

public function __construct($PREL, $PRGR = array()){
parent::__construct($PREL,  $PRGR);
 
 if(isset($this->d)) $this->w = $this->h = $this->d;//диаметр окружности
 if(!isset($this->angle1)) $this->angle1 = -180;//начальный угол дуги
 if(!isset($this->angle2)) $this->angle2 = 180;//конечный угол дуги
 if(!isset($this->n) && $this->type == "dotted") $this->n = 10;//количество пунктиров
 else if($this->type != "solid") $this->type = "solid";//тип линии
 
	}

//Перемещение
public function move($dx, $dy){
$this->x += $dx; 
$this->y += $dy; 
	}

//Поворот
 public function rotate($x, $y, $angle){
$begin = $this->rotate_point($this->x, $this->y, $x, $y, $angle); 
$this->x = $begin["x"]; 
$this->y = $begin["y"]; 
$this->angle1 += $angle; 
$this->angle2 += $angle; 
	}
  //Симметрия относительно горизонтальной оси
public function mirrorX($y){ //$y - вертикальная  координата оси симметрии
$this->y = 2 * $y - $this->y;
$angle1 = $this->angle1;
$this->angle1 = -$this->angle2;
$this->angle2 = -$angle1;
	}
  //Симметрия относительно вертикальная оси
public function mirrorY($x){ //$x - горизонтальной  координата оси симметрии
$this->x = 2 * $x - $this->x;
$angle1 = $this->angle1;
$this->angle1 = 180-$this->angle2;
$this->angle2 = 180-$angle1;
	}

//Вывод в браузер 
public function out(){
imageSetThickness($this->i, $this->width);//толщина линии
$color1 = $this->color;
$color = self::$$color1;//получение цвета
	if($this->type == "solid")//вычерчивание сплошной линии
		imageArc($this->i, $this->X($this->x), $this->Y($this->y), $this->S($this->w), $this->S($this->h), $this->angle1, $this->angle2, $color);
	
	else if($this->type == "dotted"){//вычерчивание пунктирной линии
	$angleBegin = $this->angle1;
 $angle = abs(($this->angle2-$this->angle1)); 
	if($angle == 360) $dangle = $angle / (2*$this->n);
	else $dangle = $angle / (2*$this->n + 1);
		for($j = 0; $j < $this->n; $j++){
		$angleEnd = $angleBegin + $dangle;
	imageArc($this->i, $this->X($this->x), $this->Y($this->y), $this->S($this->w), $this->S($this->h), $angleBegin, $angleEnd, $color);
	$angleBegin = $angleEnd + $dangle;
			}	
		}
	}

}
?>