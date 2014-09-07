<?php
/*Używam tylko ciastek bo to ważna sprawa ,żeby do panelu nikt mi się nie dostał*/
	require 'helpers/session_helper.php';
	require 'helpers/application_helper.php';
	
	set_session();
?>
<!DOCTYPE html>
<html>
	<head>
		<?php headers(); ?>
		<script type="text/javascript" src="assets/javascript/admin.js"></script>
	</head>
	<body>
	<div class='banner'>
		<?php banner("assets/images/application/Baner przeskalowany.jpg") ?>
	</div>
        <div class="application-container">
            <div class="title">
            	<?php title("Panel administratora"); ?>
            </div>
            <div class="menu">
                <ul>
                	<li>Galerie</a></li>
                	<li><a href="">Grupy duszpasterskie</li>
                	<li>Msze</li>
                </ul>
            </div>
            <div class="main-content">
                <?php if ($_SESSION['user'] == 'guest') {
                	form_login(htmlspecialchars($_SERVER['PHP_SELF']));
                 } else { ?>
                 	 Jestes zalogowany
                <?php } ?>
            </div>
        </div>
	</body>
</html>