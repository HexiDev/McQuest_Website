<?php
session_start();
if ($_SESSION['loggedin'] === "true") {
} else {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../styles.css" type="text/css">
</head>
<script> function goBack() {window.history.back();}</script>
        <div class="middle">        
            <a class="a" onclick="goBack()">
                <i class="fa fa-backward"></i>Terug
            </a>
        </div>
<!-- 
<body onload="start()">
    <div class="middle"> 
        <div class="noflex">McQuest&copy</div>
    </div>
    <div class="center">
        <a href="../deelnemers">
            <i class="fa fa-backward"></i> Terug
        </a>

        <a href="../deelnemers/logout.php">
            <i class="fa fa-sign-out"></i> Uitloggen
          </a>

        <a href="mcquest.php">
            <i class="fa fa-question-circle"></i> Info over de quest
        </a>

        <h1>Bingo</h1>
        <p>Jouwn score is:</p>
        <p id="points">0</p>


    <div class="grid-container">
        <div class="grid-item" onclick="mouseClick(1)" id="1" style="color: black;">Ga niet dood</div>
        <div class="grid-item" onclick="mouseClick(2)" id="2" style="color: black;">Maak een huis</div>
        <div class="grid-item" onclick="mouseClick(3)" id="3" style="color: black;">kill 10 mobs</div>
        <div class="grid-item" onclick="mouseClick(4)" id="4" style="color: black;">Maak een diamond pickaxe</div>
        <div class="grid-item" onclick="mouseClick(5)" id="5" style="color: black;">Vind een village</div>
        <div class="grid-item" onclick="mouseClick(6)" id="6" style="color: black;">Niet slapen</div>
        <div class="grid-item" onclick="mouseClick(7)" id="7" style="color: black;">undefined</div>
        <div class="grid-item" onclick="mouseClick(8)" id="8" style="color: black;">undefined</div>
        <div class="grid-item" onclick="mouseClick(9)" id="9" style="color: black;">undefined</div>
        <div class="grid-item" onclick="mouseClick(10)" id="10" style="color: black;">undefined</div>
        <div class="grid-item" onclick="mouseClick(11)" id="11" style="color: black;">undefined</div>
        <div class="grid-item" onclick="mouseClick(12)" id="12" style="color: black;">undefined</div>
        <div class="grid-item" onclick="mouseClick(13)" id="13" style="color: black;">undefined</div>
        <div class="grid-item" onclick="mouseClick(14)" id="14" style="color: black;">undefined</div>
        <div class="grid-item" onclick="mouseClick(15)" id="15" style="color: black;">undefined</div>
        <div class="grid-item" onclick="mouseClick(16)" id="16" style="color: black;">undefined</div>
    </div>
    </div>
    <script>

        var test = 0;
        document.getElementById("points").innerHTML = test;

        function start() {
            for (var x = 1; x < 17; x++) {
                document.getElementById(x).style.color = "black";
            }

        }

        function mouseClick(id) {
            if (document.getElementById(id).style.color == "black") {
                test++
                document.getElementById("points").innerHTML = test;
                document.getElementById(id).style.color = "lightgreen";
            } else if (document.getElementById(id).style.color == "lightgreen") {
                document.getElementById(id).style.color = "red";
                test--
                document.getElementById("points").innerHTML = test;
            } else {
                document.getElementById(id).style.color = "black";
                document.getElementById("points").innerHTML = test;
            }
        }
    </script> -->

</body>

</html>