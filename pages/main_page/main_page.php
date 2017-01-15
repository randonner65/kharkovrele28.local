<?php
require_once "pages/static_pages/class_static_pages.php";//подключение класса Статические страницы
$staticpage = new  ClassStaticPages();//создание объекта класса ClassStaticPages
$staticpage->namepage = "main";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php echo $staticpage->read("title");?></title>
<meta http-equiv="Content-type" content="text/html; charset=utf8"/>
<meta name="Keywords" content="<?php echo $staticpage->read("keywords");?>" />
<meta name="Description" content="<?php echo $staticpage->read("description");?>" />
<meta name="Author" content="Дмитрий Коржов" />
<meta http-equiv="Reply-to" content="korzhov65@male.ru" />
<link href="/images/icon1.ico" rel="shortcut icon" type="image/x-icon" />
<link  rel="stylesheet" type="text/css" href="/styles/styles.css" />
<meta name="google-site-verification" content="vOwng_y-A-4rgJz-2oOGR_cpffewqwx2LJg18lM1ARA" />
<script type="text/javascript" src="/js/jquery-1.2.6.js"></script>
	<script type="text/javascript" src="/js/startstop-slider.js"></script>
</head>
  
<body>
<!-- Start SiteHeart code -->
<script>
(function(){
// your widget ID
var widget_id = 657196;
_shcp =[{widget_id : widget_id}];
// set default language
var lang =(navigator.language || navigator.systemLanguage 
|| navigator.userLanguage ||"en")
.substr(0,2).toLowerCase();
// script url
var url ="widget.siteheart.com/widget/sh/"+ widget_id +"/"+ lang +"/widget.js";
var hcc = document.createElement("script");
hcc.type ="text/javascript";
hcc.async =true;
hcc.src =("https:"== document.location.protocol ?"https":"http")
+"://"+ url;
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hcc, s.nextSibling);
})();
</script>
<!-- End SiteHeart code -->

<!-- Rating@Mail.ru counter -->
<script type="text/javascript">//<![CDATA[
var _tmr = _tmr || [];
_tmr.push({id: '2377009',  type: 'pageView', start: (new Date()).getTime()});
(function (d, w) {
   var ts = d.createElement('script'); ts.type = 'text/javascript'; ts.async = true;
   ts.src = (d.location.protocol == 'https:' ? 'https:' : 'http:') + '//top-fwz1.mail.ru/js/code.js';
   var f = function () {var s = d.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ts, s);};
   if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window);
//]]></script><noscript><div style="position:absolute;left:-10000px;">
<img src="//top-fwz1.mail.ru/counter?id=2377009;js=na" style="border:0;" height="1" width="1" alt="@Mail.ru" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->

  <?php require_once "blocks/header.html";?>
 <div id = "content" >
  <?php require_once "blocks/left_panel.html";?>
   <div id = "main_content">
<h1>Мы занимаемся проектированием и монтажом электрооборудования любой сложности. Производим поворотные кулачковые переключатели галетного типа</h1>

<div id="slider">

			<div id="mover">
				<div id="slide-1" class="slide">
					<h2>Переключатели</h2>
					<p>Ряд кулачковых переключателей серии S10, 16, 25, 32, 63, 100, 160J – новое поколение переключателей в электрическом ряду от 10 до 160А.</p>
					<a href="http://khrl.com.ua/pages/order_switcher/order_switcher.php"><img src="/images/pereklyuchateli-slide.gif" alt="learn more" /></a>
				</div>
				<div class="slide">
					<h2>Шкафы каркасные</h2>
					<p>Металлоконструкции каркасные напольного исполнения серии МК</p>
					<a href="http://khrl.com.ua/pages/order_mc/order_mc.php"><img src="/images/shkafi-karkasnie-slide.gif" alt="learn more" /></a>
				</div>
				<div class="slide">
					<h2>Пульты</h2>
					<p>Пульты управления с наклонной консолью, прямой и без консоли, могут комплектоваться цоколем </p>
					<a href="http://khrl.com.ua/pages/order_mc/order_mc.php"><img src="/images/pulti-slide.gif" alt="learn more" /></a>
				</div>
			</div>
		</div>   
   
	<?php 	echo $staticpage->read("text");?>
 </div>
 </div>
 <div class="clear"></div>
 
<?php require_once "blocks/footer.html";?>
 <!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter21750460 = new Ya.Metrika({id:21750460,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/21750460" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42365411-1', 'khrl.com.ua');
  ga('send', 'pageview');

</script>
</body>
</html>