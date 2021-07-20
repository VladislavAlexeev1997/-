<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Опубликованные статьи</title>
		<style>
			body {
				background: #F5F5DC;
				margin: 0;
			}
			table.struct {
			  position: fixed;
			  background: #696969;
			  border: 1px solid #696969;
			  width: 100%;
			  cellspacing: 0;
			}
			table.menu {
			  left: 0; top: 0;
			}
			table.articlestable {
				font-size: 14px;
				color: black;
				width: 100%;
				cellspacing: 0;
			}
			table.footer  {
			  left: 0; bottom: 0;
			}
			td.element {
				text-align: center;
			}
			td.element_not_right {
				border-right:1px solid #FFFFFF;
			}
			th.header {
				background: #AAAAAA;
			}
			td.article_element {
				background: #FFFFFF;
				text-align: center;
			}
			a:link.menu{
				font-size: 11px;
				color: white;
				font-family: Arial;
				text-transform: uppercase;
				text-decoration: none;
			}
			a:hover.menu{
				font-size: 11px;
				color: white;
				font-family: Arial;
				text-transform: uppercase;
				text-decoration: underline;
			}
			a:visited.menu {
				color: white;
			}			
			a.select_menu {
				font-size: 11px;
				color: white;
				font-family: Arial;
				text-transform: uppercase;
			}
			a:visited.select_menu {
				color: white;
			}
			a:link.article_name{
				font-size: 14px;
				color: black;
				text-decoration: none;
			}
			a:hover.article_name{
				font-size: 14px;
				color: black;
				text-decoration: underline;
			}
			a:visited.article_name {
				color: black;
			}		
			a:link.categorie{
				font-size: 11px;
				color: black;
				font-family: Arial;
				text-transform: uppercase;
				text-decoration: none;
			}
			a:hover.categorie{
				font-size: 11px;
				color: black;
				font-family: Arial;
				text-transform: uppercase;
				text-decoration: underline;
			}
			a:visited.categorie {
				color: black;
			}			
			a.select_categorie {
				font-size: 11px;
				color: black;
				font-family: Arial;
				text-transform: uppercase;
			}
			a:visited.select_categorie {
				color: black;
			}
			a:link.delete_button{
				color: blue;
				text-decoration: none;
			}
			a:hover.delete_button{
				color: blue;
				text-decoration: underline;
			}
			a:visited.delete_button {
				color: blue;
			}				
			.categories {
				position: absolute;
				overflow: auto; padding: 10px;
				width: 190px; 
				background: #ECF5E4; 
				border-right: 1px solid #000000;
				top: 27px;
				bottom: 47px;
   			}
		   .articles {
			    position: absolute;
				overflow: auto; padding: 10px;
				top: 27px;
				left: 0px;
				bottom: 47px; 
				right: 0;
		   }
		   img.iconimage {
			   border: 2px solid #8b8e4b;
			   width: 70px;
			   height: 50px;
		   }
		</style>
	</head>
	<body>
		<table class="struct menu">
			<tr>
				<td class="element element_not_right">
					<a href = "start_admin_page.php?login=<?php echo $_GET['login']?>" class="menu">Главная</a>
				</td>
				<td class="element element_not_right">
					<a href = "users_admin_page.php?login=<?php echo $_GET['login']?>" class="menu">Пользователи сайта</a>
				</td>
				<td class="element element_not_right">
					<a href = "publication_articles_admin.php?login=<?php echo $_GET['login']?>" class="select_menu">Опубликованные статьи</a>
				</td>
				<td class="element element_not_right">
					<a href = "" class="menu">Подписки на газету</a>
				</td>
				<td class="element element_not_right">
					<a href = "setting_admin_page.php?login=<?php echo $_GET['login']?>" class="menu">Настройки профиля</a>
				</td>
				<td class="element">
					<a href = "index.php" class="menu">Выйти</a>
				</td>
			</tr>
		</table>
  		<div class="articles">
			<center><table class="articlestable">
				<tr>
					<th class="header">№</th>
					<th class="header">Превью статьи</th>
					<th class="header">Заголовок статьи</th>
					<th class="header">Дата и время<br/>опубликования<br/>статьи</th>
					<th class="header">Имя редактора</th>
					<th class="header">Действие</th>
				</tr>
				<?php
					$con = mysqli_connect("localhost", "root", "");
					if (!$con) {
						exit('Connect Error (' . mysqli_connect_errno() . ') '
						. mysqli_connect_error());
					}
					else {
						mysqli_set_charset($con, 'utf8');
						mysqli_select_db($con, "newspaper_database");
						$articles = mysqli_query($con, "SELECT * FROM (SELECT article_photo.file_name, 
							article.article_id , article.article_name, article.date_public, article.time_public, editor.surname, editor.name 
							FROM editor, article, article_photo WHERE editor.login = article.editor_login AND 
							article.article_id = article_photo.article_id AND article_photo.photo_num = 1) all_articles 
							ORDER BY all_articles.date_public DESC, all_articles.time_public DESC;");
						$index = 1;
						while ($row = mysqli_fetch_array($articles)) {
				?>
				<tr>
					<td class="article_element"><?php echo $index;?></td>
					<td class="article_element"><img class = "iconimage" src="<?php echo $row["file_name"];?>" alt="" /></td>
					<td width="35%" class="article_element"><a class="article_name" href="article_only.php?action=articles_admin&login=<?php echo $_GET['login']?>&article_id=<?php echo $row["article_id"]?>"><?php echo $row["article_name"];?></a></td>
					<td width="15%" class="article_element"><?php echo $row["date_public"]." ".$row["time_public"];?></td>
					<td class="article_element"><?php echo $row["surname"]." ".$row["name"];?></td>
					<td class="article_element"><a class="delete_button" href="db_functions.php?login=<?php echo $_GET['login']?>&article_id=<?php echo $row["article_id"]?>&delete_article=<?php echo true?>">Удалить</a></td>
				</tr>
				<?php
							$index++;
						}
					}
					mysqli_close($con);
				?>
			</table></center>
  		</div>
  		<table class="struct footer">
			<tr>
				<td class="element">
					<a href = "start_admin_page.php?login=<?php echo $_GET['login']?>"><img src="logotip.jpg"></a>
				</td>
				<td class="element" >
					<font color="white">© Редакция газеты «Правда», 2008–2019<br/>
					Возрастное ограничение 12+</font>
				</td>
			</tr>
		</table>
	</body>
</html>