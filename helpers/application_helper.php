<?php function menu() {
	echo <<< END
	<div class="dropdown-list-tab">
		<a>Parafia</a>
		<ul>
         <li><a>Historia</a></li>
         <li>Kontakt</li>
         <li>
             <a>Duszpasterze</a>
             <ul>
                 <li>Tadeusz Balicki</li>
                 <li>Piotr Przyborek</li>
             </ul>
         </li>
         <li>
             <a>Ogłoszenia parafialne</a>
             <ul>
                 <li>Ogłoszenia bierzące</li>
                 <li>Archiwum</li>
             </ul>
         </li>
     	</ul>
	 </div>
    <div class="dropdown-list-tab">
        <a>Grupy duszpasterskie</a>
        <ul>
            <li><a>Rada parafialna</a></li>
            <li><a>Ucho Igielne</a></li>
            <li><a>Służba liturgiczna</a></li>
            <li><a>Semper fidelis</a></li>
            <li><a>Żywy Różaniec</a></li>
        </ul> 
    </div>
    <div class="dropdown-list-tab">
        <a>Galeria zdjęć</a>
        <ul>
            <li>Szczyrk 2014</li>
            <li> Pożegnanie księdza proboszcza</li>
        </ul>
    </div>
	END
}
?>