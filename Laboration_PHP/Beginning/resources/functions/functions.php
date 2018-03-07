<?php

//Give Active Navigation the class="highligt"
function navigation($highlight) {
    $start = '';
    $kontakt = '';
    $blogg = '';

    if($highlight == 'Start') {
        $start = 'class="highlight"';
    }
    elseif($highlight == 'Kontakt') {
        $kontakt = 'class="highlight"';
    }
    elseif($highlight == 'Blogg') {
        $blogg = 'class="highlight"';
    }

    echo '
        <nav>
            <ul>
                <li><a ' . $start . ' href="index.php">Start</a></li>
			    <li><a ' . $blogg . ' href="index.php?page=blogg">Blogg</a></li>
			    <li><a ' . $kontakt . ' href="index.php?page=kontakt">Kontakt</a></li>
		    </ul>
	    </nav>';
}

/*Skapa en till funktion echoYear i functions.php som ska:
- om året idag är 2017 så skriver funktinen ut copyright 2017
- om året är större än 2017 så skriv ut copyright 2017-året

Denna funktion ska anropas i footer.php så att texten blir "Vårt första PHP-projekt, copyright 2017"
För att testa funktionen så ändra datum på datorn till 2017*/


?>
