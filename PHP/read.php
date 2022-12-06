<?php 

include('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        // echo "Er is een verbinding met de musql server";
    } else {
        echo "Er is een interne server error opgetreden";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$sql = "SELECT  question,
                answer
                FROM faq";

$statement = $pdo->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_OBJ);

$tableRows = "";

foreach($result as $info) {
    $tableRows .= "<tr>
                    <td>$info->vraag</td>
                    <td>$info->antwoord</td>
                    <td>
                        <a href'delete.php'>
                        <img src='img/b_drop.pgn' alt='cross'>
                    </td>
                  </tr>";
}
?>

<table border='1'>
    <thead>
        <th>vraag</th>
        <th>antwoord</th>
        <th></th>
    </thead>
    <tbody>
        <?php echo $tableRows; ?>
    </tbody>
</table>