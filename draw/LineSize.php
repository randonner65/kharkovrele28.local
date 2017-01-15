<?php
//КЛАСС ВЫЧЕРЧИВАНИЯ РАЗМЕРНОЙ ЛИНИИ
class LineSize extends Line {

public function __construct($PREL, $PRGR = array()){
 parent::__construct($PREL, $PRGR);
 
 if(isset($PREL["text"])) $this->text = $PREL["text"];//альтернативный текст
 if(isset($PREL["offset"])) $this->offset = $PREL["offset"]; else $this->offset = 0;//смешение начала текста
 $this->width = 1;//ширина линии
 $this->type = "solid";//тип линии: solid
 
 /*if($this->type == "dotted" && !isset($this->n)) {
	$this->n = 10;//количество пунктиров в пунктирной линии
	$this->l = 3;//длина штриха пунктирной линии
	}
	else if($this->type == "axis" ){
	if(!isset($this->l))  	$this->l = 3;//длина штриха штрих-пунктирной линии
	if(!isset($this->lbig))  	$this->lbig = 7;//длина большого штриха штрих-пунктирной линии
	if(!isset($this->lsmall))	$this->lsmall = 1;//длина маленького штриха штрих-пунктирной линии
	if(!isset($this->lspace))	$this->lspace = 2;//длина пробела штрих-пунктирной линии
		}*/
	
	}



 //Вывод линии в браузер
public function out(){
	
imageSetThickness($this->i, $this->width);//толщина линии
$color1 = $this->color;
$color = self::$$color1;//получение цвета

	//if($this->type == "solid")//вычерчивание сплошной линии
		imageLine($this->i, $this->X($this->x1), $this->Y($this->y1), $this->X($this->x2), $this->Y($this->y2), $color);

		
		
$angle = $this->angle ($this->x1, $this->y1, $this->x2, $this->y2);//угол наклона линии
	if($this->x1 == $this->x2) $angleText = 90;
	else if($this->y1 == $this->y2) $angleText = 0;
		else $angleText = -180*$angle/M_PI;

	if($angleText == 0) {
	$xText = $this->X($this->offset-3+$this->x1+($this->x2-$this->x1)/2);
	$yText = $this->Y(-1.5+$this->y1);
	}
	else if($angleText == 90) {
	$xText = $this->X(-1+$this->x1);
	$yText = $this->Y($this->offset+3+$this->y1+($this->y2-$this->y1)/2);
	}
	else if($angleText > -90 && $angleText < 0) {
	$xText = $this->X($this->offset-1+2*cos($angle)+$this->x1+($this->x2-$this->x1)/2);
	$yText = $this->Y($this->offset-1-2*sin($angle)+$this->y1+($this->y2-$this->y1)/2);
	} 
	else{
	$xText = $this->X($this->offset-1-2*cos($angle)+$this->x1+($this->x2-$this->x1)/2);
	$yText = $this->Y(-$this->offset-1-2*sin($angle)+$this->y1+($this->y2-$this->y1)/2);
	}
	if($this->text == '') $this->text = (hypot($this->y2 - $this->y1, $this->x2 - $this->x1));
imageTtfText($this->i, $this->S(4), $angleText, $xText, $yText, $color, $_SERVER['DOCUMENT_ROOT']."/fonts/arial.ttf", $this->text);

$length = hypot($this->y2 - $this->y1, $this->x2 - $this->x1);//длина размерной линии

 if($length > MIN_LENGTH){
 //вывод  внутренних стрелок
 $TRIANGLE = array();
 $TRIANGLE[0] = $this->X($this->x1);
 $TRIANGLE[1] = $this->Y($this->y1);
 if(($this->x2 >= $this->x1 && $this->y2 >= $this->y1) || ($this->x2 > $this->x1 && $this->y2 < $this->y1)) {
	$TRIANGLE[2] = $this->X($this->x1 + LENGTH_ARROW * cos($angle + ANGLE_ARROW));
	$TRIANGLE[3] = $this->Y($this->y1 + LENGTH_ARROW * sin($angle + ANGLE_ARROW));
	$TRIANGLE[4] = $this->X($this->x1 + LENGTH_ARROW * cos($angle - ANGLE_ARROW));
	$TRIANGLE[5] = $this->Y($this->y1 + LENGTH_ARROW * sin($angle - ANGLE_ARROW));
//imageTtfText(self::$i, 15, $angleText, -2-13*cos($angle)+$this->x1+($this->x2-$this->x1)/2, -2-13*sin($angle)+$this->y1+($this->y2-$this->y1)/2,self::$color,"../../fonts/arial.ttf", $angleText);	
 }
	else {
	$TRIANGLE[2] = $this->X($this->x1 - LENGTH_ARROW * cos($angle + ANGLE_ARROW));
	$TRIANGLE[3] = $this->Y($this->y1 - LENGTH_ARROW * sin($angle + ANGLE_ARROW));
	$TRIANGLE[4] = $this->X($this->x1 - LENGTH_ARROW * cos($angle - ANGLE_ARROW));
	$TRIANGLE[5] = $this->Y($this->y1 - LENGTH_ARROW * sin($angle - ANGLE_ARROW));
//imageTtfText(self::$i, 15, $angleText, -2-13*cos($angle)+$this->x1+($this->x2-$this->x1)/2, -2-13*sin($angle)+$this->y1+($this->y2-$this->y1)/2,self::$color,"../../fonts/arial.ttf", $angleText);	
 }

 imagefilledpolygon ($this->i, $TRIANGLE, 3, $color);
 
 $TRIANGLE[0] = $this->X($this->x2);
 $TRIANGLE[1] = $this->Y($this->y2);
 if(($this->x2 >= $this->x1 && $this->y2 >= $this->y1) || ($this->x2 > $this->x1 && $this->y2 < $this->y1)) {
	$TRIANGLE[2] = $this->X($this->x2 - LENGTH_ARROW * cos($angle + ANGLE_ARROW));
	$TRIANGLE[3] = $this->Y($this->y2 - LENGTH_ARROW * sin($angle + ANGLE_ARROW));
	$TRIANGLE[4] = $this->X($this->x2 - LENGTH_ARROW * cos($angle - ANGLE_ARROW));
	$TRIANGLE[5] = $this->Y($this->y2 - LENGTH_ARROW * sin($angle - ANGLE_ARROW));
 }
	else {
	$TRIANGLE[2] = $this->X($this->x2 + LENGTH_ARROW * cos($angle + ANGLE_ARROW));
	$TRIANGLE[3] = $this->Y($this->y2 + LENGTH_ARROW * sin($angle + ANGLE_ARROW));
	$TRIANGLE[4] = $this->X($this->x2 + LENGTH_ARROW * cos($angle - ANGLE_ARROW));
	$TRIANGLE[5] = $this->Y($this->y2 + LENGTH_ARROW * sin($angle - ANGLE_ARROW));
 }

 imagefilledpolygon ($this->i, $TRIANGLE, 3, $color);
 
 }
	else{
 //вывод  внешних стрелок
   $TRIANGLE = array();
 $TRIANGLE[0] = $this->X($this->x1);
 $TRIANGLE[1] = $this->Y($this->y1);
 if(($this->x2 >= $this->x1 && $this->y2 >= $this->y1) || ($this->x2 > $this->x1 && $this->y2 < $this->y1)) {
	$TRIANGLE[2] = $this->X($this->x1 - LENGTH_ARROW * cos($angle + ANGLE_ARROW));
	$TRIANGLE[3] = $this->Y($this->y1 - LENGTH_ARROW * sin($angle + ANGLE_ARROW));
	$TRIANGLE[4] = $this->X($this->x1 - LENGTH_ARROW * cos($angle - ANGLE_ARROW));
	$TRIANGLE[5] = $this->Y($this->y1 - LENGTH_ARROW * sin($angle - ANGLE_ARROW));
	$x3 = $this->X($this->x1 - OUT_LENGTH * cos($angle));
	$x4 = $this->X($this->x2 + OUT_LENGTH * cos($angle));
	$y3 = $this->Y($this->y1 - OUT_LENGTH * sin($angle));
	$y4 = $this->Y($this->y2 + OUT_LENGTH * sin($angle));
//imageTtfText(self::$i, 15, $angleText, -2-13*cos($angle)+$this->x1+($this->x2-$this->x1)/2, -2-13*sin($angle)+$this->y1+($this->y2-$this->y1)/2,self::$color,"../../fonts/arial.ttf", $angleText);	
 }
	else {
	$TRIANGLE[2] = $this->X($this->x1 + LENGTH_ARROW * cos($angle + ANGLE_ARROW));
	$TRIANGLE[3] = $this->Y($this->y1 + LENGTH_ARROW * sin($angle + ANGLE_ARROW));
	$TRIANGLE[4] = $this->X($this->x1 + LENGTH_ARROW * cos($angle - ANGLE_ARROW));
	$TRIANGLE[5] = $this->Y($this->y1 + LENGTH_ARROW * sin($angle - ANGLE_ARROW));
//imageTtfText(self::$i, 15, $angleText, -2-13*cos($angle)+$this->x1+($this->x2-$this->x1)/2, -2-13*sin($angle)+$this->y1+($this->y2-$this->y1)/2,self::$color,"../../fonts/arial.ttf", $angleText);	
 }
 
 imageLine($this->i, $x3, $y3, $x4, $y4, $color);//вывод выступающей части размерной линии
 imagefilledpolygon ($this->i, $TRIANGLE, 3, $color);
 
 $TRIANGLE[0] = $this->X($this->x2);
 $TRIANGLE[1] = $this->Y($this->y2);
 if(($this->x2 >= $this->x1 && $this->y2 >= $this->y1) || ($this->x2 > $this->x1 && $this->y2 < $this->y1)) {
	$TRIANGLE[2] = $this->X($this->x2 + LENGTH_ARROW * cos($angle + ANGLE_ARROW));
	$TRIANGLE[3] = $this->Y($this->y2 + LENGTH_ARROW * sin($angle + ANGLE_ARROW));
	$TRIANGLE[4] = $this->X($this->x2 + LENGTH_ARROW * cos($angle - ANGLE_ARROW));
	$TRIANGLE[5] = $this->Y($this->y2 + LENGTH_ARROW * sin($angle - ANGLE_ARROW));
 }
	else {
	$TRIANGLE[2] = $this->X($this->x2 - LENGTH_ARROW * cos($angle + ANGLE_ARROW));
	$TRIANGLE[3] = $this->Y($this->y2 - LENGTH_ARROW * sin($angle + ANGLE_ARROW));
	$TRIANGLE[4] = $this->X($this->x2 - LENGTH_ARROW * cos($angle - ANGLE_ARROW));
	$TRIANGLE[5] = $this->Y($this->y2 - LENGTH_ARROW * sin($angle - ANGLE_ARROW));
	$x3 = $this->X($this->x1 + OUT_LENGTH * cos($angle));
	$x4 = $this->X($this->x2 - OUT_LENGTH * cos($angle));
	$y3 = $this->Y($this->y1 + OUT_LENGTH * sin($angle));
	$y4 = $this->Y($this->y2 - OUT_LENGTH * sin($angle));
 }
 imageLine($this->i, $x3, $y3, $x4, $y4, $color);//вывод выступающей части размерной линии
 imagefilledpolygon ($this->i, $TRIANGLE, 3, $color);
		}
	}
	
}
?>