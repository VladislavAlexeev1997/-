<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Публикация статьи</title>
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
			table.footer  {
			  left: 0; bottom: 0;
			}
			td.element {
				text-align: center;
			}
			td.element_not_right {
				border-right:1px solid #FFFFFF;
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
			input.article_name {
				width: 60%;
			}
			textarea.article_text {
				width: 99%;
				height: 370px;
				font-family: Times New Roman;
				font-size: 14px;
				overflow: auto;
			}
		   .create_article_fon {
			    position: absolute;
				overflow: auto; padding: 10px;
				top: 20px;
				left: 0;
				bottom: 47px; 
				right: 0;
		   }
		   .create_article_form {
				position: absolute;
				padding-left: 10px;
				padding-right: 10px;
				top: 10px;
				left: 15%;
				bottom: 10px; 
				right: 15%;
				background: #F5F5AB;
				border: solid 1px black;
		   }
		</style>
	</head>
	<body>
		<table class="struct menu">
			<tr>
				<td class="element element_not_right">
					<a href = "start_editor_page.php?login=<?php echo $_GET['login']?>" class="menu">Главная</a>
				</td>
				<td class="element element_not_right">
					<a href = "create_article.php?login=<?php echo $_GET['login']?>" class="select_menu">Опубликовать статью</a>
				</td>
				<td class="element element_not_right">
					<a href = "publication_articles_editor.php?login=<?php echo $_GET['login']?>" class="menu">Опубликованные статьи</a>
				</td>
				<td class="element element_not_right">
					<a href = "setting_password_editor_page.php?login=<?php echo $_GET['login']?>" class="menu">Настройки профиля</a>
				</td>
				<td class="element">
					<a href = "index.php" class="menu">Выйти</a>
				</td>
			</tr>
		</table>
  		<div class="create_article_fon">
   			<div class="create_article_form">
				<form enctype="multipart/form-data" action="db_functions.php?login=<?php echo $_GET['login']?>" method="POST">
					<center>
						<p>Заполните необходимые данные для публикации статьи:</p>
					</center>
						<p>Наименование статьи: <input class="article_name" type="text" name="article_name"></p>
						<p>Основной текст статьи: <br/>
							<textarea class="article_text" name="article_text"></textarea></p>
						<p>Фоторепортаж статьи: <input name="article_files[]" type="file" multiple></p>
						<p><input type="submit" name="create_article" value="Опубликовать статью"></p>
				</form>
			</div>
  		</div>
  		<table class="struct footer">
			<tr>
				<td class="element">
					<a href = "start_editor_page.php?login=<?php echo $_GET['login']?>"><img src="logotip.jpg"></a>
				</td>
				<td class="element" >
					<font color="white">© Редакция газеты «Правда», 2008–2019<br/>
					Возрастное ограничение 12+</font>
				</td>
			</tr>
		</table>
	</body>
</html>