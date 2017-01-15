<?php
//КЛАСС ЧЕРТЕЖА 
//require_once "../config.php";
class Draw {


public static $X0;//горизонтальная координата нулевой точки
public static $Y0;//вертикальная координата нулевой точки
public static $X;//горизонтальная координата базовой точки
public static $Y;//вертикальная координата базовой точки
public static $XMP;//горизонтальная координата  монтажной панели	
static 	$black, $red, $green, $blue, $white;
	
public function __construct($Prop){
if(isset($Prop["name"])) $this->name = $Prop["name"]; else $this->name = "";//имя элемента
$this->w = $Prop["w"];//ширина холста
$this->h = $Prop["h"];//высота холста
if(isset($Prop["x0"])) $this->x0 = $Prop["x0"]; else $this->x0 = 0;//горизонтальная координата базовой точки
if(isset($Prop["y0"])) $this->y0 = $Prop["y0"]; else $this->y0 = 0;//вертикальная координата базовой точки
if(isset($Prop["rBG"])) $this->rBG = $Prop["rBG"]; else $this->rBG = 255;//красная составляющая цвета фона
if(isset($Prop["gBG"])) $this->gBG = $Prop["gBG"]; else $this->gBG = 255;//красная составляющая цвета фона
if(isset($Prop["bBG"])) $this->bBG = $Prop["bBG"]; else $this->bBG = 255;//красная составляющая цвета фона
/*if(empty($this->i))*/ $this->i = imageCreate($this->w, $this->h);//создание холста
imageColorAllocate($this->i, $this->rBG, $this->gBG, $this->bBG);//цвет холста

self::$black = imageColorAllocate($this->i, 0, 0, 0);//черный цвет;
self::$red = imageColorAllocate($this->i, 255, 0, 0);//красный цвет;
self::$green = imageColorAllocate($this->i, 0, 255, 0);//зеленый цвет;
self::$blue = imageColorAllocate($this->i, 0, 0, 255);//синий цвет;
self::$white = imageColorAllocate($this->i, 255, 255, 255);//белый цвет;

}

  public static function getBlack() {return self::$black;}
  public static function getRed() {return self::$red;}
  public static function getGreen() {return self::$green;}
  public static function getBlue() {return self::$blue;}
  public static function getWhite() {return self::$white;}

//Вывод элемента в браузер
public function out(){
	for($i=0; $i<count($this->GROUP); $i++)
		$this->GROUP[$i]->out();
	}
//Копирование со смещением 
public function copyOffset($element, $dx = 0, $dy = 0){
$copyElement = clone $element;
$copyElement->move($dx, $dy);
return $copyElement;
	}
	
//Добавление элемента в массив группы элементов чертежа
public function add($element){
	if(count($element->GROUP) == 0)
		$this->GROUP[] = $element;//добавление нового элемента в массив группы элементов чертежа
	 	
	else for($i=0; $i<count($element->GROUP); $i++)
		$this->GROUP[] = $element->GROUP[$i];//добавление нового элемента в массив группы элемент	
	}
public function __clone(){
	for($i=0; $i<count($this->GROUP); $i++)
		$this->GROUP[$i] = clone $this->GROUP[$i];
		}	
	
public function __destruct(){
//imageDestroy($this->i);//удаление холста
	} 

}	
?>