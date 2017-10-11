<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Variables</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
    <body>
        <img src="http://i1061.photobucket.com/albums/t480/ericqweinstein/php-logo_zps408c82d7.png"/>
        <div class="header"><h1>
            <?php
             $welcome = "Let's get started with Variables!";
             echo $welcome;
             ?>
         </h1></div>
         <?php
        // Kommentar en rad.
        /*
        Kommentar på flera rader.
        */
        /*--------------------Övning 1--------------------*/
        /*$foo = "bar";
        $bar = "Hej";
        //echo $foo;

        //echo $$foo;     // Skriver ut vadå? - Varför?
        /*------------------------------------------------*/
        /*--------------------Övning 2--------------------*/
        /*--------------------By Value--------------------*/
        /*$foo = 1;
        echo $foo . '<br>';
        $bar = $foo;    // $bar får samma värde som $foo
        $bar = 2;
        echo $foo;      // $foo skriver ut värdet 1.

        /*------------------By Reference------------------*/
        /*$foo = 1;
        echo $foo . '<br>';
        $bar =& $foo;       // $foo och $bar refererar till varandra, $bar pekar på samma minnesyta som $foo.
        $bar = 2;
        echo $foo . '<br>'; // värde? - varför?

        $foo = 3;
        echo $bar . '<br>'; // värde? - varför?
        /*------------------Info StdClass-----------------*/
        /*$foo = new stdClass();        // $foo är nu ett objekt
        $foo->property = 1;             // objektet $foo får egenskapen "property", med värdet 1.
        $bar = $foo;                    // $bar tilldelas $foo by reference eftersom $foo är ett objekt.

        $bar->property = 2;
        echo $foo->property . '<br>';            // 2 - eftersom $foo är samma objekt som $bar.

        /*$foo = new stdClass();
        $foo->property = 1;
        $bar = clone $foo;              // $bar är nu en kopia av $foo
        $bar->property = 2;
        echo $foo->property . '<br>';    // 1 - eftersom $foo är ett annat objekt än $bar.
        echo $bar->property . '<br>';
        /*------------------------------------------------*/
        /*--------------------Övning 3--------------------*/
        /*-------------------Operatorer-------------------*/
        /*echo "7 dvärgar" + "1 snövit";  // ?. PHP kan vanlig matematik.

        /*------------------------------------------------*/
        /*$foo = 1;
        echo $foo++ . '<br>';    // ?
        echo ++$foo . '<br><br>';    // ?

        $foo = 1;
        $bar = $foo++;    // ?
        echo $foo . '<br>';
        echo $bar . '<br>';
        $baz = ++$bar;    // ?
        echo $bar . '<br>';
        echo $baz;

        /*------------------------------------------------*/
        /*echo "hej" + "san" . '<br>';
        echo "hej" . "san";

        echo '<br>';

        $foo = "al";
        echo $foo . "la";

        echo '<br>';

        const bar = "gla";
        echo bar . "da" . "\n";

        echo '<br>';

        echo 1 . 2 . "\n";

        echo '<br>';

        echo true . " go gubbe". "\n";

        echo '<br>';
        */
        /*$foo = "tjo";
        $foo .= "san";
        echo $foo;

        echo '<br>';
        */
        /*
        if ( 2 != "2"){
            echo "true";
        }
        else {
            echo "false";
        }*/




        /*--------------------Övning ?--------------------*/
        //      0123456789  = förmodade index-siffror
        /*$str1 = "Webbserver";

        echo $str1[3];  // ?
        echo $str1[4];  // ?

        /*--------------------Övning ?--------------------*/


        ?>

   </body>
</html>
