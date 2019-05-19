<?php
	include ("blocks/bd.php");
?>	


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Страница удаления нового урока </title>
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
<?php include ("blocks/lefttd.php"); ?>			
	<td valign="top">

<p><strong>Выберите урок для удаления:</strong></p>

<form action="drop_lesson.php" method="post">

<?php

	$result = mysql_query("SELECT `title`, `id` FROM `lessons`", $db);
	$myrow = mysql_fetch_array($result);

do 
{
printf ("<p><input name='id' type='radio' value='%s'> %s </p>", $myrow["id"], $myrow["title"]);
}

while (	$myrow = mysql_fetch_array($result));

?>	

<p><input name="submit" type="submit" value="Удалить урок!!!!"></p>

</form>	



	</td>
		</tr>
			</table>
		</td>	
	</tr>
 <!-- Подключаем нижний графический элемент (footer)сайта -->
<?php include ("blocks/footer.php");?>		

	</table>
</body>
</html>