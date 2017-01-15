<?php
	function __autoload($class_name) {
	if(file_exists($_SERVER['DOCUMENT_ROOT']."/classes/".$class_name.".php"))require_once $_SERVER['DOCUMENT_ROOT']."/classes/".$class_name.".php";
	else require_once $_SERVER['DOCUMENT_ROOT']."/draw/".$class_name.".php"; }//автоподключение нужного класса

if(isset($_GET["name"])){
$name = str_replace(" ", "+", $_GET["name"]);//получение наименования переключателя
$Ps = new PropertiesSwitcher();//создание объекта класса PropertiesSwitcher
$PS = $Ps->getPropSwitch($name);//получить свойства переключателя
	}
	else $PS = $_GET;
/*echo "<pre>";
print_r($PS);
echo "</pre>";
exit;*/
 //Создание  холста
if($PS["fix"] == "P" && $PS["handle"] == "key") exit();
 $canvaX = 2900;	
 $canvaY = 2600;	
 $fotoSwitch = imagecreatetruecolor($canvaX, $canvaY);
 $color = imagecolorallocate($fotoSwitch, 210, 210, 210);
 //imagecolortransparent($fotoSwitch, $black);// Сделаем фон прозрачным
// imageFilledRectangle($fotoSwitch, 0, 0, 2900, 2600, $color);
$x = 0; $y = 0;//текущие координаты
//------------------------------------------------------------------------------
//В КОРОБКЕ
if($PS["fix"] == "P" ){
$pic_dir = "box";
$box = $PS["box"];
$box = strtolower ($box);//перевод в нижний регистр
$box = str_replace ("v", "", $box);//удаление v
if($box == "ec400c4") image_detail ("ec400c4", 65, 50, 230, 160 );
if($box == "ec400c5") image_detail ("ec400c5", 65, 50, 335, 205 );
if($box == "ec400c6") image_detail ("ec400c6", 65, 50, 350, 230 );
if($box == "ec400c7") image_detail ("ec400c7", 65, 50, 420, 340 );
if($box == "ec400c5h") image_detail ("ec400c5h", 65, 50, 370, 200 );
if($box == "ec400c6h") image_detail ("ec400c6h", 65, 50, 440, 230 );
if($box == "ec400c7h") image_detail ("ec400c7h", 65, 50, 440, 300 );

if($box == "ec410c4") image_detail ("ec410c4", 65, 50, 260, 135 );
if($box == "ec410c5") image_detail ("ec410c5", 65, 50, 300, 170 );
if($box == "ec410c6") image_detail ("ec410c6", 65, 50, 325, 245 );
if($box == "ec410c7") image_detail ("ec410c7", 65, 50, 480, 330 );
if($box == "ec410c5h") image_detail ("ec410c5h", 65, 50, 315, 170 );
if($box == "ec410c6h") image_detail ("ec410c6h", 65, 50, 350, 195 );
if($box == "ec410c7h") image_detail ("ec410c7h", 65, 50, 450, 320 );

if($PS["current"] < 30 ){
//-----------------------------------------------------------------------------
//  10 - 25 A
//$PS["handle"] = "tr";
if($PS["board"] == 1) image_detail ("25board", 0, 0, 10, 5);
if($PS["handle"] == "black") image_detail ("25handle_black", 25, 30);
if($PS["handle"] == "red") image_detail ("25handle_red", 25, 30);
if($PS["handle"] == "t") image_detail ("25handle_t_black", 20, 30);
if($PS["handle"] == "tr") image_detail ("25handle_t_red", 20, 28);
if($PS["handle"] == "ur") image_detail ("25handle_ur", -14, -25);
if($PS["handle"] == "ub") image_detail ("25handle_ub", -14, -25);
//if($PS["handle"] == "key") image_detail ("handle_key", 42, 18);
}

else {
//-------------------------------------------------------------------------------
// 32 - 160 A
if($PS["board"] == 1) image_detail ("32board", -40, -75, 15, -8);
if($PS["handle"] == "black") image_detail ("32handle_black", 15, 15);
if($PS["handle"] == "red") image_detail ("32handle_red", 15, 15);
if($PS["handle"] == "t") image_detail ("25handle_t_black", 20, 35);
if($PS["handle"] == "tr") image_detail ("25handle_t_red", 20, 35);
if($PS["handle"] == "ur") image_detail ("32handle_ur", -52, -75);
if($PS["handle"] == "ub") image_detail ("32handle_ub", -52, -75);
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
image_detail ("back_cover", 0, 160);
for($qdesk = 0; $qdesk < $PS["qdesk"] - 1; $qdesk++) 
	image_detail ("desc", 30, 8, 55, 16);
image_detail ("first_desc", 29, 9);
if($PS["moment"] == 1) image_detail ("camera", 77, 24, 42, 14);
image_detail ("camera", 77, 24);
if($PS["ip54"] == 1) {
	image_detail ("ip54", 32, -22, 25, 7);
	image_detail ("rubber", 32, -23, 20, 12);
}
//$PS["handle"] = "tr";
if($PS["board"] == 1) image_detail ("board", 17, -31, 30, -5);
if($PS["handle"] == "black") image_detail ("handle_black", 65, 50);
if($PS["handle"] == "red") image_detail ("handle_red", 65, 50);
if($PS["handle"] == "t") image_detail ("handle_t_black", 67, 27);
if($PS["handle"] == "tr") image_detail ("handle_t_red", 67, 27);
if($PS["handle"] == "ur") image_detail ("handle_ur", -2, -120);
if($PS["handle"] == "ub") image_detail ("handle_ub", -10, -140);
if($PS["handle"] == "key") image_detail ("handle_key", 42, 18);
}
else {
//Обратное расположение галет
if($PS["fix"] == "L" ) image_detail ("fix_din", 0, 40, 156, 60);
if($PS["fix"] == "O" || $PS["fix"] == "B") image_detail ("ip54", 0, 40);
if($PS["moment"] == 1) image_detail ("camera", 45, 55, 46, 16);
image_detail ("camera", 45, 55, 43, 16);
image_detail ("first_desc_reverse",45, 52, 42, 52);
for($qdesk = 0; $qdesk < $PS["qdesk"] - 1; $qdesk++) 
	image_detail ("desc_reverse", 71, 24, 65, 22);
if($PS["fix"] != "B" ) image_detail ("back_cover_reverse", 68, 28, 56, 20);
	if($PS["fix"] == "B" ){
		image_detail ("back_cover_reverse_b", 64, 31, 66, 20);
		image_detail ("handle_b", 359, 110, 359, 110);
		if($PS["board"] == 1) image_detail ("board", 158, 15, 30, 15);
		if($PS["handle"] == "black") image_detail ("handle_black", 200, 80);
		if($PS["handle"] == "red") image_detail ("handle_red", 200, 80);
		if($PS["handle"] == "ur") image_detail ("handle_ur", 150, -60);
		if($PS["handle"] == "ub") image_detail ("handle_ub", 150, -60);
		if($PS["handle"] == "t") image_detail ("handle_t_black", 200, 65);
		if($PS["handle"] == "tr") image_detail ("handle_t_red", 200, 65);
		}
	else{
		
		if($PS["board"] == 1) {
			image_detail ("clip", 50, 68, 50, 68);
			image_detail ("board", 35, -70, 30, -50);
		
		}
		if($PS["handle"] == "black") image_detail ("handle_black", 95, 65);
		if($PS["handle"] == "red") image_detail ("handle_red", 95, 65);
		if($PS["handle"] == "ur") image_detail ("handle_ur", 390, -80);
		if($PS["handle"] == "ub") image_detail ("handle_ub", 390, -80);
		if($PS["handle"] == "t") image_detail ("handle_t_black", 85, 35);
		if($PS["handle"] == "tr") image_detail ("handle_t_red", 85, 35);
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
	image_detail ("desc", 14, 6, 46, 11);
//image_detail ("first_desc", 29, 9);
image_detail ("camera", 20, 10, 20, -10 );
if($PS["ip54"] == 1) {
	image_detail ("ip54", 12, -72, 12, -72);
	image_detail ("rubber", 16, 18, 35, 78);
}
//$PS["handle"] = "tr";
if($PS["board"] == 1) image_detail ("board", 3, -68, 25, -6);
if($PS["handle"] == "black") image_detail ("handle_black", 57, 62);
if($PS["handle"] == "red") image_detail ("handle_red", 57, 62);
if($PS["handle"] == "t") image_detail ("handle_t_black", 85, 83);
if($PS["handle"] == "tr") image_detail ("handle_t_red", 85, 83);
if($PS["handle"] == "ur") image_detail ("handle_ur", -2, -90);
if($PS["handle"] == "ub") image_detail ("handle_ub", -2, -100);


}
else {
//Обратное расположение галет
if($PS["fix"] == "L" ) image_detail ("fix_din", 0, 40, 22, -1);
if($PS["fix"] == "O" || $PS["fix"] == "B") image_detail ("ip54", 0, 40);

image_detail ("camera", 68, 95, 25, 85);

for($qdesk = 0; $qdesk < $PS["qdesk"]; $qdesk++) 
	image_detail ("desc_reverse", 71, 24, 45, 12);
if($PS["fix"] != "B" ) image_detail ("back_cover_reverse", 85, 24, 85, 24);
	if($PS["fix"] == "B" ){
		image_detail ("back_cover_reverse_b", 87, 29, 87, 29);
		image_detail ("handle_b", 259, -10);
		if($PS["board"] == 1) image_detail ("board", 69, 22, 36, 15);
		if($PS["handle"] == "black") image_detail ("handle_black", 125, 135);
		if($PS["handle"] == "red") image_detail ("handle_red", 125, 135);
		if($PS["handle"] == "t") image_detail ("handle_t_black", 155, 153);
		if($PS["handle"] == "tr") image_detail ("handle_t_red", 155, 153);
		if($PS["handle"] == "ur") image_detail ("handle_ur", 70, -10);
		if($PS["handle"] == "ub") image_detail ("handle_ub", 70, -20);
		}
	else{
		
		if($PS["board"] == 1) {
			image_detail ("clip", 13, 52, 13, 52);
			image_detail ("board", 20, -120, 60, -35);
		
		}
		if($PS["handle"] == "black") image_detail ("handle_black", 48, 43);
		if($PS["handle"] == "red") image_detail ("handle_red", 48, 43);
		if($PS["handle"] == "t") image_detail ("handle_t_black", 68, 58);
		if($PS["handle"] == "tr") image_detail ("handle_t_red", 68, 58);
		if($PS["handle"] == "ur") image_detail ("handle_ur", 10, -100);
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
	image_detail ("desc", 32, -2, 55, 16);
//image_detail ("first_desc", 29, 9);

image_detail ("camera", 53, 72);
if($PS["ip54"] == 1) {
	image_detail ("ip54", 12, -92, 12, -92);
	image_detail ("rubber", 17, 19, 30, 82);
}
//$PS["handle"] = "tr";
if($PS["board"] == 1) image_detail ("board", 10, -72, 30, 15);
if($PS["handle"] == "black") image_detail ("handle_black", 65, 40);
if($PS["handle"] == "red") image_detail ("handle_red", 65, 40);
if($PS["handle"] == "t") image_detail ("handle_t_black", 95, 60);
if($PS["handle"] == "tr") image_detail ("handle_t_red", 95, 60);
if($PS["handle"] == "ur") image_detail ("handle_ur", 7, -100);
if($PS["handle"] == "ub") image_detail ("handle_ub", 7, -100);
}
else {
//Обратное расположение галет
if($PS["fix"] == "L" ) image_detail ("fix_din", 0, 40, 16, -15);
if($PS["fix"] == "O" || $PS["fix"] == "B") image_detail ("ip54", 0, 40);

image_detail ("camera", 75, 105);

for($qdesk = 0; $qdesk < $PS["qdesk"]; $qdesk++) 
	image_detail ("desc_reverse", 27, -59, 61, 17);
if($PS["fix"] != "B" ) image_detail ("back_cover_reverse", 28, -61, 28, -61);
	if($PS["fix"] == "B" ){
		image_detail ("back_cover_reverse_b", 26, -71, 66, 20);
		image_detail ("handle_b", 259, -20);
		if($PS["board"] == 1) image_detail ("board", 69, 22, 36, 15);
		if($PS["handle"] == "black") image_detail ("handle_black", 125, 135);
		if($PS["handle"] == "red") image_detail ("handle_red", 125, 135);
		if($PS["handle"] == "t") image_detail ("handle_t_black", 155, 153);
		if($PS["handle"] == "tr") image_detail ("handle_t_red", 155, 153);
		if($PS["handle"] == "ur") image_detail ("handle_ur", 70, -10);
		if($PS["handle"] == "ub") image_detail ("handle_ub", 70, -20);
		}
	else{
		
		if($PS["board"] == 1) {
			image_detail ("clip", 29, 130);
			image_detail ("board", 15, -150, 30, -120);
		
		}
		if($PS["handle"] == "black") image_detail ("handle_black", 75, 100);
		if($PS["handle"] == "red") image_detail ("handle_red", 75, 100);
		if($PS["handle"] == "t") image_detail ("handle_t_black", 100, 117);
		if($PS["handle"] == "tr") image_detail ("handle_t_red", 100, 117);
		if($PS["handle"] == "ur") image_detail ("handle_ur", 30, -40);
		if($PS["handle"] == "ub") image_detail ("handle_ub", 30, -40);
		}

	}
 }
}
//-----------------------------------------------------------------------------------------
//Копирование изображения детали переключателя на холст
function image_detail ($name, $dx, $dy, $dxend = 0, $dyend = 0){
	$iname = "i".$name;
	global $fotoSwitch, $$iname, $x, $y, $pic_dir, $print;
	$$iname = imageCreateFromPng($pic_dir."details/".$name.".png");
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
  imagePng($fotoSwitchOut);
  imageDestroy($fotoSwitchOut);	
	
	

 ?>