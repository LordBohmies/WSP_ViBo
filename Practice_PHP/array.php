<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Arrays</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
    <body>
        <img src="http://i1061.photobucket.com/albums/t480/ericqweinstein/php-logo_zps408c82d7.png"/>
        <div class="header"><h1>
            <?php
             $welcome = "Let's get started with Arrays!";
             echo $welcome;
             ?>
         </h1></div>
        <?php
        /*---------------------Array----------------------*/
        /*
        En Array är en lista, lite som en shoppinglista.
        Man lagrar fler en sak i en variabel.
        Likt en variabel så börjar vi med ett $ följt av ett
        namn och därefter följt av ett =.
        Skillnaden ligger i att vi efter vårt = skriver array
        följt av två paranteser som i sin tur innehåller
        items/elements avskiljda med kommatecken.

        $handla = array("Egg", "Tomato", "Beans");

        */

        /*--------------------Övning 1--------------------*/
        /*---------------------Första---------------------*/
        /*
        // Lägg till dina array elements efter "Bönor",
        // men före den avslutande parantesen.
        $handla = array("Ägg", "Tomater", "Bönor", "Chips", "Korv");

        /*------------------------------------------------*/
        /*--------------------Övning 2--------------------*/
        /*---------------------Skapa----------------------*/
        /*
        // Skapa din första egna array bestående av dina vänner.
        $

        /*--------------------Tillgång--------------------*/
        /*
        Varje element/item i en array har ett tilldelat nummer
        och numreringen startar på 0.
        $myArray = array("do", "re", "mi");
        +------+------+------+
        | "do" | "re" | "mi" |
        +------+------+------+
           0      1      2

        echo $myArray[0];
        skickar "do".
        */

        /*--------------------Övning 3--------------------*/
        /*----------------------Tior----------------------*/
        /*
        //Skapa din andra egna array bestående av 10-tal (10, 20, 30 osv.)
        //Prova att anropa diit tredje item i arrayen.
        /*------------------------------------------------*/

        /*---------------------Ändra----------------------*/
        /*
        // Ett Item i en array kan bli ändrat genom att
        // specifiera positionen och tilldela ett nytt värde.

        $myArray = array("röd", "gul", "blå");
        echo $myArray[1];
        // skickar "gul"

        $myArray[1] = "grön";

        echo $myArray[1];
        // skickar "grön"
        */

        /*--------------------Övning 4--------------------*/
        /*---------------------Språk----------------------*/
        /*
        // Kopiera arrayen nedan bestående av programmeringspråk
        // $languages = array("HTML", "CSS", "JavaScript", "PHP", "SQL", "Python")

        // Skriv koden för att ändra Python till C#.
        /*------------------------------------------------*/

        /*--------------------Ta Bort---------------------*/
        /*
        // Ibland kommer man till läget att man vill ta bort
        // ett item i en array. Det gör man med hjälp av unset.

        $myArray = array("röd", "gul", "blå");
        echo $myArray[1];
        //skickar "gul".

        unset($myArray[1]);
        echo $myArray[1];
        //skickar "blå".

        //Ta bort hela arrayen.
        unset($myArray);
        */

        /*--------------------Övning 4--------------------*/
        /*---------------------Språk----------------------*/
        /*
        // Kopiera arrayen nedan bestående av programmeringspråk
        // $languages = array("HTML", "CSS", "JavaScript", "PHP", "SQL", "Python")

        // Skriv koden för att ta bort Python.

        // En loop som vi kommer titta närmare på längre fram i kursen.
        foreach($languages as $lang) {
            print "<p>$lang</p>";
        }
        /*------------------------------------------------*/
        ?>
    </body>
</html>
