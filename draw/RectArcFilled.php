<?php
//КЛАСС ВЫЧЕРЧИВАНИЯ ЗАПОЛНЕННОГО ПРЯМОУГОЛЬНИКА СО СКРУГЛЕННЫМИ УГЛАМИ
class RectArcFilled extends Group {

public function __construct($PRGR, $PRPARGR = array()){
parent::__construct($PRGR, $PRPARGR);
$this->PRGR = array(
 "type"=>$this->PRGR["type"],
 "width"=>$this->PRGR["width"],
 "color"=>$this->PRGR["color"],
 "scale"=>$this->PRGR["scale"],
 "i"=>$this->PRGR["i"],
 "x0"=>$this->PRGR["x0"],
 "y0"=>$this->PRGR["y0"]
 );
 $this->x1 = min($PRGR["x1"],$PRGR["x2"]) ;//горизонтальная координата одного угла прямоугольника
 $this->y1 = min($PRGR["y1"],$PRGR["y2"]);//вертикальная координата одного угла прямоугольника
 $this->x2 = max($PRGR["x1"],$PRGR["x2"]);//горизонтальная координата диагонального угла прямоугольника
 $this->y2 = max($PRGR["y1"],$PRGR["y2"]);//вертикальная координата диагонального угла прямоугольника
 $this->rad = $PRGR["rad"];//радиус скругления

$this->add(new RectFilled(array("x1"=>$this->x1+$this->rad,"y1"=>$this->y1,"x2"=>$this->x2-$this->rad,"y2"=>$this->y2), $this->PRGR));
$this->add(new RectFilled(array("x1"=>$this->x1,"y1"=>$this->y1+$this->rad,"x2"=>$this->x2,"y2"=>$this->y2-$this->rad), $this->PRGR));
$this->add(new ArcFilled(array("x"=>$this->x1+$this->rad,"y"=>$this->y1+$this->rad,"angle1"=>-180,"angle2"=>-90, 
					"d"=>2*$this->rad), $this->PRGR));
$this->add(new ArcFilled(array("x"=>$this->x1+$this->rad,"y"=>$this->y2-$this->rad,"angle1"=>90,"angle2"=>180, 
					"d"=>2*$this->rad), $this->PRGR));
$this->add(new ArcFilled(array("x"=>$this->x2-$this->rad,"y"=>$this->y1+$this->rad,"angle1"=>-90,"angle2"=>0, 
					"d"=>2*$this->rad), $this->PRGR));
$this->add(new ArcFilled(array("x"=>$this->x2-$this->rad,"y"=>$this->y2-$this->rad,"angle1"=>0,"angle2"=>90, 
					"d"=>2*$this->rad), $this->PRGR));				
	}

}
?>