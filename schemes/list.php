<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Харьковреле - перечень переключателей</title>
<meta http-equiv="Content-type" content="text/html; charset=utf8"/>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<meta name="Author" content="Дмитрий Коржов" />
<link href="/images/icon1.ico" rel="shortcut icon" type="image/x-icon" />
<link  rel="stylesheet" type="text/css" href="/styles/styles.css" />
</head>
  
<body>
  <?php require_once "blocks/header.html";?>
 <div id = "content" >
  <?php require_once "blocks/left_panel.html";?>
   <div id = "main_content">
	<h1><?=$title?> </h1>
<center></center><br/><br/> 

<center>
<div > 
<table  width="auto" border="0" align="center" cellpadding="4" cellspacing="0" style="background:transparent;" >
	<tr>
<?php
for ($i=0; $i<count($SL); ){
	if(($i % 12 == 0) && ($i != 0)) echo "</tr><tr>";
		echo "<td><a href = '/scheme/".$SL[$i]. "' title = '".$title."'>".$SL[$i]."</a></td>";
	 $i++;
	}
 
?>	
	</tr>
 </table>
</div>

		
  </center>


 </div>
 <div class="clear"></div>
 
<?php require_once "blocks/footer.html";?>
 
</body>
</html>