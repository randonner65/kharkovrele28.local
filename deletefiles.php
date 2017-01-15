<?php
removeDirectory($_SERVER['DOCUMENT_ROOT']."/images/passport");

  function removeDirectory($dir) {
    if ($objs = glob($dir."/*")) {
       foreach($objs as $obj) {
         is_dir($obj) ? removeDirectory($obj) : unlink($obj);
       }
    }
    //rmdir($dir);
  }


?>