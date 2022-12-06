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
var_dump($result);
$tableRows = "";

foreach($result as $info) {
    $tableRows .= "<tr>
                    <td>$info->question</td>
                    <td>$info->answer</td>
                    <td>
                        <a href'delete.php'>
                        <img src='img/b_drop.pgn' alt='cross'>
                    </td>
                  </tr>";
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

      <div class="containerFAQ col-4">
          <div class="dropdown">
              <button class="dropbtn" for="vraag">Welke platforms kan ik MWII spelen?</button>
              <div class="dropdown-content">
                <p href="#" for="antwoord">Je kan MWII op Ps4, Ps5, Xbox One, Xbox Series X/S en pc</p>
              </div>
            </div>
      </div>

      <div class="containerFAQ col-4">
          <div class="dropdown">
              <button class="dropbtn" for="vraag">Is er crossplay?</button>
              <div class="dropdown-content">
                <p href="#" for="antwoord">Ja er is crossplay, MWII heeft crossplay standaard erbij</p>
              </div>
            </div>
      </div>

      <div class="containerFAQ col-4">
          <div class="dropdown">
              <button class="dropbtn" for="vraag">Is er singleplayer?</button>
              <div class="dropdown-content">
                <p href="#" for="antwoord">Ja, je kan MWII spelen alleen of met anderen</p>
              </div>
            </div>
      </div>

      <div class="containerFAQ col-4">
          <div class="dropdown">
              <button class="dropbtn" for="vraag">Kan je het spel offline spelen?</button>
              <div class="dropdown-content">
                <p href="#" for="antwoord">Jammer genoeg niet vanwege dat het spel ook gespeelt wordt op Steam en Battle.net</p>
              </div>
            </div>
      </div>

      <div class="containerFAQ col-4">
        <div class="dropdown">
            <button class="dropbtn" for="vraag">Is MWII hetzelfde als MW2?</button>
            <div class="dropdown-content">
              <p href="#" for="antwoord">Nee, MWII is een vervolg op een 2019 reboot. Het deelt hetzelfde karakters, thema en ideën</p>
            </div>
          </div>
    </div>

    <div class="containerFAQ col-4">
      <div class="dropdown">
          <button class="dropbtn" for="vraag">Hoeveel kost het spel?</button>
          <div class="dropdown-content">
            <p href="#" for="antwoord">69.99 euro</p>
          </div>
        </div>
    </div>

    <div class="containerFAQ col-4">
      <div class="dropdown">
          <button class="dropbtn" for="vraag">Waarom is het spel 70 euro?</button>
          <div class="dropdown-content">
            <p href="#" for="antwoord">MSRP heeft een nieuwe standaard kosten aangepast en hebben de prijzen hoger gemaakt</p>
          </div>
        </div>
    </div>

    <div class="containerFAQ col-4">
      <div class="dropdown">
          <button class="dropbtn" for="vraag">Kunnen de mensen in Rusland het spel spelen?</button>
          <div class="dropdown-content">
            <p href="#" for="antwoord">Nee, ze hebben het spel in Rusland verwijderd vanwege het thema US vs Rusland derde wereld oorlog</p>
          </div>
        </div>
    </div>

    <div class="containerFAQ col-4">
      <div class="dropdown">
          <button class="dropbtn" for="vraag">Moet je MWII kopen om warzone 2.0 te kunnen spelen</button>
          <div class="dropdown-content">
            <p href="#" for="antwoord">Nee, warzone 2.0 is gratis te spelen</p>
          </div>
        </div>
    </div>

    <div class="containerFAQ col-4">
      <div class="dropdown">
          <button class="dropbtn" for="vraag">Hoeveel aanwinst heeft MWII verkocht?</button>
          <div class="dropdown-content">
            <p href="#" for="antwoord">1 miljard dollars</p>
          </div>
        </div>
    </div>
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