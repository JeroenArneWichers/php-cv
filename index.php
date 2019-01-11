<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

    <!-- animate on scroll -->	
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Title -->
    <title>php cv</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
    <a class="navbar-brand">PHP EXAMPLES</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="#introduction">Introduction & Facts</a>
        </li>
        <li class="nav-item dropup">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Simple php basics
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#Declaring $variables & echo">Declaring $variables & echo</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#Simple php math">Simple php math</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#Functions and php math">Functions and php math</a>
        </li>
        <li class="nav-item dropup">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            User input and loops
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#$_POST">$_POST</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#If and if else loops">If and if else loops</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#For loops">For loops</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#While loops">While loops</a>
        </li>
        <li class="nav-item dropup">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Arrays
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#Simple array">Simple array</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#Array using for each">Array using for each</a>
        </li>
        <li class="nav-item dropup">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Advanced end products
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#User contact form">User contact form</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#Display content from array using selection">Display content from array using selection</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#database">Database</a>
        </li>
        </ul>
    </div>
    </nav>

    <section id="header">
		<header>
		  <div class="overlay"></div>
		  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
			<source src="video/code-background.mp4" type="video/mp4">
		  </video>
		  <div class="container h-100">
			<div class="d-flex h-100 text-center align-items-center">
			  <div class="w-100 text-white">
                <h1>Hypertext Preprocessor</h1>
                <h2>Examples in worming your way trough the slog of trying to understand a 25 year old language.</h2>
                <a href="" class="btn-calculate-your-options">Let's get started</a>
			  </div>
			</div>
		  </div>
		</header>
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
        <div id="introduction" class="row spacertop100 spacerbottom100">
            <div class="col-lg-4">
                <div class="card m-5" style="">
                    <img class="card-img-top" src="./img/danish-canadian-flag.png" alt="Card image cap">
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
                    <img class="card-img-top" src="./img/header.jpeg" alt="Card image cap">
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
                    <img class="card-img-top" src="./img/brands.jpeg" alt="Card image cap">
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
        <div id="Declaring $variables & echo" class="container">
            <div class="row">
            <div class="col-lg-12 text-center">
                <h1>"Now that you know...</h1>
                <h1>Let's start..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row spacertop100 spacerbottom100">
            <div class="col-lg-3">
                <div class="card m-5 p-3" style="">
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
            <div class="col-lg-5">
                <div class="card m-5 p-3" style="">
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
                <div class="card m-5 p-3" style="">
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
            <div id="Simple php math" class="row">
            <div class="col-lg-12 text-center">
                <h1>"The basics are now known...</h1>
                <h1>Let's start doing some math..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row spacertop100 spacerbottom100">
            <div class="col-lg-3">
                <div class="card m-5 p-3" style="">
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
            <div class="col-lg-5">
                <div class="card m-5 p-3" style="">
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
                <div class="card m-5 p-3" style="">
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
            <div id="Functions and php math" class="row">
            <div class="col-lg-12 text-center">
                <h1>"Let's make it a little bit harder...</h1>
                <h1>By doing the same thing using functions..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row spacertop100 spacerbottom100">
            <div class="col-lg-3">
                <div class="card m-5 p-3" style="">
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
            <div class="col-lg-5">
                <div class="card m-5 p-3" style="">
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
                <div class="card m-5 p-3" style="">
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
            <div id="$_POST" class="row">
            <div class="col-lg-12 text-center">
                <h1>"Time for the truly advanced stuff...</h1>
                <h1>Let's do something with user input..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row spacertop100 spacerbottom100">
            <div class="col-lg-3">
                <div class="card m-5 p-3" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                        <h2>User inputted php count functions</h2>
                        <form action="index.php" method="POST">
                            <input type="number" name="number1" placeholder = "number 1">
                            <br>
                            <input type="number" name="number2" placeholder = "number 2">
                            <br>
                            <input type="submit" name="submit" value="display list">
                        </form>

                        <?php
                        $number1 = $_POST["number1"];
                        $number2 = $_POST["number2"];
                        for($getal = $number1; $getal <= $number2; $getal++)
                        {
                            echo "$getal <br>";
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card m-5 p-3" style="">
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
            <div class="col-lg-4">
                <div class="card m-5 p-3" style="">
                    <p class="card-text">First we start by creating a form with input fields.</p>
                    <p class="card-text">With method="post" we send it to action="index.php".</p>
                    <p class="card-text">Rearding php we make an opening tag.</p>
                    <p class="card-text">We define variables $number1 and make it equal to the number1 we got from $_POST</p>
                    <p class="card-text">First we start by opening the &lt?php tag.</p>
                    <p class="card-text">Then we start by defining a variable named $number1.</p>
                    <p class="card-text">We give that variable the content $_POST["number1"].</p>
                    <p class="card-text">We do this for all the variables.</p>
                    <p class="card-text">We then start the loop.</p>
                    <p class="card-text">We create a variable named $getal and give it the content of user inputted $number1.</p>
                    <p class="card-text">Then we ask if it's smaller or equal to $number2.</p>
                    <p class="card-text">If so add 1 to $getal with $getal++.</p>
                    <p class="card-text">And subsequently excecute the directive echo $getal1.</p>
                    <p class="card-text">Should $getal be bigger than $number 2 stop excecuting the function and start the next part of the programm.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes">
        <div id="If and if else loops" class="container">
            <div class="row">
            <div class="col-lg-12 text-center">
                <h1>"The next step is statements...</h1>
                <h1>if statements to be precise..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row spacertop100 spacerbottom100">
            <div class="col-lg-3">
                <div class="card m-5 p-3" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                        <h2>PHP statements</h2>
                        <h5>kortingen en toeslagen</h5>
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
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card m-5 p-3" style="">
                    <p class="card-text">
                    <?php
                        $myTextFile = "php-code-snippet-5.txt";
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
                <div class="card m-5 p-3" style="">
                    <p class="card-text">First we start by creating a form with input fields.</p>
                    <p class="card-text">With method="post" we send it to action="index.php".</p>
                    <p class="card-text">First we start by opening the &lt?php tag.</p>
                    <p class="card-text">The default value of $prijsArtikel will be set to 100. </p>
                    <p class="card-text">We define variables $naamKoper and make it equal to the user input from $naamKoper we got from the form using $_POST.</p>
                    <p class="card-text">This will be done for all other variables.</p>
                    <p class="card-text">We then start the if statement. If the condition is true it will do the following.</p>
                    <p class="card-text">In this example if $woonplaatsKoper is exact to "Enschede" the to be paid price will be halved.</p>
                    <p class="card-text">We then start the loop.</p>
                    <p class="card-text">We create a variable named $getal and give it the content of user inputted $number1.</p>
                    <p class="card-text">Then we ask if it's smaller or equal to $number2.</p>
                    <p class="card-text">If so add 1 to $getal with $getal++.</p>
                    <p class="card-text">And subsequently excecute the directive echo $getal1.</p>
                    <p class="card-text">Should $getal be bigger than $number 2 stop excecuting the function and start the next part of the programm.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes">
        <div class="container">
            <div id="For loops" class="row">
            <div class="col-lg-12 text-center">
                <h1>"The next step in php...</h1>
                <h1>are for loops..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row spacertop100 spacerbottom100">
            <div class="col-lg-3">
                <div class="card m-5 p-3" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                        <h2>PHP for loops</h2>
                        <h5>Optellen van getallen</h5>
                        <?php
                        $totaal = 0;

                        for ($getal = 1; $getal <= 5; $getal++)
                        {
                            $totaal = $totaal + $getal;
                            echo "$getal <br>";
                        }
                        echo "eindresultaat:$totaal";
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card m-5 p-3" style="">
                    <p class="card-text">
                    <?php
                        $myTextFile = "php-code-snippet-6.txt";
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
                <div class="card m-5 p-3" style="">
                    <p class="card-text">First we start by opening the &lt?php tag.</p>
                    <p class="card-text">We create a variable named $total. We give it the value of 0. </p>
                    <p class="card-text">We then start the loop.</p>
                    <p class="card-text">We create a variable $getal and give it the value of 1. </p>
                    <p class="card-text">Then we check if it's smaller or equal to the number of 5.</p>
                    <p class="card-text">If so add 1 to the variable $getal and excecute the program further.</p>
                    <p class="card-text">The variable $totaal will become $totaal + $getal. After each increment it will be displayed with echo.</p>
                    <p class="card-text">Should $getal be bigger than 5 stop excecuting the function and start the next part of the programm.</p>
                    <p class="card-text">In this case it's to display the latest $total with echo.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 text-center">
                <h1>"For loops...</h1>
                <h1>backwards counting..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row spacertop100 spacerbottom100">
            <div class="col-lg-3">
                <div class="card m-5 p-3" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                        <h2>PHP for loops</h2>
                        <h5>Aftellen van getallen</h5>
                        <?php
                        $startwaarde = 5;
                        $waarde = 0;
                        for ($getal = 0; $getal <= 5; $getal++)
                        {
                            $waarde = $startwaarde--;
                            echo "$waarde <br>";
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card m-5 p-3" style="">
                    <p class="card-text">
                    <?php
                        $myTextFile = "php-code-snippet-7.txt";
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
                <div class="card m-5 p-3" style="">
                    <p class="card-text">First we start by opening the &lt?php tag.</p>
                    <p class="card-text">We create a variable named $startwaarde. We give it the value of 5. This is the begin of the countdown.</p>
                    <p class="card-text">We create a variable named $waarde. We give it the value of 0. </p>
                    <p class="card-text">We then start the loop.</p>
                    <p class="card-text">We create a variable $getal and give it the value of 0. </p>
                    <p class="card-text">Then we check if it's smaller or equal to the number of 5.</p>
                    <p class="card-text">If so add 1 to the variable $getal and excecute the program further.</p>
                    <p class="card-text">The variable $waarde will become $startwaarde--. The value of startwaarde - 1.</p>
                    <p class="card-text">It wil then be displayed using echo.</p>
                    <p class="card-text">Should $getal be bigger than 5 stop excecuting the function and start the next part of the programm.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes">
        <div class="container">
            <div id="While loops" class="row">
            <div class="col-lg-12 text-center">
                <h1>"While loops...</h1>
                <h1>counting up..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row spacertop100 spacerbottom100">
            <div class="col-lg-3">
                <div class="card m-5 p-3" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                        <h2>PHP while loops</h2>
                        <h5>Optellen van getallen</h5>
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
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card m-5 p-3" style="">
                    <p class="card-text">
                    <?php
                        $myTextFile = "php-code-snippet-8.txt";
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
                <div class="card m-5 p-3" style="">
                    <p class="card-text">First we start by opening the &lt?php tag.</p>
                    <p class="card-text">We create a variable named $getal. We give it the value of 1. This is the start.</p>
                    <p class="card-text">We create a variable named $total. We give it the value of 0. </p>
                    <p class="card-text">We then start the loop with the condition.</p>
                    <p class="card-text">For as long as $getal is smaller or equal to 5 the function is excecuted.</p>
                    <p class="card-text">The $totaal is the sum of $totaal and $getal.</p>
                    <p class="card-text">We then echo the content of $getal (which is 1 at start). And then add 1 with $getal++.</p>
                    <p class="card-text">Should $getal become greater than 5 it will stop the function adn excecute the next part.</p>
                    <p class="card-text">The new $totaal will be displayed using echo.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes">
        <div class="container">
            <div id="Simple array" class="row">
            <div class="col-lg-12 text-center">
                <h1>"And now for something...</h1>
                <h1>completly different...</h1>
                <h1>Arrays..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row spacertop100 spacerbottom100">
            <div class="col-lg-3">
                <div class="card m-5 p-3" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                        <h2>Display content of an array</h2>
                        <?php
                        $icons = array ("Trump", "Hillary", "Bernie", "Pewdiepie");

                        for($i=0; $i<count($icons); $i++)
                        {
                        echo $icons[$i] . "<br>";
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card m-5 p-3" style="">
                    <p class="card-text">
                    <?php
                        $myTextFile = "php-code-snippet-9.txt";
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
                <div class="card m-5 p-3" style="">
                    <p class="card-text">First we start by opening the &lt?php tag.</p>
                    <p class="card-text">We create a variable named $icons. We declare it to be an array.</p>
                    <p class="card-text">The content of the array will be strings with text in them seperated by a comma.</p>
                    <p class="card-text">We then start the loop.</p>
                    <p class="card-text">The variable $i will be set at 0.</p>
                    <p class="card-text">We then tell it to count the number of elements in the array. (in this case 4).</p>
                    <p class="card-text">Then the number of $i will be compared to the content of $icons.</p>
                    <p class="card-text">For as long as the conditions are fullfilled the code will be excecuted.</p>
                    <p class="card-text">The content of the array will be desplayed with echo.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 text-center">
                <h1>"And now for something...</h1>
                <h1>completly different...</h1>
                <h1>Arrays in reverse..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row spacertop100 spacerbottom100">
            <div class="col-lg-3">
                <div class="card m-5 p-3" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                        <h2>Display content of an array in reverse.</h2>
                        <?php
                        $icons = array ("Trump", "Hillary", "Bernie", "Pewdiepie");
                        $size = sizeof($icons);

                        for($i=$size-1; $i>=0; $i--){
                            echo $icons[$i] . "<br>";
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card m-5 p-3" style="">
                    <p class="card-text">
                    <?php
                        $myTextFile = "php-code-snippet-10.txt";
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
                <div class="card m-5 p-3" style="">
                    <p class="card-text">First we start by opening the &lt?php tag.</p>
                    <p class="card-text">We then create an array name $icons and fill it.</p>
                    <p class="card-text">$size will be equal to to the size of $icons. Wich in this case will be 4.</p>
                    <p class="card-text">Then we start the loop. We set variable $i at 3 (the number of $size-1).</p>
                    <p class="card-text">We then check if it's greater or equal to 0. If so, continue the code.</p>
                    <p class="card-text">With $i-- we decrease it by 1. And execute the next part. Echoing $icons.</p>
                    <p class="card-text">The first echo will be $icons number 3 ($size-1). Then it will echo $icons number 2, etc.</p>
                    <p class="card-text">Should $i no longer be great or equal to 0 the code will end.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes">
        <div class="container">
            <div id="Array using for each" class="row">
            <div class="col-lg-12 text-center">
                <h1>"One more thing about loops...</h1>
                <h1>For each..."</h1>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row spacertop100 spacerbottom100">
            <div class="col-lg-3">
                <div class="card m-5 p-3" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                        <h2>Display content of an array using for each.</h2>
                        <?php
                        $icons = array ("Trump", "Hillary", "Bernie", "Pewdiepie");

                        foreach ($icons as $value)
                        {
                            echo $value . "<br>";
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card m-5 p-3" style="">
                    <p class="card-text">
                    <?php
                        $myTextFile = "php-code-snippet-11.txt";
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
                <div class="card m-5 p-3" style="">
                    <p class="card-text">First we start by opening the &lt?php tag.</p>
                    <p class="card-text">We then create an array name $icons and fill it.</p>
                    <p class="card-text">Then we start the loop with the condition.</p>
                    <p class="card-text">For every loop iteration, the value of the current array element is assigned to $value.</p>
                    <p class="card-text">The array pointer is then moved by one, until it reaches the last array element.</p>
                    <p class="card-text">Then it stops the code.</p>
                    <p class="card-text">The content of the array is then displayed one by one. Using echo.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                </div>
            </div>
        </div>
    </div>


    <section id="quotes">
        <div class="container">
            <div id="User contact form" class="row">
            <div class="col-lg-12 text-center">
                <h1>"Let's end with something...</h1>
                <h1>truly special...</h1>
                <h1>User contact form..."</h1>
                <h5>(that writes the data to a .txt and can be retrieved again.)</h5>
            </div>
            </div>
        </div>
    </section>

        <div class="container-fluid">
        <div class="row spacertop100 spacerbottom100">
            <div class="col-lg-3">
                <div class="card m-5 p-3" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                        <h2>User contact form.</h2>
                        <h5>(that creates .txt and can be called back again.)</h5>
                        <form action="index.php" method="post">
                            <input id="nameUser" type="text" name="nameUser" placeholder = "Your name..."><br>
                            <input id="ageUser" type="number" name="ageUser" placeholder = "Your age..."><br>
                            <input id="residenceUser" type="text" name="residenceUser" placeholder = "Your place of residence..."><br>    
                            <input id="emailUser" type="text" name="emailUser" placeholder = "Your Email adress..."><br>
                            <textarea id="messageUser" placeholder="Your message can be placed here..." cols="20" rows="5" name="messageUser"></textarea>
                            <input type="submit" name="submit" value="Send message" onClick="return empty()">
                        </form>
                        <?php
                            $name = $_POST['nameUser'];
                            $age = $_POST['ageUser'];
                            $residence = $_POST['residenceUser'];
                            $email = $_POST['emailUser'];
                            $message = $_POST['messageUser'];
                            $fp = fopen("user-comments.txt", "w");
                            $savestring = "User name:" . $name . "," . "<br/>" . "User age:" . $age . "," . "<br/>" . "User residence:" . $residence . "," . "<br/>" . "User Email:" . $email . "," . "<br/>" . "User message:" . $message;
                            fwrite($fp, $savestring);
                            fclose($fp);

                            if (empty($name) && empty($age) && empty($residence) && empty($email) && empty($message)) 
                            {
                                echo "<br/>" . "Please input the fields correctly.";
                            }
                            else 
                            {
                                echo "<h5>Your comment was:</h5>";
                                echo file_get_contents( "user-comments.txt" ); // get the contents, and echo it out.
                            }
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card m-5 p-3" style="">
                    <p class="card-text">
                    <?php
                        $myTextFile = "php-code-snippet-12.txt";
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
                <div class="card m-5 p-3" style="">
                    <p class="card-text">We already discussed creating a form. So you already know that.</p>
                    <p class="card-text">Regarding the important part we first start by opening the &lt?php tagand setting the variables.</p>
                    <p class="card-text">The variable $name will be filled with the content we get from the 'nameUser' input field we get from $_POST. </p>
                    <p class="card-text">The next part is opening a .txt file named 'user-comments.txt'. If it doesn't exsist yet. No matter. fopen opens as well as creates the file. We use fopen for that. </p>
                    <p class="card-text">After fopen we write a w. For writing to the file. If you wanted to append to it, thus saving the previous text you wrote to it, you would've written an a.</p>
                    <p class="card-text">With $savestring you can set the variables (and other contents) that you want to write to the .txt file.</p>
                    <p class="card-text">Then we have to tell php to actually write the $savestring to the .txt file.</p>
                    <p class="card-text">In order to prevent empty field submission we make an if else statement. If the $name, $age etc are empty echo the corresponding string.</p>
                    <p class="card-text">If the variables are filled echo the content from user-comments.txt.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes">
        <div class="container">
            <div id="Display content from array using selection" class="row">
            <div class="col-lg-12 text-center">
                <h1>"As an added bonus..."</h1>
                <h5>(let's make an array that displays ...</h5>
                <h5>it's contents based on selection...)</h5>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row spacertop100 spacerbottom100">
            <div class="col-lg-3">
                <div class="card m-5 p-3" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                        <h2>Roman legions</h2>
                        <h5>(based on selection variables)</h5>
                        <br>

                        <!-- Ik wil een provincie kunnen selecteren -->

                        <h4>Please select the province</h4>
                        <form action="index.php" method="POST">
                        <select select name="province">
                            <option select name="" value="Please select...">Please select...</option>
                            <option select name="Africa" value="Africa">Africa</option>
                            <option select name="Arabia" value="Arabia">Arabia</option>
                            <option select name="Britannia" value="Britannia">Britannia</option>
                        </select>
                        </form>
                        <br>

                        <?php

                        //init variabelen/array

                        $legion1 = array
                        (
                            "name" => "Legio III Augusta",
                            "garrison" => "Africa",
                            "foundationDate" => "41 bc",
                            "briefHistory" => "Created by future Emperor Augustus."
                        );

                        $legion2 = array
                        (
                            "name" => "Legio III Cyrenaica",
                            "garrison" => "Arabia",
                            "foundationDate" => "36 bc",
                            "briefHistory" => "Created by Marcus Antonius."
                        );

                        $legion3 = array
                        (
                            "name" => "Legio VI Victrix",
                            "garrison" => "Britannia",
                            "foundationDate" => "41 bc",
                            "briefHistory" => "Created by future Emperor Augustus."
                        );

                        //ik wil kunnen filteren op basis van "garrison" (province).

                        //ik wil alle bijkomende informatie van de bovenliggende array weergeven.


                        //print_r($legion1);
                        //

                        //$legion = $_POST["Africa"];

                        //echo $legion1["name"] . "<br>" . $legion["garrison"] . "<br>" . $legion["foundationDate"] . "<br>" . $legion["briefHistory"];
                        echo $legion1["garrison"];
                        echo "<br>";
                        echo $legion1["foundationDate"];
                        echo "<br>";
                        echo $legion1["briefHistory"];

                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card m-5 p-3" style="">
                    <p class="card-text">
                    <?php
                        $myTextFile = "php-code-snippet-13.txt";
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
                <div class="card m-5 p-3" style="">
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">If the variables are filled echo the content from user-comments.txt.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes">
        <div class="container">
            <div id="database" class="row">
            <div class="col-lg-12 text-center">
                <h1>"Just one more thing..."</h1>
                <h5>(creating databases and connecting to it with php...)</h5>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row spacertop100 spacerbottom100">
            <div class="col-lg-3">
                <div class="card m-5 p-3" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                        <h2>Roman legions</h2>
                        <h5>(pulled from database)</h5>
                        <br>

                        <!-- Ik wil een provincie kunnen selecteren -->

                        <h4>This part unfortunatly won't work without a live running database.</h4>

                        <?php
                        // voorwaarde met PDO en niet!!! met mysql of mysqli. Dus van deze tijd en flexibel.
                        // ik wil een connectie met de database server
                        $conn = new PDO("mysql:host=127.0.0.1;dbname=project1", "root", "");

                        //stuur een sql query naar database server
                        $stmt = $conn->query("SELECT * FROM legions");

                        //antwoord van database server opvragen
                        //door het antwoord heen lopen
                        while ($row = $stmt->fetch())
                        {

                        //en weergeven als pagina naar gebruiker als HTML   
                        echo "<li>" . "Legion name: " . $row["name"] . 
                        "<br>" . "Legion garrison: " . $row["garrison"] . 
                        "<br>" . "Legion foundation date: " . $row["foundationDate"] . 
                        "<br>" . "Legion brief history: " . $row["briefHistory"] . "</li>"; 

                        }

                        //verbreek verbinding met database server

                        $conn = NULL;
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card m-5 p-3" style="">
                    <p class="card-text">
                    <?php
                        $myTextFile = "php-code-snippet-14.txt";
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
                <div class="card m-5 p-3" style="">
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">If the variables are filled echo the content from user-comments.txt.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes">
        <div class="container">
            <div id="database" class="row">
            <div class="col-lg-12 text-center">
                <h1>"Just one more thing..."</h1>
                <h5>(adding to databases)</h5>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row spacertop100 spacerbottom100">
            <div class="col-lg-3">
                <div class="card m-5 p-3" style="">
                    <img class="card-img-top" src="./img/faq-background.jpeg" alt="Card image cap">
                    <p class="card-text">
                        <h2>Roman legions</h2>
                        <h5>(pulled from database)</h5>
                        <h5>(add to it using forms)</h5>
                        <br>

                        <!-- Ik wil een provincie kunnen selecteren -->

                        <h4>This part unfortunatly won't work without a live running database.</h4>
                        <form action="index.php" method="POST">
                            <input name="newLegion" placeholder="New Legion name...">
                            <br>
                            <input name="newGarrison" placeholder="New Garrison...">
                            <br>
                            <input name="newFoundationDate" placeholder="New Foundation Date...">
                            <br>
                            <input name="newBriefHistory" placeholder="New Brief History...">
                            <br>
                            <button type="submit">Add Legion</button>
                            </input>
                        </form>

                        <br>
                        <hr>
                        <br>

                        <form action="index.php" method="POST">
                            <input name="delLegion" placeholder="Delete Legion name...">
                            <br>
                            <input name="delGarrison" placeholder="Delete Garrison...">
                            <br>
                            <input name="delFoundationDate" placeholder="Delete Foundation Date...">
                            <br>
                            <input name="delBriefHistory" placeholder="Delete Brief History...">
                            <br>
                            <input name="delid" placeholder="Delete id...">
                            <br>
                            <button type="submit">Delete Legion</button>
                            </input>
                        </form>

                        <?php
                            $conn = new PDO("mysql:host=127.0.0.1;dbname=project1", "root", "");

                            $stmt = $conn->prepare("INSERT INTO legions (name, garrison, foundationDate, briefHistory) VALUES (:fnewLegion, :fnewGarrison, :fnewFoundationDate, :fnewBriefHistory)");

                            $stmt->bindParam(':fnewLegion',$newLegion);
                            $stmt->bindParam(':fnewGarrison',$newGarrison);
                            $stmt->bindParam(':fnewFoundationDate',$newFoundationDate);
                            $stmt->bindParam(':fnewBriefHistory',$newBriefHistory);

                            $newLegion = $_POST["newLegion"];
                            $newGarrison = $_POST["newGarrison"];
                            $newFoundationDate = $_POST["newFoundationDate"];
                            $newBriefHistory = $_POST["newBriefHistory"];
                            $stmt->execute();

                            $conn = NULL;
                        ?>

                        <?php
                            $conn = new PDO("mysql:host=127.0.0.1;dbname=project1", "root", "");

                            $stmt = $conn->query("SELECT * FROM legions");

                            while ($row = $stmt->fetch())
                            {
 
                            echo "Legion name: " . $row["name"] . "<br>" . "Legion garrison: " . $row["garrison"] . "<br>" . "Legion foundation date: " . $row["foundationDate"] . "<br>" . "Legion brief history: " . $row["briefHistory"] . "<br>" . "ID of article: " . $row["id"] . "<br>" . "<br>"; 

                            }
                            $conn = NULL;
                        ?>

                        <?php
                            $conn = new PDO("mysql:host=127.0.0.1;dbname=project1", "root", "");

                            $stmt = $conn->prepare("INSERT INTO legions (name, garrison, foundationDate, briefHistory) VALUES (:fnewLegion, :fnewGarrison, :fnewFoundationDate, :fnewBriefHistory)");

                            $stmt->bindParam(':fnewLegion',$newLegion);
                            $stmt->bindParam(':fnewGarrison',$newGarrison);
                            $stmt->bindParam(':fnewFoundationDate',$newFoundationDate);
                            $stmt->bindParam(':fnewBriefHistory',$newBriefHistory);

                            $newLegion = $_POST["newLegion"];
                            $newGarrison = $_POST["newGarrison"];
                            $newFoundationDate = $_POST["newFoundationDate"];
                            $newBriefHistory = $_POST["newBriefHistory"];
                            $stmt->execute();

                            $conn = NULL;
                        ?>

                        <?php
                            $conn = new PDO("mysql:host=127.0.0.1;dbname=project1", "root", "");

                            $stmt = $conn->prepare("DELETE FROM legions WHERE id=:fdelid AND name=:fdelLegion AND garrison=:fdelGarrison AND foundationDate=:fdelFoundationDate AND briefHistory=:fdelBriefHistory");

                            //(name, garrison, foundationDate, briefHistory, id) VALUES (:fdelLegion, :fdelGarrison, :fdelFoundationDate, :fdelBriefHistory, :fdelid)");

                            $stmt->bindParam(':fdelLegion',$delLegion);
                            $stmt->bindParam(':fdelGarrison',$delGarrison);
                            $stmt->bindParam(':fdelFoundationDate',$delFoundationDate);
                            $stmt->bindParam(':fdelBriefHistory',$delBriefHistory);
                            $stmt->bindParam(':fdelid',$delid);

                            $delLegion = $_POST["delLegion"];
                            $delGarrison = $_POST["delGarrison"];
                            $delFoundationDate = $_POST["delFoundationDate"];
                            $delBriefHistory = $_POST["delBriefHistory"];
                            $delid = $_POST["delid"];
                            $stmt->execute();

                            //echo $stmt;

                            // $conn->exec($sql);

                            $conn = NULL;
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card m-5 p-3" style="">
                    <p class="card-text">
                    <?php
                        $myTextFile = "php-code-snippet-15.txt";
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
                <div class="card m-5 p-3" style="">
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">.</p>
                    <p class="card-text">If the variables are filled echo the content from user-comments.txt.</p>
                    <p class="card-text">The end is always a php end tag. Like this ?></p>
                </div>
            </div>
        </div>
    </div>

    <section id="quotes2">
        <div class="container">
            <div id="database" class="row">
            <div class="col-lg-12 text-center">
                <h1>"A final word...</h1>
                <h1>...I truly hope this...</h1>
                <h1>...small sample page...</h1>
                <h1>...has been as helpfull for you...</h1> 
                <h1>...as it has been for me making it..."</h1>
            </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    <script>
	  AOS.init();
    </script>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
  
  </body>
</html>
