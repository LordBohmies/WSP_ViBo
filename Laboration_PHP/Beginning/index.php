<?php
/*
This is my solution for the laboration that Niklas Mårdby share on his wiki Porkforge.
I've used this laboration to show my pupils how you can work with PHP in developement.
http://porkforge.mardby.se/index.php?title=PHP_Laboration_2_-_Projektstart,_require_och_GET
*/

require ('resources/functions/functions.php');
// Set header correct without using HTML
header("Content-type: text/html; charset=utf-8");

// Get value from url for key page
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);

if(empty($page)) {
	$header = 'Start';
    $content = '<div class="content">
		Välkommen till Labb 2! Här övar vi på PHP för att bli duktiga webbserverprogrammerare. Detta är andra labben men första labben i en serie labbar som tillsammans bygger vidare på detta projekt som vi påbörjar här. Ett enkelt PHP-projekt men väl strukturerat och genomtänkt konstruerat.
	</div>';
    include ('resources/templates/page-template.php');
}
elseif($page=="blogg") {
    $header = 'Blogg';
	$content = '<div class="content">Här ska alla blogginlägg visas</div>';
    include ('resources/templates/page-template.php');
}
elseif($page=="kontakt") {
	$header = 'Kontakt';
    $content = '<div class="content">Du når oss på epost@labb2.se</div>';
    include ('resources/templates/page-template.php');
}
else {
	echo "Den sökta sidan finns inte";
}


?>
