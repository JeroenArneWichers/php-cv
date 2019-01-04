<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

    <!-- Title -->
    <title>php cv</title>
  </head>
  <body>
  <section id="header">
        <div class="header-container">
            <h1>Hypertext Preprocessor</h1>
            <h2>Examples in worming your way trough the slog of trying to understand a 25 year old language.</h2>
            <a href="" class="btn-calculate-your-options">Let's get started</a>
        </div>
    </section>

    <section id="quotes">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 text-center">
                <h1>"But first some little known facts about php...</h1>
                <h1>For example..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">PHP was originally created by a Danish-Canadian programmer named Rasmus Lerdorf.</li>
                        <li class="list-group-item">Although the stable release of PHP only happened on April 12, 2017, it has been around for twenty-five years, as it was first developed in 1994.</li>
                        <li class="list-group-item">It was developed by Lerdorf to manage his own personal website. Common Gateway Interface (CGI) to work with web forms at the time he was developing PHP.</li>
                        <li class="list-group-item">When PHP was developed, it was an acronym for Personal Home Page. It was initially known as PHP/FI, which stood for Personal Home Page/Forms Interpreter.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">It was not until 1997 that PHP became “Hypertext Preprocessor”. Zeev Suraski and Andi Gutmans rewrote the original software component (parser) forming the base for PHP 3.</li>
                        <li class="list-group-item">The core of PHP was rewritten by Suraski and Gutmans. Zend Engine was produced in 1999. The new and changed PHP was then released in May 2000, powered by Zend Engine 1.0.</li>
                        <li class="list-group-item">Although the actual number of PHP developers in the world is not clear, Zend recently estimated that there are more than 5 million PHP Developers.</li>
                        <li class="list-group-item">PHP is available for free, but there are certain restrictions. For example, if a product is created from PHP, it will need permission from the PHP group to contain PHP in their names.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">If Netcraft’s web survey from 2013 is correct, there are 244 million websites, approximately,  that are running PHP. This number must have grown since 2013.</li>
                        <li class="list-group-item">With PHP 7, PHP is ready for the next generation. The performance of PHP was improved through refactoring. It was authored by Xinchen Hui, Nikita Popov, and Dmitry Stogov.</li>
                        <li class="list-group-item">Some of the largest online brands, such as Facebook, Flickr, Yahoo, ProProfs, Technorati, Digg, and Friendster are all powered by PHP.</li>
                        <li class="list-group-item">Popular sites like Wikipedia.org, WordPress.org, Weibo.com, Twitter.com, Qq.Com, Taobao.com, etc., are using PHP.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 text-center">
                <h1>"Now that you know...</h1>
                <h1>Let's start..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                    <?php
                    $FirstName = "Jeroen";
                    $LastName = "Wichers";
                    $Age = "28";
                    $PlaceOfResidence = "Enschede";
                    $Email = "jwichers@hotmail.com";
                    $Github = "https://github.com/JeroenArneWichers";

                    echo "First name:$FirstName<br />";
                    echo "Last name:$LastName<br />";
                    echo "Age:$Age<br />";
                    echo "Place of residence:$PlaceOfResidence<br />";
                    echo "Email:$Email<br />";
                    echo "Github:$Github<br />";
                    ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                    <?php
                        $myTextFile = "php-code-snippet-1.txt";
                        //vast stellen van de variabele. Aanroepen .txt bestand.

                        $textOutput = fopen($myTextFile, 'r');
                        //zeggen dat hij .txt moet openen. En zet op read only.

                        $theData = fread($textOutput, filesize($myTextFile));
                        //zeggen dat hij hem moet lezen. De volledige lengte van het .txt bestand.

                        fclose($textOutput);
                        //zeggen dat hij moet stoppen met lezen .txt

                        echo '<pre>' . htmlspecialchars ($theData) . '</pre>';
                        //toepassen htmlspecialchars
                        //uitspuugen van de $theData variabele (doorverwijst naar .txt)
                    ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">First we start by opening the &lt?php tag.</p>
                    <p class="card-text">Then we start by defining a variable named $FirstName.</p>
                    <p class="card-text">We give that variable the content of "Jeroen".</p>
                    <p class="card-text">The "" denotes that the content is to be regarded as text.</p>
                    <p class="card-text">We do this for all the variables.</p>
                    <p class="card-text">With echo we write out First name:</p>
                    <p class="card-text">Then we call forth the variable $FirstName and write it out.</p>
                    <p class="card-text">We do this for everything we want to write out.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 text-center">
                <h1>"The basics are now known...</h1>
                <h1>Let's start doing some math..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                    <h5>optellen</h5>
                    <?php
                    $num1 = 5;
                    $num2 = 25;
                    echo $num1 + $num2;
                    ?>
                    </p>
                    <h5>aftrekken</h5>
                    <?php
                    $num1 = 500;
                    $num2 = 250;
                    echo $num1 - $num2;
                    ?>
                    </p>
                    <h5>vermenigvuldigen</h5>
                    <?php
                    $num1 = 70;
                    $num2 = 3;
                    echo $num1 * $num2;
                    ?>
                    </p>
                    <h5>delen</h5>
                    <?php
                    $num1 = 2100;
                    $num2 = 21;
                    echo $num1 / $num2;
                    ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                    <?php
                        $myTextFile = "php-code-snippet-2.txt";
                        //vast stellen van de variabele. Aanroepen .txt bestand.

                        $textOutput = fopen($myTextFile, 'r');
                        //zeggen dat hij .txt moet openen. En zet op read only.

                        $theData = fread($textOutput, filesize($myTextFile));
                        //zeggen dat hij hem moet lezen. De volledige lengte van het .txt bestand.

                        fclose($textOutput);
                        //zeggen dat hij moet stoppen met lezen .txt

                        echo '<pre>' . htmlspecialchars ($theData) . '</pre>';
                        //toepassen htmlspecialchars
                        //uitspuugen van de $theData variabele (doorverwijst naar .txt)
                    ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">First we start by opening the &lt?php tag.</p>
                    <p class="card-text">Then we start by defining a variable named $num1.</p>
                    <p class="card-text">We give that variable the content of 5.</p>
                    <p class="card-text">We do this for all the variables.</p>
                    <p class="card-text">PHP can do math for us.</p>
                    <p class="card-text">We want to call forth variable $num1 and add it to $num2 with echo.</p>
                    <p class="card-text">A simple plus sign between the variables is enough.</p>
                    <p class="card-text">The same can be done with - for subtracting and * for multiplying.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 text-center">
                <h1>"Let's make it a little bit harder...</h1>
                <h1>By doing the same thing using functions..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">

                    <h5>optellen</h5>
                    <?php
                    $num1 = 5;
                    $num2 = 25;

                    function add($number1,$number2)
                    {
                        global $result;
                        $result = $number1 + $number2;
                    }
                    add($num1,$num2);
                    echo $result;
                    ?>
                    </p>

                    <h5>aftrekken</h5>
                    <?php
                    function sub($number1,$number2)
                    {
                        global $result;
                        $result = $number1 - $number2;
                    }
                    sub($num1,$num2);
                    echo $result;
                    ?>
                    </p>

                    <h5>vermenigvuldigen</h5>
                    <?php
                    function mul($number1,$number2)
                    {
                        global $result;
                        $result = $number1 * $number2;
                    }
                    mul($num1,$num2);
                    echo $result;
                    ?>
                    </p>

                    <h5>delen</h5>
                    <?php
                    function div($number1,$number2)
                    {
                        global $result;
                        $result = $number1 / $number2;
                    }
                    div($num1,$num2);
                    echo $result;
                    ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                    <?php
                        $myTextFile = "php-code-snippet-3.txt";
                        //vast stellen van de variabele. Aanroepen .txt bestand.

                        $textOutput = fopen($myTextFile, 'r');
                        //zeggen dat hij .txt moet openen. En zet op read only.

                        $theData = fread($textOutput, filesize($myTextFile));
                        //zeggen dat hij hem moet lezen. De volledige lengte van het .txt bestand.

                        fclose($textOutput);
                        //zeggen dat hij moet stoppen met lezen .txt

                        echo '<pre>' . htmlspecialchars ($theData) . '</pre>';
                        //toepassen htmlspecialchars
                        //uitspuugen van de $theData variabele (doorverwijst naar .txt)
                    ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">First we start by opening the &lt?php tag.</p>
                    <p class="card-text">Then we start by defining a variable named $num1.</p>
                    <p class="card-text">We give that variable the content of 5.</p>
                    <p class="card-text">We do this for all the variables.</p>
                    <p class="card-text">We create a function called add.</p>
                    <p class="card-text">We give it empty placeholder variables as named $number1 and $number2.</p>
                    <p class="card-text">Inside the variable we creat a global variable called $result.</p>
                    <p class="card-text">We then define $result as the $number1 + $number2.</p>
                    <p class="card-text">Outside the function we get to call forth the function named add.</p>
                    <p class="card-text">And we tell it to substitute the empty variables $number1 and $number2 with the content of variable $num1 and $num2.</p>
                    <p class="card-text">We then echo the $result variable.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                    <p class="card-text">ATTENTION! It is of vital importance to remember to not use globals anymore. This was just to showcase php's abilities. ATTENTION!</p>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 text-center">
                <h1>"Time for the truly advanced stuff...</h1>
                <h1>Let's do math with user input..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                        <h2>User inputted php math functions</h2>
                        <h5>Mutaties</h5>
                        <form action="index.php" method="post">
                        <input id="num1" type="number" name="num1" placeholder = "getal 1">
                        <input id="num2" type="number" name="num2" placeholder = "getal 2">
                        <input type="submit" name="submit" value="Calculate">
                        </form>

                        <br>
                        <?php
                        $num1 = $_POST["num1"];
                        $num2 = $_POST["num2"];

                        function optellen($getal1,$getal2)
                        {
                            global $result;
                            $result = $getal1 + $getal2;
                        }
                        optellen($num1,$num2);
                        echo "Resultaat van de berekening" . " " . $num1 . " + " . $num2 . " = " . $result;
                        ?>

                        <br>

                        <?php
                        $num1 = $_POST["num1"];
                        $num2 = $_POST["num2"];

                        function aftrekken($getal1,$getal2)
                        {
                            global $result;
                            $result = $getal1 - $getal2;
                        }
                        aftrekken($num1,$num2);
                        echo "Resultaat van de berekening" . " " . $num1 . " - " . $num2 . " = " . $result;
                        ?>

                        <br>

                        <?php
                        $num1 = $_POST["num1"];
                        $num2 = $_POST["num2"];

                        function vermenigvuldigen($getal1,$getal2)
                        {
                            global $result;
                            $result = $getal1 * $getal2;
                        }
                        vermenigvuldigen($num1,$num2);
                        echo "Resultaat van de berekening" . " " . $num1 . " x " . $num2 . " = " . $result;
                        ?>

                        <br>

                        <?php
                        $num1 = $_POST["num1"];
                        $num2 = $_POST["num2"];

                        function delen($getal1,$getal2)
                        {
                            global $result;
                            $result = $getal1 / $getal2;
                        }
                        delen($num1,$num2);
                        echo "Resultaat van de berekening" . " " . $num1 . " / " . $num2 . " = " . $result;
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                    <?php
                        $myTextFile = "php-code-snippet-4.txt";
                        //vast stellen van de variabele. Aanroepen .txt bestand.

                        $textOutput = fopen($myTextFile, 'r');
                        //zeggen dat hij .txt moet openen. En zet op read only.

                        $theData = fread($textOutput, filesize($myTextFile));
                        //zeggen dat hij hem moet lezen. De volledige lengte van het .txt bestand.

                        fclose($textOutput);
                        //zeggen dat hij moet stoppen met lezen .txt

                        echo '<pre>' . htmlspecialchars ($theData) . '</pre>';
                        //toepassen htmlspecialchars
                        //uitspuugen van de $theData variabele (doorverwijst naar .txt)
                    ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">First we start by opening the &lt?php tag.</p>
                    <p class="card-text">Then we start by defining a variable named $num1.</p>
                    <p class="card-text">We give that variable the content of 5.</p>
                    <p class="card-text">We do this for all the variables.</p>
                    <p class="card-text">We create a function called add.</p>
                    <p class="card-text">We give it empty placeholder variables as named $number1 and $number2.</p>
                    <p class="card-text">Inside the variable we creat a global variable called $result.</p>
                    <p class="card-text">We then define $result as the $number1 + $number2.</p>
                    <p class="card-text">Outside the function we get to call forth the function named add.</p>
                    <p class="card-text">And we tell it to substitute the empty variables $number1 and $number2 with the content of variable $num1 and $num2.</p>
                    <p class="card-text">We then echo the $result variable.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 text-center">
                <h1>"The next step is statements...</h1>
                <h1>if statements to be precise..."</h1>
            </div>
            </div>
        </div>
    </section>

    <br /><br />
    <h2>PHP statements</h2>
    <h5>kortingen en toeslagen</h5>

    <h5>personalia koper</h5>
    <form action="index.php" method="post">
    <input id="naamKoper" type="text" name="naamKoper" placeholder = "uw naam">
    <input id="leeftijdKoper" type="number" name="leeftijdKoper" placeholder = "uw leeftijd">
    <input id="woonplaatsKoper" type="text" name="woonplaatsKoper" placeholder = "uw woonplaats">    
    <input type="submit" name="submit" value="Bereken uw prijs">
    </form>

    <?php
        //startwaarden
        $prijsArtikel = 100;
        $naamKoper = $_POST["naamKoper"];
        //naamKoper
        $leeftijdKoper = $_POST["leeftijdKoper"];
        //$leeftijdKoper = 70;
        $teBetalen = $prijsArtikel;
        $woonplaatsKoper = $_POST["woonplaatsKoper"];
        //$woonplaats = "Enschede";

        //alle bewerkingen

        if ($woonplaatsKoper == "Enschede")
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
        echo "Offerte <br>";
        echo "Naam koper: " . "$naamKoper<br>";
        echo "Leeftijd koper: " . "$leeftijdKoper<br>";
        echo "Woonplaats koper: " . "$woonplaatsKoper<br>";
        echo "Te betalen bedrag: " . "$teBetalen";
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
