<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Авторизация пользователя</title>
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
			a:link.registration{
				color: blue;
			}
			a:hover.registration{
				color: blue;
			}
			a:visited.registration {
				color: blue;
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
		   .authorization_fon {
			    position: absolute;
				overflow: auto; padding: 10px;
				top: 27px;
				left: 0;
				bottom: 47px; 
				right: 0;
		   }
		   .authorization_form {
				position: absolute;
				width: 450px; 
				height: 250px;
				left: 50%;
				top: 50%;
				margin-left: -211px;
				margin-top: -140px;
				background: #ECF5E4;
				border: solid 1px black;
				padding: 8px;
				overflow: auto;
		   }
		</style>
	</head>
	<body>
		<table class="struct menu">
			<tr>
				<td class="element element_not_right">
					<a href = "index.php" class="menu">Главная</a>
				</td>
				<td class="element element_not_right">
					<a href = "" class="menu">Свежий номер</a>
				</td>
				<td class="element element_not_right">
					<a href = "all_news_page.php" class="menu">Все новости</a>
				</td>
				<td class="element element_not_right">
					<a href = "" class="menu">Реклама в газете</a>
				</td>
				<td class="element element_not_right">
					<a href = "" class="menu">Контакты</a>
				</td>
				<td class="element">
					<a href = "authorization.php" class="select_menu">Личный кабинет</a>
				</td>
			</tr>
		</table>
  		<div class="authorization_fon">
   			<div class="authorization_form">
				<form action="db_functions.php" method="POST">
					<center>
						<p>Введите логин и пароль для входа в личный кабинет:</p>
						<p>Логин: <input type="text" name="login"></p>
						<p>Пароль: <input type="password" name="password"></p>
						<p><input type="submit" name="authitication" value="Войти"></p>
					</center>
				</form>
				<center>
					<?php 
						if (isset($_GET["exception"])) {
					?>
					<p> <font color="red">Ошибка при авторизации.<br>
					Попробуйте авторизоваться еще раз или зарегистрироваться!</font></p>
					<?php 
						}
					?>
				</center>
				<center>
					<p>Не зарегистрированы? Нажмите <a class="registration" href="registration.php">сюда</a> для регистрации</p>
				</center>
			</div>
  		</div>
  		<table class="struct footer">
			<tr>
				<td class="element">
					<a href = "index.php"><img src="logotip.jpg"></a>
				</td>
				<td class="element" >
					<font color="white">© Редакция газеты «Правда», 2008–2019<br/>
					Возрастное ограничение 12+</font>
				</td>
			</tr>
		</table>
	</body>
</html>