<?php

include ("blocks/bd.php"); /*Соединяемся с БД */
$result = mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE page='lessons'",$db);
$myrow = mysql_fetch_array($result);
?>	

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta name="description" content="<?php echo $myrow['meta_d']; ?> ">
	<meta name="keywords" content="<?php echo $myrow['meta_k']; ?>">
	<meta charset="UTF-8">
	<title>Шаблон</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css"/>
</head>
<body>
	<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">
 <!-- Подключаем шапку сайта -->
<?php include ("blocks/header.php"); ?>
		<tr>
			<td><table width="690" border="0" cellpadding="0" cellspacing="0">
					<tr>
<!-- Подключаем левый блок сайта -->			
<?php include ("blocks/lefttd.php") ?>			
	<td valign="top">
		<p>Google Chrome (МФА [ɡuːɡl krəum][4][5], MWCD[en] /ˈgü-gəl ˈkrōm/[6][7], chrome с англ. — «хром») — браузер, разрабатываемый компанией Google на основе свободного браузера Chromium и движка Blink[8] (до апреля 2013 года использовался WebKit). </p>
	<p align="center"><font size="4" face="Verdana, Arrial, Helvetica, sans-serif"><strong> Картинка GOOGLE CHROME</strong></font> </p>
	<p align="center"><img src="lessons/18052019/google_chrome/1.jpg" width="200" height="148"></p>
    <p>Первая публичная бета-версия для Windows вышла 2 сентября 2008 года, а первая стабильная — 11 декабря 2008 года. По данным StatCounter, Chrome используют около 300 миллионов интернет-пользователей, что делает его самым популярным браузером в мире — его рыночная доля на сентябрь 2018 года составляет ▲60.6 %.</p>
    <p align="center"><img src="lessons/18052019/google_chrome/2.jpg" width="313" height="154"></p>
	<p>На протяжении шести лет главный исполнительный директор Google Эрик Шмидт не поддерживал идею о создании отдельного браузера. Он указывал на то, что «Google являлась небольшой компанией», и что он не хотел участвовать в «болезненных войнах браузеров». После того как основатели компании Сергей Брин и Ларри Пейдж наняли нескольких разработчиков Mozilla Firefox и создали демоверсию Chrome, Шмидт сказал: «она была настолько хорошей, что заставила меня изменить моё мнение»[10].</p>
	<p align="center"><img src="lessons/18052019/google_chrome/3.jpg" width="275" height="182"></p>
	<P>Первоначально Chrome был выпущен только под Windows, позднее (9 декабря 2009 года) появились dev- и beta-версии[11][12] для операционных систем Linux и macOS . Первоначально сборки для этих ОС не обладали полной функциональностью аналогичных бета-версий для Windows (например, синхронизацией закладок), но с появлением ветви 5.0.* функциональность сборок для всех ОС стала равной</p>
		<p align="center"><img src="lessons/18052019/google_chrome/4.jpg" width="400" height="119"></p>
	<p>Первая бета-версия браузера была опубликована для Windows 2 сентября 2008 года, была доступна на 43 языках[14]. За первые несколько часов после выпуска в Google было отправлено несколько сотен различных сообщений об ошибках[15].Chrome быстро приобрёл около 1 % рынка[16][17][18][19]. После первоначального всплеска доля пользователей упала до уровня в 0,73 % в октябре 2008 года. Затем вновь начала расти, пока в декабре 2008 Chrome снова не преодолел порог в 1 %.</p>
	<p align="center"><img src="lessons/18052019/google_chrome/5.png" width="250" height="70"></p></td>
					</tr>
				</table></td>	
		</tr>
 <!-- Подключаем нижний графический элемент (footer)сайта -->
<?php include ("blocks/footer.php");?>		
		
	</table>
</body>
</html>