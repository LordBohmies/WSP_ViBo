<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Switch</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
    <body>
        <img src="http://i1061.photobucket.com/albums/t480/ericqweinstein/php-logo_zps408c82d7.png"/>
        <div class="header"><h1>
            <?php
             $welcome = "Let's get started with Switch!";
             echo $welcome;
             ?>
         </h1></div>
        <?php
        /*---------------------Switch----------------------*/
        /*
        Ett Switch vilkor fungerar som ett klassiskt if-vilkor,
        om något är sant så körs en bit kod.
        Ett Switch vilkor är användbart i situationer där du
        har flera if/elseif/else vilkor som är beroende av
        samma värde. Ett Switch vilkor gör även arbetet effektivt
        och tydligt.

        switch (2) {
            case 0:
                echo 'The value is 0.';
                break;
            case 1:
                echo 'The value is 1.';
                break;
            case 2:
                echo 'The value is 2.';
                break;
            default:
                echo "The value isn't 0, 1 or 2.";
        }

        Ett Switch vilkor accepterar endast ett argument.
        Default case är lite speciellt och kan jämföras med else,
        med skillnaden att det inte måste finnas med.
        Om Default finns med så körs den koden endast då
        inget föregående case körs.
        Man separerar varje Case med ett Break, skulle break
        inte finnas med så hade all kod körts.
        */

        /*--------------------Övning 1--------------------*/
        /*---------------------Första---------------------*/
        /*
        // Färdigställ Switch nedan så att det finns argument
        // för att frukt är gott om det är en banan och om Det
        // inte är en frukt så skrivs "Det där är ingen frukt" ut.

        $frukt = "banan";

        switch ($frukt) {
            //Fyll i Case här
        }

        /*------------------------------------------------*/
        /*--------------------Övning 2--------------------*/
        /*---------------------Flera----------------------*/
        /*
        // Färdigställ Switch nedan så att det finns argument
        // för att frukt är gott om det är en banan och om Det
        // inte är en frukt så skrivs "Det där är ingen frukt" ut.

        // Färdigställ koden nedan.
        i = 5;

        switch ($i) {
            case 0:
                echo '$i is 0.';
                break;
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                echo '$i is somewhere between 1 and 5'
            case 6:
            case 7:
                echo '$i is somewhere between'
            default:
                echo "I don't know how much \$i is.";
        }

        /*------------------------------------------------*/
        /*--------------------Övning 3--------------------*/
        /*-------------------Endswitch--------------------*/
        /*
        // Färdigställ Switch nedan så att det finns argument
        // för att frukt är gott om det är en banan och om Det
        // inte är en frukt så skrivs "Det där är ingen frukt" ut.

        // Färdigställ koden nedan.
        i = 5;

        switch ($i) {
            case 0:
                echo '$i is 0.';
                break;
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                echo '$i is somewhere between 1 and 5'
            case 6:
            case 7:
                echo '$i is somewhere between'
            default:
                echo "I don't know how much \$i is.";
        }

        /*------------------------------------------------*/
         ?>

    </body>
</html>
