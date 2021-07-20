<?php
	if (isset($_POST["authitication"])) {
		authitication();
	}
	if (isset($_POST["add_subscr"])) {
		add_subscriber();
	}
	if (isset($_POST["registration_subscr"])) {
		registration_subscr();
	}
	if (isset($_POST["add_editor"])) {
		add_editor();
	}
	if (isset($_POST["update_admin_password"])) {
		update_admin_password();
	}
	if (isset($_POST["update_editor_password"])) {
		update_editor_password();
	}
	if (isset($_POST["update_subscr_password"])) {
		update_subscr_password();
	}
	if (isset($_POST["update_editor_data"])) {
		update_editor_data();
	}
	if (isset($_POST["update_subscr_data"])) {
		update_subscr_data();
	}
	if (isset($_POST["create_article"])) {
		create_article();
	}
	if (isset($_GET["delete_article"])) {
		delete_article();
	}
	if (isset($_POST["edit_article"])) {
		edit_article();
	}
	if (isset($_POST["create_comment"])) {
		create_comment();
	}
	if (isset($_GET["delete_comment"])) {
		delete_comment();
	}

	function authitication() {
		$con = mysqli_connect("localhost", "root", "");
		if (!$con) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
		}
		else {
			mysqli_set_charset($con, 'utf8');
			mysqli_select_db($con, "newspaper_database");
			$login = $_POST['login'];
			$password = $_POST['password'];
			if (!empty($login) && !empty($password)) {
				if (isset($login, $password)) {
					$request = mysqli_query($con, "SELECT * FROM user WHERE login='" . $login . "' AND password ='" . $password . "'");
					if (mysqli_num_rows($request) < 1) {
						header('Location: authorization.php?exception=<?php echo true ?>');
						include 'authorization.php';
					}
					else {
						$row = mysqli_fetch_array($request);
						if ($row["status_id"] == "admin") {
							header('Location: start_admin_page.php?login='.$login);
							include 'start_admin_page.php';
						}
						elseif ($row["status_id"] == "editor") {
							header('Location: start_editor_page.php?login='.$login);
							include 'start_editor_page.php';
						}
						else {
							header('Location: start_subscr_page.php?login='.$login);
							include 'start_subscr_page.php';
						}
					}
					mysqli_free_result($request);
				}
				else {
					header('Location: authorization.php?exception='.true);
					include 'authorization.php';
				}
			}
			else {
				header('Location: authorization.php?exception='.true);
				include 'authorization.php';
			}
		}
		mysqli_close($con);
	}
	
	function add_subscriber() {
		$con = mysqli_connect("localhost", "root", "");
		if (!$con) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
		}
		else {
			mysqli_set_charset($con, 'utf8');
			mysqli_select_db($con, "newspaper_database");
			$login = $_POST['login_subscr'];
			$password = $_POST['password_sudscr'];
			$surname = $_POST['surname_sudscr'];
			$name = $_POST['name_sudscr'];
			$patronymic = $_POST['patronymic_sudscr'];
			$email = $_POST['email_sudscr'];
			$phone_number = $_POST['phone_number_sudscr'];
			$sql_user = "INSERT INTO user(login, password, status_id) VALUES ('".$login."', '".$password."', 'subscr')";
			$sql_subscriber = "INSERT INTO subscriber(login, surname, name, patronymic) VALUES ('".$login."', '".$surname."', '".$name."', '".$patronymic."')";
			$request = mysqli_query($con, $sql_user);
			$request = mysqli_query($con, $sql_subscriber);
			if (isset($email, $phone_number)) {
				$sql_subscriber_info = "INSERT INTO subscriber_info(login, email, phone_number) VALUES ('".$login."', '".$email."', '".$phone_number."')";
				$request = mysqli_query($con, $sql_subscriber_info);
			}
		}
		mysqli_close($con);
		header('Location: users_admin_page.php?login='.$_GET['login']);
		include 'users_admin_page.php';
	}
	
	function registration_subscr() {
		$con = mysqli_connect("localhost", "root", "");
		if (!$con) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
		}
		else {
			mysqli_set_charset($con, 'utf8');
			mysqli_select_db($con, "newspaper_database");
			$login = $_POST['login_subscr'];
			$password = $_POST['password_sudscr'];
			$surname = $_POST['surname_sudscr'];
			$name = $_POST['name_sudscr'];
			$patronymic = $_POST['patronymic_sudscr'];
			$email = $_POST['email_sudscr'];
			$phone_number = $_POST['phone_number_sudscr'];
			$sql_user = "INSERT INTO user(login, password, status_id) VALUES ('".$login."', '".$password."', 'subscr')";
			$sql_subscriber = "INSERT INTO subscriber(login, surname, name, patronymic) VALUES ('".$login."', '".$surname."', '".$name."', '".$patronymic."')";
			$request = mysqli_query($con, $sql_user);
			$request = mysqli_query($con, $sql_subscriber);
			if (isset($email, $phone_number)) {
				$sql_subscriber_info = "INSERT INTO subscriber_info(login, email, phone_number) VALUES ('".$login."', '".$email."', '".$phone_number."')";
				$request = mysqli_query($con, $sql_subscriber_info);
			}
		}
		mysqli_close($con);
		header('Location: authorization.php');
		include 'authorization.php';
	}
	
	function add_editor() {
		$con = mysqli_connect("localhost", "root", "");
		if (!$con) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
		}
		else {
			mysqli_set_charset($con, 'utf8');
			mysqli_select_db($con, "newspaper_database");
			$login = $_POST['login_editor'];
			$password = $_POST['password_editor'];
			$surname = $_POST['surname_editor'];
			$name = $_POST['name_editor'];
			$email = $_POST['email_editor'];
			$sql_user = "INSERT INTO user(login, password, status_id) VALUES ('".$login."', '".$password."', 'editor')";
			$sql_editor = "INSERT INTO editor(login, surname, name, email) VALUES ('".$login."', '".$surname."', '".$name."', '".$email."')";
			$request = mysqli_query($con, $sql_user);
			$request = mysqli_query($con, $sql_editor);
		}
		mysqli_close($con);
		header('Location: users_admin_page.php?login='.$_GET['login']);
		include 'users_admin_page.php';
	}
	
	function update_admin_password() {
		$con = mysqli_connect("localhost", "root", "");
		if (!$con) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
		}
		else {
			mysqli_set_charset($con, 'utf8');
			mysqli_select_db($con, "newspaper_database");
			$login = $_GET['login'];
			$old_password = $_POST['old_password'];
			$new_password = $_POST['new_password'];
			$sql_update_password = "UPDATE user SET password='".$new_password."' WHERE user.login='".$login."' AND user.password='".$old_password."';";
			$request = mysqli_query($con, $sql_update_password);
		}
		mysqli_close($con);
		header('Location: start_admin_page.php?login='.$_GET['login']);
		include 'start_admin_page.php';
	}
	
	function update_editor_password() {
		$con = mysqli_connect("localhost", "root", "");
		if (!$con) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
		}
		else {
			mysqli_set_charset($con, 'utf8');
			mysqli_select_db($con, "newspaper_database");
			$login = $_GET['login'];
			$old_password = $_POST['old_password'];
			$new_password = $_POST['new_password'];
			$sql_update_password = "UPDATE user SET password='".$new_password."' WHERE user.login='".$login."' AND user.password='".$old_password."';";
			$request = mysqli_query($con, $sql_update_password);
		}
		mysqli_close($con);
		header('Location: start_editor_page.php?login='.$_GET['login']);
		include 'start_editor_page.php';
	}
	
	function update_subscr_password() {
		$con = mysqli_connect("localhost", "root", "");
		if (!$con) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
		}
		else {
			mysqli_set_charset($con, 'utf8');
			mysqli_select_db($con, "newspaper_database");
			$login = $_GET['login'];
			$old_password = $_POST['old_password'];
			$new_password = $_POST['new_password'];
			$sql_update_password = "UPDATE user SET password='".$new_password."' WHERE user.login='".$login."' AND user.password='".$old_password."';";
			$request = mysqli_query($con, $sql_update_password);
		}
		mysqli_close($con);
		header('Location: start_subscr_page.php?login='.$_GET['login']);
		include 'start_subscr_page.php';
	}
	
	function update_editor_data() {
		$con = mysqli_connect("localhost", "root", "");
		$log = "";
		if (!$con) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
		}
		else {
			mysqli_set_charset($con, 'utf8');
			mysqli_select_db($con, "newspaper_database");
			$login = $_GET['login'];
			$new_login = $_POST['new_login'];
			$new_surname = $_POST['new_surname'];
			$new_name = $_POST['new_name'];
			$new_email = $_POST['new_email'];
			if (isset($new_login)){
				$sql_update_login = "UPDATE user SET login='".$new_login."' WHERE user.login='".$login."';";
				$request = mysqli_query($con, $sql_update_login);
				$log = $new_login;
			}
			else {
				$log = $login;
			}
			if (isset($new_surname)){
				$sql_update_surname = "UPDATE editor SET surname='".$new_surname."' WHERE editor.login='".$log."';";
				$request = mysqli_query($con, $sql_update_surname);
			}
			if (isset($new_name)){
				$sql_update_name = "UPDATE editor SET name='".$new_name."' WHERE editor.login='".$log."';";
				$request = mysqli_query($con, $sql_update_name);
			}
			if (isset($new_email)){
				$sql_update_email = "UPDATE editor SET email='".$new_email."' WHERE editor.login='".$log."';";
				$request = mysqli_query($con, $sql_update_email);
			}
		}
		mysqli_close($con);
		header('Location: setting_data_editor_page.php?login='.$log);
		include 'setting_data_editor_page.php';
	}
	
	function update_subscr_data() {
		$con = mysqli_connect("localhost", "root", "");
		$log = "";
		if (!$con) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
		}
		else {
			mysqli_set_charset($con, 'utf8');
			mysqli_select_db($con, "newspaper_database");
			$login = $_GET['login'];
			$new_login = $_POST['new_login'];
			$new_surname = $_POST['new_surname'];
			$new_name = $_POST['new_name'];
			$new_patronymic = $_POST['new_patronymic'];
			$new_email = $_POST['new_email'];
			$new_phone_number = $_POST['new_phone_number'];
			if (isset($new_login)){
				$sql_update_login = "UPDATE user SET login='".$new_login."' WHERE user.login='".$login."';";
				$request = mysqli_query($con, $sql_update_login);
				$log = $new_login;
			}
			else {
				$log = $login;
			}
			if (isset($new_surname)){
				$sql_update_surname = "UPDATE subscriber SET surname='".$new_surname."' WHERE subscriber.login='".$log."';";
				$request = mysqli_query($con, $sql_update_surname);
			}
			if (isset($new_name)){
				$sql_update_name = "UPDATE subscriber SET name='".$new_name."' WHERE subscriber.login='".$log."';";
				$request = mysqli_query($con, $sql_update_name);
			}
			if (isset($new_patronymic)){
				$sql_update_patronymic = "UPDATE subscriber SET patronymic='".$new_patronymic."' WHERE subscriber.login='".$log."';";
				$request = mysqli_query($con, $sql_update_patronymic);
			}
			if (isset($new_email)){
				$sql_update_email = "UPDATE subscriber_info SET email='".$new_email."' WHERE subscriber_info.login='".$log."';";
				$request = mysqli_query($con, $sql_update_email);
			}
			if (isset($new_phone_number)){
				$sql_update_phone_number = "UPDATE subscriber_info SET phone_number='".$new_phone_number."' WHERE subscriber_info.login='".$log."';";
				$request = mysqli_query($con, $sql_update_phone_number);
			}
		}
		mysqli_close($con);
		header('Location: setting_data_subscr_page.php?login='.$log);
		include 'setting_data_subscr_page.php';
	}
	
	function create_article() {
		$con = mysqli_connect("localhost", "root", "");
		if (!$con) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
		}
		else {
			mysqli_set_charset($con, 'utf8');
			mysqli_select_db($con, "newspaper_database");
			$editor_login = $_GET['login'];
			$article_name = $_POST['article_name'];
			$article_text = $_POST['article_text'];
			$now_date = date("d.m.Y", time() + 2 * 3600);
			$now_time = date("H:i:s", time() + 2 * 3600);
			$article_id = $editor_login.$now_date.$now_time;
			$sql_article = "INSERT INTO article(article_id, editor_login, article_name, text, date_public, time_public) 
				VALUES ('".$article_id."', '".$editor_login."', '".$article_name."', '".$article_text."', '".$now_date."', '".$now_time."')";
			$request = mysqli_query($con, $sql_article);
			$uploads_dir = "articles/".$editor_login."_".$now_date."_".date("H_i_s", time() + 2 * 3600)."/";
			mkdir($uploads_dir, 0700);
			$index = 1;
			foreach ($_FILES['article_files']["error"] as $key => $error) {
				$tmp_name = $_FILES["article_files"]["tmp_name"][$key];
				$name = $_FILES["article_files"]["name"][$key];
				move_uploaded_file($tmp_name, $uploads_dir.$name);
				$sql_picture = "INSERT INTO article_photo(article_id, photo_num, file_name) 
					VALUES ('".$article_id."', '".$index."', '".$uploads_dir.$name."')";
				$request = mysqli_query($con, $sql_picture);
				$index++;
			}
		}
		mysqli_close($con);
		header('Location: start_editor_page.php?login='.$_GET['login']);
		include 'start_editor_page.php';
	}
	
	function delete_article() {
		$con = mysqli_connect("localhost", "root", "");
		if (!$con) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
		}
		else {
			mysqli_set_charset($con, 'utf8');
			mysqli_select_db($con, "newspaper_database");
			$login = $_GET['login'];
			$article_id = $_GET['article_id'];
			$sql_delete_photos = "DELETE FROM article_photo WHERE article_id='".$article_id."';";
			$request = mysqli_query($con, $sql_delete_photos);
			$sql_delete_article = "DELETE FROM article WHERE article_id='".$article_id."';";
			$request = mysqli_query($con, $sql_delete_article);
		}
		mysqli_close($con);
		header('Location: publication_articles_admin.php?login='.$_GET['login']);
		include 'publication_articles_admin.php';
	}
	
	function edit_article() {
		$con = mysqli_connect("localhost", "root", "");
		if (!$con) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
		}
		else {
			mysqli_set_charset($con, 'utf8');
			mysqli_select_db($con, "newspaper_database");
			$article_name = $_POST['article_name'];
			$article_text = $_POST['article_text'];
			$article_id = $_GET['article_id'];
			if (isset($article_name)) {
				$sql_update_article_name = "UPDATE article SET article_name='".$article_name."' WHERE article.article_id='".$article_id."';";
				$request = mysqli_query($con, $sql_update_article_name);
			}
			if (isset($article_text)) {
				$sql_update_article_text = "UPDATE article SET article_text='".$article_text."' WHERE article.article_id='".$article_id."';";
				$request = mysqli_query($con, $sql_update_article_text);
			}
			$arr_count=0;
			for ($i=0; $i<count($_FILES['filename']); $i++) {
				$cv_err=$_FILES['filename'][$i]['error'];
				if($cv_err===0) {
					$arr_count++;
				}
			}
			if ($arr_count > 0) {
				$sql_delete_old_photo = "DELETE FROM article_photo WHERE article_id='".$article_id."';";
				$request = mysqli_query($con, $sql_delete_old_photo);
				$uploads_dir = "articles/".$_GET['login']."_".date("d.m.Y", time() + 2 * 3600)."_".date("H_i_s", time() + 2 * 3600)."/";
				mkdir($uploads_dir, 0700);
				$index = 1;
				foreach ($_FILES['article_files']["error"] as $key => $error) {
					$tmp_name = $_FILES["article_files"]["tmp_name"][$key];
					$name = $_FILES["article_files"]["name"][$key];
					move_uploaded_file($tmp_name, $uploads_dir.$name);
					$sql_picture = "INSERT INTO article_photo(article_id, photo_num, file_name) 
						VALUES ('".$article_id."', '".$index."', '".$uploads_dir.$name."')";
					$request = mysqli_query($con, $sql_picture);
					$index++;
				}
			}
		}
		mysqli_close($con);
		header('Location: publication_articles_editor.php?login='.$_GET['login']);
		include 'publication_articles_editor.php';
	}
	
	function create_comment() {
		$con = mysqli_connect("localhost", "root", "");
		if (!$con) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
		}
		else {
			mysqli_set_charset($con, 'utf8');
			mysqli_select_db($con, "newspaper_database");
			$login = $_GET['login'];
			$article_id = $_GET['article_id'];
			$text = $_POST['comment_text'];
			$now_date = date("d.m.Y", time() + 2 * 3600);
			$now_time = date("H:i:s", time() + 2 * 3600);
			$sql_subscriber = "INSERT INTO article_comment(article_id, login, date_public, time_public, text) VALUES ('".$article_id."', '".$login."', '".$now_date."', '".$now_time."', '".$text."')";
			$request = mysqli_query($con, $sql_subscriber);
		}
		mysqli_close($con);
		header('Location: article_only.php?action='.$_GET['action'].'&login='.$_GET['login'].'&article_id='.$_GET['article_id']);
		include 'article_only.php';
	}
	
	function delete_comment() {
		$con = mysqli_connect("localhost", "root", "");
		if (!$con) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
		}
		else {
			mysqli_set_charset($con, 'utf8');
			mysqli_select_db($con, "newspaper_database");
			$sql_delete_comment = "DELETE FROM article_comment WHERE article_id='".$_GET['article_id']."'AND login='".$_GET['subscr_login']."' AND date_public='".$_GET['date']."' AND time_public='".$_GET['time']."';";
			$request = mysqli_query($con, $sql_delete_comment);
		}
		mysqli_close($con);
		header('Location: article_only.php?action='.$_GET['action'].'&login='.$_GET['login'].'&article_id='.$_GET['article_id']);
		include 'article_only.php';
	}
?>