<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Functions</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
    <body>
        <img src="http://i1061.photobucket.com/albums/t480/ericqweinstein/php-logo_zps408c82d7.png"/>
        <div class="header"><h1>
            <?php
             $welcome = "Let's get started with Functions!";
             echo $welcome;
             ?>
         </h1></div>
         <p>Funktioner finns för att slippa duplicera kod. Så fort något ska göras mer än en gång så bör det skötas av en funktion eller med hjälp av objekt - som i sin tur innehåller funktioner.</p>
         <p>Även vissa saker som troligtvis bara körs en gång kan behövas flyttas till en funktion för att förbättra dess läsbarhet.</p>
         <h5>FUNKTIONER ÄR BRA!</h5>
            <?php
            /*--------------------Function---------------------*/
            /*function function_name($parameter){
                return "Nu har vi skapat vår första funktion, function_name, med en $parameter.";
            }

            echo function_name("parameter");*/
            /*------------------------------------------------*/
            /*------------------Parametrar 1------------------*/
            /*function must_have_two($p1, $p2) {
                if (func_num_args() != 2) {
                    trigger_error(E_USER_ERROR, "Wrong Number of arguments passed!");
                    return false;
                }
                else {

                }
            }
            /*------------------------------------------------*/
            /*------------------Parametrar 2------------------*/
            /*function say_hello($name, $lang = "en"){
                switch ($lang){
                    case "en":
                        return "Hello {$name}";
                        break;
                    case "sv":
                        return "Hej {$name}";
                        break;
                    default:
                        trigger_error(E_USER_ERROR, "Stöd för språker {$lang} saknas");
                }
            }
            /*------------------------------------------------*/
            /*--------------------Variabel--------------------*/
            /*function amnesiac(){
                if ( !isset($times)) {
                    $times = 0;
                }
                return ++$times;
            }

            function amnesiac(){
                static $times;
                if ( !isset($times)) {
                    $times = 0;
                }
                return ++$times;
            }
            /*------------------------------------------------*/
            /*-------------------Fibonacci--------------------*/
            /*function fibonacci_generator(){
                static $previous, @pre_previous;

                if ( !isset($previous) ) {
                    $previous       = 1;
                    $pre_previous   = 0;
                    return 1;
                }
                $sum            = $previous + $pre_previous;
                $pre_previous   = $previous;
                $previous       = $sum;
                return $sum;
            }

            for ( $i = 0; $i < 10; $i++ ) {
                echo fibonacci_generator() . "\n";
            }*/
            /*------------------------------------------------*/
            /*------------- Inbyggda funktioner --------------*/
            /*-------------------- Trim ----------------------*/
            /*$foo = "   Några få ord.   ";   //Notera mellanrummen (Whitespace).
            $foo = trim($foo);
            echo $foo;                      //Skriver ut "Några få ord."
            */
            /*------------------------------------------------*/
            /*-------- Två funktioner, Samma resultat --------*/
            /*
            // Begränsad iom att funktionen inte kan användas i andra funktioner.
            function say_hello($name) {
                echo "Hej {$name}";
            }
            say_hello("Rasmus");*/

            // Bättre alternativ då funktionen kan användas på flera olika sätt.
            /*function say_hello($name) {
                return "Hej {"$name"}";
            }
            echo say_hello("Rasmus");

            // Sätts som en Array.
            $greeting = say_hello("Rasmus");
            */


            // Läs Manualen!
            // http://php.net/manual/en/language.functions.php
            //
            ?>
    </body>
</html>
