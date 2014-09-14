<?php
	define('logout_error', 'Nie zostaniesz wylogowany bo nie masz do tego uprawnień!');
	define('login_incorrect', 'Pierwsza znak to mała litera, następnie możesz podać duże i małe litery, cyfry i podkreślenia, bez polskich znaków, login może mieć maksymalnie 32 znaki');
	define('password_incorrect', 'Niewłaściwe hasło');
	define('image_incorrect', 'Możesz wysłać plik tylko w formacie JPG, PNG lub GIF');
	define('name_incorrect', 'Imię składa się tylko z liter, maksymalnie 32 litery');
	define('surname_invalid', 'Nazwisko może być maksymalnie 64 literowe, jeśli jest dwuczłonowe to użyć średnika, ale bez spacji');
	define('tel_num_invalid', 'Numer telefonu podany błędnie.');

	function validate_name($name) {
		$len = strlen($name);
		return len > 0 && len < 33 && preg_match('/^([A-Z]|Ą|Ć|Ę|Ł|Ń|Ó|Ś|Ż|Ź)([a-z]|ą|ć|ę|ł|ń|ó|ś|ź|ż){2,}$/', $name) === 1 
		? null : name_incorrect;
	}
	
	//Maksymalnie dwu członowe nazwiska
	function validate_surname($surname){
		$len = strlen($surname);
		return $len > 0 && $len < 65 && preg_match('/^([A-Z]|Ą|Ć|Ę|Ł|Ń|Ó|Ś|Ż|Ź)([a-z]|ą|ć|ę|ł|ń|ó|ś|ź|ż){2,}-([A-Z]|Ą|Ć|Ę|Ł|Ń|Ó|Ś|Ż|Ź)([a-z]|ą|ć|ę|ł|ń|ó|ś|ź|ż){2,}$/') === 1 
		? null : surname_invalid;
	}
	
	function validate_telephone_number($tel_num) {
		return is_integer($tel_num) && $tel_num >= pow(10, 7) && $tel_num < pow(10,9) ? null : tel_num_invalid;
	}
	
	function validate_street_name($street_name) {
		$len = strlen($street_name);
		return $len > 0 && $len < 129 && preg_match('/^([A-Z0-9]|Ą|Ć|Ę|Ł|Ń|Ó|Ś|Ż|Ź)([a-zA-Z0-9]|Ą|Ć|Ę|Ł|Ń|Ó|Ś|Ż|Ź|ą|ć|ę|ł|ń|ó|ś|ź|ż\ )+$/',$street_name) === 1;
	}
	
	function validate_home_number($home_number) {
		return is_null($home_number) || is_integer($home_number) || preg_match('/^$/',$home_number) === 1 
		? null : tel_num_invalid;
	}
	
	function validate_staircase($staircase) {
		return is_null($staircase) || preg_match('/^[A-Z]$/',$staircase) === 1;
	}
	
	function validate_post_code($post_code) {
		return strlen($post_code) === 5 && preg_match('/^[0-9]{2}-[0-9]{3}$/',$post_code) === 1;
	}
	
	function validate_adress($country, $city, $street, $home_number, $staircase, $flat_number, $post_code) {
		return validate_name($country) && validate_name($city) && validate_street_name($street) && 
		validate_home_number($home_number) && validate_staircase($staircase) && validate_flat_number($flat_number) && 
		validate_post_code($post_code);
	}
	
	function validate_image($image, $type) {
		$file = new finfo(FILEINFO_MIME);
		
		return (preg_match('/$image\/(jpeg|jpg|gif|png)/', $file->file($image)) === 1) ? null : image_incorrect;
	}
	
	function validate_login($login) {
		return (preg_match('/^[a-zA-Z0-9][a-zA-Z0-9\._-]{0,31}$/', $login) === 1) ? null : login_incorrect;
	}
		
	function validate_email($email) {
		return filter_var($email, FILTER_VALIDATE_EMAIL) != false;
	}
	
	function validate_password($password, $confirmed = null) {
		if (is_null($confirmed)) {
			$len = strlen($password);
			return $len > 0 && len < 41;
		} else {
			$len = strlen($password);
			return $len > 0 && $len < 41 && $password === $confirmed;
		}
	}
	
	function validate_registration_form($login, $email, $password, $confirmed_password, $name, $surname, 
			$tel_num, $country, $city, $street, $house_number, $staircase, $flat_number, $_post_code) {
		$reval = true;
		$tab = array('login' => validate_login($login), 'email' => validate_email($email), 
		'password' => validate_password($password, $confirmed_password), 'name' => validate_name($name), 
		'surname' => validate_surname($surname), 'telephone' => validate_telephone_number($tel_num),
		'country' => validate_country($country), 'city' => validate_city($city), 'street' => validate_street($street),
		'home_number' => validate_home_number($home_number), 'staircase' => validate_staircase($staircase),
		'flat_number' => validate_flat_number($flat_number), 'post-code' => validate_post_code($post_code));
		
		foreach($tab as $val) {
			$reval = $reval && is_null($val);
		}
		
		return $reval ? $reval : $tab;
	}
			
	function validate_login_form($login, $password) {
		$reval = true;
		$tab = array('login' => validate(login), 'password' => validate_password($password));
		
		foreach($tab as $val) {
			$reval = $reval && is_null($val);
		}
		
		return $reval ? $reval : $tab;
	}
?>
