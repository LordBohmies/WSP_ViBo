<?php
//Anslutningsuppgifter till databasen
$host = 'localhost';
$dbname = 'blogg';
$user = 'admin';
$password = 'localhorse';

// Anger Attribut till PDO-objektet
$attr = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

// Inställningar för databas-anslutning.
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

//Skapar PDO-Objekt
$pdo = new PDO($dsn, $user, $password, $attr);

// Skapar SQL-fråga.
$sql = 'SELECT p.ID, p.Slug, p.Headline, CONCAT(u.FName, u.LName) AS Name, p.Creation_time, p.Text FROM Posts AS p JOIN Users AS u ON u.ID = p.User_ID';

// Ansluter till databasen och använder frågor.
if($pdo) {
    // Skapar vår model-array
    $model = array();

    foreach($pdo->query($sql) as $row) {
        $model += array(
            $row['ID'] => array(
                'slug' => $row['Slug'],
                'title' => $row['Headline'],
                'author' => $row['Name'],
                'date' => $row['Creation_time'],
                'text' => $row['Text']
            )
        );
    }
}
else { print_r($pdo->errorInfo()); }


?>
