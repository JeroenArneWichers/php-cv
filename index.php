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

    <br /><br />
    <h2>math</h2>
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

    <br /><br />
    <h2>php math functions</h2>
    <h5>optellen</h5>

    <?php
    $globalnum1 = 5;
    $globalnum2 = 25;

    function add($getal1,$getal2)
    {
        global $result;
        $result = $getal1 + $getal2;
    }
    add($globalnum1,$globalnum2);
    echo $result;
    ?>

    <h5>aftrekken</h5>
    <?php

    function sub($getal1,$getal2)
    {
        global $result;
        $result = $getal1 - $getal2;
    }
    sub($globalnum1,$globalnum2);
    echo $result;
    ?>

    <h5>vermenigvuldigen</h5>
    <?php

    function mul($getal1,$getal2)
    {
        global $result;
        $result = $getal1 * $getal2;
    }
    mul($globalnum1,$globalnum2);
    echo $result;
    ?>

    <h5>delen</h5>
    <?php

    function div($getal1,$getal2)
    {
        global $result;
        $result = $getal1 / $getal2;
    }
    div($globalnum1,$globalnum2);
    echo $result;
    ?>

    <br /><br />
    <h2>User inputted php math functions</h2>
    <h5>optellen</h5>
    <form action="result.php" method="post">
    <input id="num1" type="number" name="num1" placeholder = "getal 1">
    <input id="num2" type="number" name="num2" placeholder = "getal 2">
    <input type="submit" name="submit" value="Calculate">
    </form>

    <br /><br />
    <h2>PHP statements</h2>
    <h5>kortingen en toeslagen</h5>
    <?php
        //startwaarden
        $prijsArtikel = 100;
        $leeftijdKoper = 70;
        $teBetalen = $prijsArtikel;
        $woonplaats = "Enschede";

        //alle bewerkingen

        if ($woonplaats == "Enschede")
        {
            $teBetalen = $prijsArtikel / 2;
        }
        else
        {
            if ($leeftijdKoper <= 18)
                $toeslag = $prijsArtikel * 0.1;

            if ($leeftijdKoper >= 65)
                $toeslag = $prijsArtikel * 0.05;
            
            $teBetalen = $prijsArtikel + $toeslag;
        }

        //alle output
        //verwacht iedereen 18 of jonger 10% korting
        //iedereen ouder dan 18 volledig betalen
        //iedereen 65of ouder 5% korting
        //iedereen woont in Enschede 2x zoveel betalen
        echo $teBetalen;
    ?>

    <br /><br />
    <h2>PHP for loops</h2>
    <h5>optellen van getallen</h5>
    <?php
    $totaal = 0;

    for ($getal = 1; $getal <= 5; $getal++)
    {
        $totaal = $totaal + $getal;
        echo "$getal <br>";
    }
    echo "eindresultaat:$totaal";
    ?>

    <br><br>
    <h5>aftellen van 10 naar 0</h5>

    <?php
    $startwaarde = 10;
    $waarde = 0;
    for ($getal = 0; $getal <= 10; $getal++)
    {
        $waarde = $startwaarde--;
        echo "$waarde <br>";
    }
    ?>

    <br /><br />
    <h5>getallen oplopend van 0 naar 20 in sprongen van 2</h5>

    <?php
    $waarde = 0;
    for($getal = 0; $getal <=20; $getal++)
    {
        $startwaarde = $getal++;
        echo "$startwaarde <br>";
    }
    ?>

    <br /><br />
    <h5>getallen aflopend van 20 naar 0 in sprongen van 2</h5>

    <?php
    for($getal = 20; $getal >= 20; $getal--)
    {
        echo "$getal <br>";
    }
    ?>

    <br /><br />
    <h2>PHP for while loops</h2>
    <h5>optellen van getallen</h5>

    <?php
    //init
    $getal = 1;
    $totaal = 0;
    //loop
    while($getal <= 5)
    {
        //waarde berekenen
        $totaal = $totaal + $getal;
        //debug info
        echo "$getal <br>";
        //verhoog teller
        $getal++;
    }
    //output result
    echo "eindresultaat:$totaal";
    ?>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
