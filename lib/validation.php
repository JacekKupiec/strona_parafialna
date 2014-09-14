<?php
	function validate_name($name) {
		$len = strlen($name);
		return len > 0 && len < 33 && preg_match('/^([A-Z]|Ą|Ć|Ę|Ł|Ń|Ó|Ś|Ż|Ź)([a-z]|ą|ć|ę|ł|ń|ó|ś|ź|ż){2,}$/', $name) === 1;
	}
	
	//Maksymalnie dwu członowe nazwiska
	function validate_surname($surname){
		$len = strlen($surname);
		return $len > 0 && $len < 65 && preg_match('/^([A-Z]|Ą|Ć|Ę|Ł|Ń|Ó|Ś|Ż|Ź)([a-z]|ą|ć|ę|ł|ń|ó|ś|ź|ż){2,}-([A-Z]|Ą|Ć|Ę|Ł|Ń|Ó|Ś|Ż|Ź)([a-z]|ą|ć|ę|ł|ń|ó|ś|ź|ż){2,}$/') === 1;
	}
	
	function validate_telephone_number($tel_num) {
		return is_integer($tel_num) && $tel_num >= pow(10, 7) && $tel_num < pow(10,9);
	}
	
	function validate_street_name($street_name) {
		len = strlen($street_name);
		return len > 0 && len < 129 && preg_match('/^([A-Z0-9]|Ą|Ć|Ę|Ł|Ń|Ó|Ś|Ż|Ź)([a-zA-Z0-9]|Ą|Ć|Ę|Ł|Ń|Ó|Ś|Ż|Ź|ą|ć|ę|ł|ń|ó|ś|ź|ż\ )+$/',$street_name) === 1;
	}
	
	function validate_home_number($home_number) {
		return is_null($home_number) || is_integer($home_number) || preg_match('/^$/',$home_number) === 1;
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
		
	}
	
	function validate_login($login) {
		return preg_match('/^[a-zA-Z0-9][a-zA-Z0-9\._-]{0,31}$/', $login) === 1;
	}
		
	function validate_email($email) {
		return filter_var($email, FILTER_VALIDATE_EMAIL) != false;
	}
?>
