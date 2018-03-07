
<?php
//Include Meta
require ('resources/includes/head.php');

//Include Header
require ('resources/views/header.php');

navigation($header);

//Content
echo $content;

//Inlcude Footer
require ('resources/views/footer.php');
?>
