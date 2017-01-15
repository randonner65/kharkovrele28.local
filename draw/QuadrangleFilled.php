<?php
//КЛАСС ВЫЧЕРЧИВАНИЯ ЗАПОЛНЕННОГО ЧЕТЫРЕХУГОЛЬНИКА
class QuadrangleFilled extends Quadrangle {

public function __construct($PREL, $PRGR = array()){
parent::__construct($PREL, $PRGR);
	}

 //Вывод четырехугольника в браузер
public function out(){
	for($j=0; $j<4; $j++){
		$this->QUADRANGLE[2*$j] = $this->X($this->QUADRANGLE[2*$j]);
		$this->QUADRANGLE[2*$j+1] = $this->Y($this->QUADRANGLE[2*$j+1]);
		}

$color1 = $this->color;
$color = self::$$color1;//получение цвета
imagefilledpolygon ($this->i, $this->QUADRANGLE, 4, $color);
	}

  }
?>