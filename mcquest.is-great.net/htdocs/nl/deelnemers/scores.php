<?php
session_start();
if ($_SESSION['loggedin'] === "true") {
} else {
    header("Location: index.php");
    die();
}
?>

<!DOCTYPE html>
<html>

    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171562962-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-171562962-1');
        </script>
        <script> function goBack() {window.history.back();}</script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <link rel="stylesheet" href="../styles.css" type="text/css">
        <link rel="stylesheet" href="http://192.168.64.2/mcquest.is-great.net/htdocs/nl/deelnemers/back.js" type="text/js">
    </head>
    <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
        <label class="logo">McQuest&copy</label>
        <ul>
            <li><a class="b" href="../..">Home</a></li>
            <li><a href="scores.php" class="active fa fa-trophy b" style="color:gold;">Score</a></li>
            <li><a class="b" href="./mcquest.php">Info&#10004;</a></li>
            <li><a class="b" href="../ouders">Ouders</a></li>
            <li><a class="b" href="../deelnemers">Deelnemers</a></li>
        </ul>
    </nav>
        <div class="middle">
       
        <div class="middle">

        <a class="a" onclick="goBack()">
            <i class="fa fa-backward"></i>Terug
        </a>
        <a class="a" href="logout.php">
        <i class="fa fa-sign-out"></i> Uitloggen
        </a>
        </div>
            <br>
            <br>
            <br>
            <br>
            <i class="fa fa-trophy" style="font-size:40px;color:gold"><i>Scores</i></i>
            </div>
            <div class="grid-center">
            <div class="grid-container">
            <div class="grid-item">Deelnemer</div> <div class="grid-item">Team</div> <div class="grid-item">Score</div> <div class="grid-item">Opmerkingen</div>
            <div class="grid-item">Joshua</div> <div class="grid-item" style="color:blue">Blauw</div> <div class="grid-item">0/2</div> <div class="grid-item">Captain</div>
            <div class="grid-item">Mia</div> <div class="grid-item" style="color:blue">Blauw</div> <div class="grid-item">1/6</div> <div class="grid-item">Speler</div>
            <div class="grid-item">Quinn</div> <div class="grid-item" style="color:blue">Blauw</div> <div class="grid-item">1/7</div> <div class="grid-item">Speler</div>
            <div class="grid-item">Rashid</div> <div class="grid-item" style="color:blue">Blauw</div> <div class="grid-item">0/2</div> <div class="grid-item">Speler</div>
            <div class="grid-item">Rymer</div> <div class="grid-item" style="color:blue">Blauw</div> <div class="grid-item">0/1</div> <div class="grid-item">Speler</div>
            <div class="grid-item">Julian</div> <div class="grid-item" style="color:blue">Blauw</div> <div class="grid-item">0/0</div> <div class="grid-item">Speler</div>
            <div class="grid-item">Youri</div> <div class="grid-item" style="color:blue">Blauw</div> <div class="grid-item">1/1</div> <div class="grid-item">reserve-speler</div>
            </div>
            <br>
            <div class="grid-container">
            <div class="grid-item">Rijk</div> <div class="grid-item" style="color:red">Rood</div> <div class="grid-item">5/5</div> <div class="grid-item">Captain, behalve 16 en 23 juli</div>
            <div class="grid-item">Rafayel</div> <div class="grid-item" style="color:red">Rood</div> <div class="grid-item">0/0</div> <div class="grid-item">Captain, op 16 en 23 juli</div>
            <div class="grid-item">Willem</div> <div class="grid-item" style="color:red">Rood</div> <div class="grid-item">6/6</div> <div class="grid-item"><i class="fa fa-trophy" style="font-size:30px;color:gold"></i></i>Speler met meeste punten</div>
            <div class="grid-item">Erryn</div> <div class="grid-item" style="color:red">Rood</div> <div class="grid-item">3/6</div> <div class="grid-item">Speler</div>
            <div class="grid-item">Jesse</div> <div class="grid-item" style="color:red">Rood</div> <div class="grid-item">3/3</div> <div class="grid-item">Speler</div>
            <div class="grid-item">Tesse</div> <div class="grid-item" style="color:red">Rood</div> <div class="grid-item">1/1</div> <div class="grid-item">Speler</div>
            <div class="grid-item">Jamie</div> <div class="grid-item" style="color:red">Rood</div> <div class="grid-item">3/3</div> <div class="grid-item">Speler</div>
            </div>
            <br>
            <div class="grid-container">
            <div class="grid-item">Youri</div> <div class="grid-item" style="color:lightgreen">Mod</div> <div class="grid-item">&infin;</div> <div class="grid-item">Moderator</div>
            <div class="grid-item">Daan</div> <div class="grid-item" style="color:lightgreen">Mod</div> <div class="grid-item">&infin;</div> <div class="grid-item">Moderator</div>
            <div class="grid-item">Richel</div> <div class="grid-item" style="color:lightgreen">Mod</div> <div class="grid-item">&infin;</div> <div class="grid-item">Scheidsrechter</div>
        </div>
        </div>
        <div class="middle">
        
        <a class="a" href="https://github.com/djog/minecraft_quest">
        <-~-&#128570;<i style="font-size:30px;color:cyan">Github</i>-~->
        </a>
        </div>
        </div>

    </body>
</html>