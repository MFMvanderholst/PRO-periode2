<?php 

include('../PHP/config.php');

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
$faq = "";
$question ="";
$answer = "";

foreach($result as $info) {
    $faq .= "<div class='containerFAQ col-4'>
    <div class='dropdown'>
        <button class='dropbtn' for='vraag'>$info->question</button>
        <div class='dropdown-content'>
          <p href='#' for='antwoord'>$info->answer</p>
        </div>
      </div>
</div>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/mw2.css">
    <link rel="stylesheet" href="../scss/mw2.scss">
    <link rel="stylesheet" href="../CSS/button.css">
    <title>FAQ</title>

</head>
<body class="achtergrond">



    <nav>
        <div class="logo">
          <img src="../img/MW2.png" alt="">
        </div>
        <ul>
          <li><a href="../index.html">Home</a></li>
          <li><a href="overMW2.html">Game</a></li>
          <li><a href="media.html">Media</a></li>
          <li><a href="FAQ.php">FAQ</a></li>
        </ul>
    </nav>

  <div class="FAQ">

    <?php echo $faq; ?>
    
  </div>
    
    <footer class="c-1">
        <div class="gameRating">
            <div class="logos">
                <img class="logo col-1" src="../img/treyarch-logo.svg" alt="logo">
                <img class="logo col-1" src="../img/toys-for-bob-logo.svg" alt="logo">
                <img class="logo col-1" src="../img/infinity-ward-logo.svg" alt="logo">
                <img class="logo col-1" src="../img/activision-logo.svg" alt="logo">
            </div>
            <div class="logo_r17">
                <img src="../img/M.svg" alt="" >
                <p>Blood and Gore,<br> Intense Violence,<br> Strong Language,<br> Suggestive Themes,<br> Use of Drugs</p>
            </div>
        </div>
    </footer>

<script>
    const logo = document.querySelector('div.logo');

    logo.addEventListener('mouseover', () => {
      document.querySelector('nav').classList.toggle('active');
    });
</script>
</body>
</html>