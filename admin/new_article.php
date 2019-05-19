<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Страница добавления новой статьи </title>
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
		<form name="forml" method="post" action="add_article.php">
			<p>
				<label>Введите название статьи<br>
					<input type="text" name="title" id="title">
				</label>
			</p>
				<p>
					<label>Введите краткое описание статьи<br>
						<input type="text" name="meta_d" id="meta_d">
					</label>
				</p>
					<p>
						<label>Введите ключевые слова<br>
							<input type="text" name="meta_k" id="meta_k">
						</label>
					</p>
						<p>
						<label>Введите дату добавления статьи<br>
								<input name="date" type="text" id="date" value="2019-05-18">
							</label>
						</p>
							<p>
							<label>Введите краткое описание статьи с тегами абзацев<br>
								<textarea name="description" id="description" cols="40" rows="5"></textarea>
							</label>
						</p>
								<p>
							<label>Введите полный текст статьи с тегами
								<textarea name="text" id="text" cols="40" rows="20"></textarea> 
							</label>
						</p>
						<p>		
							<p>
								<label>Введите автора статьи<br>
									<input type="text" name="author" id="author">
								</label>
							</p>
							<p>
								<label>
									<input type="submit" name="submit" id="submit" value="Занести статью в базу">
								</label>
							</p>
						</form>
						<p></p>
					</td>
						</tr>
					</table></td>	
		</tr>
 <!-- Подключаем нижний графический элемент (footer)сайта -->
<?php include ("blocks/footer.php");?>		
		
	</table>
</body>
</html>