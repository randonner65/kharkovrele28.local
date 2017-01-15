<?phpfunction __autoload($class_name) {require_once "../../classes/".$class_name.".php"; }//автоподключение нужного класса$order = new  Orders();//создание объекта класса Orders$orderswitcher = new OrderSwitchers();//создание объекта класса OrderSwitchers?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>  <title>Харьковреле - конструктор переключателя</title><meta http-equiv="Content-type" content="text/html; charset=utf8"/><meta name="Keywords" content="Харьковреле, sez krompachy, переключатель, конструктор переключателя, разработка переключателя, подбор переключателя, выбор переключателя" /><meta name="Description" content="Харьковреле, sez krompachy, переключатель, конструктор переключателя, разработка переключателя, подбор переключателя, выбор переключателя" /><meta name="Author" content="Дмитрий Коржов" /><link href="/images/icon1.ico" rel="shortcut icon" type="image/x-icon" /><link  rel="stylesheet" type="text/css" href="/styles/styles.css" /></head>  <body>  <?php require_once "../../blocks/header.html";?> <div id = "content" >  <?php require_once "../../blocks/left_panel.html";?>   <div id = "main_content">	<h1>Конструктор переключателя</h1>	<h2>Результат работы конструктора</h2><center><h3>Разработанный Вами переключатель</h3><?php$nameswitcher = "S".$switch->read("current")."J";//наименование переключателяif($switch->read("handle") != "key") {//если не ключ 	if($switch->read("moment") == 1) $nameswitcher.="V";//добавление самовозврата$fix = 	$switch->read("fix");//вариант крепленияif($fix == "_") $fix = "";//удаление _ для варианта крепления на переднюю панель или дверь$nameswitcher .= $fix;//добавление варианта крепленияif($switch->read("handle") == "ur" || $switch->read("handle") == "ub" ) $nameswitcher .= "U";//если ручка U elseif($switch->read("board") == 1) $nameswitcher .= "D";//добавление табличкиif($switch->read("ip54") == 1) $nameswitcher .= "G";//добавления уплотнения по оси}else$nameswitcher .= "K";//если ключ$nameswitcher .= $switch->read("nscheme");//добавление номера схемы$nameswitcher .= $switch->read("initpos");//добавление начального положения$nameswitcher .= substr($switch->read("angle"),0,1);//добавление углаif($switch->read("handle") == "red") $nameswitcher .= "R";//если ручка красная if($switch->read("handle") == "ub") $nameswitcher .= "B";//если ручка "U" чернаяif($switch->read("handle") == "t") $nameswitcher .= "T";//если ручка специальной формыif($switch->read("moment") == 1 && $switch->read("qpos") == 3) $nameswitcher .= $switch->read("momentfrom");//добавление варианта самовозврата для трех положенийif($switch->read("fix") == "B") $nameswitcher .= "L=".$switch->read("length");//добавление длины оси для варианта "B"$switch->write("nameswitcher", $nameswitcher);//запись в БД наименования переключателяecho("<h2>".$nameswitcher."</h2>");//вывод наименования переключателяecho("имеет следущие технические характеристики:");//Вывод параметров переключателяecho("</br></br>");echo("<p  style='text-align: left;'>- максимальный коммутируемый переменный ток ".$switch->read("current")." А ");echo("<a href='constr_switcher1.php' style='color: red;'>изменить</a></p>");	if($switch->read("handle") == "black") $handle = "черная ручка";	if($switch->read("handle") == "red") $handle = "красная ручка";	if($switch->read("handle") == "t") $handle = "рукоятка";	if($switch->read("handle") == "ur") $handle = "красная ручка с возможностью фиксации навесным замком";	if($switch->read("handle") == "ub") $handle = "черная ручка с возможностью фиксации навесным замком";	if($switch->read("handle") == "key") $handle = "ключ";echo("<p  style='text-align: left;'>- ручка управления: ".$handle." ");echo("<a href='constr_switcher2.php' style='color: red;'>изменить</a></p>");if($switch->read("board") == 1) $inf_board = "- с лицевой панелью ";else $inf_board = "- без лицевой панели ";if($switch->read("handle") != "ur" && $switch->read("handle") != "ub" && $switch->read("handle") != "key"){echo("<p  style='text-align: left;'>".$inf_board." ");echo("<a href='constr_switcher3.php' style='color: red;'>изменить</a></p>");}if($switch->read("ip54") == "yes") $ip54 = "- с уплотнением по оси до IP54 ";else $ip54 = "- без уплотнения по оси до IP54 ";echo("<p  style='text-align: left;'>".$ip54." ");echo("<a href='constr_switcher4.php' style='color: red;'>изменить</a></p>");	if($switch->read("fix") == "_") $fix = "на переднюю панель или дверь ";	if($switch->read("fix") == "O") $fix = "на монтажную панель ";	if($switch->read("fix") == "L") $fix = "на DIN-рейку ";	if($switch->read("fix") == "P") $fix = "в коробке с IP54 ";	if($switch->read("fix") == "B") $fix = "переключатель крепится на монтажную панель, а ручка - на дверь ";	echo("<p  style='text-align: left;'>- крепление: ".$fix." ");echo("<a href='constr_switcher5.php' style='color: red;'>изменить</a></p>");	if($switch->read("fix") == "B"){echo("<p  style='text-align: left;'>- расстояние от монтажной панели до двери: ".$switch->read('length')." мм ");echo("<a href='constr_switcher5a.php' style='color: red;'>изменить</a></p>");}echo("<p  style='text-align: left;'>- количество положений ручки: ".$switch->read('qpos')." ");echo("<a href='constr_switcher6.php' style='color: red;'>изменить</a></p>");echo("<p  style='text-align: left;'>- количество контактных групп: ".$switch->read('qcont')." ");echo("<a href='constr_switcher6.php' style='color: red;'>изменить</a></p>");	if($switch->read("moment") == "yes") $momentary = "- с самовозвратом ";	else $momentary = "- без самовозврата ";echo("<p  style='text-align: left;'>".$momentary." ");echo("<a href='constr_switcher8.php' style='color: red;'>изменить</a></p>");	echo("<p  style='text-align: left;'>- угол поворота ручки: ".(360/$switch->read('angle'))." градусов ");	if($switch->read("qpos") < 7)echo("<a href='constr_switcher9.php' style='color: red;'>изменить</a></p>");echo("<p  style='text-align: left;'>- начальное положение ");echo("<a href='constr_switcher10.php' style='color: red;'>изменить</a></p>");echo("<img class = 'img'   src = 'initial_position.php?initpos=".$switch->read("initpos")."'  height = '200px'  alt = V>");echo("<p  style='text-align: left;'>- номер схемы: ".$switch->read('nscheme')." ");echo("<a href='constr_switcher6.php' style='color: red;'>изменить</a></p>");echo("<img  style = 'margin-left: 5px; margin-top: 5px; ' src = 'outInputScheme.php' alt = 'схема переключателя' />"); /*function setCookie(name, value) {    document.cookie = name + "=" + value;  }  function $switch->read(name) {    $r = document.cookie.match("(^|;) ?" + name + "=([^;]*)(;|$)");    if (r) return r[2];    else return "";  }//Добавление сконструированного переключателя в заказfunction input(){$url = "your_order.php";if($switch->read("quantity_pos_order") == "") setCookie("quantity_pos_order", 0);//количество позиций в заказе$q = document.form11.quantity_swichers.value;if (!(q/q)) {alert ("Введите целое число");$url = "constr_switcher11.php"; }if (q <= 0) {alert ("Введите положительное число");$url = "constr_switcher11.php"; }//Преобразование свойств переключателя в строку$strPropSwit = "available&";//доступностьstrPropSwit .= $nameswitcher+"&"+q+"&";//наименование и количествоstrPropSwit .= $switch->read("switcher_current")+"&";strPropSwit .= $switch->read("handle")+"&";strPropSwit .= $switch->read("switcher_inf_board")+"&";strPropSwit .= $switch->read("switcher_ip54")+"&";strPropSwit .= $switch->read("switcher_fix")+"&";strPropSwit .= $switch->read("switcher_l_door_panel")+"&";strPropSwit .= $switch->read("switcher_jump")+"&";strPropSwit .= $switch->read("switcher_qJump")+"&";strPropSwit .= $switch->read("switcher_cdiag")+"&";strPropSwit .= $switch->read("switcher_qpos")+"&";strPropSwit .= $switch->read("switcher_qcont")+"&";strPropSwit .= $switch->read("switcher_mark")+"&";strPropSwit .= $switch->read("switcher_number_scheme")+"&";strPropSwit .= $switch->read("switcher_momentary")+"&";strPropSwit .= $switch->read("switcher_momentary_from")+"&";strPropSwit .= $switch->read("switcher_angle")+"&";strPropSwit .= $switch->read("switcher_init_pos")+"&";if(url == "your_order.php"){$nPO = $switch->read("quantity_pos_order");//количество позиций в заказеnPO++;setCookie("quantity_pos_order", nPO);//инкремент количества позиций в заказеsetCookie("switcher"+nPO, strPropSwit);//запись строки свойств переключателя в Cookie}//alert(document.cookie);document.location = url;//на страницу заказа}*/?>	</br></br><p>Вы можете указать дополнительные требования, например, "Установить удлиненные крепежные винты".</p><form name = 'form11' action = 'add_switcher_order.php'  method = 'get'><table border="0" width = "auto" cellpadding="4" cellspacing="10" style = 'text-align: right;' ><tr>	<td><p><b>Дополнительные требования</b></p>	</td></tr><tr>	<td><textarea name = "addfield" id = 'text'  rows = "4" cols = "70" ><?php echo ($switch->read("addfield"));?> </textarea>	</td></tr></table></br><p>Если Вы хотите преобрести этот переключатель, введите количество и нажмите кнопку "Добавить в заказ".</p></br>		Количество  <input type = 'text' name = 'quantity_swichers' value='1' size='3'/>	<input type = 'submit'   value = 'Добавить в заказ'/></form></center>	</div> </div>	 <div class="clear"></div> <?php require_once "../../blocks/footer.html";?> </body></html>