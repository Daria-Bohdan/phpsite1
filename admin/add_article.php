<?php
include ("blocks/bd.php");/*подключаемся к базе данных*/

if (isset ($_POST ['title']))       
{
	$title = $_POST ['title'];  

if ($title == '') 
{
	unset ($title);
}

}
/*Усли существует в глобальном массиве $_POST['title'] определенная ячейка, то мы создаем простую переменную из нее. 
Если переменная пустая, то мы  уничтожаем переменную*/
if (isset ($_POST ['meta_d']))      {$meta_d = $_POST ['meta_d']; if ($meta_d == '') {unset ($meta_d);}}
if (isset ($_POST ['meta_k'])) 		{$meta_k = $_POST ['meta_k']; if ($meta_k == '') {unset ($meta_k);}}
if (isset ($_POST ['date'])) 		{$date = $_POST ['date'];     if ($date == '') {unset ($date);}}
if (isset ($_POST ['description'])) {$description= $_POST ['description']; if ($description == '') {unset ($description);}}
if (isset ($_POST ['text'])) 		{$text = $_POST ['text'];     if ($text == '') {unset ($text);}}
if (isset ($_POST ['author']))		{$author = $_POST ['author'];  if ($author == '') {unset ($author);}}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Обработчик статей </title>
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

<?php 

if (isset ($title) && isset ($meta_d) && isset ($meta_k) && isset ($date) && isset ($description) && isset ($text) && isset ($author))
 {
/* Здесь пишем что можно заносить информацию в базу */

$result = mysql_query ("INSERT INTO articles (title, meta_d, meta_k, date, description, text, author) VALUES ('$title', '$meta_d', '$meta_k', '$date', '$description', '$text', '$author') ");

if ($result == 'true')
 {echo "<p>Ваша статья успешно добавлена</p>";
}else {
echo "<p>Ваша статья не добавлена !</p>";
}



} else {
	echo "<p>Вы ввели не всю информацию, поэтому статья в базу не может быть добавлена. </p>";
}


?>
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