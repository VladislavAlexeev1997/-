<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Просмотр статьи</title>
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
			p.article_name{
				font-size: 18px;
				font-weight: bold;
				font-family: Times New Roman;
				text-transform: uppercase;
				text-align: center;
			}
			p.article_timedate{
				font-size: 14px;
				font-family: Times New Roman;
				text-align: left;
				font-style: italic;
			} 
			p.article_editor{
				font-size: 14px;
				font-family: Times New Roman;
				text-align: right;
				font-style: italic;
			}
			p.article_text {
				font-family: Times New Roman;
				font-size: 16px;
				text-align: justify;
				white-space: pre-line;
			}
			p.article_photo {
				text-align: center;
			}
			img.article_photo {
				width: 60%;
			}
			p.header_comments {
				font-size: 18px;
				font-weight: bold;
				font-family: Times New Roman;
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
		   .view_article_fon {
			    position: absolute;
				overflow: auto; padding: 10px;
				top: 0px;
				left: 0;
				bottom: 47px; 
				right: 0;
		   }
		   .view_article_form {
				padding-left: 20px;
				padding-right: 20px;
				width: 100%;
				margin: 0 auto;
				align: center;
				width: 75%;
				background: #FFFFFF;
				border: 2px solid #8b8e4b;
		   }
		   table.comment {
			  table-layout: fixed;
			  border-collapse: collapse; 
			  border: 3px solid #DDCD9C;
			}
			td.comment {
			  border: 2px solid #FFDEAD;
			  background: #FFDEAD;
			}
			td.name_subscr {
				border-radius: 15px 0 0 0;
				border-bottom:0px solid #FFDEAD;
				border-right:0px solid #FFDEAD;
				width: 420px;
			}
			td.data_comment {
				border-radius: 0 15px 0 0;
				border-bottom:0px solid #FFDEAD;
				border-left:0px solid #FFDEAD;
				width: 130px;
				font: normal 12px times new roman;
				text-align: center;
			}
			td.comment_text {
				border-top:0px solid #FFDEAD;
				border-bottom:0px solid #FFDEAD;
				text-indent:20px;
			}
			td.futter_comment {
				border-top:0px solid #FFDEAD;
				border-radius: 0 0 15px 15px;
				text-align: right;
				color: #FFDEAD;
			}
			p.padding_comment {
				font-size: 5px;
			}
			textarea.comment_text {
				width: 60%;
				height: 50px;
				font-family: Times New Roman;
				font-size: 14px;
				overflow: auto;
			}
		</style>
	</head>
	<body>
  		<div class="view_article_fon">
   			<div class="view_article_form">
				<?php
					$con = mysqli_connect("localhost", "root", "");
					if (!$con) {
						exit('Connect Error (' . mysqli_connect_errno() . ') '
						. mysqli_connect_error());
					}
					else {
						mysqli_set_charset($con, 'utf8');
						mysqli_select_db($con, "newspaper_database");
						$article = mysqli_query($con, "SELECT editor.surname, editor.name, article.article_name, article.text, 
							article.date_public, article.time_public, article_photo.file_name 
							FROM editor, article, article_photo WHERE article.article_id = '".$_GET['article_id']."' 
							AND article.editor_login = editor.login AND article_photo.article_id = article.article_id AND article_photo.photo_num = 1;");
						$row = mysqli_fetch_array($article);
				?>
				<p class="article_name"><?php echo $row['article_name']?></p>
				<p class="article_timedate">Публикация от <?php echo $row['date_public']." г. ".$row['time_public']?></p>
				<p class="article_text"><?php echo $row['text']?></p>
				<p class="article_photo"><img class="article_photo" src="<?php echo $row["file_name"];?>" alt="" /></p>
				<p class="article_editor"><?php echo $row['name']." ".$row['surname']?>, корреспондент газеты "Правда"</p>
				<?php
						if($_GET['action']=="start_admin") {
				?>
				<p><a class="cancel_button" href="start_admin_page.php?login=<?php echo $_GET['login']?>">Вернуться на исходную страницу</a></p>
				<?php
						}
						elseif($_GET['action']=="articles_admin") {
				?>
				<p><a class="cancel_button" href="publication_articles_admin.php?login=<?php echo $_GET['login']?>">Вернуться на исходную страницу</a></p>
				<?php
						}
						elseif($_GET['action']=="start_editor") {
				?>
				<p><a class="cancel_button" href="start_editor_page.php?login=<?php echo $_GET['login']?>">Вернуться на исходную страницу</a></p>
				<?php
						}
						elseif($_GET['action']=="articles_editor") {
				?>
				<p><a class="cancel_button" href="publication_articles_editor.php?login=<?php echo $_GET['login']?>">Вернуться на исходную страницу</a></p>
				<?php
						}
						elseif($_GET['action']=="start_subscr") {
				?>
				<p><a class="cancel_button" href="start_subscr_page.php?login=<?php echo $_GET['login']?>">Вернуться на исходную страницу</a></p>
				<?php
						}
						elseif($_GET['action']=="all_news_subscr") {
				?>
				<p><a class="cancel_button" href="all_news_subscr_page.php?login=<?php echo $_GET['login']?>">Вернуться на исходную страницу</a></p>
				<?php
						}
						elseif($_GET['action']=="all_news") {
				?>
				<p><a class="cancel_button" href="all_news_page.php">Вернуться на исходную страницу</a></p>
				<?php
						}
						else {
				?>
				<p><a class="cancel_button" href="index.php">Вернуться на исходную страницу</a></p>
				<?php
						}
						$comments = mysqli_query($con, "SELECT * FROM (SELECT subscriber.login, subscriber.surname, subscriber.name, subscriber.patronymic, 
							article_comment.date_public, article_comment.time_public, article_comment.text
							FROM subscriber, article_comment WHERE article_comment.article_id = '".$_GET['article_id']."' 
							AND article_comment.login = subscriber.login)comments ORDER BY comments.date_public ASC, comments.time_public ASC;");
						$index = 1;
						while ($row = mysqli_fetch_array($comments)) {
							if($index == 1) {
				?>
				<p class="header_comments">Комментарии к статье:</p>				
				<?php
							}
				?>
				<table class="comment">
					<tr>
						<td class="name_subscr comment"><b><?php echo $row["name"]." ".$row["patronymic"]." ".$row["surname"];?>, </b><i>подписчик</i></td>
						<td class="data_comment comment"><?php echo $row["date_public"];?> <i><?php echo $row["time_public"];?></i></td>
					</tr>
					<tr>
						<td colspan="2" class="comment_text comment"><?php echo $row["text"];?></td>
					</tr>
					<tr>
						<td colspan="2" class="futter_comment comment">
							<?php
							if ($_GET['action']=="start_admin" || $_GET['action']=="articles_admin"){	
							?>
							<a href="db_functions.php?action=<?php echo $_GET['action']?>&login=<?php echo $_GET['login']?>&article_id=<?php echo $_GET['article_id']?>&subscr_login=<?php echo $row["login"]?>&date=<?php echo $row["date_public"]?>&time=<?php echo $row["time_public"]?>&delete_comment=1">Удалить</a>
							<?php
							}
							else {
							?>
							.
							<?php
							}
							?>
						</td>
					</tr>
					<p class="padding_comment"></p>
				</table>
				<?php
							$index++;
						}
					}
					mysqli_close($con);
				?>
				<p></p>
				<?php
					if ($_GET['action']=="all_news_subscr" || $_GET['action']=="start_subscr") {
				?>
				<form action="db_functions.php?action=<?php echo $_GET['action']?>&login=<?php echo $_GET['login']?>&article_id=<?php echo $_GET['article_id']?>" method="POST">
						<p>Введите собственный комментарий: <br/>
							<textarea class="comment_text" name="comment_text"></textarea><br/>
						<input type="submit" name="create_comment" value="Отправить комментарий"></p>
				</form>
				<?php
					}
				?>
				<p></p>
			</div>
  		</div>
  		<table class="struct footer">
			<tr>
				<td class="element">
					<?php
						if ($_GET['action']=="start_admin" || $_GET['action']=="articles_admin") {
					?>
					<a href = "start_admin_page.php?login=<?php echo $_GET['login']?>"><img src="logotip.jpg"></a>
					<?php
						}
						elseif ($_GET['action']=="start_editor" || $_GET['action']=="articles_editor") {
					?>
					<a href = "start_editor_page.php?login=<?php echo $_GET['login']?>"><img src="logotip.jpg"></a>
					<?php
						}
						elseif ($_GET['action']=="start_subscr" || $_GET['action']=="all_news_subscr") {
					?>
					<a href = "start_subscr_page.php?login=<?php echo $_GET['login']?>"><img src="logotip.jpg"></a>
					<?php
						}
						else {
					?>
					<a href = "index.php"><img src="logotip.jpg"></a>
					<?php
						}
					?>
				</td>
				<td class="element" >
					<font color="white">© Редакция газеты «Правда», 2008–2019<br/>
					Возрастное ограничение 12+</font>
				</td>
			</tr>
		</table>
	</body>