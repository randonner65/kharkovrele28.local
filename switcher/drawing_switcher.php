<?php
	function __autoload($class_name) {
	if(file_exists($_SERVER['DOCUMENT_ROOT']."/classes/".$class_name.".php"))require_once $_SERVER['DOCUMENT_ROOT']."/classes/".$class_name.".php";
	else require_once $_SERVER['DOCUMENT_ROOT']."/draw/".$class_name.".php"; }//автоподключение нужного класса
$Lib = new Lib();//создание объекта библиотеки элементов чертежа

//$tds=new ToolsDrawingSwitcher();//создание объекта класса ToolsDrawingSwitcher
$Ds=new DrawingSwitcher();//создание объекта класса DrawingSwitcher
$Dsl=new DrawingSwitcherLeft();//создание объекта класса DrawingSwitcherLeft
	if(isset($_GET["name"])){//если чертеж выводит страница паспорта
$name = str_replace(" ", "+", $_GET["name"]);//получение наименования переключателя
$Ps = new PropertiesSwitcher();//создание объекта класса PropertiesSwitcher
$PS = $Ps->getPropSwitch($name);//получить свойства переключателя
//print_r ($PS);
//$scheme = new Schemas($PS["number"]);//создание объекта класса Schemas
	}
	else{//если чертеж выводит конструктор
$PS["current"] = $_GET["current"];//ток	
$PS["qdesk"] = round($_GET["qcont"] / 2);//количество галет 
$PS["qpos"] = $_GET["qpos"];//количество положений	
$PS["mark"] = $_GET["mark"];//маркировка
$PS["handle"] = $_GET["handle"];//ручка
$PS["board"] = $_GET["board"];//наличие таблички
$PS["fix"] = $_GET["fix"];//способ крепления
$PS["ip54"] = $_GET["ip54"];//наличие уплотнения по оси
$PS["moment"] = $_GET["moment"];//наличие самовозврата
$PS["length"] = $_GET["length"];//расстояние от монтажной панели до двери
$PS["initpos"] = $_GET["initpos"];//начальное положение
$PS["angle"] = $_GET["angle"];//угол поворота ручки
$PS["box"] = $_GET["box"].$_GET["boxdirect"];//наименование коробки
$PS["pg"] = $_GET["pg"];//номер сальника
	}
	
//print_r($PS);exit;
//print_r(Draw::$X);exit; 
//Создание фиктивного холста
 $Switch = new Draw(array("name"=>"Switch","w"=>1,"h"=>1,"rBG"=>240,"gBG"=>240,"bBG"=>240));
 
 //$Projections = new Group(array("x0"=>0,"y0"=>60,"scale"=>2,"width"=>3));//проекции переключателя

 //Фиктивное прочерчивание основной проекции переключателя для определения горизонтального габарита
frontal($Switch->i, array());
//echo "<pre>";print_r(frontal($Switch->i, array()));echo "</pre>";exit;
//Увеличение горизонтальной координаты базовой точки для вычерчивание левой проекции переключателя

//print_r($PS);exit;

 //Создание реального холста
	if($PS["fix"] != 'P'){
		if($PS["current"] < 30){
			if($PS["handle"] != 't' && $PS["handle"] != 'tr') $canvaHeight = 110; 
			else $canvaHeight = 140;
			
			$canvaWidth = Draw::$X + 110;
			$y1 = 50;
			}
		 else {
		$canvaHeight = 160; $y1 = 70;
		$canvaWidth = Draw::$X + 135;
		}
	}
	
	else{
			if($PS["box"] == "EC410C4" || $PS["box"] == "EC410C4H" || $PS["box"] == "EC410C4V") {$y1 = 80; $canvaHeight = 190;}
			else if($PS["box"] == "EC410C5H") {$y1 = 80; $canvaHeight = 200;}
			else if($PS["box"] == "EC410C5V" || $PS["box"] == "EC410C5") {$y1 = 100; $canvaHeight = 240;}
			else if($PS["box"] == "EC410C6H") {$y1 = 90; $canvaHeight = 220;}
			else if($PS["box"] == "EC410C6V" || $PS["box"] == "EC410C6") {$y1 = 115; $canvaHeight = 270;}
			else if($PS["box"] == "EC410C7H") {$y1 = 115; $canvaHeight = 280;}
			else if($PS["box"] == "EC410C7V" || $PS["box"] == "EC410C7") {$y1 = 140; $canvaHeight = 330;}
			else if($PS["box"] == "EC400C4" || $PS["box"] == "EC400C4H" || $PS["box"] == "EC400C4V") {$y1 = 90; $canvaHeight = 170;}
			else if($PS["box"] == "EC400C5H") {$y1 = 100; $canvaHeight = 180;}
			else if($PS["box"] == "EC400C5V" || $PS["box"] == "EC400C5") {$y1 = 115; $canvaHeight = 210;}
			else if($PS["box"] == "EC400C6H") {$y1 = 110; $canvaHeight = 200;}
			else if($PS["box"] == "EC400C6V" || $PS["box"] == "EC400C6") {$y1 = 130; $canvaHeight = 240;}
			else if($PS["box"] == "EC400C7H") {$y1 = 135; $canvaHeight = 250;}
			else if($PS["box"] == "EC400C7V" || $PS["box"] == "EC400C7") {$y1 = 160; $canvaHeight = 300;}
			
	$nameBox = "box".$PS["box"]."L";
		$LibBox = $Lib->$nameBox(array());
	$canvaWidth = Draw::$X + 30 + 2 * $Lib->dx;
	}
	//print_r($canvaHeight*SCALE);exit;
	
 $Switch = new Draw(array("name"=>"Switch","w"=>$canvaWidth*SCALE,"h"=>$canvaHeight*SCALE,"rBG"=>255,"gBG"=>255,"bBG"=>255));
//print_r( $Switch);exit;
 $Projections = new Group(array("x0"=>0,"y0"=>0,"scale"=>SCALE,"width"=>2 /*,"color"=>"black"*/));//проекции переключателя
//Реальное вычерчивание основной проекции переключателя

$Fr = frontal($Switch->i, $Projections->PRGR);
if($PS["box"][3] == "1")
$Fr->add(new TextDraw(array("size"=>4.5,"x"=>15,"y"=>$canvaHeight-Draw::$Y-10,"text"=>"Количество и тип кабельных зажимов могут быть изменены по желанию заказчика"), $Fr->PRGR));
	
//$Fr->add(new TextDraw(array("size"=>4.5,"x"=>$canvaWidth/2-50,"y"=>$canvaHeight-50,"text"=>"Количество и наименование кабельных зажимов"), $Fr->PRGR));
//echo "<pre>";print_r($canvaHeight-50);echo "</pre>";exit;
$Switch->add($Fr);
//Увеличение горизонтальной координаты базовой точки для вычерчивания левой проекции переключателя
	if($PS["current"] < 30  && $PS["fix"] != 'P') Draw::$X +=  60;
	else if($PS["current"] > 30  && $PS["fix"] != 'P') Draw::$X +=  75;
	else{//если в коробке
	$nameBox = "box".$PS["box"]."L";
	$LibBox = $Lib->$nameBox(array());
	Draw::$X += $Lib->dx;
	}
//print_r($Fr);exit;


 //---------------------------------------------------------------------------------------------------------------------------
 //ВЫЧЕРЧИВАНИЕ ЛЕВОЙ ПРОЕКЦИИ ПЕРЕКЛЮЧАТЕЛЯ

$Left = new Group(array("x0"=>Draw::$X, "y0"=>Draw::$Y, "i"=>$Switch->i), $Projections->PRGR);//фронтальная проекция
//print_r(Draw::$X);exit;
 if($PS["fix"] == 'L') $Left->add($Dsl->din($PS, $Left->PRGR));//Вычерчивание крепления на din-рейку
  if(($PS["fix"] == 'O' || $PS["fix"] == 'B') && $PS["handle"] != 'ur' && $PS["handle"] != 'ub' && $PS["board"] == 0) $Left->add($Dsl->back_cover($PS, $Left->PRGR));//Вычерчивание пластины крепления на монтажную панель для исполнения O и B
 if($PS["board"] == 0 && $PS["fix"] != "P") $Left->add($Dsl->desc($PS, $Left->PRGR));//Вычерчивание галеты
 if($PS["fix"] != 'L' && $PS["fix"] != 'O' && $PS["fix"] != "P")	$Left->add($Dsl->camera($PS, $Left->PRGR));//Вычерчивание аретационной камеры
 if($PS["ip54"] == 1) $Left->add($Dsl->ip54($PS, $Left->PRGR)); //Вычерчивание уплотнительного блока
 if($PS["fix"] == 'P')  $Left->add($Dsl->box($PS, $Left->PRGR));//Вычерчивание коробки
 if($PS["fix"] == 'B' && $PS["handle"] != 'ur' && $PS["handle"] != 'ub' && $PS["board"] == 0) $Left->add($Dsl->block_handle($PS, $Left->PRGR));//Вычерчивание блокируемой ручки
 if($PS["board"] == 1) $Left->add($Dsl->board($PS, $Left->PRGR));//Вычерчивание таблички
 if($PS["handle"] == 'black' || $PS["handle"] == 'red') $Left->add($Dsl->handle($PS, $Left->PRGR));//Вычерчивание обычной ручки
 if($PS["handle"] == 'key')  $Left->add($Dsl->handleK($PS, $Left->PRGR));//Вычерчивание ключа
 if($PS["handle"] == 't' || $PS["handle"] == 'tr')  $Left->add($Dsl->handleT($PS, $Left->PRGR));//Вычерчивание рукоятки
 if($PS["handle"] == 'ur' || $PS["handle"] == 'ub')$Left->add($Dsl->handleU($PS, $Left->PRGR));//желто-красная ручка

  
 //print_r($Left);exit;
$Switch->add($Left);

//print_r($Switch);exit;
//echo "<pre>";print_r($Fr);echo "</pre>";exit;
$Switch->out();
  Header("Content-type: image/jpeg");
 if($_GET["flag"] == 1) imageJpeg($Switch->i,$_SERVER['DOCUMENT_ROOT'].'/images/passport/'.$name.'.jpg'); 
else imageJpeg($Switch->i);
imageDestroy($Switch->i);//удаление холста
//----------------------------------------------------------------------------------------------------------------
function frontal ($i, $PRPARGR){
global $Ds, $Ps, $PS, $y1, $Switch, $Projections;

 Draw::$X0 = 2;//горизонтальная координата нулевой точки
 Draw::$Y0 = $y1;//вертикальная координата нулевой точки

 Draw::$X = Draw::$X0;//горизонтальная координата базовой точки
 Draw::$Y = Draw::$Y0;//вертикальная координата базовой точки
 
$Fr = new Group(array("x0"=>Draw::$X, "y0"=>Draw::$Y, "i"=>$i), $PRPARGR);//фронтальная проекция

  //Вычерчивание ручки
  //print_r($PS);
  if($PS["handle"] == 'black' || $PS["handle"] == 'red')  $Fr->add($Ds->handle($PS, $Fr->PRGR));//обычная ручка
  else if($PS["handle"] == 'key' && $PS["fix"] != 'P')  $Fr->add($Ds->handleK(PS, $Fr->PRGR));//ключ
  else if($PS["handle"] == 'key' && $PS["fix"] == 'P')  $Fr->add($Ds->handleKP(PS, $Fr->PRGR));//ключ в коробке
  else if($PS["handle"] == 't' || $PS["handle"] == 'tr')  $Fr->add($Ds->handleT($PS, $Fr->PRGR));//рукоятка
  else $Fr->add($Ds->handleU($PS, $Fr->PRGR));//желто-красная ручка

   //Вычерчивание таблички
   if($PS["board"] == 1) $Fr->add($Ds->board($PS, $Fr->PRGR));//табличка
   //Вычерчивание скобы крепления таблички для исполнений L, O
   if(($PS["fix"] == 'L' || $PS["fix"] == 'O') && $PS["board"] == 1) $Fr->add($Ds->adapter($PS, $Fr->PRGR));//скоба
  
   //Вычерчивание коробки
	if($PS["fix"] == 'P') {$Fr->add($Ds->box($PS, $Fr->PRGR));
	//echo "<pre>";print_r($Fr);echo "</pre>";exit;
		return $Fr;}//коробка
	
	//Вычерчивание блокируемой ручки
	if($PS["fix"] == 'B') $Fr->add($Ds->block_handle($PS, $Fr->PRGR));
	//Вычерчивание уплотнительного блока
	if($PS["ip54"] == 1) $Fr->add($Ds->ip54($PS, $Fr->PRGR));
	//Вычерчивание задней крышки для исполнений B, O, L
	if($PS["fix"] == 'B' || $PS["fix"] == 'O' || $PS["fix"] == 'L') $Fr->add($Ds->back_cover($PS, 'BOL', $Fr->PRGR));
	else{
	//Вычерчивание механизма самовозврата для всех исполнений, кроме B, O, L
	if($PS["moment"] == 1) $Fr->add($Ds->moment($PS, $Fr->PRGR));
	//Вычерчивание аретационной камеры для всех исполнений, кроме B, O, L
	$Fr->add($Ds->camera($PS, $Fr->PRGR));
	}
	//Вычерчивание галет
	for($j = 0; $j < $PS["qdesk"]; $j++) 	$Fr->add($Ds->desc($PS, $Fr->PRGR));
	//Вычерчивание задней крышки для всех исполнений, кроме B, O, L
	if($PS["fix"] != 'B' && $PS["fix"] != 'O' && $PS["fix"] != 'L')  $Fr->add($Ds->back_cover($PS, '',$Fr->PRGR));
	else{
	//Вычерчивание аретационной камеры для исполнений B, O, L
	$Fr->add($Ds->camera($PS, $Fr->PRGR));
	//Вычерчивание механизма самовозврата для  исполнений O, L
	if($PS["moment"] == 1) $Fr->add($Ds->moment($PS, $Fr->PRGR));
	//Вычерчивание пластины крепления на монтажную панель для исполнения B
	if($PS["fix"] == 'B') $Fr->add($Ds->fix_mounting_panel($PS, $Fr->PRGR));
	//Вычерчивание пластины крепления на монтажную панель для исполнения O
	else if($PS["fix"] == 'O') $Fr->add($Ds->fix_mounting_panel($PS, $Fr->PRGR));
	//Вычерчивание механизма крепления на din-рейку для исполнения L
	else $Fr->add($Ds->din($PS, $Fr->PRGR));
	}
	$x0 = (Draw::$X0 - Draw::$X) / SCALE;
	return $Fr;
}	

 ?>