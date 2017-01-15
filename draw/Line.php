<?php
//КЛАСС ВЫЧЕРЧИВАНИЯ ЛИНИИ
class Line extends Element {

public function __construct($PREL, $PRGR = array()){

parent::__construct($PREL,  $PRGR);
//echo "<pre>";print_r($this);echo "</pre>";exit;
 if($this->type == "dotted"){
	if(!isset($this->n)) $this->n = 10;//количество пунктиров в пунктирной линии
	if(!isset($this->l)) $this->l = 3;//длина штриха пунктирной линии
	}
	else if($this->type == "axis" ){
	if(!isset($this->l))  	$this->l = 3;//длина штриха штрих-пунктирной линии
	if(!isset($this->lbig))  	$this->lbig = 7;//длина большого штриха штрих-пунктирной линии
	if(!isset($this->lsmall))	$this->lsmall = 1;//длина маленького штриха штрих-пунктирной линии
	if(!isset($this->lspace))	$this->lspace = 2;//длина пробела штрих-пунктирной линии
		}
	else $this->type = "solid";//тип линии: solid, dotted, axis
	}

//Перемещение
public function move($dx, $dy){
$this->x1 += $dx; 
$this->x2 += $dx; 
$this->y1 += $dy; 
$this->y2 += $dy; 
	}

//Поворот
 public function rotate($x, $y, $angle){
$BEGIN = $this->rotate_point($this->x1, $this->y1, $x, $y, $angle); 
$this->x1 = $BEGIN["x"]; 
$this->y1 = $BEGIN["y"]; 
$END = $this->rotate_point($this->x2, $this->y2, $x, $y, $angle); 
$this->x2 = $END["x"]; 
$this->y2 = $END["y"]; 
	}
 //Симметрия относительно горизонтальной оси
public function mirrorX($y){ //$y - вертикальная  координата оси симметрии
$this->y1 = 2 * $y - $this->y1;
$this->y2 = 2 * $y - $this->y2;
	}
 //Симметрия относительно вертикальной оси
public function mirrorY($x){ //$x - горизонтальная координата оси симметрии
$this->x1 = 2 * $x - $this->x1;
$this->x2 = 2 * $x - $this->x2;
	}
//СКРУГЛЕНИЕ ДВУХ ЛИНИЙ
//----------------------------------------------------------------------------------------------------------------------------------------------
public function rounding($Line1, $Line2, $rad, $PRGR){
//Определение общей точки
if($Line1->x1 == $Line2->x1)  $x = $Line1->x1;
	else if($Line1->x1 == $Line2->x2){
	$x = $Line2->x2;
	$Line2->x2 = $Line2->x1;
	$Line2->x1 = $x;
}
 else if($Line1->x2 == $Line2->x1)  {
 $x = $Line1->x2;
 $Line1->x2 = $Line1->x1;
 $Line1->x1 = $x;
 }
	else if($Line1->x2 == $Line2->x2){
	$x = $Line1->x2;
	$Line1->x2 = $Line1->x1;
	$Line1->x1 = $x;
	$Line2->x2 = $Line2->x1;
	$Line2->x1 = $x;
 }
 else exit("линии  не имеют общей точки");
if($Line1->y1 == $Line2->y1)  $y = $Line1->y1;
	else if($Line1->y1 == $Line2->y2){
	$y = $Line2->y2;
	$Line2->y2 = $Line2->y1;
	$Line2->y1 = $y;
}
 else if($Line1->y2 == $Line2->y1)  {
 $y = $Line1->y2;
 $Line1->y2 = $Line1->y1;
 $Line1->y1 = $y;
 }
	else if($Line1->y2 == $Line2->y2){
	$y = $Line1->y2;
	$Line1->y2 = $Line1->y1;
	$Line1->y1 = $y;
	$Line2->y2 = $Line2->y1;
	$Line2->y1 = $y;
 }
 else exit("линии не имеют общей точки");
 
 
 if($Line1->y1 == $Line1->y2){//если линия $Line1 - горизонтальная
	if ($Line1->x2 > $Line1->x1 && $Line2->y2 > $Line2->y1) {
	$Line1->x1 += $rad; 
	$Line2->y1 += $rad; 
	$x += $rad;
	$y += $rad;
	$angle1 = 180;
	$angle2 = 270;
	}
	else if ($Line1->x2 > $Line1->x1 && $Line2->y2 < $Line2->y1){
	$Line1->x1 += $rad; 
	$Line2->y1 -= $rad; 
	$x += $rad;
	$y -= $rad;
	$angle1 = 90;
	$angle2 = 180;
	}
	else if ($Line1->x2 < $Line1->x1 && $Line2->y2 > $Line2->y1) {
	$Line1->x1 -= $rad; 
	$Line2->y1 += $rad; 
	$x -= $rad;
	$y += $rad;
	$angle1 = 270;
	$angle2 = 0;
	}
	else if ($Line1->x2 < $Line1->x1 && $Line2->y2 < $Line2->y1){
	$Line1->x1 -= $rad; 
	$Line2->y1 -= $rad; 
	$x -= $rad;
	$y -= $rad;
	$angle1 = 0;
	$angle2 = 90;
}
 }
 else{//если линия $Line2 - горизонтальная
		if ($Line2->x2 > $Line2->x1 && $Line1->y2 > $Line1->y1) {
	$Line2->x1 += $rad; 
	$Line1->y1 += $rad; 
	$x += $rad;
	$y += $rad;
	$angle1 = 180;
	$angle2 = 270;
	}
	else if ($Line2->x2 > $Line2->x1 && $Line1->y2 < $Line1->y1){
	$Line2->x1 += $rad; 
	$Line1->y1 -= $rad; 
	$x += $rad;
	$y -= $rad;
	$angle1 = 90;
	$angle2 = 180;
	}
	else if ($Line2->x2 < $Line2->x1 && $Line1->y2 > $Line1->y1) {
	$Line2->x1 -= $rad; 
	$Line1->y1 += $rad; 
	$x -= $rad;
	$y += $rad;
	$angle1 = 270;
	$angle2 = 0;
	}
	else if ($Line2->x2 < $Line2->x1 && $Line1->y2 < $Line1->y1){
	$Line2->x1 -= $rad; 
	$Line1->y1 -= $rad; 
	$x -= $rad;
	$y -= $rad;
	$angle1 = 0;
	$angle2 = 90;
}
 }
return $Arc = new Arc(array("x"=>$x,"y"=>$y, "width"=>2, "d"=>2*$rad, "angle1"=>$angle1, "angle2"=>$angle2, "r"=>$Line1->r,"g"=>$Line1->g,"b"=>$Line1->b, "i"=>$this->i),  $PRGR);
	}	
//----------------------------------------------------------------------------------------------------------------------------------------------

 //Вывод линии в браузер
public function out(){
	
imageSetThickness($this->i, $this->width);//толщина линии
$color1 = $this->color;
$color = self::$$color1;//получение цвета

	if($this->type == "solid"){//вычерчивание сплошной линии

		imageLine($this->i, $this->X($this->x1), $this->Y($this->y1), $this->X($this->x2), $this->Y($this->y2), $color);
	}
	else if($this->type == "dotted"){//вычерчивание пунктирной линии
	$n = (int)(0.5* hypot($this->y2 - $this->y1, $this->x2 - $this->x1) / $this->l);//количество пунктиров
  $dx = ($this->x2 - $this->x1) / (2*$n-1);
  $dy = ($this->y2 - $this->y1) / (2*$n-1);
  $xbegin = $this->x1;
  $ybegin = $this->y1;
  for($j = 0; $j < $n; $j++){
	$xend = $xbegin + $dx;
	$yend = $ybegin + $dy;
	imageLine($this->i, $this->X($xbegin), $this->Y($ybegin), $this->X($xend), $this->Y($yend), $color);
	$xbegin = $xend + $dx;
	$ybegin = $yend + $dy;
			}
		} 
			
	else if($this->type == "axis"){//вычерчивание осевой линии
	$angle = $this->angle($this->x1, $this->y1, $this->x2, $this->y2);
	
$n = (int)((hypot($this->y2 - $this->y1, $this->x2 - $this->x1) - $this->lbig ) / ($this->lbig + $this->lsmall + 2*$this->lspace));//количество штрих-пунктиров
  if($n == 0) {
  imageLine($this->i, $this->X($this->x1), $this->Y($this->y1), $this->X($this->x2), $this->Y($this->y2), $color);
  return;
  }
  $this->lbignew = $this->lbig - $this->lbig / ($n + 1);
  $lbigperc = $this->lbignew / ($this->lbig + $this->lsmall + 2*$this->lspace);//% длинного штриха
  $lsmallperc = $this->lsmall / ($this->lbig + $this->lsmall + 2*$this->lspace);//% короткого штриха
  $lspaseperc = $this->lspace / ($this->lbig + $this->lsmall + 2*$this->lspace);//% пробела
  $dxlbig = $lbigperc * ($this->x2 - $this->x1) / $n;
  $dylbig = $lbigperc * ($this->y2 - $this->y1) / $n;
  $dxlsmall = $lsmallperc * ($this->x2 - $this->x1) / $n;
  $dylsmall = $lsmallperc * ($this->y2 - $this->y1) / $n;
  $dxspase = $lspaseperc * ($this->x2 - $this->x1) / $n;
  $dyspase = $lspaseperc * ($this->y2 - $this->y1) / $n;
  $xbegin = $this->x1;
  $ybegin = $this->y1;
  for($j = 0; $j < $n; $j++){
	$xend = $xbegin + $dxlbig;
	$yend = $ybegin + $dylbig;
	imageLine($this->i, $this->X($xbegin), $this->Y($ybegin), $this->X($xend), $this->Y($yend), $color);
	$xbegin = $xend + $dxspase;
	$ybegin = $yend + $dyspase;
	$xend = $xbegin + $dxlsmall;
	$yend = $ybegin + $dylsmall;
	imageLine($this->i, $this->X($xbegin), $this->Y($ybegin), $this->X($xend), $this->Y($yend), $color);
	$xbegin = $xend + $dxspase;
	$ybegin = $yend + $dyspase;
			}
	$xend = $xbegin + $dxlbig;
	$yend = $ybegin + $dylbig;
	imageLine($this->i, $this->X($xbegin), $this->Y($ybegin), $this->X($xend), $this->Y($yend), $color);
	
		}	
	}
}
?>