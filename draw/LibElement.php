<?php
//КЛАСС БИБЛИОТЕКИ ЭЛЕМЕНТОВ
class LibElement extends Element {
public $length;
public function __construct(){

$this->font = $_SERVER['DOCUMENT_ROOT']."/fonts/arial.ttf";
	}
	
//Метод вывода маркировки положений ручки переключателя
	
public function mark_pos ($initPos, $angle, $qPos, $strMark, $r, $sizeFont, $fieldSize, $scale, $i){

	if($strMark == "") return;//если маркировки нет
$arrMark = array();
if($initPos == "A") $firstPol = 1.5*M_PI;
else if($initPos == "B") $firstPol = M_PI;
else if($initPos == "C") $firstPol = 1.5*M_PI - 2*M_PI/$angle * floor($qPos/2);
else if($initPos == "D") $firstPol = 1.5*M_PI-M_PI/$angle;
else if($initPos == "M") $firstPol = 1.5*M_PI;
else if($initPos == "V") $firstPol = 1.5*M_PI - 2*M_PI/$angle;

  $color = self::$black;//цвет 
//Преобразование маркировки из строки в массив
 
$index = 0;
	for($m=0; $m<$qPos; $m++){
		$arrMark[$m] = "";
		while ($strMark[$index] != "$" && $strMark[$index] != " ") {
			$arrMark[$m] .= $strMark[$index];
			$index++;
			}
			$index++;
	}
//imageTtfText(self::$i, 10, 0, 10, 10, $color, "../../fonts/arial.ttf",  $strMark[4]);	
//imageTtfText(self::$i, 10, 0, 10, 10, $color, "../../fonts/arial.ttf",  $firstPol);
//$r = $this->center_text($text, ($x2+$x1)/2, ($y2+$y1)/2,($x2-$x1)/2, $sizeFont);	
//Вывод маркировки
for($a = 0; $a < $qPos; $a ++){//a - номер текущего положения ручки
//echo $fieldSize;
$centerText = $this->center_text($arrMark[$a], $this->X(-0.5+$r*cos($firstPol+$a*2*M_PI/$angle)), $this->Y($r*sin($firstPol+$a*2*M_PI/$angle)),$scale * $fieldSize, $sizeFont);	

//imageTtfText(self::$i, $sizeFont, 0, self::$X+SCALE*(-2+$r*cos($firstPol+$a*2*M_PI/$angle)), self::$Y+SCALE*(2+$r*sin($firstPol+$a*2*M_PI/$angle)), $color, "../../fonts/arial.ttf", $arrMark[$a]);
//imageTtfText(self::$i, $sizeFont, 0, self::$X+SCALE*(-2+$r*cos($firstPol+$a*2*M_PI/$angle)), self::$Y+SCALE*(2+$r*sin($firstPol+$a*2*M_PI/$angle)), $color, "../../fonts/arial.ttf", $arrMark[$a]);
echo $arrMark[$a];
imageTtfText($i, $centerText["sizeFont"], 0, $centerText["xLeft"], $centerText["yLeft"], $color, $this->font, $arrMark[$a]);
		}
	}
//Центровка текста
public function center_text($text, $xCenter, $yCenter, $fieldSize, $sizeFont){

$a = imagettfbbox ($sizeFont, 0, $this->font, $text);
$lengthText = abs($a[0] - $a[2]);//измерение длины текста
	if($lengthText > $fieldSize){//если текст не помещается в отведенном участке
		$k = $lengthText / $fieldSize;//коэффициент масштабирования (уменьшения)
		$sizeFont = $sizeFont / $k;
		$a = imagettfbbox ($sizeFont, 0, $this->font, $text);
		$lengthText = abs($a[0] - $a[2]);//измерение длины текста
		}
		$r["xLeft"] = $xCenter - floor($lengthText / 2);
		$r["yLeft"] = $yCenter + floor($sizeFont / 2);
		$r["sizeFont"] = $sizeFont;
		return $r;
	}		
}
?>