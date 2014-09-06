<?php
	require_once 'helpers/application_helper.php'
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
                <?php menu();?>
            </div>
            <div class="main-content">
                Ogólnie znana teza głosi, iż użytkownika może rozpraszać zrozumiała zawartość strony, kiedy ten chce 
                zobaczyć sam jej wygląd. Jedną z mocnych stron używania Lorem Ipsum jest to, że ma wiele różnych 
                „kombinacji” zdań, słów i akapitów, w przeciwieństwie do zwykłego: „tekst, tekst, tekst”, 
                sprawiającego, że wygląda to „zbyt czytelnie” po polsku. Wielu webmasterów i designerów używa Lorem 
                Ipsum jako domyślnego modelu tekstu i wpisanie w internetowej wyszukiwarce ‘lorem ipsum’ spowoduje 
                znalezienie bardzo wielu stron, które wciąż są w budowie. Wiele wersji tekstu ewoluowało i zmieniało 
                się przez lata, czasem przez przypadek, czasem specjalnie (humorystyczne wstawki itd).
                W przeciwieństwie do rozpowszechnionych opinii, Lorem Ipsum nie jest tylko przypadkowym tekstem. Ma 
                ono korzenie w klasycznej łacińskiej literaturze z 45 roku przed Chrystusem, czyli ponad 2000 lat temu! 
                Richard McClintock, wykładowca łaciny na uniwersytecie Hampden-Sydney w Virginii, przyjrzał się uważniej 
                jednemu z najbardziej niejasnych słów w Lorem Ipsum – consectetur – i po wielu poszukiwaniach odnalazł 
                niezaprzeczalne źródło: Lorem Ipsum pochodzi z fragmentów (1.10.32 i 1.10.33) „de Finibus Bonorum et Malorum”, 
                czyli „O granicy dobra i zła”, napisanej właśnie w 45 p.n.e. przez Cycerona. Jest to bardzo popularna w czasach 
                renesansu rozprawa na temat etyki. Pierwszy wiersz Lorem Ipsum, „Lorem ipsum dolor sit amet...” pochodzi 
                właśnie z sekcji 1.10.32.
            </div>
            <div class="footer" >Stopka</div>
        </div>
    </body>
</html>