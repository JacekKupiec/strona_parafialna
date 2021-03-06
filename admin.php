<?php
/*Używam tylko ciastek bo to ważna sprawa ,żeby do panelu nikt mi się nie dostał*/
	require_once 'helpers/session_helper.php';
	require_once 'helpers/application_helper.php';
	require_once 'helpers/form_helper.php';
	
	session_start();
	set_session();
?>
<!DOCTYPE html>
<html>
	<head>
		<?php headers(); ?>
		<link rel="stylesheet" type="text/css" href="assets/css/admin.css" />
		<script type="text/javascript" src="assets/javascript/admin.js"></script>
	</head>
	<body>
	<div class='banner'>
		<?php banner("assets/images/God.jpg") ?>
	</div>
        <div class="application-container">
            <div class="title">
            	<?php title("Panel administratora"); ?>
            </div>
            <div class="menu">
                <ul>
                	<li>Stwórz użytkownika</li>
                	<li>Galerie</li>
                	<li>Grupy duszpasterskie</li>
                	<li>Msze</li>
                </ul>
            </div>
            <div class="main-content">
                <?php 
                    form_login(htmlspecialchars($_SERVER['PHP_SELF']), $_SESSION[secure_login_token]);
                    form_registration(htmlspecialchars($_SERVER['PHP_SELF']),$_SESSION[secure_registration_token]);
                ?>
            </div>
        </div>
	</body>
</html>
