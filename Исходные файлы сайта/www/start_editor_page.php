<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Главная страница редактора</title>
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
			a:link.head_last_news{
				font-size: 13px;
				color: black;
				font-family: Times New Roman;
				text-decoration: none;
				font-weight: bold;
			}
			a:hover.head_last_news{
				font-size: 13px;
				color: black;
				font-family: Times New Roman;
				text-decoration: underline;
				font-weight: bold;
			}
			a:visited.head_last_news {
				color: black;
			}
			a:link.head_main_news{
				font-size: 16px;
				color: black;
				font-family: Times New Roman;
				text-decoration: none;
				font-weight: bold;
				text-transform: uppercase;
			}
			a:hover.head_main_news{
				font-size: 16px;
				color: black;
				font-family: Times New Roman;
				text-decoration: underline;
				font-weight: bold;
				text-transform: uppercase;
			}
			a:visited.head_main_news {
				color: black;
			}
			.news {
				position: absolute;
				overflow: auto; padding: 10px;
				width: 220px; 
				background: #ECF5E4; 
				border-right: 1px solid #000000;
				top: 27px;
				bottom: 47px;
   			}
			.news_block {
				position: absolute;
				left: 9px;
				right: 9px;
			}
		   .mainnew {
			    position: absolute;
				overflow: auto; padding: 10px;
				top: 27px;
				left: 240px;
				bottom: 47px; 
				right: 0;
		   }
		   .last_news {
				background: #FDFDFD; 
				width: 98%; 
				margin: 0 10px 10px 0; 
				padding: 5px 0px; 
				text-align: center; 
				display: inline-block;
				border: 2px solid #8b8e4b;
		   }
		   .last_news img {
				border: 2px solid #8b8e4b;
				width: 150px;
				height: 90px;
		   }
		   .last_news p {
				margin: 0;
		   }
		   .main_new {
				background: #FDFDFD;
				width: 100%;
				margin: 15px auto;
				text-align: center;
				align: center;
				top: 10px;
				border: 2px solid #8b8e4b;
		   }
		   .main {
			   background: #ECF5E4;
				width: 90%;
				margin: 0 auto;
				text-align: center;
				align: center;
				border: 2px solid #8b8e4b;
		   }
		   img.mainimage {
			   border: 2px solid #8b8e4b;
				width: 350px;
				height: 240px;
		   }
		    p.main_new {
				margin: 0;
		   }
		   p.maintext {
			   padding-left: 15px;
			   padding-right: 15px;
			   text-align: justify;
		   }
		   p.welcome {
			   position: absolute;
			   top: -10px;
			   right: 5px;
			   font-weight: bold;
		   }
		</style>
	</head>
	<body>
		<table class="struct menu">
			<tr>
				<td class="element element_not_right">
					<a href = "start_editor_page.php?login=<?php echo $_GET['login']?>" class="select_menu">Главная</a>
				</td>
				<td class="element element_not_right">
					<a href = "create_article.php?login=<?php echo $_GET['login']?>" class="menu">Опубликовать статью</a>
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
		<?php 
			$con = mysqli_connect("localhost", "root", "");
			if (!$con) {
				exit('Connect Error (' . mysqli_connect_errno() . ') '
					. mysqli_connect_error());
			}
			else {
				mysqli_set_charset($con, 'utf8');
				mysqli_select_db($con, "newspaper_database");
				$articles = mysqli_query($con, "SELECT * FROM (SELECT article.article_id, article.article_name, article.text, article.date_public, article.time_public, article_photo.file_name 
					FROM article, article_photo WHERE article.article_id = article_photo.article_id AND article_photo.photo_num = 1) new_articles ORDER BY new_articles.date_public DESC, new_articles.time_public DESC;");
				$index = 1;
		?>
		<div class="news">
			<div class="news_block">
				<?php
				while ($row = mysqli_fetch_array($articles)) {
					if ($index > 1 && $index < 5) {
				?>
				<div class="last_news">
					<p><img src="<?php echo $row["file_name"];?>" alt="" /></p>
					<p><a class="head_last_news" href="article_only.php?action=start_editor&login=<?php echo $_GET['login']?>&article_id=<?php echo $row["article_id"]?>"><?php echo $row["article_name"];?></a></p>
				</div>
				<?php 
					}
					$index++;
				}
				?>
			</div>
		</div>
  		<div class="mainnew">
			<?php
				$editor = mysqli_query($con, "SELECT editor.surname, editor.name
						FROM editor WHERE editor.login = '".$_GET['login']."';");
				$row = mysqli_fetch_array($editor);
			?>
   			<p class="welcome">Здравствуйте, <?php echo $row["name"]." ".$row["surname"];?>!</p>
			<?php
				mysqli_data_seek($articles, 0);
				$row = mysqli_fetch_array($articles);
			?>
			<div class="main_new">
				<img src="biglogotip.jpg" alt="" />
				<div class="main">
					<p><img class = "mainimage" src="<?php echo $row["file_name"];?>" alt="" /></p>
					<p><a class="head_main_news" href="article_only.php?action=start_editor&login=<?php echo $_GET['login']?>&article_id=<?php echo $row["article_id"]?>"><?php echo $row["article_name"];?></a></p>
					<p class="maintext"><?php echo strtok($row["text"], '.')."...";?></p>
				</div></br>
			</div>
  		</div>
		<?php
			}
			mysqli_close($con);
		?>
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