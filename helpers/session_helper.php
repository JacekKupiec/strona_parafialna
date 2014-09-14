<?php

require_once 'lib/constants.php';
require_once 'lib/validation.php';

/* Na koniec trzeba dorobić użytkowników ,żeby lepiej się zabezpieczyć*/
	function set_session() {
		if (!isset($_SESSION['login'])) {
			$_SESSION['login'] = logout;
			$_SESSION['user'] = guest;
			$_SESSION[secure_login_token] = uniqid();
			$_SESSION[secure_logout_token] = uniqid();
			$_SESSION[secure_registration_token] = uniqid();
		}             
	}
	
	function login() {
		if (!is_set($_POST['login_button']))
			return null;
		
		if ($_SERVER['REQUEST_METHOD'] === "POST" && !$_SESSION['login'] && $_POST['login_button'] === 'Zaloguj' && $_POST['hidden'] === $_SESSION[secure_login_token]) 
		{
			$db = mysqli_connect('localhost', $_SESSION['user'],'123456', 'parafia');
			
			$stmt = $db->prepare("SELECT dane_logowania.login, dane_logowania.zaszyfrowane_haslo, parafianie.admin FROM dane_logowania 
			LEFT JOIN parafianie ON parafianie.dane_logowania = dane_logowania.id WHERE login = ? AND zaszyfrowane_haslo = ?");
			
			$stmt->bind_param("ss", $_POST['login'], sha1($_POST['password']));
			$stmt->execute();
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
			
			$db->close();
		}
		else return false;
	}
	
	function registration() {
		if (!is_set($_POST['registration_button']))
			return null;
		
		if ($_SERVER['REQUEST_METHOD'] == "POST" && ($_SESSION['user'] === guest || $_SESSION['user'] === admin) 
		&& $_POST['registration_button'] === 'Zarejestruj' && $_POST['hidden'] === $_SESSION[seciurity_registration_token])
		{
			$db = mysqli_connect('localhost', $_SESSION['user'], '123456', 'parafia');
			$login = $_POST['login'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirmed_password = $_POST['confirmed_password'];
			$name = $_POST['name'];
			$surname = $_POST['surname'];
			$tel_num = $_POST['telephone_number'];
			$country = $_POST['country'];
			$city = $_POST['city'];
			$street = $_POST['street'];
			$house_number = $_POST['house_number'];
			$staircase = $_POST['staircase'];
			$flat_number = $_POST['flat_number'];
			$post_code = $_POST['post_code'];
			
			if ($_SESSION['user'] === admin)
			{
				if ($_POST[priest] === priest)
					$ksiadz = $_POST[priest];
				if ($_POST[admin] === admin)
					$admin = $_POST[admin];
			}
			
			if (validate_registration_form($login, $email, $password, $confirmed_password, $name, $surname, 
			$tel_num, $country, $city, $street, $house_number, $staircase, $flat_number, $_post_code) === true) {
				$stmt = $db->prepare('SELECT id FROM dane_logowania WHERE login = ? AND email = ? LIMIT 1');
				$stmt->bind_param('ss', $login, $email);
				$stmt->execute();
				$stmt->bind_result($id);
				//znaczy ,że nie odnalezione w bazie danych co znaczy, że mogę zarejestrować użytkownika			
				if ($stmt->fetch() == null) 
				{
					$stmt->close();
					$stmt = $db->
					$stmt = $db->prepare('INSERT INTO parafianie (imie, nazwisko, dane_logowania, id_adresu, nr_telefonu, 
					id_zdjecia, admin, ksiadz) VALUES (?,?,?,?,?,?,?,?))');
					$stmt->bind_params('d',$name, $surname, $id_log, $id_adress, $tel_num, $id_img, $admin, $priest);
					$stmt->execute();
					$stmt->close();
						
					$_SESSION['login'] = true;
					$_SESSION['user'] = 'normal';
				}
				
				$db->close();
			}
		}
		else return false; 
	}
	
	function logout() {
		if (!is_set($_GET[secure_logout_token]))
			return null;
		else if ($_GET(secure_logout_token) === $_SESSION[secure_logout_token]) 
		{
			session_destroy();
			//tu usunąć ciastka jak byłyby jakieś potrzebne
			session_start(); //Zaczynam śledzenie od początku
			$_SESSION['user'] = guest;
			$_SESSION['login'] = logout;
		}
		else return array('logout' => logout_error);
	}
?>
