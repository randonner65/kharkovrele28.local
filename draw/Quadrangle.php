<?php
//КЛАСС ВЫЧЕРЧИВАНИЯ ЧЕТЫРЕХУГОЛЬНИКА
class Quadrangle extends Element {

public function __construct($PREL,  $PRGR = array()){
parent::__construct($PREL,  $PRGR);

  $this->QUADRANGLE[0] = $this->x1;//горизонтальная первой точки
 $this->QUADRANGLE[1] = $this->y1;//вертикальная первой точки
 $this->QUADRANGLE[2] = $this->x2;//горизонтальная второй точки
 $this->QUADRANGLE[3] = $this->y2;//вертикальная второй точки
 $this->QUADRANGLE[4] = $this->x3;//горизонтальная третьей точки
 $this->QUADRANGLE[5] = $this->y3;//вертикальная третьей точки
 $this->QUADRANGLE[6] = $this->x4;//горизонтальная четвертой точки
 $this->QUADRANGLE[7] = $this->y4;//вертикальная четвертой точки
	}
//Перемещение
public function move($dx, $dy){
	for($j=0; $j<4; $j++){
		$this->QUADRANGLE[2*$j] += $dx;
		$this->QUADRANGLE[2*$j+1] += $dy;
		}
	}
//Поворот
 public function rotate($x, $y, $angle){

	for($j=0; $j<4; $j++){
		$rot = $this->rotate_point($this->QUADRANGLE[2*$j], $this->QUADRANGLE[2*$j+1], $x, $y, $angle);
		$this->QUADRANGLE[2*$j] = $rot["x"];
		$this->QUADRANGLE[2*$j+1] = $rot["y"];
		}
 }
 //Симметрия относительно горизонтальной оси
public function mirrorX($y){ //$y - вертикальная  координата оси симметрии

	for($j=0; $j<4; $j++)
		$this->QUADRANGLE[2*$j+1] = 2 * $y - $this->QUADRANGLE[2*$j+1];
	}
 //Симметрия относительно вертикальной оси
public function mirrorY($x){ //$x - горизонтальная координата оси симметрии

	for($j=0; $j<4; $j++)
		$this->QUADRANGLE[2*$j] = 2 * $x - $this->QUADRANGLE[2*$j];
	}

 //Вывод четырехугольника в браузер
public function out(){

	for($j=0; $j<4; $j++){
		$this->QUADRANGLE[2*$j] = $this->X($this->QUADRANGLE[2*$j]);
		$this->QUADRANGLE[2*$j+1] = $this->Y($this->QUADRANGLE[2*$j+1]);
		}
		
$color1 = $this->color;
$color = self::$$color1;//получение цвета
imagepolygon ($this->i, $this->QUADRANGLE, 4, $color);
	}

  }
?>