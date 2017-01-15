<?php
//КЛАСС ВЫЧЕРЧИВАНИЯ ПРЯМОУГОЛЬНИКА
class Rect extends Group {

public function __construct($PRGR,  $PRPARGR = array()){
parent::__construct($PRGR, $PRPARGR);
 $this->x1 = $PRGR["x1"];//горизонтальная координата одного угла прямоугольника
 $this->y1 = $PRGR["y1"];//вертикальная координата одного угла прямоугольника
 $this->x2 = $PRGR["x2"];//горизонтальная координата диагонального угла прямоугольника
 $this->y2 = $PRGR["y2"];//вертикальная координата диагонального угла прямоугольника
 $this->PRGR = array(
 "type"=>$this->PRGR["type"],
 "width"=>$this->PRGR["width"],
 "color"=>$this->PRGR["color"],
 "scale"=>$this->PRGR["scale"],
 "i"=>$this->PRGR["i"],
 "x0"=>$this->PRGR["x0"],
 "y0"=>$this->PRGR["y0"]
 );
if(!isset($this->PRGR["color"])) $this->PRGR["color"] = "black";
  $this->add(new Line(array("x1"=>$this->x1,"y1"=>$this->y1,"x2"=>$this->x2,"y2"=>$this->y1),  $this->PRGR));
  $this->add(new Line(array("x1"=>$this->x1,"y1"=>$this->y1,"x2"=>$this->x1,"y2"=>$this->y2),  $this->PRGR));
  $this->add(new Line(array("x1"=>$this->x2,"y1"=>$this->y1,"x2"=>$this->x2,"y2"=>$this->y2),  $this->PRGR));
  $this->add(new Line(array("x1"=>$this->x1,"y1"=>$this->y2,"x2"=>$this->x2,"y2"=>$this->y2),  $this->PRGR));
	}
}
?>