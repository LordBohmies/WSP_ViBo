
<?php
//Include Meta
require ('resources/includes/head.php');

//Include Header
require ('resources/views/header.php');

navigation($header);

//MVC - Model View Controller
echo $content;

//Inlcude Footer
require ('resources/views/footer.php');
?>
