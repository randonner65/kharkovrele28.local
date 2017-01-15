<?php
//КЛАСС ВЫЧЕРЧИВАНИЯ СЕГМЕНТА ДУГИ ОКРУЖНОСТИ
class ArcFilled extends Arc {

public function __construct($PREL, $PRGR = array()){
parent::__construct($PREL, $PRGR);

	}

//Вывод в браузер 
public function out(){
$color1 = $this->color;
$color = self::$$color1;//получение цвета

 imagefilledarc ($this->i, $this->X($this->x), $this->Y($this->y), $this->S($this->w), $this->S($this->h), $this->angle1, $this->angle2, $color, IMG_ARC_PIE); 
	}

}
?>