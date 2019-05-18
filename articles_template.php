<?php

include ("blocks/bd.php"); /*Соединяемся с БД */
$result = mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE page='articles'",$db);
$myrow = mysql_fetch_array($result);
?>	

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta name="description" content="<?php echo $myrow['meta_d']; ?> ">
	<meta name="keywords" content="<?php echo $myrow['meta_k']; ?>">
	<meta charset="UTF-8">
	<title><?php echo $myrow['title']; ?> </title>
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
		<?php echo $myrow['text']; ?>
	</td>
					</tr>
				</table></td>	
		</tr>
 <!-- Подключаем нижний графический элемент (footer)сайта -->
<?php include ("blocks/footer.php");?>		
		
	</table>
</body>
</html>