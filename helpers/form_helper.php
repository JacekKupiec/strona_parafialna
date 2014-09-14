<?php 
function form_login($php_script, $seciurity_login_token) {
	echo <<<END
		<form name="log" class="login" method="post" action="$php_script">
			<label for="login">Login:</label><input type="text" name="login" maxlength="32" required ><br>
			<label for="password">Hasło:</label><input type="password" name="password" maxlength="50" required ><br>
			<input type="hidden" name="hidden" value="$seciurity_login_token" >
			<input type="submit" name="login_button" value="Zaloguj" >
		</form>
END;
}

//Dorobić ,żeby możliwość zaznaczenia admin wyświetlała się tylko adminowi
function form_registration($php_script, $seciurity_registration_token) {
	echo <<<END
	<form name="reg" class="registration" method="post" action="$php_script" enctype="multipart/form-data" >
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
			<tr><td><label for="email">Email:</label></td><td><input id="email" name="email" type="email" required ></td></tr>
			<tr><td><label for="password">Hasło:</label></td><td><input id="password" name="password" type="password" maxlength="40" required ></td></tr>
			<tr><td><label for="password_confirmation">Powtórz hasło:</label></td><td><input id="password_confirmation" name="paswword_confirmation" type="password" maxlength="40" required ></td></tr>
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
			<tr><td><label for="image">Zdjęcie profilowe:</label></td><td><input id="image" name="image" type="file"></td></tr>
		</table>
		<input type="hidden" name="hidden" value="$seciurity_registration_token">
		<input type="submit" name="registration_button" value="Zarejestruj">
	</form>
END;
}
?>