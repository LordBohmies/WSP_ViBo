<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Functions</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
    <img src="http://i1061.photobucket.com/albums/t480/ericqweinstein/php-logo_zps408c82d7.png"/>
    <div class="header">
        <h1>
        <?php
        $welcome = "Let's get started with Functions!";
        echo $welcome;
        ?>
        </h1>
    </div>
    <p>Funktioner finns för att slippa duplicera kod. Så fort något ska göras mer än en gång så bör det skötas av en funktion eller med hjälp av objekt - som i sin tur innehåller funktioner.</p>
    <p>Även vissa saker som troligtvis bara körs en gång kan behövas flyttas till en funktion för att förbättra dess läsbarhet.</p>
    <h5>FUNKTIONER ÄR BRA!</h5>
    <?php
    /*--------------------Function---------------------*/
    function function_name($parameter){
        return "Nu har vi skapat vår första funktion, function_name, med en $parameter.";
    }

    echo function_name("parameter");
    /*------------------------------------------------*/
    /*------------------Parametrar 1------------------*/
    function must_have_two($p1, $p2) {
        if (func_num_args() != 2) {
            trigger_error(E_USER_ERROR, "Wrong Number of arguments passed!");
            return false;
        }
        else {

        }
    }
    /*------------------------------------------------*/
    /*------------------Parametrar 2------------------*/
    function say_hello($name, $lang = "en"){
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
    function amnesiac() {
        if ( !isset($times)) {
            $times = 0;
        }
        return ++$times;
    }
    /*
    function amnesiac() {
        static $times;
        if ( !isset($times)) {
            $times = 0;
        }
        return ++$times;
    }
    /*------------------------------------------------*/
    /*-------------------Fibonacci--------------------*/
    function fibonacci_generator(){
        static $previous, $pre_previous;

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
    }
    /*------------------------------------------------*/
    /*------------- Inbyggda funktioner --------------*/
    /*-------------------- Trim ----------------------*/
    $foo = "   Några få ord.   "; // Notera mellanrummen (Whitespace).
    $foo = trim($foo);
    echo $foo; // Skriver ut "Några få ord."
    /*------------------------------------------------*/
    /*-------- Två funktioner, Samma resultat --------*/
    // Begränsad iom att funktionen inte kan användas i andra funktioner.
    /*function say_hello($name) {
        echo "Hej {$name}";
    }
    say_hello("Rasmus");

    // Bättre alternativ då funktionen kan användas på flera olika sätt.
    /*function say_hello($name) {
        return "Hej {"$name"}";
    }
    echo say_hello("Rasmus");

    // Sätts som en Array.
    $greeting = say_hello("Rasmus");

    /*------------------------------------------------*/
    /*---------- Slugify - url-vänlig text -----------*/
    /** Poängen att använda en slug (semantisk URL)
     * förutom för att föbättra SEO av dina artiklar
     * är att förhindra att användaren, vid skapandet
     * av till exempel en artikel, använder sig av
     * specialatecken som inte är tillåtna i en URL.
     */

    /**
     * Create a web friendly URL slug from a string.
     *
     * Although supported, transliteration is discouraged because
     *     1) most web browsers support UTF-8 characters in URLs
     *     2) transliteration causes a loss of information
     *
     * @author Sean Murphy <sean@iamseanmurphy.com>
     * @copyright Copyright 2012 Sean Murphy. All rights reserved.
     * @license http://creativecommons.org/publicdomain/zero/1.0/
     *
     * @param string $str
     * @param array $options
     * @return string
     */
    function url_slug($str, $options = array()) {
        // Säkerställ att strängen följer UTF-8 och ta bort ogiltiga UTF-8 tecken
        $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());

        // Array med standardvärden.
        $defaults = array(
            'delimiter' => '-',
            'limit' => null,
            'lowercase' => true,
            'replacements' => array(),
            'transliterate' => true,
        );

        // Slå ihop $options med $defaults
        $options = array_merge($defaults, $options);

        $char_map = array(
    		// Latin
    		'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C',
    		'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
    		'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O',
    		'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ' => 'TH',
    		'ß' => 'ss',
    		'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c',
    		'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
    		'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o',
    		'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th',
    		'ÿ' => 'y',

    		// Latin symbols
    		'©' => '(c)',

    		// Greek
    		'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
    		'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
    		'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
    		'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
    		'Ϋ' => 'Y',
    		'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
    		'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
    		'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
    		'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
    		'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',

    		// Turkish
    		'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
    		'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g',

    		// Russian
    		'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
    		'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
    		'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
    		'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
    		'Я' => 'Ya',
    		'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
    		'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
    		'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
    		'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
    		'я' => 'ya',

    		// Ukrainian
    		'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
    		'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',

    		// Czech
    		'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U',
    		'Ž' => 'Z',
    		'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
    		'ž' => 'z',

    		// Polish
    		'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z',
    		'Ż' => 'Z',
    		'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
    		'ż' => 'z',

    		// Latvian
    		'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N',
    		'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
    		'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
    		'š' => 's', 'ū' => 'u', 'ž' => 'z'
    	);

        // Genomför egna ersättningar
        $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);


        // Översätt tecken till ASCII
        if ($options['transliterate']) {
            $str = str_replace(array_keys($char_map), $char_map, $str);
        }

        // Ersätter tecken som inte är alfanumeriska.
        $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);

        // Ta bort duplicerade separator
        $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);

    	// Trunkerar slug till max antal tecken enligt angiven värde
    	$str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');

        // Ta bort separator från slutet
        $str = trim($str, $options['delimiter']);

        // Ändra till små bokstäver
        $str = $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;

        if (empty($str)) {
          return 'n-a';
        }

        return $str;
    }

    $text = "Yxmördaren Julia Blomqvist på fäktning i Schweiz";
    echo '<br>';
    echo url_slug($text) . '<br>';
    echo $text . '<br>';

    // Läs Manualen!
    // http://php.net/manual/en/language.functions.php
    // Avslutar alla kommentarer */
    ?>
</body>
</html>
