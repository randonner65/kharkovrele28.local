<?php
//КЛАСС БИБЛИОТЕКИ ЭЛЕМЕНТОВ
class Lib extends Group {
public $length;
public $dx;
public function __construct(){
	}
//EC 400C4F
public function boxEC400C4F($PRPARGR){

$BoxEC400C4F = $this->boxEC4X0C4F($PRPARGR);
//echo "<pre>";print_r($BoxEC400C4F);echo "</pre>";exit;
$Step_sealF1 = $this->step_sealF($BoxEC400C4F->PRGR);

$Step_sealF2 = $this->copyOffset($Step_sealF1, 34, -52); $BoxEC400C4F->add($Step_sealF2);
$Step_sealF1->move(34, 52);
$Step_sealF1->mirrorX(52); $BoxEC400C4F->add($Step_sealF1);
$Step_sealL1 = $this->step_sealL($BoxEC400C4F->PRGR);$Step_sealL1->move(34, 0); $BoxEC400C4F->add($Step_sealL1);
$BoxEC400C4F->add(new TextDraw(array("size"=>5,"x"=>20,"y"=>-40,"text"=>"EC400C4"), $BoxEC400C4F->PRGR));
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC400C4F->PRGR);
$Sizes->add(new LineSize(array("x1"=>0,"y1"=>-70,"x2"=>55,"y2"=>-70), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>0,"y1"=>-49,"x2"=>0,"y2"=>-75), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>55,"y1"=>-51,"x2"=>55,"y2"=>-75), $Sizes->PRGR));
$BoxEC400C4F->add($Sizes);
//echo "<pre>";print_r($BoxEC400C4F);echo "</pre>";exit;
return $BoxEC400C4F;
}

//EC 400C4L
public function boxEC400C4L($PRPARGR){
$BoxEC400C4L = $this->boxEC4X0C4L($PRPARGR);
$BoxEC400C4L1 = new Group(array(), $BoxEC400C4L->PRGR);
$Step_sealF1 = $this->step_sealF($BoxEC400C4L->PRGR);
$Step_sealF2 = $this->copyOffset($Step_sealF1, -20, -54); $BoxEC400C4L1->add($Step_sealF2);
$Step_sealF1->move(20, -54);$BoxEC400C4L1->add($Step_sealF1);
$Step_sealF3 = $this->copyOffset($Step_sealF1); $Step_sealF3->rotate(0,0,90); $Step_sealF3->move(0, -20); $BoxEC400C4L1->add($Step_sealF3); 
$BoxEC400C4L->add($BoxEC400C4L1);
$BoxEC400C4L2 = $this->copyOffset($BoxEC400C4L1);
$BoxEC400C4L2->rotate(0,0,180);
$BoxEC400C4L->add($BoxEC400C4L2);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC400C4L->PRGR);
$Sizes->add(new LineSize(array("x1"=>-54,"y1"=>-70,"x2"=>54,"y2"=>-70,"text"=>"□ 108","offset"=>-4), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-54,"y1"=>-45,"x2"=>-54,"y2"=>-75), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>54,"y1"=>-45,"x2"=>54,"y2"=>-75), $Sizes->PRGR));
$Sizes->add(new LineSize(array("x1"=>-64,"y1"=>-80,"x2"=>64,"y2"=>-80,"text"=>"□ 128","offset"=>-4), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-64,"y1"=>-6,"x2"=>-64,"y2"=>-85), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>64,"y1"=>-6,"x2"=>64,"y2"=>-85), $Sizes->PRGR));
$BoxEC400C4L->add($Sizes);
$this->dx = 55;
return $BoxEC400C4L;
}
//EC 400C5VF
public function boxEC400C5VF($PRPARGR){
$BoxEC400C5VF = $this->boxEC4X0C5VF($PRPARGR);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC400C5VF->PRGR);
$Sizes->add(new LineSize(array("x1"=>0,"y1"=>-95,"x2"=>75,"y2"=>-95), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>0,"y1"=>-75,"x2"=>0,"y2"=>-100), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>75,"y1"=>-77,"x2"=>75,"y2"=>-100), $Sizes->PRGR));
$BoxEC400C5VF->add($Sizes);
$BoxEC400C5VF->add(new TextDraw(array("size"=>5,"x"=>30,"y"=>-68,"text"=>"EC400C5"), $BoxEC400C5VF->PRGR));
$Step_sealF1 = $this->step_sealF($BoxEC400C5VF->PRGR);
$Step_sealF2 = $this->copyOffset($Step_sealF1, 44, -78); $BoxEC400C5VF->add($Step_sealF2);
$Step_sealF1->move(44, 78);
$Step_sealF1->mirrorX(78); $BoxEC400C5VF->add($Step_sealF1);
$Step_sealL1 = $this->step_sealL($BoxEC400C5VF->PRGR);
$Step_sealL2 = $this->copyOffset($Step_sealL1, 44, -45); $BoxEC400C5VF->add($Step_sealL2);
$Step_sealL3 = $this->copyOffset($Step_sealL1, 44, 45); $BoxEC400C5VF->add($Step_sealL3);
$Step_sealL1->move(44, 0); $BoxEC400C5VF->add($Step_sealL1);
return $BoxEC400C5VF;
}
//EC 400C4VF
public function boxEC400C4VF($PRPARGR){
return $this->boxEC400C4F($PRPARGR);
}
//EC 400C4HF
public function boxEC400C4HF($PRPARGR){
return $this->boxEC400C4F($PRPARGR);
}
//EC 400C4VL
public function boxEC400C4VL($PRPARGR){
return $this->boxEC400C4L($PRPARGR);
}
//EC 400C4HL
public function boxEC400C4HL($PRPARGR){
return $this->boxEC400C4L($PRPARGR);
}
//EC 410C4VF
public function boxEC410C4VF($PRPARGR){
return $this->boxEC410C4F($PRPARGR);
}
//EC 410C4HF
public function boxEC410C4HF($PRPARGR){
return $this->boxEC410C4F($PRPARGR);
}
//EC 410C4VL
public function boxEC410C4VL($PRPARGR){
return $this->boxEC410C4L($PRPARGR);
}
//EC 410C4HL
public function boxEC410C4HL($PRPARGR){
return $this->boxEC410C4L($PRPARGR);
}
//EC 400C5F
public function boxEC400C5F($PRPARGR){
return $this->boxEC400C5VF($PRPARGR);
}
//EC 400C6F
public function boxEC400C6F($PRPARGR){
return $this->boxEC400C6VF($PRPARGR);
}
//EC 400C7F
public function boxEC400C7F($PRPARGR){
return $this->boxEC400C7VF($PRPARGR);
}
//EC 400C5L
public function boxEC400C5L($PRPARGR){
return $this->boxEC400C5VL($PRPARGR);
}
//EC 400C6L
public function boxEC400C6L($PRPARGR){
return $this->boxEC400C6VL($PRPARGR);
}
//EC 400C7L
public function boxEC400C7L($PRPARGR){
return $this->boxEC400C7VL($PRPARGR);
}

//EC 410C5F
public function boxEC410C5F($PRPARGR, $pg = 21){
return $this->boxEC410C5VF($PRPARGR, $pg);
}
//EC 410C6F
public function boxEC410C6F($PRPARGR, $pg = 29){
return $this->boxEC410C6VF($PRPARGR, $pg);
}
//EC 410C7F
public function boxEC410C7F($PRPARGR, $pg = 36){
return $this->boxEC410C7VF($PRPARGR, $pg);
}
//EC 410C5L
public function boxEC410C5L($PRPARGR, $pg = 21){
return $this->boxEC410C5VL($PRPARGR, $pg);
}
//EC 410C6L
public function boxEC410C6L($PRPARGR, $pg = 29){
return $this->boxEC410C6VL($PRPARGR, $pg);
}
//EC 410C7L
public function boxEC410C7L($PRPARGR, $pg = 36){
return $this->boxEC410C7VL($PRPARGR, $pg);
}

//EC 400C5VL
public function boxEC400C5VL($PRPARGR){
$BoxEC400C5VL = $this->boxEC4X0C5VL($PRPARGR);
$BoxEC400C5VL1 = new Group(array(), $BoxEC400C5VL->PRGR);
$Step_sealF1 = $this->step_sealF($BoxEC400C5VL->PRGR);
$Step_sealF2 = $this->copyOffset($Step_sealF1, -25, -80); $BoxEC400C5VL1->add($Step_sealF2);
$Step_sealF1->move(25, -80);$BoxEC400C5VL1->add($Step_sealF1);
$Step_sealF3 = $this->copyOffset($Step_sealF1); $Step_sealF3->rotate(25, -45, 90);$BoxEC400C5VL1->add($Step_sealF3); 
$Step_sealF4 = $this->copyOffset($Step_sealF3, 0, 45); $BoxEC400C5VL1->add($Step_sealF4);
$Step_sealF5 = $this->copyOffset($Step_sealF4, 0, 45); $BoxEC400C5VL1->add($Step_sealF5);
$BoxEC400C5VL->add($BoxEC400C5VL1);
$BoxEC400C5VL2 = $this->copyOffset($BoxEC400C5VL1);
$BoxEC400C5VL2->rotate(0 ,0, 180);
$BoxEC400C5VL->add($BoxEC400C5VL2);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC400C5VL->PRGR);
$Sizes->add(new LineSize(array("x1"=>-60,"y1"=>-95,"x2"=>60,"y2"=>-95), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-60,"y1"=>-71,"x2"=>-60,"y2"=>-100), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>60,"y1"=>-71,"x2"=>60,"y2"=>-100), $Sizes->PRGR));
$Sizes->add(new LineSize(array("x1"=>-70,"y1"=>-105,"x2"=>70,"y2"=>-105), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-70,"y1"=>-51,"x2"=>-70,"y2"=>-110), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>70,"y1"=>-51,"x2"=>70,"y2"=>-110), $Sizes->PRGR));
$Sizes->add(new LineSize(array("x1"=>-80,"y1"=>-80,"x2"=>-80,"y2"=>80), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-85,"y1"=>-80,"x2"=>-51,"y2"=>-80), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-85,"y1"=>80,"x2"=>-51,"y2"=>80), $Sizes->PRGR));
$Sizes->add(new LineSize(array("x1"=>-90,"y1"=>-90,"x2"=>-90,"y2"=>90), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-95,"y1"=>-90,"x2"=>-31,"y2"=>-90), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-95,"y1"=>90,"x2"=>-31,"y2"=>90), $Sizes->PRGR));
$BoxEC400C5VL->add($Sizes);
$this->dx = 75;
return $BoxEC400C5VL;
}

//EC 400C5HF
public function boxEC400C5HF($PRPARGR){
$BoxEC400C5HF = $this->boxEC4X0C5HF($PRPARGR);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC400C5HF->PRGR);
$Sizes->add(new LineSize(array("x1"=>0,"y1"=>-80,"x2"=>75,"y2"=>-80), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>0,"y1"=>-55,"x2"=>0,"y2"=>-85), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>75,"y1"=>-57,"x2"=>75,"y2"=>-85), $Sizes->PRGR));
$BoxEC400C5HF->add($Sizes);
$BoxEC400C5HF->add(new TextDraw(array("size"=>5,"x"=>30,"y"=>-48,"text"=>"EC400C5"), $BoxEC400C5HF->PRGR));
$Step_sealF1 = $this->step_sealF($BoxEC400C5HF->PRGR);
$Step_sealF2 = $this->copyOffset($Step_sealF1, 44, -58); $BoxEC400C5HF->add($Step_sealF2);
$Step_sealF1->move(44, 58);
$Step_sealF1->mirrorX(58); $BoxEC400C5HF->add($Step_sealF1);
$Step_sealL1 = $this->step_sealL($BoxEC400C5HF->PRGR);
$Step_sealL2 = $this->copyOffset($Step_sealL1, 44, -25); $BoxEC400C5HF->add($Step_sealL2);
$Step_sealL1->move(44, 25); $BoxEC400C5HF->add($Step_sealL1);
return $BoxEC400C5HF;
}

//EC 400C5HL
public function boxEC400C5HL($PRPARGR){
$BoxEC400C5HL = $this->boxEC400C5VL($PRPARGR);
$BoxEC400C5HL->rotate(0,0,90);
$this->dx = 90;
return $BoxEC400C5HL;
}

//EC 400C6VF
public function boxEC400C6VF($PRPARGR){
$BoxEC400C6VF = $this->boxEC4X0C6VF($PRPARGR);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC400C6VF->PRGR);
$Sizes->add(new LineSize(array("x1"=>0,"y1"=>-110,"x2"=>75,"y2"=>-110), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>0,"y1"=>-90,"x2"=>0,"y2"=>-115), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>75,"y1"=>-90,"x2"=>75,"y2"=>-115), $Sizes->PRGR));
$BoxEC400C6VF->add($Sizes);
$BoxEC400C6VF->add(new TextDraw(array("size"=>5,"x"=>30,"y"=>-78,"text"=>"EC400C6"), $BoxEC400C6VF->PRGR));
$Step_sealF1 = $this->step_sealF($BoxEC400C6VF->PRGR);
$Step_sealF2 = $this->copyOffset($Step_sealF1, 44, -93); $BoxEC400C6VF->add($Step_sealF2);
$Step_sealF1->move(44, 93);
$Step_sealF1->mirrorX(93); $BoxEC400C6VF->add($Step_sealF1);
$Step_sealL1 = $this->step_sealL($BoxEC400C6VF->PRGR);
$Step_sealL2 = $this->copyOffset($Step_sealL1, 44, -50); $BoxEC400C6VF->add($Step_sealL2);
$Step_sealL3 = $this->copyOffset($Step_sealL1, 44, 50); $BoxEC400C6VF->add($Step_sealL3);
$Step_sealL1->move(44, 0); $BoxEC400C6VF->add($Step_sealL1);
return $BoxEC400C6VF;
}

//EC 400C6VL
public function boxEC400C6VL($PRPARGR){
$BoxEC400C6VL = $this->boxEC4X0C6VL($PRPARGR);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC400C6VL->PRGR);
$Sizes->add(new LineSize(array("x1"=>-70,"y1"=>-110,"x2"=>70,"y2"=>-110), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-70,"y1"=>-86,"x2"=>-70,"y2"=>-115), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>70,"y1"=>-86,"x2"=>70,"y2"=>-115), $Sizes->PRGR));
$Sizes->add(new LineSize(array("x1"=>-80,"y1"=>-120,"x2"=>80,"y2"=>-120), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-80,"y1"=>-56,"x2"=>-80,"y2"=>-125), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>80,"y1"=>-56,"x2"=>80,"y2"=>-125), $Sizes->PRGR));
$Sizes->add(new LineSize(array("x1"=>-90,"y1"=>-95,"x2"=>-90,"y2"=>95), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-95,"y1"=>-95,"x2"=>-61,"y2"=>-95), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-95,"y1"=>95,"x2"=>-61,"y2"=>95), $Sizes->PRGR));
$Sizes->add(new LineSize(array("x1"=>-100,"y1"=>-105,"x2"=>-100,"y2"=>105), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-105,"y1"=>-105,"x2"=>-36,"y2"=>-105), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-105,"y1"=>105,"x2"=>-36,"y2"=>105), $Sizes->PRGR));
$BoxEC400C6VL->add($Sizes);
$BoxEC400C6VL1 = new Group(array(), $BoxEC400C6VL->PRGR);
$Step_sealF1 = $this->step_sealF($BoxEC400C6VL->PRGR);
$Step_sealF2 = $this->copyOffset($Step_sealF1, -30, -95); $BoxEC400C6VL1->add($Step_sealF2);
$Step_sealF1->move(30, -95);$BoxEC400C6VL1->add($Step_sealF1);
$Step_sealF3 = $this->copyOffset($Step_sealF1); $Step_sealF3->rotate(30, -55, 90); $Step_sealF3->move(0, 5); $BoxEC400C6VL1->add($Step_sealF3); 
$Step_sealF4 = $this->copyOffset($Step_sealF3, 0, 50); $BoxEC400C6VL1->add($Step_sealF4);
$Step_sealF5 = $this->copyOffset($Step_sealF4, 0, 50); $BoxEC400C6VL1->add($Step_sealF5);
$BoxEC400C6VL->add($BoxEC400C6VL1);
$BoxEC400C6VL2 = $this->copyOffset($BoxEC400C6VL1);
$BoxEC400C6VL2->rotate(0 ,0, 180);
$BoxEC400C6VL->add($BoxEC400C6VL2);
$this->dx = 90;
return $BoxEC400C6VL;
}

//EC 400C6HF
public function boxEC400C6HF($PRPARGR){
$BoxEC400C6HF = $this->boxEC4X0C6HF($PRPARGR);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC400C6HF->PRGR);
$Sizes->add(new LineSize(array("x1"=>0,"y1"=>-90,"x2"=>75,"y2"=>-90), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>0,"y1"=>-65,"x2"=>0,"y2"=>-95), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>75,"y1"=>-67,"x2"=>75,"y2"=>-95), $Sizes->PRGR));
$BoxEC400C6HF->add($Sizes);
$BoxEC400C6HF->add(new TextDraw(array("size"=>5,"x"=>30,"y"=>-54,"text"=>"EC400C6"), $BoxEC400C6HF->PRGR));
$Step_sealF1 = $this->step_sealF($BoxEC400C6HF->PRGR);
$Step_sealF2 = $this->copyOffset($Step_sealF1, 44, -68); $BoxEC400C6HF->add($Step_sealF2);
$Step_sealF1->move(44, 68);
$Step_sealF1->mirrorX(68); $BoxEC400C6HF->add($Step_sealF1);
$Step_sealL1 = $this->step_sealL($BoxEC400C6HF->PRGR);
$Step_sealL2 = $this->copyOffset($Step_sealL1, 44, -25); $BoxEC400C6HF->add($Step_sealL2);
$Step_sealL1->move(44, 25); $BoxEC400C6HF->add($Step_sealL1);
return $BoxEC400C6HF;
}

//EC 400C6HL
public function boxEC400C6HL($PRPARGR){
$BoxEC400C6HL = $this->boxEC400C6VL($PRPARGR);
$BoxEC400C6HL->rotate(0,0,90);
$this->dx = 105;
return $BoxEC400C6HL;
}

//EC 400C7VF
public function boxEC400C7VF($PRPARGR){
$BoxEC400C7VF = $this->boxEC4X0C7VF($PRPARGR);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC400C7VF->PRGR);
$Sizes->add(new LineSize(array("x1"=>0,"y1"=>-140,"x2"=>95,"y2"=>-140), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>0,"y1"=>-115,"x2"=>0,"y2"=>-145), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>95,"y1"=>-117,"x2"=>95,"y2"=>-145), $Sizes->PRGR));
$BoxEC400C7VF->add($Sizes);
$BoxEC400C7VF->add(new TextDraw(array("size"=>7,"x"=>32,"y"=>-94,"text"=>"EC400C7"), $BoxEC400C7VF->PRGR));
$Step_sealF1 = $this->step_sealF($BoxEC400C7VF->PRGR);
$Step_sealF2 = $this->copyOffset($Step_sealF1, 55, -118); $BoxEC400C7VF->add($Step_sealF2);
$Step_sealF1->move(55, 118);
$Step_sealF1->mirrorX(118); $BoxEC400C7VF->add($Step_sealF1);
$Step_sealL1 = $this->step_sealL($BoxEC400C7VF->PRGR);
$Step_sealL2 = $this->copyOffset($Step_sealL1, 55, -50); $BoxEC400C7VF->add($Step_sealL2);
$Step_sealL3 = $this->copyOffset($Step_sealL1, 55, 50); $BoxEC400C7VF->add($Step_sealL3);
$Step_sealL1->move(55, 0); $BoxEC400C7VF->add($Step_sealL1);
return $BoxEC400C7VF;
}

//EC 400C7VL
public function boxEC400C7VL($PRPARGR){
$BoxEC400C7VL = $this->boxEC4X0C7VL($PRPARGR);
$BoxEC400C7VL1 = new Group(array(), $BoxEC400C7VL->PRGR);
$Step_sealF1 = $this->step_sealF($BoxEC400C7VL->PRGR);
$Step_sealF2 = $this->copyOffset($Step_sealF1, -50, -120); $BoxEC400C7VL1->add($Step_sealF2);
$Step_sealF21 = $this->copyOffset($Step_sealF1, 0, -120); $BoxEC400C7VL1->add($Step_sealF21);
$Step_sealF1->move(50, -120);$BoxEC400C7VL1->add($Step_sealF1);
$Step_sealF3 = $this->copyOffset($Step_sealF1); $Step_sealF3->rotate(30, -55, 90); $Step_sealF3->move(0, -15); $BoxEC400C7VL1->add($Step_sealF3); 
$Step_sealF4 = $this->copyOffset($Step_sealF3, 0, 50); $BoxEC400C7VL1->add($Step_sealF4);
$Step_sealF5 = $this->copyOffset($Step_sealF4, 0, 50); $BoxEC400C7VL1->add($Step_sealF5);
$BoxEC400C7VL->add($BoxEC400C7VL1);
$BoxEC400C7VL2 = $this->copyOffset($BoxEC400C7VL1);
$BoxEC400C7VL2->rotate(0 ,0, 180);
$BoxEC400C7VL->add($BoxEC400C7VL2);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC400C7VL->PRGR);
$Sizes->add(new LineSize(array("x1"=>-95,"y1"=>-140,"x2"=>95,"y2"=>-140), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-95,"y1"=>-111,"x2"=>-95,"y2"=>-145), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>95,"y1"=>-111,"x2"=>95,"y2"=>-145), $Sizes->PRGR));
$Sizes->add(new LineSize(array("x1"=>-105,"y1"=>-150,"x2"=>105,"y2"=>-150), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-105,"y1"=>-56,"x2"=>-105,"y2"=>-155), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>105,"y1"=>-56,"x2"=>105,"y2"=>-155), $Sizes->PRGR));
$Sizes->add(new LineSize(array("x1"=>-115,"y1"=>-120,"x2"=>-115,"y2"=>120), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-120,"y1"=>-120,"x2"=>-86,"y2"=>-120), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-120,"y1"=>120,"x2"=>-86,"y2"=>120), $Sizes->PRGR));
$Sizes->add(new LineSize(array("x1"=>-125,"y1"=>-130,"x2"=>-125,"y2"=>130), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-130,"y1"=>-130,"x2"=>-56,"y2"=>-130), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>-130,"y1"=>130,"x2"=>-56,"y2"=>130), $Sizes->PRGR));
$BoxEC400C7VL->add($Sizes);
$this->dx = 120;
return $BoxEC400C7VL;

}

//EC 400C7HF
public function boxEC400C7HF($PRPARGR){
$BoxEC400C7HF = $this->boxEC4X0C7HF($PRPARGR);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC400C7HF->PRGR);
$Sizes->add(new LineSize(array("x1"=>0,"y1"=>-110,"x2"=>95,"y2"=>-110), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>0,"y1"=>-90,"x2"=>0,"y2"=>-115), $Sizes->PRGR));
$Sizes->add(new Line(array("x1"=>95,"y1"=>-90,"x2"=>95,"y2"=>-115), $Sizes->PRGR));
$BoxEC400C7HF->add($Sizes);
$BoxEC400C7HF->add(new TextDraw(array("size"=>7,"x"=>32,"y"=>-78,"text"=>"EC400C7"), $BoxEC400C7HF->PRGR));
$Step_sealF1 = $this->step_sealF($BoxEC400C7HF->PRGR);
$Step_sealF2 = $this->copyOffset($Step_sealF1, 54, -93); $BoxEC400C7HF->add($Step_sealF2);
$Step_sealF1->move(54, 93);
$Step_sealF1->mirrorX(93); $BoxEC400C7HF->add($Step_sealF1);

$Step_sealL1 = $this->step_sealL($BoxEC400C7HF->PRGR);
$Step_sealL2 = $this->copyOffset($Step_sealL1, 54, -50); $BoxEC400C7HF->add($Step_sealL2);
$Step_sealL3 = $this->copyOffset($Step_sealL1, 54, 50); $BoxEC400C7HF->add($Step_sealL3);

$Step_sealL1->move(54, 0); $BoxEC400C7HF->add($Step_sealL1);
return $BoxEC400C7HF;
}

//EC 400C7HL
public function boxEC400C7HL($PRPARGR){
$BoxEC400C7HL = $this->boxEC400C7VL($PRPARGR);
$BoxEC400C7HL->rotate(0,0,90.01);
$this->dx = 135;
return $BoxEC400C7HL;
}
//----------------------------------------------------------------------------

//EC 410C4F
public function boxEC410C4F($PRPARGR, $pg = 16){
$BoxEC410C4F = $this->boxEC4X0C4F($PRPARGR);
$pg = "pg".$pg;
$Pg = $this->$pg($PRPARGR);
$Pg->move(34, 52);$BoxEC410C4F->add($Pg);
$BoxEC410C4F->add(new TextDraw(array("size"=>5,"x"=>20,"y"=>-35,"text"=>"EC410C4"), $BoxEC410C4F->PRGR));
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC410C4F->PRGR);
$LineSize1= new LineSize(array("x1"=>0,"y1"=>-70,"x2"=>55,"y2"=>-70), $Sizes->PRGR); $Sizes->add($LineSize1);
$Line1 = new Line(array("x1"=>0,"y1"=>-49,"x2"=>0,"y2"=>-75), $Sizes->PRGR); $Sizes->add($Line1);
$Line11 = new Line(array("x1"=>55,"y1"=>-51,"x2"=>55,"y2"=>-75), $Sizes->PRGR); $Sizes->add($Line11);
$BoxEC410C4F->add($Sizes);
return $BoxEC410C4F;
}

//EC 410C4L
public function boxEC410C4L($PRPARGR, $pg = 16){
$BoxEC410C4L = $this->boxEC4X0C4L($PRPARGR);
$pg = "pg".$pg;
$Pg1 = $this->$pg($PRPARGR, 2);
$Pg1->move(20, 54); $BoxEC410C4L->add($Pg1);
$Pg2 = $this->copyOffset($Pg1,-40, 0); $BoxEC410C4L->add($Pg2);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC410C4L->PRGR);
$LineSize1= new LineSize(array("x1"=>-54,"y1"=>-70,"x2"=>54,"y2"=>-70,"text"=>"□ 108","offset"=>-4), $Sizes->PRGR); $Sizes->add($LineSize1);
$Line1 = new Line(array("x1"=>-54,"y1"=>-45,"x2"=>-54,"y2"=>-75), $Sizes->PRGR); $Sizes->add($Line1);
$Line11 = new Line(array("x1"=>54,"y1"=>-45,"x2"=>54,"y2"=>-75), $Sizes->PRGR); $Sizes->add($Line11);
$LineSize2= new LineSize(array("x1"=>70,"y1"=>-54,"x2"=>70,"y2"=>52+$Pg1->length), $Sizes->PRGR); $Sizes->add($LineSize2);
$Line2 = new Line(array("x1"=>45,"y1"=>-54,"x2"=>75,"y2"=>-54), $Sizes->PRGR); $Sizes->add($Line2);
$Line21 = new Line(array("x1"=>20,"y1"=>52+$Pg1->length,"x2"=>75,"y2"=>52+$Pg1->length), $Sizes->PRGR); $Sizes->add($Line21);
$BoxEC410C4L->add($Sizes);
$this->dx = 55;
return $BoxEC410C4L;
}
//EC 410C5VF
public function boxEC410C5VF($PRPARGR, $pg = 21){
$BoxEC410C5VF = $this->boxEC4X0C5VF($PRPARGR);
$pg = "pg".$pg;
$Pg = $this->$pg($PRPARGR);
$Pg->move(44, 78);$BoxEC410C5VF->add($Pg);
$BoxEC410C5VF->add(new TextDraw(array("size"=>5,"x"=>27,"y"=>-65,"text"=>"EC410C5"), $BoxEC410C5VF->PRGR));
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC410C5VF->PRGR);
$LineSize1= new LineSize(array("x1"=>0,"y1"=>-90,"x2"=>75,"y2"=>-90), $Sizes->PRGR); $Sizes->add($LineSize1);
$Line1 = new Line(array("x1"=>0,"y1"=>-75,"x2"=>0,"y2"=>-95), $Sizes->PRGR); $Sizes->add($Line1);
$Line11 = new Line(array("x1"=>75,"y1"=>-77,"x2"=>75,"y2"=>-95), $Sizes->PRGR); $Sizes->add($Line11);
$BoxEC410C5VF->add($Sizes);
return $BoxEC410C5VF;
}

//EC 410C5VL
public function boxEC410C5VL($PRPARGR, $pg = 21){
$BoxEC410C5VL = $this->boxEC4X0C5VL($PRPARGR);
$pg = "pg".$pg;
$Pg1 = $this->$pg($PRPARGR, 2);
$Pg1->move(25, 80); $BoxEC410C5VL->add($Pg1);
$Pg2 = $this->copyOffset($Pg1,-50, 0); $BoxEC410C5VL->add($Pg2);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC410C5VL->PRGR);
$LineSize1= new LineSize(array("x1"=>-60,"y1"=>-90,"x2"=>60,"y2"=>-90), $Sizes->PRGR); $Sizes->add($LineSize1);
$Line1 = new Line(array("x1"=>-60,"y1"=>-71,"x2"=>-60,"y2"=>-95), $Sizes->PRGR); $Sizes->add($Line1);
$Line11 = new Line(array("x1"=>60,"y1"=>-71,"x2"=>60,"y2"=>-95), $Sizes->PRGR); $Sizes->add($Line11);
$LineSize2= new LineSize(array("x1"=>70,"y1"=>-80,"x2"=>70,"y2"=>78+$Pg1->length), $Sizes->PRGR); $Sizes->add($LineSize2);
$Line2 = new Line(array("x1"=>51,"y1"=>-80,"x2"=>75,"y2"=>-80), $Sizes->PRGR); $Sizes->add($Line2);
$Line21 = new Line(array("x1"=>25,"y1"=>78+$Pg1->length,"x2"=>75,"y2"=>78+$Pg1->length), $Sizes->PRGR); $Sizes->add($Line21);
$BoxEC410C5VL->add($Sizes);
$this->dx = 70;
return $BoxEC410C5VL;
}

//EC 410C5HF
public function boxEC410C5HF($PRPARGR, $pg = 21){
$BoxEC410C5HF = $this->boxEC4X0C5HF($PRPARGR);
$pg = "pg".$pg;
$Pg = $this->$pg($PRPARGR);
$Pg->move(44, 58);$BoxEC410C5HF->add($Pg);
$BoxEC410C5HF->add(new TextDraw(array("size"=>5,"x"=>27,"y"=>-45,"text"=>"EC410C5"), $BoxEC410C5HF->PRGR));
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC410C5HF->PRGR);
$LineSize1= new LineSize(array("x1"=>0,"y1"=>-70,"x2"=>75,"y2"=>-70), $Sizes->PRGR); $Sizes->add($LineSize1);
$Line1 = new Line(array("x1"=>0,"y1"=>-55,"x2"=>0,"y2"=>-75), $Sizes->PRGR); $Sizes->add($Line1);
$Line11 = new Line(array("x1"=>75,"y1"=>-57,"x2"=>75,"y2"=>-75), $Sizes->PRGR); $Sizes->add($Line11);
$BoxEC410C5HF->add($Sizes);
return $BoxEC410C5HF;
}

//EC 410C5HL
public function boxEC410C5HL($PRPARGR, $pg = 21){
$BoxEC410C5HL = $this->boxEC4X0C5HL($PRPARGR);
$pg = "pg".$pg;
$Pg1 = $this->$pg($PRPARGR, 2);
$Pg1->move(35, 60); $BoxEC410C5HL->add($Pg1);
$Pg2 = $this->copyOffset($Pg1,-70, 0); $BoxEC410C5HL->add($Pg2);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC410C5HL->PRGR);
$LineSize1= new LineSize(array("x1"=>-80,"y1"=>-70,"x2"=>80,"y2"=>-70), $Sizes->PRGR); $Sizes->add($LineSize1);
$Line1 = new Line(array("x1"=>-80,"y1"=>-51,"x2"=>-80,"y2"=>-75), $Sizes->PRGR); $Sizes->add($Line1);
$Line11 = new Line(array("x1"=>80,"y1"=>-51,"x2"=>80,"y2"=>-75), $Sizes->PRGR); $Sizes->add($Line11);
$LineSize2= new LineSize(array("x1"=>90,"y1"=>-60,"x2"=>90,"y2"=>58+$Pg1->length), $Sizes->PRGR); $Sizes->add($LineSize2);
$Line2 = new Line(array("x1"=>51,"y1"=>-60,"x2"=>95,"y2"=>-60), $Sizes->PRGR); $Sizes->add($Line2);
$Line21 = new Line(array("x1"=>35,"y1"=>58+$Pg1->length,"x2"=>95,"y2"=>58+$Pg1->length), $Sizes->PRGR); $Sizes->add($Line21);
$BoxEC410C5HL->add($Sizes);
$this->dx = 80;
return $BoxEC410C5HL;
}

//EC 410C6VF
public function boxEC410C6VF($PRPARGR, $pg = 29){
$BoxEC410C6VF = $this->boxEC4X0C6VF($PRPARGR);
$pg = "pg".$pg;
$Pg = $this->$pg($PRPARGR);
$Pg->move(44, 93);$BoxEC410C6VF->add($Pg);
$BoxEC410C6VF->add(new TextDraw(array("size"=>5,"x"=>27,"y"=>-75,"text"=>"EC410C6"), $BoxEC410C6VF->PRGR));
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC410C6VF->PRGR);
$LineSize1= new LineSize(array("x1"=>0,"y1"=>-105,"x2"=>75,"y2"=>-105), $Sizes->PRGR); $Sizes->add($LineSize1);
$Line1 = new Line(array("x1"=>0,"y1"=>-90,"x2"=>0,"y2"=>-110), $Sizes->PRGR); $Sizes->add($Line1);
$Line11 = new Line(array("x1"=>75,"y1"=>-92,"x2"=>75,"y2"=>-110), $Sizes->PRGR); $Sizes->add($Line11);
$BoxEC410C6VF->add($Sizes);
return $BoxEC410C6VF;
}

//EC 410C6VL
public function boxEC410C6VL($PRPARGR, $pg = 29){
$BoxEC410C6VL = $this->boxEC4X0C6VL($PRPARGR);
$pg = "pg".$pg;
$Pg1 = $this->$pg($PRPARGR, 2);
$Pg1->move(30, 95); $BoxEC410C6VL->add($Pg1);
$Pg2 = $this->copyOffset($Pg1,-60, 0); $BoxEC410C6VL->add($Pg2);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC410C6VL->PRGR);
$LineSize1= new LineSize(array("x1"=>-70,"y1"=>-105,"x2"=>70,"y2"=>-105), $Sizes->PRGR); $Sizes->add($LineSize1);
$Line1 = new Line(array("x1"=>-70,"y1"=>-86,"x2"=>-70,"y2"=>-110), $Sizes->PRGR); $Sizes->add($Line1);
$Line11 = new Line(array("x1"=>70,"y1"=>-86,"x2"=>70,"y2"=>-110), $Sizes->PRGR); $Sizes->add($Line11);
$LineSize2= new LineSize(array("x1"=>85,"y1"=>-95,"x2"=>85,"y2"=>93+$Pg1->length), $Sizes->PRGR); $Sizes->add($LineSize2);
$Line2 = new Line(array("x1"=>51,"y1"=>-95,"x2"=>90,"y2"=>-95), $Sizes->PRGR); $Sizes->add($Line2);
$Line21 = new Line(array("x1"=>25,"y1"=>93+$Pg1->length,"x2"=>90,"y2"=>93+$Pg1->length), $Sizes->PRGR); $Sizes->add($Line21);
$BoxEC410C6VL->add($Sizes);
$this->dx = 70;
return $BoxEC410C6VL;

}

//EC 410C6HF
public function boxEC410C6HF($PRPARGR, $pg = 29){
$BoxEC410C6HF = $this->boxEC4X0C6HF($PRPARGR);
$pg = "pg".$pg;
$Pg = $this->$pg($PRPARGR);
$Pg->move(44, 68);$BoxEC410C6HF->add($Pg);
$BoxEC410C6HF->add(new TextDraw(array("size"=>5,"x"=>27,"y"=>-55,"text"=>"EC410C6"), $BoxEC410C6HF->PRGR));
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC410C6HF->PRGR);
$LineSize1= new LineSize(array("x1"=>0,"y1"=>-80,"x2"=>75,"y2"=>-80), $Sizes->PRGR); $Sizes->add($LineSize1);
$Line1 = new Line(array("x1"=>0,"y1"=>-65,"x2"=>0,"y2"=>-85), $Sizes->PRGR); $Sizes->add($Line1);
$Line11 = new Line(array("x1"=>75,"y1"=>-67,"x2"=>75,"y2"=>-85), $Sizes->PRGR); $Sizes->add($Line11);
$BoxEC410C6HF->add($Sizes);
return $BoxEC410C6HF;
}

//EC 410C6HL
public function boxEC410C6HL($PRPARGR, $pg = 29){
$BoxEC410C6HL = $this->boxEC4X0C6HL($PRPARGR);
$pg = "pg".$pg;
$Pg1 = $this->$pg($PRPARGR, 2);
$Pg1->move(50, 70); $BoxEC410C6HL->add($Pg1);
$Pg2 = $this->copyOffset($Pg1,-100, 0); $BoxEC410C6HL->add($Pg2);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC410C6HL->PRGR);
$LineSize1= new LineSize(array("x1"=>-95,"y1"=>-80,"x2"=>95,"y2"=>-80), $Sizes->PRGR); $Sizes->add($LineSize1);
$Line1 = new Line(array("x1"=>-95,"y1"=>-61,"x2"=>-95,"y2"=>-85), $Sizes->PRGR); $Sizes->add($Line1);
$Line11 = new Line(array("x1"=>95,"y1"=>-61,"x2"=>95,"y2"=>-85), $Sizes->PRGR); $Sizes->add($Line11);
$LineSize2= new LineSize(array("x1"=>110,"y1"=>-70,"x2"=>110,"y2"=>68+$Pg1->length), $Sizes->PRGR); $Sizes->add($LineSize2);
$Line2 = new Line(array("x1"=>51,"y1"=>-70,"x2"=>115,"y2"=>-70), $Sizes->PRGR); $Sizes->add($Line2);
$Line21 = new Line(array("x1"=>50,"y1"=>68+$Pg1->length,"x2"=>115,"y2"=>68+$Pg1->length), $Sizes->PRGR); $Sizes->add($Line21);
$BoxEC410C6HL->add($Sizes);
$this->dx = 110;
return $BoxEC410C6HL;
}

//EC 410C7VF
public function boxEC410C7VF($PRPARGR, $pg = 36){
$BoxEC410C7VF = $this->boxEC4X0C7VF($PRPARGR);
$pg = "pg".$pg;
$Pg = $this->$pg($PRPARGR);
$Pg->move(54.5, 118);$BoxEC410C7VF->add($Pg);
$BoxEC410C7VF->add(new TextDraw(array("size"=>7,"x"=>33,"y"=>-95,"text"=>"EC410C7"), $BoxEC410C7VF->PRGR));
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC410C7VF->PRGR);
$LineSize1= new LineSize(array("x1"=>0,"y1"=>-130,"x2"=>95,"y2"=>-130), $Sizes->PRGR); $Sizes->add($LineSize1);
$Line1 = new Line(array("x1"=>0,"y1"=>-115,"x2"=>0,"y2"=>-135), $Sizes->PRGR); $Sizes->add($Line1);
$Line11 = new Line(array("x1"=>95,"y1"=>-117,"x2"=>95,"y2"=>-135), $Sizes->PRGR); $Sizes->add($Line11);
$BoxEC410C7VF->add($Sizes);
return $BoxEC410C7VF;
}

//EC 410C7VL
public function boxEC410C7VL($PRPARGR, $pg = 36){
$BoxEC410C7VL = $this->boxEC4X0C7VL($PRPARGR);
$pg = "pg".$pg;
$Pg1 = $this->$pg($PRPARGR, 2);
$Pg1->move(45, 120); $BoxEC410C7VL->add($Pg1);
$Pg2 = $this->copyOffset($Pg1,-90, 0); $BoxEC410C7VL->add($Pg2);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC410C7VL->PRGR);
$LineSize1= new LineSize(array("x1"=>-95,"y1"=>-130,"x2"=>95,"y2"=>-130), $Sizes->PRGR); $Sizes->add($LineSize1);
$Line1 = new Line(array("x1"=>-95,"y1"=>-111,"x2"=>-95,"y2"=>-135), $Sizes->PRGR); $Sizes->add($Line1);
$Line11 = new Line(array("x1"=>95,"y1"=>-111,"x2"=>95,"y2"=>-135), $Sizes->PRGR); $Sizes->add($Line11);
$LineSize2= new LineSize(array("x1"=>110,"y1"=>-120,"x2"=>110,"y2"=>118+$Pg1->length), $Sizes->PRGR); $Sizes->add($LineSize2);
$Line2 = new Line(array("x1"=>51,"y1"=>-120,"x2"=>115,"y2"=>-120), $Sizes->PRGR); $Sizes->add($Line2);
$Line21 = new Line(array("x1"=>45,"y1"=>118+$Pg1->length,"x2"=>115,"y2"=>118+$Pg1->length), $Sizes->PRGR); $Sizes->add($Line21);
$BoxEC410C7VL->add($Sizes);
$this->dx = 110;
return $BoxEC410C7VL;
}

//EC 410C7HF
public function boxEC410C7HF($PRPARGR, $pg = 36){
$BoxEC410C7HF = $this->boxEC4X0C7HF($PRPARGR);
$pg = "pg".$pg;
$Pg = $this->$pg($PRPARGR);
$Pg->move(54, 93);$BoxEC410C7HF->add($Pg);
$BoxEC410C7HF->add(new TextDraw(array("size"=>7,"x"=>33,"y"=>-70,"text"=>"EC410C7"), $BoxEC410C7HF->PRGR));
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC410C7HF->PRGR);
$LineSize1= new LineSize(array("x1"=>0,"y1"=>-105,"x2"=>95,"y2"=>-105), $Sizes->PRGR); $Sizes->add($LineSize1);
$Line1 = new Line(array("x1"=>0,"y1"=>-90,"x2"=>0,"y2"=>-110), $Sizes->PRGR); $Sizes->add($Line1);
$Line11 = new Line(array("x1"=>95,"y1"=>-92,"x2"=>95,"y2"=>-110), $Sizes->PRGR); $Sizes->add($Line11);
$BoxEC410C7HF->add($Sizes);
return $BoxEC410C7HF;
}

//EC 410C7HL
public function boxEC410C7HL($PRPARGR, $pg = 36){
$BoxEC410C7HL = $this->boxEC4X0C7HL($PRPARGR);
$pg = "pg".$pg;
$Pg1 = $this->$pg($PRPARGR, 2);
$Pg1->move(0, 95); $BoxEC410C7HL->add($Pg1);
$Pg2 = $this->copyOffset($Pg1,-70, 0); $BoxEC410C7HL->add($Pg2);
$Pg3 = $this->copyOffset($Pg1, 70, 0); $BoxEC410C7HL->add($Pg3);
$Sizes = new Group(array("color"=>"black", "width"=>1), $BoxEC410C7HL->PRGR);
$LineSize1= new LineSize(array("x1"=>-120,"y1"=>-105,"x2"=>120,"y2"=>-105), $Sizes->PRGR); $Sizes->add($LineSize1);
$Line1 = new Line(array("x1"=>-120,"y1"=>-86,"x2"=>-120,"y2"=>-110), $Sizes->PRGR); $Sizes->add($Line1);
$Line11 = new Line(array("x1"=>120,"y1"=>-86,"x2"=>120,"y2"=>-110), $Sizes->PRGR); $Sizes->add($Line11);
$LineSize2= new LineSize(array("x1"=>135,"y1"=>-95,"x2"=>135,"y2"=>93+$Pg1->length), $Sizes->PRGR); $Sizes->add($LineSize2);
$Line2 = new Line(array("x1"=>111,"y1"=>-95,"x2"=>140,"y2"=>-95), $Sizes->PRGR); $Sizes->add($Line2);
$Line21 = new Line(array("x1"=>70,"y1"=>93+$Pg1->length,"x2"=>140,"y2"=>93+$Pg1->length), $Sizes->PRGR); $Sizes->add($Line21);
$BoxEC410C7HL->add($Sizes);
$this->dx = 120;
return $BoxEC410C7HL;
}	

//СТУПЕНЧАТЫЙ УПЛОТНИТЕЛЬ фронтальная проекция
public function step_sealF($PRPARGR){
$Step_sealF = new Group(array(), $PRPARGR);

$Step1 = new RectArc(array("x1"=>-7,"y1"=>-10,"x2"=>7,"y2"=>-8,"rad"=>0.5), $Step_sealF->PRGR); $Step_sealF->add($Step1);
$Step2 = new RectArc(array("x1"=>-9,"y1"=>-8,"x2"=>9,"y2"=>-6,"rad"=>0.5), $Step_sealF->PRGR); $Step_sealF->add($Step2);
$Step3 = new RectArc(array("x1"=>-12,"y1"=>-6,"x2"=>12,"y2"=>-4,"rad"=>0.5), $Step_sealF->PRGR); $Step_sealF->add($Step3);
$Step4 = new RectArc(array("x1"=>-14,"y1"=>-4,"x2"=>14,"y2"=>-2,"rad"=>0.5), $Step_sealF->PRGR); $Step_sealF->add($Step4);
$Step5 = new RectArc(array("x1"=>-17.5,"y1"=>-2,"x2"=>17.5,"y2"=>0,"rad"=>0.5), $Step_sealF->PRGR); $Step_sealF->add($Step5);
$Line1 = new Line(array("type"=>"axis","x1"=>0,"y1"=>-12,"x2"=>0,"y2"=>2, "color"=>"red", "width"=>1), $Step_sealF->PRGR); $Step_sealF->add($Line1);
return $Step_sealF;
	}
//СТУПЕНЧАТЫЙ УПЛОТНИТЕЛЬ левая проекция
public function step_sealL($PRPARGR){
$Step_sealL = new Group(array(), $PRPARGR);//левая проекция

$Arc1 = new Arc(array("x"=>0,"y"=>0, "width"=>2, "d"=>14), $Step_sealL->PRGR); $Step_sealL->add($Arc1);
$Arc2 = new Arc(array("x"=>0,"y"=>0, "width"=>2, "d"=>18), $Step_sealL->PRGR); $Step_sealL->add($Arc2);
$Arc3 = new Arc(array("x"=>0,"y"=>0, "width"=>2, "d"=>24), $Step_sealL->PRGR); $Step_sealL->add($Arc3);
$Arc4 = new Arc(array("x"=>0,"y"=>0, "width"=>2, "d"=>28), $Step_sealL->PRGR); $Step_sealL->add($Arc4);
$Arc5 = new Arc(array("x"=>0,"y"=>0, "width"=>2, "d"=>37,"rr"=>0), $Step_sealL->PRGR); $Step_sealL->add($Arc5);
$line2 = new Line(array("type"=>"axis","x1"=>0,"y1"=>-21,"x2"=>0,"y2"=>21, "color"=>"red", "width"=>1), $Step_sealL->PRGR); $Step_sealL->add($line2);
$line3 = new Line(array("type"=>"axis","x1"=>-21,"y1"=>0,"x2"=>21,"y2"=>0, "color"=>"red", "width"=>1), $Step_sealL->PRGR); $Step_sealL->add($line3);
return $Step_sealL;
	}
//ШЛЯПКА  ВИНТА

public function cap_screws($PRPARGR){
$Cap_screws = new Group(array(), $PRPARGR);//левая проекция

$Arc1 = new Arc(array("x"=>0,"y"=>0, "width"=>2, "d"=>8), $Cap_screws->PRGR); $Cap_screws->add($Arc1);

$line1 = new Line(array("x1"=>-2.5,"y1"=>0,"x2"=>2.5,"y2"=>0, "width"=>2), $Cap_screws->PRGR); $Cap_screws->add($line1);
$line2 = new Line(array("x1"=>0,"y1"=>-2.5,"x2"=>0,"y2"=>2.5, "width"=>2), $Cap_screws->PRGR); $Cap_screws->add($line2);
return $Cap_screws;
	}	
//EC 400C4	фронтальная проекция
public function boxEC4X0C4F($PRPARGR){
$BoxEC4X0C4F = new Group(array(), $PRPARGR);//фронтальная проекция

$Line1 = new Line(array("x1"=>0,"y1"=>-50,"x2"=>0,"y2"=>50), $BoxEC4X0C4F->PRGR); 
$Line2 = new Line(array("x1"=>0,"y1"=>-50,"x2"=>7,"y2"=>-50), $BoxEC4X0C4F->PRGR);
$Line3 = new Line(array("x1"=>0,"y1"=>50,"x2"=>7,"y2"=>50), $BoxEC4X0C4F->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C4F->PRGR); $BoxEC4X0C4F->add($Arc1); $BoxEC4X0C4F->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C4F->PRGR); $BoxEC4X0C4F->add($Arc2); $BoxEC4X0C4F->add($Line2); $BoxEC4X0C4F->add($Line3);
$Line1 = new Line(array("x1"=>7,"y1"=>-53,"x2"=>7,"y2"=>53), $BoxEC4X0C4F->PRGR); 
$Line2 = new Line(array("x1"=>7,"y1"=>-53,"x2"=>14,"y2"=>-53), $BoxEC4X0C4F->PRGR); 
$Line3 = new Line(array("x1"=>7,"y1"=>53,"x2"=>14,"y2"=>53), $BoxEC4X0C4F->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C4F->PRGR); $BoxEC4X0C4F->add($Arc1); $BoxEC4X0C4F->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C4F->PRGR); $BoxEC4X0C4F->add($Arc2); $BoxEC4X0C4F->add($Line2); $BoxEC4X0C4F->add($Line3);
$Line1 = new Line(array("x1"=>14,"y1"=>-53,"x2"=>14,"y2"=>53), $BoxEC4X0C4F->PRGR); $BoxEC4X0C4F->add($Line1);
$Line1 = new Line(array("x1"=>55,"y1"=>-52,"x2"=>55,"y2"=>52), $BoxEC4X0C4F->PRGR); 
$Line2 = new Line(array("x1"=>14,"y1"=>-52,"x2"=>55,"y2"=>-52), $BoxEC4X0C4F->PRGR);
$Line3 = new Line(array("x1"=>14,"y1"=>52,"x2"=>55,"y2"=>52), $BoxEC4X0C4F->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C4F->PRGR); $BoxEC4X0C4F->add($Arc1); $BoxEC4X0C4F->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C4F->PRGR); $BoxEC4X0C4F->add($Arc2); $BoxEC4X0C4F->add($Line2); $BoxEC4X0C4F->add($Line3);
return $BoxEC4X0C4F;
	}
//EC 400C5V	фронтальная проекция
public function boxEC4X0C5VF($PRPARGR){
$BoxEC4X0C5VF = new Group(array(), $PRPARGR);//фронтальная проекция
$Line1 = new Line(array("x1"=>0,"y1"=>-76,"x2"=>0,"y2"=>76), $BoxEC4X0C5VF->PRGR); 
$Line2 = new Line(array("x1"=>0,"y1"=>-76,"x2"=>7,"y2"=>-76), $BoxEC4X0C5VF->PRGR);
$Line3 = new Line(array("x1"=>0,"y1"=>76,"x2"=>7,"y2"=>76), $BoxEC4X0C5VF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C5VF->PRGR); $BoxEC4X0C5VF->add($Arc1); $BoxEC4X0C5VF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C5VF->PRGR); $BoxEC4X0C5VF->add($Arc2); $BoxEC4X0C5VF->add($Line2); $BoxEC4X0C5VF->add($Line3);
$Line1 = new Line(array("x1"=>7,"y1"=>-80,"x2"=>7,"y2"=>80), $BoxEC4X0C5VF->PRGR); 
$Line2 = new Line(array("x1"=>7,"y1"=>-80,"x2"=>14,"y2"=>-80), $BoxEC4X0C5VF->PRGR); 
$Line3 = new Line(array("x1"=>7,"y1"=>80,"x2"=>14,"y2"=>80), $BoxEC4X0C5VF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C5VF->PRGR); $BoxEC4X0C5VF->add($Arc1); $BoxEC4X0C5VF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C5VF->PRGR); $BoxEC4X0C5VF->add($Arc2); $BoxEC4X0C5VF->add($Line2); $BoxEC4X0C5VF->add($Line3);
$Line1 = new Line(array("x1"=>14,"y1"=>-80,"x2"=>14,"y2"=>80), $BoxEC4X0C5VF->PRGR); $BoxEC4X0C5VF->add($Line1);
$Line1 = new Line(array("x1"=>75,"y1"=>-78,"x2"=>75,"y2"=>78), $BoxEC4X0C5VF->PRGR); 
$Line2 = new Line(array("x1"=>14,"y1"=>-78,"x2"=>75,"y2"=>-78), $BoxEC4X0C5VF->PRGR);
$Line3 = new Line(array("x1"=>14,"y1"=>78,"x2"=>75,"y2"=>78), $BoxEC4X0C5VF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C5VF->PRGR); $BoxEC4X0C5VF->add($Arc1); $BoxEC4X0C5VF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C5VF->PRGR); $BoxEC4X0C5VF->add($Arc2); $BoxEC4X0C5VF->add($Line2); $BoxEC4X0C5VF->add($Line3);
return $BoxEC4X0C5VF;
	}

	
//EC 400C6V	фронтальная проекция
public function boxEC4X0C6VF($PRPARGR){
$BoxEC4X0C6VF = new Group(array(), $PRPARGR);//фронтальная проекция

$Line1 = new Line(array("x1"=>0,"y1"=>-91,"x2"=>0,"y2"=>91), $BoxEC4X0C6VF->PRGR); 
$Line2 = new Line(array("x1"=>0,"y1"=>-91,"x2"=>7,"y2"=>-91), $BoxEC4X0C6VF->PRGR);
$Line3 = new Line(array("x1"=>0,"y1"=>91,"x2"=>7,"y2"=>91), $BoxEC4X0C6VF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C6VF->PRGR); $BoxEC4X0C6VF->add($Arc1); $BoxEC4X0C6VF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C6VF->PRGR); $BoxEC4X0C6VF->add($Arc2); $BoxEC4X0C6VF->add($Line2); $BoxEC4X0C6VF->add($Line3);
$Line1 = new Line(array("x1"=>7,"y1"=>-95,"x2"=>7,"y2"=>95), $BoxEC4X0C6VF->PRGR); 
$Line2 = new Line(array("x1"=>7,"y1"=>-95,"x2"=>14,"y2"=>-95), $BoxEC4X0C6VF->PRGR); 
$Line3 = new Line(array("x1"=>7,"y1"=>95,"x2"=>14,"y2"=>95), $BoxEC4X0C6VF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C6VF->PRGR); $BoxEC4X0C6VF->add($Arc1); $BoxEC4X0C6VF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C6VF->PRGR); $BoxEC4X0C6VF->add($Arc2); $BoxEC4X0C6VF->add($Line2); $BoxEC4X0C6VF->add($Line3);
$Line1 = new Line(array("x1"=>14,"y1"=>-95,"x2"=>14,"y2"=>95), $BoxEC4X0C6VF->PRGR); $BoxEC4X0C6VF->add($Line1);
$Line1 = new Line(array("x1"=>75,"y1"=>-93,"x2"=>75,"y2"=>93), $BoxEC4X0C6VF->PRGR); 
$Line2 = new Line(array("x1"=>14,"y1"=>-93,"x2"=>75,"y2"=>-93), $BoxEC4X0C6VF->PRGR);
$Line3 = new Line(array("x1"=>14,"y1"=>93,"x2"=>75,"y2"=>93), $BoxEC4X0C6VF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C6VF->PRGR); $BoxEC4X0C6VF->add($Arc1); $BoxEC4X0C6VF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C6VF->PRGR); $BoxEC4X0C6VF->add($Arc2); $BoxEC4X0C6VF->add($Line2); $BoxEC4X0C6VF->add($Line3);

return $BoxEC4X0C6VF;
	}
	
//EC 400C7V	фронтальная проекция
public function boxEC4X0C7VF($PRPARGR){
$BoxEC4X0C7VF = new Group(array(), $PRPARGR);//фронтальная проекция

$Line1 = new Line(array("x1"=>0,"y1"=>-116,"x2"=>0,"y2"=>116), $BoxEC4X0C7VF->PRGR); 
$Line2 = new Line(array("x1"=>0,"y1"=>-116,"x2"=>7,"y2"=>-116), $BoxEC4X0C7VF->PRGR);
$Line3 = new Line(array("x1"=>0,"y1"=>116,"x2"=>7,"y2"=>116), $BoxEC4X0C7VF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C7VF->PRGR); $BoxEC4X0C7VF->add($Arc1); $BoxEC4X0C7VF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C7VF->PRGR); $BoxEC4X0C7VF->add($Arc2); $BoxEC4X0C7VF->add($Line2); $BoxEC4X0C7VF->add($Line3);
$Line1 = new Line(array("x1"=>7,"y1"=>-120,"x2"=>7,"y2"=>120), $BoxEC4X0C7VF->PRGR); 
$Line2 = new Line(array("x1"=>7,"y1"=>-120,"x2"=>14,"y2"=>-120), $BoxEC4X0C7VF->PRGR); 
$Line3 = new Line(array("x1"=>7,"y1"=>120,"x2"=>14,"y2"=>120), $BoxEC4X0C7VF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C7VF->PRGR); $BoxEC4X0C7VF->add($Arc1); $BoxEC4X0C7VF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C7VF->PRGR); $BoxEC4X0C7VF->add($Arc2); $BoxEC4X0C7VF->add($Line2); $BoxEC4X0C7VF->add($Line3);
$Line1 = new Line(array("x1"=>14,"y1"=>-120,"x2"=>14,"y2"=>120), $BoxEC4X0C7VF->PRGR); $BoxEC4X0C7VF->add($Line1);
$Line1 = new Line(array("x1"=>95,"y1"=>-118,"x2"=>95,"y2"=>118), $BoxEC4X0C7VF->PRGR); 
$Line2 = new Line(array("x1"=>14,"y1"=>-118,"x2"=>95,"y2"=>-118), $BoxEC4X0C7VF->PRGR);
$Line3 = new Line(array("x1"=>14,"y1"=>118,"x2"=>95,"y2"=>118), $BoxEC4X0C7VF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C7VF->PRGR); $BoxEC4X0C7VF->add($Arc1); $BoxEC4X0C7VF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C7VF->PRGR); $BoxEC4X0C7VF->add($Arc2); $BoxEC4X0C7VF->add($Line2); $BoxEC4X0C7VF->add($Line3);
return $BoxEC4X0C7VF;
	}	

	
	
//EC 400C5H	фронтальная проекция
public function boxEC4X0C5HF($PRPARGR){
$BoxEC4X0C5HF = new Group(array(), $PRPARGR);//фронтальная проекция

$Line1 = new Line(array("x1"=>0,"y1"=>-56,"x2"=>0,"y2"=>56), $BoxEC4X0C5HF->PRGR); 
$Line2 = new Line(array("x1"=>0,"y1"=>-56,"x2"=>7,"y2"=>-56), $BoxEC4X0C5HF->PRGR);
$Line3 = new Line(array("x1"=>0,"y1"=>56,"x2"=>7,"y2"=>56), $BoxEC4X0C5HF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C5HF->PRGR); $BoxEC4X0C5HF->add($Arc1); $BoxEC4X0C5HF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C5HF->PRGR); $BoxEC4X0C5HF->add($Arc2); $BoxEC4X0C5HF->add($Line2); $BoxEC4X0C5HF->add($Line3);
$Line1 = new Line(array("x1"=>7,"y1"=>-60,"x2"=>7,"y2"=>60), $BoxEC4X0C5HF->PRGR); 
$Line2 = new Line(array("x1"=>7,"y1"=>-60,"x2"=>14,"y2"=>-60), $BoxEC4X0C5HF->PRGR); 
$Line3 = new Line(array("x1"=>7,"y1"=>60,"x2"=>14,"y2"=>60), $BoxEC4X0C5HF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C5HF->PRGR); $BoxEC4X0C5HF->add($Arc1); $BoxEC4X0C5HF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C5HF->PRGR); $BoxEC4X0C5HF->add($Arc2); $BoxEC4X0C5HF->add($Line2); $BoxEC4X0C5HF->add($Line3);
$Line1 = new Line(array("x1"=>14,"y1"=>-60,"x2"=>14,"y2"=>60), $BoxEC4X0C5HF->PRGR); $BoxEC4X0C5HF->add($Line1);
$Line1 = new Line(array("x1"=>75,"y1"=>-58,"x2"=>75,"y2"=>58), $BoxEC4X0C5HF->PRGR); 
$Line2 = new Line(array("x1"=>14,"y1"=>-58,"x2"=>75,"y2"=>-58), $BoxEC4X0C5HF->PRGR);
$Line3 = new Line(array("x1"=>14,"y1"=>58,"x2"=>75,"y2"=>58), $BoxEC4X0C5HF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C5HF->PRGR); $BoxEC4X0C5HF->add($Arc1); $BoxEC4X0C5HF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C5HF->PRGR); $BoxEC4X0C5HF->add($Arc2); $BoxEC4X0C5HF->add($Line2); $BoxEC4X0C5HF->add($Line3);
return $BoxEC4X0C5HF;
	}	
//EC 400C6H	фронтальная проекция
public function boxEC4X0C6HF($PRPARGR){
$BoxEC4X0C6HF = new Group(array(), $PRPARGR);//фронтальная проекция

$Line1 = new Line(array("x1"=>0,"y1"=>-66,"x2"=>0,"y2"=>66), $BoxEC4X0C6HF->PRGR); 
$Line2 = new Line(array("x1"=>0,"y1"=>-66,"x2"=>7,"y2"=>-66), $BoxEC4X0C6HF->PRGR);
$Line3 = new Line(array("x1"=>0,"y1"=>66,"x2"=>7,"y2"=>66), $BoxEC4X0C6HF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C6HF->PRGR); $BoxEC4X0C6HF->add($Arc1); $BoxEC4X0C6HF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C6HF->PRGR); $BoxEC4X0C6HF->add($Arc2); $BoxEC4X0C6HF->add($Line2); $BoxEC4X0C6HF->add($Line3);
$Line1 = new Line(array("x1"=>7,"y1"=>-70,"x2"=>7,"y2"=>70), $BoxEC4X0C6HF->PRGR); 
$Line2 = new Line(array("x1"=>7,"y1"=>-70,"x2"=>14,"y2"=>-70), $BoxEC4X0C6HF->PRGR); 
$Line3 = new Line(array("x1"=>7,"y1"=>70,"x2"=>14,"y2"=>70), $BoxEC4X0C6HF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C6HF->PRGR); $BoxEC4X0C6HF->add($Arc1); $BoxEC4X0C6HF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C6HF->PRGR); $BoxEC4X0C6HF->add($Arc2); $BoxEC4X0C6HF->add($Line2); $BoxEC4X0C6HF->add($Line3);
$Line1 = new Line(array("x1"=>14,"y1"=>-70,"x2"=>14,"y2"=>70), $BoxEC4X0C6HF->PRGR); $BoxEC4X0C6HF->add($Line1);
$Line1 = new Line(array("x1"=>75,"y1"=>-68,"x2"=>75,"y2"=>68), $BoxEC4X0C6HF->PRGR); 
$Line2 = new Line(array("x1"=>14,"y1"=>-68,"x2"=>75,"y2"=>-68), $BoxEC4X0C6HF->PRGR);
$Line3 = new Line(array("x1"=>14,"y1"=>68,"x2"=>75,"y2"=>68), $BoxEC4X0C6HF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C6HF->PRGR); $BoxEC4X0C6HF->add($Arc1); $BoxEC4X0C6HF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C6HF->PRGR); $BoxEC4X0C6HF->add($Arc2); $BoxEC4X0C6HF->add($Line2); $BoxEC4X0C6HF->add($Line3);

return $BoxEC4X0C6HF;
	}
//EC 400C7H	фронтальная проекция
public function boxEC4X0C7HF($PRPARGR){
$BoxEC4X0C7HF = new Group(array(), $PRPARGR);//фронтальная проекция

$Line1 = new Line(array("x1"=>0,"y1"=>-91,"x2"=>0,"y2"=>91), $BoxEC4X0C7HF->PRGR); 
$Line2 = new Line(array("x1"=>0,"y1"=>-91,"x2"=>7,"y2"=>-91), $BoxEC4X0C7HF->PRGR);
$Line3 = new Line(array("x1"=>0,"y1"=>91,"x2"=>7,"y2"=>91), $BoxEC4X0C7HF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C7HF->PRGR); $BoxEC4X0C7HF->add($Arc1); $BoxEC4X0C7HF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C7HF->PRGR); $BoxEC4X0C7HF->add($Arc2); $BoxEC4X0C7HF->add($Line2); $BoxEC4X0C7HF->add($Line3);
$Line1 = new Line(array("x1"=>7,"y1"=>-95,"x2"=>7,"y2"=>95), $BoxEC4X0C7HF->PRGR); 
$Line2 = new Line(array("x1"=>7,"y1"=>-95,"x2"=>14,"y2"=>-95), $BoxEC4X0C7HF->PRGR); 
$Line3 = new Line(array("x1"=>7,"y1"=>94,"x2"=>14,"y2"=>95), $BoxEC4X0C7HF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C7HF->PRGR); $BoxEC4X0C7HF->add($Arc1); $BoxEC4X0C7HF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C7HF->PRGR); $BoxEC4X0C7HF->add($Arc2); $BoxEC4X0C7HF->add($Line2); $BoxEC4X0C7HF->add($Line3);
$Line1 = new Line(array("x1"=>14,"y1"=>-95,"x2"=>14,"y2"=>95), $BoxEC4X0C7HF->PRGR); $BoxEC4X0C7HF->add($Line1);
$Line1 = new Line(array("x1"=>95,"y1"=>-93,"x2"=>95,"y2"=>93), $BoxEC4X0C7HF->PRGR); 
$Line2 = new Line(array("x1"=>14,"y1"=>-93,"x2"=>95,"y2"=>-93), $BoxEC4X0C7HF->PRGR);
$Line3 = new Line(array("x1"=>14,"y1"=>93,"x2"=>95,"y2"=>93), $BoxEC4X0C7HF->PRGR);
$Arc1 = $Line1->rounding($Line1, $Line2, 2, $BoxEC4X0C7HF->PRGR); $BoxEC4X0C7HF->add($Arc1); $BoxEC4X0C7HF->add($Line1);
$Arc2 = $Line1->rounding($Line1, $Line3, 2, $BoxEC4X0C7HF->PRGR); $BoxEC4X0C7HF->add($Arc2); $BoxEC4X0C7HF->add($Line2); $BoxEC4X0C7HF->add($Line3);
return $BoxEC4X0C7HF;
	}
	
	
//EC 400C4	левая проекция
public function boxEC4X0C4L($PRPARGR){
$BoxEC4X0C4L = new Group(array(), $PRPARGR);//фронтальная проекция

$RectArc1 = new RectArc(array("x1"=>-54,"y1"=>-54,"x2"=>54,"y2"=>54,"rad"=>9), $BoxEC4X0C4L->PRGR); $BoxEC4X0C4L->add($RectArc1);
$RectArc2 = new RectArc(array("x1"=>-50,"y1"=>-50,"x2"=>50,"y2"=>50,"rad"=>5), $BoxEC4X0C4L->PRGR); $BoxEC4X0C4L->add($RectArc2);

$Cap_screws1 = $this->cap_screws($BoxEC4X0C4L->PRGR);
$Cap_screws2= $this->copyOffset($Cap_screws1, -44, -44); $BoxEC4X0C4L->add($Cap_screws2);
$Cap_screws3= $this->copyOffset($Cap_screws1, 44, -44); $BoxEC4X0C4L->add($Cap_screws3);
$Cap_screws4= $this->copyOffset($Cap_screws1, -44, 44); $BoxEC4X0C4L->add($Cap_screws4);
$Cap_screws1->move(44, 44); $BoxEC4X0C4L->add($Cap_screws1);


return $BoxEC4X0C4L;
	}
//EC 400C5V	левая проекция
public function boxEC4X0C5VL($PRPARGR){
$BoxEC4X0C5VL = new Group(array(), $PRPARGR);//фронтальная проекция

$RectArc1 = new RectArc(array("x1"=>-60,"y1"=>-80,"x2"=>60,"y2"=>80,"rad"=>9), $BoxEC4X0C5VL->PRGR); $BoxEC4X0C5VL->add($RectArc1);
$RectArc2 = new RectArc(array("x1"=>-56,"y1"=>-76,"x2"=>56,"y2"=>76,"rad"=>5), $BoxEC4X0C5VL->PRGR); $BoxEC4X0C5VL->add($RectArc2);

$Cap_screws1 = $this->cap_screws($BoxEC4X0C5VL->PRGR);
$Cap_screws2= $this->copyOffset($Cap_screws1, -50, -70); $BoxEC4X0C5VL->add($Cap_screws2);
$Cap_screws3= $this->copyOffset($Cap_screws1, 50, -70); $BoxEC4X0C5VL->add($Cap_screws3);
$Cap_screws3= $this->copyOffset($Cap_screws1, -50, 70); $BoxEC4X0C5VL->add($Cap_screws3);
$Cap_screws1->move(50, 70); $BoxEC4X0C5VL->add($Cap_screws1);


return $BoxEC4X0C5VL;
	}
//EC 400C5H	левая проекция
public function boxEC4X0C5HL($PRPARGR){
$BoxEC4X0C5HL = $this->boxEC4X0C5VL($PRPARGR);//фронтальная проекция
$BoxEC4X0C5HL->rotate(0,0,90);

return $BoxEC4X0C5HL;
	}
//EC 400C6V	левая проекция
public function boxEC4X0C6VL($PRPARGR){
$BoxEC4X0C6VL = new Group(array(), $PRPARGR);//фронтальная проекция

$RectArc1 = new RectArc(array("x1"=>-70,"y1"=>-95,"x2"=>70,"y2"=>95,"rad"=>9), $BoxEC4X0C6VL->PRGR); $BoxEC4X0C6VL->add($RectArc1);
$RectArc2 = new RectArc(array("x1"=>-66,"y1"=>-91,"x2"=>66,"y2"=>91,"rad"=>5), $BoxEC4X0C6VL->PRGR); $BoxEC4X0C6VL->add($RectArc2);

$Cap_screws1 = $this->cap_screws($BoxEC4X0C6VL->PRGR);
$Cap_screws2= $this->copyOffset($Cap_screws1, -60, -85); $BoxEC4X0C6VL->add($Cap_screws2);
$Cap_screws3= $this->copyOffset($Cap_screws1, 60, -85); $BoxEC4X0C6VL->add($Cap_screws3);
$Cap_screws3= $this->copyOffset($Cap_screws1, -60, 85); $BoxEC4X0C6VL->add($Cap_screws3);
$Cap_screws1->move(60, 85); $BoxEC4X0C6VL->add($Cap_screws1);
return $BoxEC4X0C6VL;
	}
	
//EC 400C6H	левая проекция
public function boxEC4X0C6HL($PRPARGR){
$BoxEC4X0C6HL = $this->boxEC4X0C6VL($PRPARGR);//фронтальная проекция
$BoxEC4X0C6HL->rotate(0,0,90);

return $BoxEC4X0C6HL;
	}

//EC 400C7V	левая проекция
public function boxEC4X0C7VL($PRPARGR){
$BoxEC4X0C7VL = new Group(array(), $PRPARGR);//фронтальная проекция

$RectArc1 = new RectArc(array("x1"=>-95,"y1"=>-120,"x2"=>95,"y2"=>120,"rad"=>9), $BoxEC4X0C7VL->PRGR); $BoxEC4X0C7VL->add($RectArc1);
$RectArc2 = new RectArc(array("x1"=>-91,"y1"=>-116,"x2"=>91,"y2"=>116,"rad"=>5), $BoxEC4X0C7VL->PRGR); $BoxEC4X0C7VL->add($RectArc2);

$Cap_screws1 = $this->cap_screws($BoxEC4X0C7VL->PRGR);
$Cap_screws2= $this->copyOffset($Cap_screws1, -85, -110); $BoxEC4X0C7VL->add($Cap_screws2);
$Cap_screws3= $this->copyOffset($Cap_screws1, 85, -110); $BoxEC4X0C7VL->add($Cap_screws3);
$Cap_screws3= $this->copyOffset($Cap_screws1, -85, 110); $BoxEC4X0C7VL->add($Cap_screws3);
$Cap_screws1->move(85, 110); $BoxEC4X0C7VL->add($Cap_screws1);
return $BoxEC4X0C7VL;
}
//EC 400C7H	левая проекция
public function boxEC4X0C7HL($PRPARGR){
$BoxEC4X0C7HL = $this->boxEC4X0C7VL($PRPARGR);//фронтальная проекция
$BoxEC4X0C7HL->rotate(0,0,90);

return $BoxEC4X0C7HL;
	}

	
//PG9	
public function pg9($PRPARGR, $y=0){
$Pg9 = new Group(array(), $PRPARGR);
$rect1 = new Rect(array("x1"=>-10.5,"y1"=>0,"x2"=>10.5,"y2"=>5-$y), $Pg9->PRGR);$Pg9->add($rect1);
$rect2 = new Rect(array("x1"=>-10.5,"y1"=>10-$y,"x2"=>10.5,"y2"=>18-$y), $Pg9->PRGR);$Pg9->add($rect2);
$Line = new Line(array("x1"=>-5,"y1"=>0,"x2"=>-5,"y2"=>5-$y), $Pg9->PRGR);$Pg9->add($Line);
$Line = new Line(array("x1"=>5,"y1"=>0,"x2"=>5,"y2"=>5-$y), $Pg9->PRGR);$Pg9->add($Line);
$Line = new Line(array("x1"=>-5,"y1"=>10-$y,"x2"=>-5,"y2"=>18-$y), $Pg9->PRGR);$Pg9->add($Line);
$Line = new Line(array("x1"=>5,"y1"=>10-$y,"x2"=>5,"y2"=>18-$y), $Pg9->PRGR);$Pg9->add($Line);
$Line = new Line(array("x1"=>-7.5,"y1"=>5-$y,"x2"=>-7.5,"y2"=>10-$y), $Pg9->PRGR);$Pg9->add($Line);
$Line = new Line(array("x1"=>7.5,"y1"=>5-$y,"x2"=>7.5,"y2"=>10-$y), $Pg9->PRGR);$Pg9->add($Line);
$Line1 = new Line(array("x1"=>-8,"y1"=>18-$y,"x2"=>-8,"y2"=>25-$y), $Pg9->PRGR);$Pg9->add($Line1);
$Line2 = new Line(array("x1"=>8,"y1"=>18-$y,"x2"=>8,"y2"=>25-$y), $Pg9->PRGR);$Pg9->add($Line2);
$Line3 = new Line(array("x1"=>-8,"y1"=>25-$y,"x2"=>8,"y2"=>25-$y), $Pg9->PRGR);$Pg9->add($Line3);
$Arc1 = $Line1->rounding($Line1, $Line3, 3, $Pg9->PRGR); $Pg9->add($Arc1);
$Arc2 = $Line1->rounding($Line2, $Line3, 3, $Pg9->PRGR); $Pg9->add($Arc2);
$Pg9->add(new TextDraw(array("size"=>3.5,"x"=>-4,"y"=>23-$y,"text"=>"PG9"), $Pg9->PRGR));
$Pg9->length = 25;//длина выступаюжей части сальника
return $Pg9;
	}
//PG11	
public function pg11($PRPARGR, $y=0){
$Pg11 = new Group(array(), $PRPARGR);
$rect1 = new Rect(array("x1"=>-12,"y1"=>0,"x2"=>12,"y2"=>5-$y), $Pg11->PRGR);$Pg11->add($rect1);
$rect2 = new Rect(array("x1"=>-12,"y1"=>10-$y,"x2"=>12,"y2"=>18-$y), $Pg11->PRGR);$Pg11->add($rect2);
$Line = new Line(array("x1"=>-6,"y1"=>0,"x2"=>-6,"y2"=>5-$y), $Pg11->PRGR);$Pg11->add($Line);
$Line = new Line(array("x1"=>6,"y1"=>0,"x2"=>6,"y2"=>5-$y), $Pg11->PRGR);$Pg11->add($Line);
$Line = new Line(array("x1"=>-6,"y1"=>10-$y,"x2"=>-6,"y2"=>18-$y), $Pg11->PRGR);$Pg11->add($Line);
$Line = new Line(array("x1"=>6,"y1"=>10-$y,"x2"=>6,"y2"=>18-$y), $Pg11->PRGR);$Pg11->add($Line);
$Line = new Line(array("x1"=>-9,"y1"=>5-$y,"x2"=>-9,"y2"=>10-$y), $Pg11->PRGR);$Pg11->add($Line);
$Line = new Line(array("x1"=>9,"y1"=>5-$y,"x2"=>9,"y2"=>10-$y), $Pg11->PRGR);$Pg11->add($Line);
$Line1 = new Line(array("x1"=>-10.5,"y1"=>18-$y,"x2"=>-10.5,"y2"=>28-$y), $Pg11->PRGR);$Pg11->add($Line1);
$Line2 = new Line(array("x1"=>10.5,"y1"=>18-$y,"x2"=>10.5,"y2"=>28-$y), $Pg11->PRGR);$Pg11->add($Line2);
$Line3 = new Line(array("x1"=>-10.5,"y1"=>28-$y,"x2"=>10.5,"y2"=>28-$y), $Pg11->PRGR);$Pg11->add($Line3);
$Arc1 = $Line1->rounding($Line1, $Line3, 4, $Pg11->PRGR); $Pg11->add($Arc1);
$Arc2 = $Line1->rounding($Line2, $Line3, 4, $Pg11->PRGR); $Pg11->add($Arc2);
$Pg11->add(new TextDraw(array("size"=>4,"x"=>-6,"y"=>25-$y,"text"=>"PG11"), $Pg11->PRGR));
$Pg11->length = 28;//длина выступаюжей части сальника
return $Pg11;
	}	
//PG16	
public function pg16($PRPARGR, $y=0){
$Pg16 = new Group(array(), $PRPARGR);
$rect1 = new Rect(array("x1"=>-15,"y1"=>0,"x2"=>15,"y2"=>5-$y), $Pg16->PRGR);$Pg16->add($rect1);
$rect2 = new Rect(array("x1"=>-15,"y1"=>10-$y,"x2"=>15,"y2"=>18-$y), $Pg16->PRGR);$Pg16->add($rect2);
$Line = new Line(array("x1"=>-7.5,"y1"=>0,"x2"=>-7.5,"y2"=>5-$y), $Pg16->PRGR);$Pg16->add($Line);
$Line = new Line(array("x1"=>7.5,"y1"=>0,"x2"=>7.5,"y2"=>5-$y), $Pg16->PRGR);$Pg16->add($Line);
$Line = new Line(array("x1"=>-7.5,"y1"=>10-$y,"x2"=>-7.5,"y2"=>18-$y), $Pg16->PRGR);$Pg16->add($Line);
$Line = new Line(array("x1"=>7.5,"y1"=>10-$y,"x2"=>7.5,"y2"=>18-$y), $Pg16->PRGR);$Pg16->add($Line);
$Line = new Line(array("x1"=>-11,"y1"=>5-$y,"x2"=>-11,"y2"=>10-$y), $Pg16->PRGR);$Pg16->add($Line);
$Line = new Line(array("x1"=>11,"y1"=>5-$y,"x2"=>11,"y2"=>10-$y), $Pg16->PRGR);$Pg16->add($Line);
$Line1 = new Line(array("x1"=>-13,"y1"=>18-$y,"x2"=>-13,"y2"=>30-$y), $Pg16->PRGR);$Pg16->add($Line1);
$Line2 = new Line(array("x1"=>13,"y1"=>18-$y,"x2"=>13,"y2"=>30-$y), $Pg16->PRGR);$Pg16->add($Line2);
$Line3 = new Line(array("x1"=>-13,"y1"=>30-$y,"x2"=>13,"y2"=>30-$y), $Pg16->PRGR);$Pg16->add($Line3);
$Arc1 = $Line1->rounding($Line1, $Line3, 5, $Pg16->PRGR); $Pg16->add($Arc1);
$Arc2 = $Line1->rounding($Line2, $Line3, 5, $Pg16->PRGR); $Pg16->add($Arc2);
$Pg16->add(new TextDraw(array("size"=>4.5,"x"=>-7,"y"=>26-$y,"text"=>"PG16"), $Pg16->PRGR));
$Pg16->length = 30;//длина выступаюжей части сальника
return $Pg16;
	}
//PG21	
public function pg21($PRPARGR, $y=0){
$Pg21 = new Group(array(), $PRPARGR);
$rect1 = new Rect(array("x1"=>-18,"y1"=>0,"x2"=>18,"y2"=>5-$y), $Pg21->PRGR);$Pg21->add($rect1);
$rect2 = new Rect(array("x1"=>-18,"y1"=>9-$y,"x2"=>18,"y2"=>18-$y), $Pg21->PRGR);$Pg21->add($rect2);
$Line = new Line(array("x1"=>-9,"y1"=>0,"x2"=>-9,"y2"=>5-$y), $Pg21->PRGR);$Pg21->add($Line);
$Line = new Line(array("x1"=>9,"y1"=>0,"x2"=>9,"y2"=>5-$y), $Pg21->PRGR);$Pg21->add($Line);
$Line = new Line(array("x1"=>-9,"y1"=>9-$y,"x2"=>-9,"y2"=>18-$y), $Pg21->PRGR);$Pg21->add($Line);
$Line = new Line(array("x1"=>9,"y1"=>9-$y,"x2"=>9,"y2"=>18-$y), $Pg21->PRGR);$Pg21->add($Line);
$Line = new Line(array("x1"=>-14,"y1"=>5-$y,"x2"=>-14,"y2"=>9-$y), $Pg21->PRGR);$Pg21->add($Line);
$Line = new Line(array("x1"=>14,"y1"=>5-$y,"x2"=>14,"y2"=>9-$y), $Pg21->PRGR);$Pg21->add($Line);
$Line1 = new Line(array("x1"=>-15.5,"y1"=>18-$y,"x2"=>-15.5,"y2"=>34-$y), $Pg21->PRGR);$Pg21->add($Line1);
$Line2 = new Line(array("x1"=>15.5,"y1"=>18-$y,"x2"=>15.5,"y2"=>34-$y), $Pg21->PRGR);$Pg21->add($Line2);
$Line3 = new Line(array("x1"=>-15.5,"y1"=>34-$y,"x2"=>15.5,"y2"=>34-$y), $Pg21->PRGR);$Pg21->add($Line3);
$Arc1 = $Line1->rounding($Line1, $Line3, 8, $Pg21->PRGR); $Pg21->add($Arc1);
$Arc2 = $Line1->rounding($Line2, $Line3, 8, $Pg21->PRGR); $Pg21->add($Arc2);
$Pg21->add(new TextDraw(array("size"=>5,"x"=>-8,"y"=>27-$y,"text"=>"PG21"), $Pg21->PRGR));
$Pg21->length = 34;//длина выступаюжей части сальника
return $Pg21;
	}
//PG29	
public function pg29($PRPARGR, $y=0){
$Pg29 = new Group(array(), $PRPARGR);
$rect1 = new Rect(array("x1"=>-24,"y1"=>0,"x2"=>24,"y2"=>6-$y), $Pg29->PRGR);$Pg29->add($rect1);
$rect2 = new Rect(array("x1"=>-24,"y1"=>12-$y,"x2"=>24,"y2"=>22-$y), $Pg29->PRGR);$Pg29->add($rect2);
$Line = new Line(array("x1"=>-12,"y1"=>0,"x2"=>-12,"y2"=>6-$y), $Pg29->PRGR);$Pg29->add($Line);
$Line = new Line(array("x1"=>12,"y1"=>0,"x2"=>12,"y2"=>6-$y), $Pg29->PRGR);$Pg29->add($Line);
$Line = new Line(array("x1"=>-12,"y1"=>12-$y,"x2"=>-12,"y2"=>22-$y), $Pg29->PRGR);$Pg29->add($Line);
$Line = new Line(array("x1"=>12,"y1"=>12-$y,"x2"=>12,"y2"=>22-$y), $Pg29->PRGR);$Pg29->add($Line);
$Line = new Line(array("x1"=>-19,"y1"=>6-$y,"x2"=>-19,"y2"=>12-$y), $Pg29->PRGR);$Pg29->add($Line);
$Line = new Line(array("x1"=>19,"y1"=>6-$y,"x2"=>19,"y2"=>12-$y), $Pg29->PRGR);$Pg29->add($Line);
$Line1 = new Line(array("x1"=>-21,"y1"=>22-$y,"x2"=>-21,"y2"=>42-$y), $Pg29->PRGR);$Pg29->add($Line1);
$Line2 = new Line(array("x1"=>21,"y1"=>22-$y,"x2"=>21,"y2"=>42-$y), $Pg29->PRGR);$Pg29->add($Line2);
$Line3 = new Line(array("x1"=>-21,"y1"=>42-$y,"x2"=>21,"y2"=>42-$y), $Pg29->PRGR);$Pg29->add($Line3);
$Arc1 = $Line1->rounding($Line1, $Line3, 8, $Pg29->PRGR); $Pg29->add($Arc1);
$Arc2 = $Line1->rounding($Line2, $Line3, 8, $Pg29->PRGR); $Pg29->add($Arc2);
$Pg29->add(new TextDraw(array("size"=>6,"x"=>-10,"y"=>33-$y,"text"=>"PG29"), $Pg29->PRGR));
$Pg29->length = 42;//длина выступаюжей части сальника
return $Pg29;
	}
//PG36	
public function pg36($PRPARGR, $y=0){
$Pg36 = new Group(array(), $PRPARGR);
$rect1 = new Rect(array("x1"=>-28.5,"y1"=>0,"x2"=>28.5,"y2"=>6-$y), $Pg36->PRGR);$Pg36->add($rect1);
$rect2 = new Rect(array("x1"=>-28.5,"y1"=>12-$y,"x2"=>28.5,"y2"=>28-$y), $Pg36->PRGR);$Pg36->add($rect2);
$Line = new Line(array("x1"=>-14.5,"y1"=>0,"x2"=>-14.5,"y2"=>6-$y), $Pg36->PRGR);$Pg36->add($Line);
$Line = new Line(array("x1"=>14.5,"y1"=>0,"x2"=>14.5,"y2"=>6-$y), $Pg36->PRGR);$Pg36->add($Line);
$Line = new Line(array("x1"=>-14.5,"y1"=>12-$y,"x2"=>-14.5,"y2"=>28-$y), $Pg36->PRGR);$Pg36->add($Line);
$Line = new Line(array("x1"=>14.5,"y1"=>12-$y,"x2"=>14.5,"y2"=>28-$y), $Pg36->PRGR);$Pg36->add($Line);
$Line = new Line(array("x1"=>-19,"y1"=>6-$y,"x2"=>-19,"y2"=>12-$y), $Pg36->PRGR);$Pg36->add($Line);
$Line = new Line(array("x1"=>19,"y1"=>6-$y,"x2"=>19,"y2"=>12-$y), $Pg36->PRGR);$Pg36->add($Line);
$Line1 = new Line(array("x1"=>-24.5,"y1"=>28-$y,"x2"=>-24.5,"y2"=>44-$y), $Pg36->PRGR);$Pg36->add($Line1);
$Line2 = new Line(array("x1"=>24.5,"y1"=>28-$y,"x2"=>24.5,"y2"=>44-$y), $Pg36->PRGR);$Pg36->add($Line2);
$Line3 = new Line(array("x1"=>-24.5,"y1"=>44-$y,"x2"=>24.5,"y2"=>44-$y), $Pg36->PRGR);$Pg36->add($Line3);
$Arc1 = $Line1->rounding($Line1, $Line3, 8, $Pg36->PRGR); $Pg36->add($Arc1);
$Arc2 = $Line1->rounding($Line2, $Line3, 8, $Pg36->PRGR); $Pg36->add($Arc2);
$Pg36->add(new TextDraw(array("size"=>7,"x"=>-12,"y"=>39-$y,"text"=>"PG36"), $Pg36->PRGR));
$Pg36->length = 44;//длина выступаюжей части сальника
return $Pg36;
	}		
}
?>