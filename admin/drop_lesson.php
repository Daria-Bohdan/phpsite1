<?php
include ("blocks/bd.php");/*подключаемся к базе данных*/
/*Усли существует в глобальном массиве $_POST['id'] определенная ячейка, то мы создаем простую переменную из нее.*/ 

if (isset ($_POST ['id']))		    {$id = $_POST ['id'];}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Обработчик </title>
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

<?php 

if (isset ($id))
{
$result = mysql_query ("DELETE FROM lessons WHERE id='$id'");

/*Проверки на ошибки запросов MYSQL
echo mysql_errno() . ": " . mysql_error(). "\n";*/ 

if ($result == 'true')
 {echo "<p>Ваш урок успешно удален</p>";

}else {

echo "<p>Ваш урок не удален !</p>";
}

} else {
	echo "<p>Вы запустили данный файл без параметра id и поэтому, удалить урок невозможно.Скорее всего Вы не выбрали радиокнопку на предыдущем шаге. </p>";
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