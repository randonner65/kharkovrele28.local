<?php
require_once "pages/static_pages/class_static_pages.php";//подключение класса Статические страницы
function __autoload($class_name) {
require_once "classes/".$class_name.".php"; 
}//автоподключение нужного класса
$staticpage = new  ClassStaticPages();//создание объекта класса ClassStaticPages
$staticpage->namepage = "faqs";
$faq = new  Faq();//создание объекта класса Faq

include('sendform/kcaptcha/kcaptcha.php');
session_start();
require_once("sendform/config.php");


if ($_POST['act']== "y")
{
if(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] ==  $_POST['keystring'])
{





if (isset($_POST['posText']) && $_POST['posText'] == "")
{
$statusError = "$errors_message";
}

else if (!empty($_POST))
{
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: $content  charset=$charset\r\n";
$headers .= "Date: ".date("Y-m-d (H:i:s)",time())."\r\n";
$headers .= "From: \"".$_POST['posName']."\" <".$_POST['posEmail'].">\r\n";
$headers .= "X-Mailer: My Send E-mail\r\n";

mail($mailto,$subject,$message,$headers);
$faq->add($message);
unset($name, $posText, $mailto, $subject, $message);

$statusSuccess = "$send";
}

}else{
$statusError = "$captcha_error";
unset($_SESSION['captcha_keystring']);
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php echo $staticpage->read("title");?></title>
<meta http-equiv="Content-type" content="text/html; charset=utf8"/>
<meta name="Keywords" content="<?php echo $staticpage->read("keywords");?>" />
<meta name="Description" content="<?php echo $staticpage->read("description");?>" />
<meta name="Author" content="Дмитрий Коржов" />
<link href="/images/icon1.ico" rel="shortcut icon" type="image/x-icon" />
<link  rel="stylesheet" type="text/css" href="/styles/styles.css" />
<link href="sendform/styling.css" rel="stylesheet" type="text/css" media='screen,projection' />
</head>
  
<body>
  <?php require_once "blocks/header.html";?>
 <div id = "content" >
  <?php require_once "blocks/left_panel.html";?>
   <div id = "main_content">
	<?php 	echo $staticpage->read("text");?>
	</br>
 <h3>Задайте свой вопрос</h3>
<p id="emailSuccess"><strong style="color:green;"><?php echo "$statusSuccess" ?></strong></p>
<p id="emailError"><strong style="color:red;"><?php echo "$statusError" ?></strong></p>
<div id="contactFormArea">
<form action="faqs.php" method="post" id="cForm">
<input type="hidden" name="act" value="y" />
<fieldset>
<textarea cols="120" rows="10" name="posText" id="posText"></textarea>
<label for="posCaptcha">Для отправки введите число:</label></br><img src="sendform/kcaptcha?
<?php echo session_name()?>=<?php echo session_id()?>" border=0></br>
<input class="text" type="text" size="15" name="keystring" id="keystring" />
<br><br><label><input class="submit" type="submit" name="selfCC" id="selfCC" value=" Отправить " /></label>
</fieldset>
<?php include 'sendform/kcaptcha/kcaptcha_rand.php' ?>
</form>
</div>	
	
 </div>
 </div>
 <div class="clear"></div>
 
<?php require_once "blocks/footer.html";?>
 
</body>
</html>