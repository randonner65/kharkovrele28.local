<?php
require_once "pages/static_pages/class_static_pages.php";//подключение класса Статические страницы
function __autoload($class_name) {
require_once "classes/".$class_name.".php"; 
}//автоподключение нужного класса
$staticpage = new  ClassStaticPages();//создание объекта класса ClassStaticPages
$staticpage->namepage = "contacts";
$feedback = new  Feedback();//создание объекта класса Faq
include('sendform/kcaptcha/kcaptcha.php');
session_start();
require_once("sendform/config.php");


if ($_POST['act']== "y")
{
if(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] ==  $_POST['keystring'])
{

if (isset($_POST['posName']) && $_POST['posName'] == "")
{
$statusError = "$errors_name";
}
elseif (isset($_POST['posEmail']) && $_POST['posEmail'] == "")
{
$statusError = "$errors_mailfrom";
}
elseif(isset($_POST['posEmail']) && !preg_match("/^([a-z,._,0-9])+@([a-z,._,0-9])+(.([a-z])+)+$/", $_POST['posEmail']))
{
$statusError = "$errors_incorrect";

unset($_POST['posEmail']);
}
elseif (isset($_POST['posRegard']) && $_POST['posRegard'] == "")
{
$statusError = "$errors_subject";
}
elseif (isset($_POST['posText']) && $_POST['posText'] == "")
{
$statusError = "$errors_message";
}

elseif (!empty($_POST))
{
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: $content  charset=$charset\r\n";
$headers .= "Date: ".date("Y-m-d (H:i:s)",time())."\r\n";
$headers .= "From: \"".$_POST['posName']."\" <".$_POST['posEmail'].">\r\n";
$headers .= "X-Mailer: My Send E-mail\r\n";

mail($mailto,$subject,$message,$headers);
$feedback->add($_POST['posName'], $_POST['posEmail'], $subject, $message);
unset($name, $posText, $mailto, $subject, $posRegard, $message);

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
 <script type="text/javascript" charset="utf-8" 
 src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=JDLBh8-thuIXro5nC2UVY1zJT1Tr060X&width=600&height=450"></script>  
<h3>Oбpaтнaя cвязь</h3>
<p id="emailSuccess">
<strong style="color:green;"><?php echo "$statusSuccess" ?></strong>
</p>
<p id="emailError"><strong style="color:red;"><?php echo "$statusError" ?></strong></p>

<div id="contactFormArea">
<form action="contact_page.php" method="post" id="cForm">
<input type="hidden" name="act" value="y" />
<fieldset>
<label for="posName">Ваше имя:</label>
<input class="text" type="text" size="50" name="posName" id="posName" />
<label for="posEmail">Ваш E-mail адрес:</label>
<input class="text" type="text" size="50" name="posEmail" id="posEmail" />
<label for="posRegard">Тема сообщения:</label>
<input class="text" type="text" size="50" name="posRegard" id="posRegard" />
<label for="posText">Сообщение:</label>
<textarea cols="100" rows="10" name="posText" id="posText"></textarea>
<label for="posCaptcha">Текст на изображении (цифры):</label></br><img src="sendform/kcaptcha?
<?php echo session_name()?>=<?php echo session_id()?>" border=0></br>
<input class="text" type="text" size="10" name="keystring" id="keystring" />
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