<?php
/*Używam tylko ciastek bo to ważna sprawa ,żeby do panelu nikt mi się nie dostał*/
	session_start();
	if (!isset($_SESSION['user']))
		$_SESSION['user'] = 'guest';
	
	require 'helpers/application_helper.php'
?>
<!DOCTYPE html>
<html>
	<head>
		<?php headers(); ?>
	</head>
	<body>
	<div class='banner'>
		<?php banner("assets/images/application/Baner przeskalowany.jpg") ?>
	</div>
        
        <div class="application-container">
            <div class="title">
            	<?php title("Parafia NMP Matki Kościoła i św. Katarzyny Szwedzkiej"); ?>
            </div>
            <div class="menu">
                <ul>
                	<li>Utworz galerie</li>
                	<li>Utworz grupe</li>
                	<li>Utworz msze</li>
                </ul>
            </div>
            <div class="main-content">
                
            </div>
        </div>
	</body>
</html>