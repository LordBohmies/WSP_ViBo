<?php
//Include Meta
require ('resources/includes/head.php');

//Include Header
require ('resources/views/header.php');

navigation($header);

//Content
echo '<div class="content"><h2>Alla blogginlägg</h2>' . $error;

//http://porkforge.mardby.se/index.php?title=PHP_Laboration_3_-_Array_och_loopar#.C3.96vning_5
//print_r($model);

//http://porkforge.mardby.se/index.php?title=PHP_Laboration_3_-_Array_och_loopar#.C3.96vning_6
/*echo '<div class="content"> <h2>Alla blogginlägg</h2>';
for ($i = 0; $i <= 3; $i++) {
    echo '<div class="post"><h3>' . $model[$i] . '</h3></div>';
}
echo '</div>';*/

foreach ($model as $key => $value) {
    echo '<div class="post">';
    echo '<h3>' . $model[$key]['title'] . '</h3>';
    echo '<p class="author">Författare: ' . $model[$key]['author'] . '</p>';
    echo '<p class="date">Datum: ' . $model[$key]['date'] . '</p>';
    echo '<p class="message">Här kommer själva inlägget men inte i sin helhet... <a href="index.php?page=blogg&post=' . $model[$key]['slug'] . '">Läs mer</a></p>';
    echo '</div>';
}
echo '</div>';
//Inlcude Footer
require ('resources/views/footer.php');
?>
