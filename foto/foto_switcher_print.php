<?php
	function __autoload($class_name) {
	if(file_exists($_SERVER['DOCUMENT_ROOT']."/classes/".$class_name.".php"))require_once $_SERVER['DOCUMENT_ROOT']."/classes/".$class_name.".php";
	else require_once $_SERVER['DOCUMENT_ROOT']."/draw/".$class_name.".php"; }//автоподключение нужного класса

//echo "gyggy";
$name = str_replace(" ", "+", $_GET["name"]);//получение наименования переключателя
$Ps = new PropertiesSwitcher();//создание объекта класса PropertiesSwitcher
$PS = $Ps->getPropSwitch($name);//получить свойства переключателя

/*echo "<pre>";
print_r($PS);
echo "</pre>";
exit;*/
 //Создание  холста

 $canvaX = 2800;	
 $canvaY = 2500;	
 $fotoSwitch = imagecreatetruecolor($canvaX, $canvaY);

 $color = imagecolorallocate($fotoSwitch, 255, 255, 255);

if($PS["fix"] == "P" && $PS["handle"] == "key" ){//вывод прозрачного квадрата
 $blackOut = imagecolorallocate($fotoSwitch, 0,0,0);
 imagecolortransparent($fotoSwitch, $blackOut);// Сделаем фон прозрачным
Header("Content-type: image/png");
  imagePng($fotoSwitch, $_SERVER['DOCUMENT_ROOT'].'/images/passport/'.$name.'_print.png');
  imageDestroy($fotoSwitch);
  exit;
}
$x = 0; $y = 0;//текущие координаты
//------------------------------------------------------------------------------
//В КОРОБКЕ
if($PS["fix"] == "P" ){
$pic_dir = "box";
$box = $PS["box"];
$box = strtolower ($box);//перевод в нижний регистр
$box = str_replace ("v", "", $box);//удаление v
if($box == "ec400c4") image_detail ("ec400c4", 65, 50, 450, 240 );
if($box == "ec400c5") image_detail ("ec400c5", 65, 50, 620, 350 );
if($box == "ec400c6") image_detail ("ec400c6", 65, 50, 690, 420 );
if($box == "ec400c7") image_detail ("ec400c7", 65, 50, 820, 570 );
if($box == "ec400c5h") image_detail ("ec400c5h", 65, 50, 700, 360 );
if($box == "ec400c6h") image_detail ("ec400c6h", 65, 50, 850, 400 );
if($box == "ec400c7h") image_detail ("ec400c7h", 65, 50, 850, 530 );

if($box == "ec410c4") image_detail ("ec410c4", 65, 50, 460, 240 );
if($box == "ec410c5") image_detail ("ec410c5", 65, 50, 550, 330 );
if($box == "ec410c6") image_detail ("ec410c6", 65, 50, 610, 385 );
if($box == "ec410c7") image_detail ("ec410c7", 65, 50, 920, 550 );
if($box == "ec410c5h") image_detail ("ec410c5h", 65, 50, 590, 295 );
if($box == "ec410c6h") image_detail ("ec410c6h", 65, 50, 640, 350 );
if($box == "ec410c7h") image_detail ("ec410c7h", 65, 50, 850, 500 );

if($PS["current"] < 30 ){
//-----------------------------------------------------------------------------
//  10 - 25 A
//$PS["handle"] = "tr";
if($PS["board"] == 1) image_detail ("25board", 0, 0, 30, 10);
if($PS["handle"] == "black") image_detail ("25handle_black", 40, 50);
if($PS["handle"] == "red") image_detail ("25handle_black", 40, 50);
if($PS["handle"] == "t") image_detail ("25handle_t_black", 40, 50);
if($PS["handle"] == "tr") image_detail ("25handle_t_black", 20, 40);
if($PS["handle"] == "ur") image_detail ("25handle_ub", -30, -55);
if($PS["handle"] == "ub") image_detail ("25handle_ub", -30, -55);
}

else {
//-------------------------------------------------------------------------------
// 32 - 160 A
if($PS["board"] == 1) image_detail ("32board", -80, -140, 45, 10);
if($PS["handle"] == "black") image_detail ("32handle_black", 20, 20);
if($PS["handle"] == "red") image_detail ("32handle_black", 20, 20);
if($PS["handle"] == "t") image_detail ("25handle_t_black", 40, 50);
if($PS["handle"] == "tr") image_detail ("25handle_t_black", 40, 50);
if($PS["handle"] == "ur") image_detail ("32handle_ub", -90, -160);
if($PS["handle"] == "ub") image_detail ("32handle_ub", -90, -160);
}


//image_detail ("board", 0, 0);
//image_detail ("board", 0, 0);

}
else{

if($PS["current"] < 30 ){
//------------------------------------------------------------------------------
//10 - 25 A
$pic_dir = 25;
if($PS["fix"] == "_" ){
//Прямое расположение галет
image_detail ("back_cover", 0, 40);
for($qdesk = 0; $qdesk < $PS["qdesk"] - 1; $qdesk++) 
	image_detail ("desc", 72 , 33, 105, 30);
image_detail ("first_desc", 71, 34);
if($PS["moment"] == 1) image_detail ("camera", 102, 24, 90, 23);
image_detail ("camera", 102, 27, 102, 27);
if($PS["ip54"] == 1) {
	image_detail ("ip54", 42, -50, 23, 9);
	image_detail ("rubber", 42, -50, 15, 5);
}

if($PS["board"] == 1 && $PS["ip54"] == 0) image_detail ("board", 17, -31, -10, 15);
if($PS["board"] == 1 && $PS["ip54"] == 1) image_detail ("board", 65, -45, 40, 15);
if($PS["handle"] == "black") image_detail ("handle_black", 170, 110);
if($PS["handle"] == "red") image_detail ("handle_black", 130, 140);
if($PS["handle"] == "t") image_detail ("handle_t_black", 150, 80);
if($PS["handle"] == "tr") image_detail ("handle_t_black", 150, 80);
if($PS["handle"] == "ur") image_detail ("handle_ur", 40, -140);
if($PS["handle"] == "ub") image_detail ("handle_ur", 40, -140);
if($PS["handle"] == "key") image_detail ("handle_key", 76, 30);
}
else {
//Обратное расположение галет
if($PS["fix"] == "L" ) image_detail ("fix_din", 0, 45, 210, 80);
if($PS["fix"] == "O" || $PS["fix"] == "B") image_detail ("ip54", 0, 40);
if($PS["moment"] == 1) image_detail ("camera", 65, 80, 85, 25);
image_detail ("camera", 70, 80, 75, 38);
image_detail ("first_desc_reverse", 90, 72, 42, 52);
for($qdesk = 0; $qdesk < $PS["qdesk"] - 1; $qdesk++) 
	image_detail ("desc_reverse", 155, 35, 103, 30);
if($PS["fix"] != "B" ) image_detail ("back_cover_reverse", 137, 47, 56, 20);
	if($PS["fix"] == "B" ){
		image_detail ("back_cover_reverse_b", 120, 31, 66, 20);
		image_detail ("handle_b", 630, 170);
		if($PS["board"] == 1) image_detail ("board", 258, 25, 40, 15);
		if($PS["handle"] == "black") image_detail ("handle_black", 360, 180);
		if($PS["handle"] == "red") image_detail ("handle_red", 360, 180);
		if($PS["handle"] == "ur") image_detail ("handle_ur", 100, -110);
		if($PS["handle"] == "ub") image_detail ("handle_ub", 100, -110);
		}
	else{
		
		if($PS["board"] == 1) {
			image_detail ("clip", 155, 140, 50, 68);
			image_detail ("board", 155, -70, 80, -30);
		
		}
		if($PS["handle"] == "black") image_detail ("handle_black", 220, 130);
		if($PS["handle"] == "red") image_detail ("handle_red", 220, 130);
		if($PS["handle"] == "ur") image_detail ("handle_ur", 190, -100);
		if($PS["handle"] == "ub") image_detail ("handle_ub", 190, -100);
		if($PS["handle"] == "t") image_detail ("handle_t_black", 190, 100);
		if($PS["handle"] == "tr") image_detail ("handle_t_red", 190, 100);
		}

	}
}
else if($PS["current"] < 80 ){
//------------------------------------------------------------------------------
//32 - 63 A
$pic_dir = 32;
if($PS["fix"] == "_" ){
//Прямое расположение галет
image_detail ("back_cover", 0, 80);
for($qdesk = 0; $qdesk < $PS["qdesk"]; $qdesk++) 
	image_detail ("desc", 34, 6, 60, 13);

image_detail ("camera", 39, 10, 20, -10 );
if($PS["ip54"] == 1) {
	image_detail ("ip54", 22, -72);
	image_detail ("rubber", 26, 6, 12, 60);
}

if($PS["board"] == 1 && $PS["ip54"] == 0) image_detail ("board", 23, -48, 20, 12);
if($PS["board"] == 1 && $PS["ip54"] == 1) image_detail ("board", 23, -48, 15, 13);
if($PS["handle"] == "black") image_detail ("handle_black", 110, 75);
if($PS["handle"] == "red") image_detail ("handle_black", 110, 75);
if($PS["handle"] == "t") image_detail ("handle_t_black", 110, 95);
if($PS["handle"] == "tr") image_detail ("handle_t_red", 110, 95);
if($PS["handle"] == "ur") image_detail ("handle_ub", 12, -100);
if($PS["handle"] == "ub") image_detail ("handle_ub", 12, -100);


}
else {
//Обратное расположение галет
if($PS["fix"] == "L" ) image_detail ("fix_din", 0, 40, 47, 10);
if($PS["fix"] == "O" || $PS["fix"] == "B") image_detail ("ip54", 0, 40);

image_detail ("camera", 68, 105, 25, 85);

for($qdesk = 0; $qdesk < $PS["qdesk"]; $qdesk++) 
	image_detail ("desc_reverse", 85, 27, 62, 14);
if($PS["fix"] != "B" ) image_detail ("back_cover_reverse", 77, 13, 85, 24);
	if($PS["fix"] == "B" ){
		image_detail ("back_cover_reverse_b", 72, 12);
		image_detail ("handle_b", 350, 10);
		if($PS["board"] == 1) image_detail ("board", 80, 16, 30, -5);
		if($PS["handle"] == "black") image_detail ("handle_black", 155, 150);
		if($PS["handle"] == "red") image_detail ("handle_black", 155, 150);
		if($PS["handle"] == "t") image_detail ("handle_t_black", 160, 175);
		if($PS["handle"] == "tr") image_detail ("handle_t_black", 160, 175);
		if($PS["handle"] == "ur") image_detail ("handle_ub", 60, -25);
		if($PS["handle"] == "ub") image_detail ("handle_ub", 60, -25);
		}
	else{
		
		if($PS["board"] == 1) {
			image_detail ("clip", 35, 85);
			image_detail ("board", 15, -150, 55, -65);
		
		}
		if($PS["handle"] == "black") image_detail ("handle_black", 68, 48);
		if($PS["handle"] == "red") image_detail ("handle_black", 68, 48);
		if($PS["handle"] == "t") image_detail ("handle_t_black", 68, 70);
		if($PS["handle"] == "tr") image_detail ("handle_t_black", 68, 70);
		if($PS["handle"] == "ur") image_detail ("handle_ub", 10, -100);
		if($PS["handle"] == "ub") image_detail ("handle_ub", 10, -100);
		}

	}
}

else {
//------------------------------------------------------------------------------
//100 - 160 A
$pic_dir = 100;
if($PS["fix"] == "_" ){
//Прямое расположение галет
image_detail ("back_cover", 0, 40);
for($qdesk = 0; $qdesk < $PS["qdesk"]; $qdesk++) 
	image_detail ("desc", 26, 4, 71, 16);

image_detail ("camera", 50, 72);
if($PS["ip54"] == 1) {
	image_detail ("ip54", 12, -92);
	image_detail ("rubber", 26, 6, 27, 84);
}

if($PS["board"] == 1 && $PS["ip54"] == 0) image_detail ("board", 10, -72, 35, 15);
if($PS["board"] == 1 && $PS["ip54"] == 1) image_detail ("board", 10, -72, 35, 15);
if($PS["handle"] == "black") image_detail ("handle_black", 75, 50);
if($PS["handle"] == "red") image_detail ("handle_black", 75, 50);
if($PS["handle"] == "t") image_detail ("handle_t_black", 85, 70);
if($PS["handle"] == "tr") image_detail ("handle_t_black", 85, 70);
if($PS["handle"] == "ur") image_detail ("handle_ub", 0, -120);
if($PS["handle"] == "ub") image_detail ("handle_ub", 0, -120);
}
else {
//Обратное расположение галет
if($PS["fix"] == "L" ) image_detail ("fix_din", 0, 40, 47, 10);
if($PS["fix"] == "O" || $PS["fix"] == "B") image_detail ("ip54", 0, 40);

image_detail ("camera", 68, 105);

for($qdesk = 0; $qdesk < $PS["qdesk"]; $qdesk++) 
	image_detail ("desc_reverse", 27, -70, 70, 15);
if($PS["fix"] != "B" ) image_detail ("back_cover_reverse", 30, -68, 28, -61);
	if($PS["fix"] == "B" ){
		image_detail ("back_cover_reverse_b", 26, -74);
		image_detail ("handle_b", 350, 65);
		if($PS["board"] == 1) image_detail ("board", 80, 15, 33, -5);
		if($PS["handle"] == "black") image_detail ("handle_black", 153, 150);
		if($PS["handle"] == "red") image_detail ("handle_black", 153, 150);
		if($PS["handle"] == "t") image_detail ("handle_t_black", 160, 175);
		if($PS["handle"] == "tr") image_detail ("handle_t_black", 160, 175);
		if($PS["handle"] == "ur") image_detail ("handle_ub", 60, -20);
		if($PS["handle"] == "ub") image_detail ("handle_ub", 60, -20);
		}
	else{
		
		if($PS["board"] == 1) {
			image_detail ("clip", 60, 147);
			image_detail ("board", 10, -160, 30, -120);
		
		}
		if($PS["handle"] == "black") image_detail ("handle_black", 85, 100);
		if($PS["handle"] == "red") image_detail ("handle_black", 85, 100);
		if($PS["handle"] == "t") image_detail ("handle_t_black", 95, 120);
		if($PS["handle"] == "tr") image_detail ("handle_t_black", 95, 120);
		if($PS["handle"] == "ur") image_detail ("handle_ub", 50, -40);
		if($PS["handle"] == "ub") image_detail ("handle_ub", 50, -40);
		}

	}
 }
}
//-----------------------------------------------------------------------------------------
//Копирование изображения детали переключателя на холст
function image_detail ($name, $dx, $dy, $dxend = 0, $dyend = 0){
	$iname = "i".$name;
	global $fotoSwitch, $$iname, $x, $y, $pic_dir, $print;
	$$iname = imageCreateFromPng($pic_dir."details_print/".$name.".png");
	imagecopy ($fotoSwitch, $$iname, $x + $dx, $y + $dy, 0, 0, 2000, 2000);
	if($dxend == 0) $x += $dx; else $x += $dxend;
	if($dyend == 0) $y += $dy; else $y += $dyend;
	imageDestroy($$iname);
	}
	
	
	
//--------------------------------------------------------------------------------
//Обрезание неиспользуемой части холста
$x1 = $canvaX;  $y1 = $canvaY;
  for($x = 0; $x < $canvaX; $x +=10)
	for($y = 0; $y < $canvaY; $y +=10){
		$color = imagecolorat($fotoSwitch, $x, $y);
		//echo $color." ";
		if($color != 0) {
			if($x < $x1) $x1 = $x;
			if($y < $y1) $y1 = $y;
			}
		}
	$x2 = 0;  $y2 = 0;
	for($x = $canvaX; $x > 0; $x -=10)
	for($y = $canvaY; $y > 0; $y -=10){
		$color = imagecolorat($fotoSwitch, $x, $y);
		if($color != 0) {
			if($x > $x2) $x2 = $x;
			if($y > $y2) $y2 = $y;
			}
		}

 $fotoSwitchOut = imagecreatetruecolor($x2 - $x1 + 60, $y2 - $y1 + 60);
 $color = imagecolorallocate($fotoSwitch, 210, 210, 210);
 //imageFilledRectangle($fotoSwitchOut, 0, 0, 2900, 2600, $color);
 $blackOut = imagecolorallocate($fotoSwitchOut, 0,0,0);
 imagecolortransparent($fotoSwitchOut, $blackOut);// Сделаем фон прозрачным
 imagecopy ($fotoSwitchOut, $fotoSwitch, 20, 0, $x1 - 10, $y1 - 20, $x2 + 20, $y2 + 60);
//------------------------------------------------------------------------------- 
  Header("Content-type: image/png");
  imagePng($fotoSwitchOut, $_SERVER['DOCUMENT_ROOT'].'/images/passport/'.$name.'_print.png');
  imagePng($fotoSwitchOut);
  imageDestroy($fotoSwitchOut);	
  imageDestroy($fotoSwitch);	
	
	

 ?>