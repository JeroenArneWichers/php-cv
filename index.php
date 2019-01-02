<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>php cv</title>
  </head>
  <body>
  <h1> PHP CV JEROEN ARNE WICHERS</h1>

    <h5>Personalia:</h5>

    <br />
    <?php
    $voornaam = "Jeroen";
    $achternaam = "Wichers";
    $leeftijd = "28";
    $woonplaats = "Enschede";
    $email = "jwichers@hotmail.com";
    $github = "https://github.com/JeroenArneWichers";

    echo "voornaam:$voornaam<br />";
    echo "achternaam:$achternaam<br />";
    echo "leeftijd:$leeftijd<br />";
    echo "woonplaats:$woonplaats<br />";
    echo "email:$email<br />";
    echo "github:$github<br />";
    ?>

    <br /><br />
    <h1>PROFIEL</h1>
    <p>Gemotiveerd, passievol en zeer gewillig om nieuwe ervaringen op te doen 
    en te investeren in de toekomst. Allround HBO medewerker met hart voor 
    de zaak. Kennis en ervaring op het gebied van bestuurskunde, overheidsmanagement, 
    onderzoek en integriteit. Ook bezit ik alle vaardigheden met betrekking tot zowel 
    front-end als back-end development, waaronder php.</p>

    <br /><br />
    <h1>PHP PORTFOLIO</h1>
    <p>Hieronder een greep uit enkele werkzaamheden. Waaronder deze site en rekenkundige functies geprogrameerd in php.</p>

    <h5>optellen</h5>
    <?php
    $num1 = 5;
    $num2 = 25;
    echo $num1 + $num2;
    ?>

    <h5>aftrekken</h5>
    <?php
    $num1 = 500;
    $num2 = 250;
    echo $num1 - $num2;
    ?>

    <h5>vermenigvuldigen</h5>
    <?php
    $num1 = 70;
    $num2 = 3;
    echo $num1 * $num2;
    ?>

    <h5>delen</h5>
    <?php
    $num1 = 2100;
    $num2 = 21;
    echo $num1 / $num2;
    ?>

    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
