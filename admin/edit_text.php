<?php
	include ("blocks/bd.php");


	if (isset ($_GET['id'])) {$id = $_GET['id'];}

?>	


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Страница изменения текстов </title>
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

<p><strong>Выберите страницу для редактирования данных :</strong></p>

<?php


if (!isset ($id))

{
		$result = mysql_query("SELECT `title`, `id` FROM `settings`", $db);
		$myrow = mysql_fetch_array($result);


do 
{
printf ("<p><a href='edit_text.php?id=%s'>%s</a></p>", $myrow["id"], $myrow["title"]);
}

while (	$myrow = mysql_fetch_array($result));

}else{

	$result = mysql_query("SELECT * FROM settings WHERE id=" . $_GET['id']);
/*echo mysql_errno() . ": " . mysql_error(). "\n";*/
	$myrow = mysql_fetch_array($result);
/*echo mysql_errno() . ": " . mysql_error(). "\n";*/


print <<<HERE

<form name="forml" method="post" action="update_text.php">
			<p>
				<label>Введите название страницы (тег title)<br>
					<input value=$myrow[title] type="text" name="title" id="title">
				</label>
			</p>
				<p>
					<label>Введите краткое описание страницы<br>
						<input value="$myrow[meta_d]" type="text" name="meta_d" id="meta_d">
					</label>
				</p>
					<p>
						<label>Введите ключевые для страницы<br>
							<input value="$myrow[meta_k]" type="text" name="meta_k" id="meta_k">
						</label>
					</p>
						<p>
							<label>Введите полный текст страницы с тегами
								<textarea name="text" id="text" cols="40" rows="20">$myrow[text]</textarea> 
							</label>
						</p>
						<p>
							<input name="id" type="hidden" value="$myrow[id]">
							 <p>
								<label>
									<input type="submit" name="submit" id="submit" value="Сохранить изменения">
								</label>
							</p>
						</form>
HERE;
}

?>		
					</td>
						</tr>
					</table></td>	
		</tr>
 <!-- Подключаем нижний графический элемент (footer)сайта -->
<?php include ("blocks/footer.php");?>		
		
	</table>
</body>
</html>