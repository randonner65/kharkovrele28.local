<?php
$a = "qwertyuioasdfghjkl";
$b = strpos($a, "fgh");
if($b) $a = substr($a, 0, $b);

echo $a;
?>