<?php
if(trim($_GET["name_switcher"]) == "" ) header("Location: /switcher/passport.php");
else header("Location: /switcher/".$_GET["name_switcher"]);
?>
 
