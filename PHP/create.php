<?php 

include('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    echo "Er is een verbinding met de database";
} catch(PDOException $e) {
    echo "Er is helaas geen verbinding met de database.<br>
         Neem contact op met de administrator";
    echo "Systeemmelding: " . $e->getMessage();
}

$sql = "INSERT INTO pro_periode2 (question,
                                answer)
        VALUES              (NULL
                            ,:vraag
                            ,:antwoord)";


$statement = $pdo->prepare($sql);
$statement->bindValue(':vraag', PDO::PARAM_STR);
$statement->bindValue(':antwoord', PDO::PARAM_STR);

$statement->execute();
