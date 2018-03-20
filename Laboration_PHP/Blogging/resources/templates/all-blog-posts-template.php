<?php
//Include Meta
require ('resources/includes/head.php');

//Include Header
require ('resources/views/header.php');

navigation($header);

//Content
echo '<div class="content"><h2>Alla blogginlägg</h2>' . $error;
foreach ($model as $key => $value) {
    echo '<div class="post">';
    echo '<h3>' . $model[$key]['title'] . '</h3>';
    echo '<p class="author">Författare: ' . $model[$key]['author'] .'</p>';
    echo '<p class="date">Datum: ' . $model[$key]['date'] .'</p>';
    echo '<p class="message">Här kommer själva inlägget men inte i sin helhet... <a href="index.php?page=blogg&post=' . $model[$key]['slug'].'">Läs mer</a></p>';
    echo '</div>';
}
echo '</div>';
//Inlcude Footer
require ('resources/views/footer.php');
?>
