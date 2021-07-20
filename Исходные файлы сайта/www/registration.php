<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Регистрация</title>
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
			table.footer  {
			  left: 0; bottom: 0;
			}
			td.element {
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
			a:link.cancel_button{
				color: blue;
				text-decoration: none;
			}
			a:hover.cancel_button{
				color: blue;
				text-decoration: underline;
			}
			a:visited.cancel_button {
				color: blue;
			}
		   .create_subscriber_fon {
			    position: absolute;
				overflow: auto; padding: 10px;
				top: 0px;
				left: 0;
				bottom: 47px; 
				right: 0;
		   }
		   .create_subscriber_form {
				position: absolute;
				top: 10%;
				left: 20%; 
				right: 15%;
				width: 60%;
				padding: 10px;
				background: #ECF5E4;
				border: solid 1px black;
		   }
		</style>
	</head>
	<body>
  		<div class="create_subscriber_fon">
   			<div class="create_subscriber_form">
				<form action="db_functions.php" method="POST">
					<center>
						<p>Введите данные для регистрации на сайте:</p>
						<p>Ваш логин *: <input type="text" name="login_subscr"></p>
						<p>Ваш пароль *: <input type="text" name="password_sudscr"></p>					
						<p>Фамилия *: <input type="text" name="surname_sudscr"></p>
						<p>Имя *: <input type="text" name="name_sudscr"></p>
						<p>Отчество *: <input type="text" name="patronymic_sudscr"></p>					
						<p>Email: <input type="text" name="email_sudscr"></p>
						<p>Номер телефона: <input type="text" name="phone_number_sudscr"></p>
						<br/><p>* - поля для обязательного заполнения<p/>
						<p><input type="submit" name="registration_subscr" value="Зарегистрироваться">  
						   <a class="cancel_button" href="authorization.php">Назад</a></p>
					</center>
				</form>
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