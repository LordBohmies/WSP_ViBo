<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Control Flow and If</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
    <body>
        <img src="http://i1061.photobucket.com/albums/t480/ericqweinstein/php-logo_zps408c82d7.png"/>
        <div class="header"><h1>
            <?php
             $welcome = "Let's get started with If-satser!";
             echo $welcome;
             ?>
         </h1></div>
        <?php
        /*------------------Control Flow------------------*/
        /*
        En if-sats samt dess tillhörande elseif och else
        en viktig programmeringskonstruktion som låter oss
        skapa förgreningar i vårt programflöde.
        Med If-satsen kan vi bestämma vad som skall ske
        beroende på olika variabler som användaren medvetet
        eller omedvetet skickar in.
        Det låter kanske krångligt men översett bara till
        för dig ett passande språk, exempelvis Svenska.
        If = Om
        elseif = eller om
        else = eller

        $teabags = 3;

        if ($teabags > 0) {
            echo "There are tea bags! I'll have a cup!";
        } else {
            echo "No more tea! I guess I won't have a cup.";
        }

        Ovan så skapar vi en variabel teabags och ger den värdet 3.
        Därefter så berättar vi för programmet att om det finns
        fler än 0 påsar te så vill vi gärna ha te.
        */
        /*---------------------Vilkor---------------------*/
        /*
        Men hur jämför man då nummer, jo med så kallade vilkor.
        Ovan så använde vi > vilket betyder större/fler än.
        Nedan så följer ett antal jämförelse vilkor.
        <   - mindre/färre än (6 < 7).
        >   - större/fler än (7 < 6).
        ==  - lika med (6 < 6).
        <=  - mindre/färre eller lika än (6 < 7).
        >=  - mindre/färre eller lika än (7 < 6).
        !=  - inte lika med (6 != 7).
        */

        /*--------------------Övning 1--------------------*/
        /*---------------------Första---------------------*/
        /*
        // Sätt en ålder som är högre än 16,

        if ($age > 16) {
            echo "Du får övningsköra!";
        }

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
