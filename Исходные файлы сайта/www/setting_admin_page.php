<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Изменение данных</title>
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
			table.categories {
				position: absolute;
				width: 100%;
				cellspacing: 0;
				border: 0px;
				top: 0;
				left: 0;
				bottom: 0; 
				right: 0;
			}
			table.userstable {
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
			td.categorie {
				text-align: center;
			}
			td.categorie_not_bottom {
				border-bottom:1px solid #AAAAAA;
			}
			th.header {
				background: #AAAAAA;
			}
			td.user_element {
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
			.categories {
				position: absolute;
				overflow: auto; padding: 10px;
				width: 190px; 
				background: #ECF5E4; 
				border-right: 1px solid #000000;
				top: 27px;
				bottom: 47px;
   			}
		   .update_password {
			    position: absolute;
				overflow: auto; padding: 10px;
				top: 27px;
				left: 210px;
				bottom: 47px; 
				right: 0;
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
					<a href = "publication_articles_admin.php?login=<?php echo $_GET['login']?>" class="menu">Опубликованные статьи</a>
				</td>
				<td class="element element_not_right">
					<a href = "" class="menu">Подписки на газету</a>
				</td>
				<td class="element element_not_right">
					<a href = "setting_admin_page.php?login=<?php echo $_GET['login']?>" class="select_menu">Настройки профиля</a>
				</td>
				<td class="element">
					<a href = "index.php" class="menu">Выйти</a>
				</td>
			</tr>
		</table>
		<div class="categories">	
			<table class="categories">
				<tr>
					<td class="categorie">
						<a href = "setting_admin_page.php?login=<?php echo $_GET['login']?>" class="select_categorie">Изменить пароль</a>
					</td>
				</tr>
			</table>
  		</div>
  		<div class="update_password">
			<center><form action="db_functions.php?login=<?php echo $_GET['login']?>" method="POST">
				<p>Чтобы изменить пароль личного кабинета:</p>
				<p>Введите исходный пароль: <input type="password" name="old_password"></p>
				<p>Введите новый пароль: <input type="password" name="new_password"></p>
				<p><input type="submit" name="update_admin_password" value="Изменить пароль"></p>
			</form></center>
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