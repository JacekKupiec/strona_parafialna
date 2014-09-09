<?php
/* Na koniec trzeba dorobić użytkowników ,żeby lepiej się zabezpieczyć*/
	function set_session() {
		if (!isset($_SESSION['login'])) {
			$_SESSION['login'] = logout;
			$_SESSION['user'] = guest;
		}
	}
	
	function login() {
		if ($_SERVER['REQUEST_METHOD'] === "POST" && !$_SESSION['login'] && $_GET['login_preceed'] === 'yes' && $_POST['seciurity_login_token'] === $_SESSION['seciurity_login_token']) 
		{
			$db = mysqli_connect('localhost', $_SESSION['user'],'123456', 'parafia');
			
			$stmt = $db->prepare("SELECT dane_logowania.login, dane_logowania.zaszyfrowane_haslo, parafianie.admin FROM dane_logowania 
			WHERE login = ? AND zaszyfrowane_haslo = ? LIMIT 1 LEFT JOIN parafianie ON parafianie.dane_logowania = dane_logowania.id");
			
			if ($stmt) 
			{
				if ($stmt->bind_param("ss", $_POST['login'], sha1($_POST['password']))) 
				{
					if ($stmt->execute())
					{
						$stmt->bind_result($login, $password, $admin);
						if ($stmt->fetch() == true) 
						{
							if ($admin === 1) 
								$_SESSION['user'] = admin;
							else
								$_SESSION['user'] = normal;
							
							$_SESSION['login'] = true;
							session_regenerate_id(true);
						}
					}
				}
			}
			
			$db->close();
		}
	}
	
	function registration() {
		if ($_SERVER['REQUEST_METHOD'] == "POST" && ($_SESSION['user'] === guest || $_SESSION['user'] === admin) && $_GET['registration_preceed'] == 'yes' && $_POST['seciurity_registratino_token'] === $_SESSION['seciurity_registration_token'])
		{
			$db = mysqli_connect('localhost', $_SESSION['user'], '123456', 'parafia');
			
			$stmt = $db->prepare('SELECT id FROM dane_logowania WHERE login = ? AND zaszyfrowane_haslo = ?');
			
			if ($stmt) 
			{
				if ($stmt->bind_param('ss', $_POST['login'], sha1($_POST['password'])))
				{
					if ($stmt->execute())
					{
						$stmt->bind_result($id);
						if ($stmt->fetch() == null) //znaczy ,że nie odnalezione w bazie danych co znaczy, że mogę zarejestrować użytkownika
						{
							$_SESSION['login'] = true;
							$_SESSION['user'] = 'normal';
						}
					}
				}
			}
			
			$db->close();
		}
	}
	
	function logout() {
		if ($_GET('security_logout_token') === $_SESSION['seciurity_logout_token']) 
		{
			session_destroy();
			$_SESSION['user'] = guest;
			$_SESSION['login'] = logout;
			session_start(); //Zaczynam śledzenie od początku
		}
	}
?>
