<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Редактирование статьи</title>
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
				top: 0px;
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
  		<div class="create_article_fon">
   			<div class="create_article_form">
				<?php
					$con = mysqli_connect("localhost", "root", "");
					if (!$con) {
						exit('Connect Error (' . mysqli_connect_errno() . ') '
						. mysqli_connect_error());
					}
					else {
						mysqli_set_charset($con, 'utf8');
						mysqli_select_db($con, "newspaper_database");
						$articles = mysqli_query($con, "SELECT * FROM article WHERE article.article_id = '".$_GET['article_id']."';");
						$row = mysqli_fetch_array($articles);
				?>
				<form enctype="multipart/form-data" action="db_functions.php?login=<?php echo $_GET['login']?>&article_id=<?php echo $_GET['article_id']?>" method="POST">
					<center>
						<p>Отредактируйте данные для редактирования статьи:</p>
					</center>
						<p>Наименование статьи: <input class="article_name" type="text" name="article_name" value="<?php echo $row['article_name']?>"></p>
						<p>Основной текст статьи: <br/>
							<textarea class="article_text" name="article_text"><?php echo $row['text']?></textarea></p>
						<p>Новый фоторепортаж статьи: <input name="article_files[]" type="file" multiple></p>
						<p><input type="submit" name="edit_article" value="Отредактировать статью">  
						   <a class="cancel_button" href="publication_articles_editor.php?login=<?php echo $_GET['login']?>">Отмена</a></p>
				</form>
				<?php
					}
					mysqli_close($con);
				?>
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