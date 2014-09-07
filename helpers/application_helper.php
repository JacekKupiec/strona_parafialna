<?php 
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

function form_login($php_script) {
	echo <<<END
		<form name="log" class="login" method="post" action="$php_script">
			<label for="login">Login: <input type="text" placeholder="Tu wpisz swój login" name="login" maxlength="32" required /></label>
			<label for="password">Hasło: <input type="password" placeholder="Podaj hasło" name="password" maxlength="50" required /></label>
			<input type="submit" value="Zaloguj" />
		</form>
END;
}
?>