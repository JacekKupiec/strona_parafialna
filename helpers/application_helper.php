<?php 
require_once 'lib/constants.php';

function menu() {
	echo <<<END
	<div class="dropdown-list-tab">
		<div class="dropdown-list-tab">
		<a href="index.php">Strona główna</a>
		</div>
		<div class="dropdown-list-tab">
		<a href="kontakt.php">Kontakt</a>
		</div>
		<div class="dropdown-list-tab">
		<a href="historia.php">Historia</a>
		</div>
		<div class="dropdown-list-tab">
		<a href="ksieza.php">Duszpasterze</a>
		</div>
		 <ul>
			<!-- Księża też z bazy -->
			 <li><a href>Tadeusz Balicki</a></li>
			 <li><a href>Piotr Przyborek</a></li>
		 </ul>
		 <a href="ogloszenia.php?q=current">Ogłoszenia parafialne</a>
		 <ul>
			 <li><a href="ogloszenia.php?q=archiwum">Archiwum</a></li>
		 </ul>
	 </div>
    <div class="dropdown-list-tab">
        <a href="grupy_duszpasterskie.php">Grupy duszpasterskie</a>
        <ul>
        		<!-- Wspólnoty z bazy danych -->
            <li><a>Rada parafialna</a></li>
            <li><a>Ucho Igielne</a></li>
            <li><a>Służba liturgiczna</a></li>
            <li><a>Semper fidelis</a></li>
            <li><a>Żywy Różaniec</a></li>
        </ul> 
    </div>
    <div class="dropdown-list-tab">
        <a href="galeria.php">Galeria zdjęć</a>
        <ul>
        		<!-- Tutaj powinny byc wylistowane galeria z bazy danych -->
            <li>Szczyrk 2014</li>
            <li> Pożegnanie księdza proboszcza</li>
        </ul>
    </div>
END;
}

function banner($banner) {
	echo "<img src=\"$banner\" alt=\"banner\" />";
}

function title($title) {
	echo "<h1>$title</h1>";
}

function headers() {
	echo <<<END
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>Parafia NMP Matki Kościoła i św. Katarzyny Szwedzkiej</title>
	<link rel="stylesheet" type="text/css" href="assets/css/application.css" />
	<script type="text/javascript" src="assets/javascript/jquery-1.11.1.min.js"></script>
END;
}

function form_login($php_script, $seciurity_login_token) {
	echo <<<END
		<form name="log" class="login" method="post" action="$php_script?login_preceed=yes">
			<label for="login">Login:</label><input type="text" placeholder="Tu wpisz swój login" name="login" maxlength="32" required ><br>
			<label for="password">Hasło:</label><input type="password" placeholder="Podaj hasło" name="password" maxlength="50" required ><br>
			<input type="hidden" name="hidden" value="$seciurity_login_token" >
			<input type="submit" value="Zaloguj" >
		</form>
END;
}

//Dorobić ,żeby możliwość zaznaczenia admin wyświetlała się tylko adminowi
function form_registration($php_script, $seciurity_registration_token) {
	echo <<<END
	<form name="reg" class="registration" method="post" action="$php_script?registration_preceed=yes" enctype="multipart/form-data" >
		<table>
		<tr><td><label for="name">Imię:</label></td><td><input id="name" name="name" type="text" maxlength="32" required ></td></tr>
		<tr><td><label for="surname">Nazwisko:</label></td><td><input id="surname" name="surname" type="text" maxlength="50" required ></td></tr>
		<tr><td><label for="telephone">Numer telefonu:</label></td><td><input id="telephone" name="telephone" type="text" maxlength="12"></td></tr>
		<tr><td><label for="admin">Administrator</label></td><td><input id="admin" name="admin" type="checkbox" value="admin"></td></tr>
		<tr><td><label for="priest">Ksiądz:</label></td><td><input id="priest" name="priest" type="checkbox" value="priest"></td></tr>
		</table>
		<fieldset>
			<legend>Dane logowania</legend>
			<table>
			<tr><td><label for="login">Login:</label></td><td><input id="login" name="login" type="text" maxlength="32" required ></td></tr>
			<tr><td><label for="email">Email:</label></td><td><input id="email" name="email" type="email" maxlength="255" required ></td></tr>
			<tr><td><label for="password">Hasło:</label></td><td><input id="password" name="password" type="password" maxlength="40" required ></td></tr>
			<tr><td><label for="password_confirmation">Powtórz hasło:</label></td><td><input id="password_confirmation" name="paswword_confirmation" type="password" required ></td></tr>
			</table>
		</fieldset>
		<fieldset>
			<legend>Adres:</legend>
			<table>
			<tr><td><label for="country">Kraj:</label></td><td><input id="country" name="country" type="text" maxlength="3" value="Polska" ></td></tr>
			<tr><td><label for="city">Miasto:</label></td><td><input id="city" name="city" type="text" maxlength="100" value="Gdańsk" ></td></tr>
			<tr><td><label for="street">Ulica:</label></td><td><input id="street" name="street" type="text" maxlength="128" ></td></tr>
			<tr><td><label for="house_number">Numer domu:</label></td><td><input id="house_number" name="house_number" type="text" maxlength="11" ></td></tr>
			<tr><td><label for="staircase">Klatka:</label></td><td><input id="staircase" name="staircase" type="text" maxlength="10" ></td></tr>
			<tr><td><label for="flat_number">Numer mieszkania:</label></td><td><input id="flat_number" name="flat_number" maxlength="11" ></td></tr>
			<tr><td><label for="post_code">Kod pocztowy:</label></td><td><input id="post_code" name="post_code" type="text" maxlength="10" ></td></tr>
			</table>
		</fieldset>
		<table>
			<tr><td><label for="image">Zdjęcie profilowe:</label></td><td><input id="image" name="image" type="file" /></td></tr>
		</table>
		<input type="hidden" name="hidden" value="$seciurity_registration_token" />
	</form>
END;
}

?>