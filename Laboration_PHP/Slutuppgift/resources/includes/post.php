<?php
require 'resources/includes/db_conn.php';

$message = '';

// Funktion som modifierar strängar så att tecken som inte tillhör ASCII samt mellanslag byts ut.
// Funktionen skulle kunna placeras i ett bibliotek för att sedan inkluderas vid behov.
function slugify($slug, $strict = false) {
    $slug = html_entity_decode($slug, ENT_QUOTES, 'UTF-8');
    // replace non letter or digits by -
    $slug = preg_replace('~[^\\pL\d.]+~u', '_', $slug);

    // trim
    $slug = trim($slug, '_');
    setlocale(LC_CTYPE, 'en_GB.utf8');
    // transliterate
    if (function_exists('iconv')) {
        $slug = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
    }
    // lowercase
    $slug = strtolower($slug);
    // remove unwanted characters
    $slug = preg_replace('~[^-\w.]+~', '', $slug);
    if (empty($slug)) {
        return 'empty_$';
    }
    if ($strict) {
        $slug = str_replace(".", "_", $slug);
    }
    return $slug;
}

if ($pdo) {

    // Kommentar här
    $sql = 'SELECT ID, Username FROM Users ORDER BY Username';
    $users = array();
    foreach ($pdo->query($sql) as $row) {
        $users += array(
            $row['ID'] => $row['Username']
        );
    }

    /**********************************************************/
    /*********************** C-UPPGIFT 3 **********************/
    /* Våra variabler $headline & $text tar emot information **/
    /** utan att kontrollera informationen före den skickas ***/
    /******************* till vår databas. ********************/
    /** För betyget C så kräver jag att ni säkerställer att ***/
    /** våra användare inte kan skicka med någon skadlig kod **/
    /********** genom variablerna $headline & $text. **********/
    /**********************************************************/

    // Kommentar här
    if (isset($_POST['submit'])) {
        $user = $_POST['author']; //Kommentar här
        $headline = $_POST['title']; //Kommentar här
        $headline = trim($headline);

        $slug = slugify($headline); //Kommentar här

        $text = $_POST['message']; //Kommentar här

        $sql = 'INSERT INTO Posts (User_ID, Slug, Headline, Text) VALUES ("'.$user.'", "'.$slug.'", "'.$headline.'", "'.$text.'")';

        /**********************************************************/
        /*********************** E-UPPGIFT 2 **********************/
        /* Variabeln $sql innehåller nu en query som kan användas */
        /* för att spara inlägget användaren skrivit i databasen. */
        /** För betyget E så krävs det att ni skriver en kod som **/
        /** använder variabeln $sql för att skicka inlägget till **/
        /* databasen. Tänk på att namn på tabell & kolumner i er **/
        /* databas kan skiljas något från det jag angivit i $sql. */
        /**********************************************************/
        if(condition) {
            $message = 'Du har lyckats lägga upp ett inlägg';
        }

        else {
            $message = 'Du har inte lyckats lägga upp ett inlägg';
        }

    }
}
else {
    print_r($pdo->errorInfo());
}

 ?>
