<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Пользователи сайта</title>
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
		   .users {
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
					<a href = "users_admin_page.php?login=<?php echo $_GET['login']?>" class="select_menu">Пользователи сайта</a>
				</td>
				<td class="element element_not_right">
					<a href = "publication_articles_admin.php?login=<?php echo $_GET['login']?>" class="menu">Опубликованные статьи</a>
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
		<div class="categories">	
			<table class="categories">
				<tr>
					<td class="categorie categorie_not_bottom">
						<a href = "users_admin_page.php?login=<?php echo $_GET['login']?>" class="select_categorie">Список пользователей сайта</a>
					</td>
				</tr>
				<tr>
					<td class="categorie categorie_not_bottom">
						<a href = "add_subscr_page.php?login=<?php echo $_GET['login']?>" class="categorie">Добавить подписчика</a>
					</td>
				</tr>
				<tr>
					<td class="categorie">
						<a href = "add_editor_page.php?login=<?php echo $_GET['login']?>" class="categorie">Добавить редактора</a>
					</td>
				</tr>
			</table>
  		</div>
  		<div class="users">
			<center><table class="userstable">
				<tr>
					<th class="header">Логин пользователя</th>
					<th class="header">Роль пользователя</th>
					<th class="header">Дополнительная информация</th>
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
						$editors = mysqli_query($con, "SELECT editor.login, user_view.status_name, editor.surname, 
							editor.name, editor.email FROM user_view, user, editor WHERE editor.login = user.login AND 
							user.status_id = user_view.status_id;");
						$subscribers = mysqli_query($con, "SELECT subscriber.login, user_view.status_name, subscriber.surname, 
							subscriber.name, subscriber.patronymic, subscriber_info.email, subscriber_info.phone_number 
							FROM subscriber_info, subscriber, user, user_view WHERE subscriber_info.login = subscriber.login AND 
							subscriber.login = user.login AND user.status_id = user_view.status_id;");
						while ($row = mysqli_fetch_array($editors)) {
				?>
				<tr>
					<td class="user_element"><?php echo $row["login"];?></td>
					<td class="user_element"><?php echo $row["status_name"];?></td>
					<td class="user_element"><?php echo $row["surname"]." ".$row["name"];?><br/><?php echo $row["email"];?></td>
				</tr>
				<?php
						}
						while ($row = mysqli_fetch_array($subscribers)) {
				?>
				<tr>
					<td class="user_element"><?php echo $row["login"];?></td>
					<td class="user_element"><?php echo $row["status_name"];?></td>
					<td class="user_element"><?php echo $row["surname"]." ".$row["name"]." ".$row["patronymic"];?> <br/> <?php echo $row["email"];?> <br/> <?php echo $row["phone_number"];?></td>
				</tr>
				<?php
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