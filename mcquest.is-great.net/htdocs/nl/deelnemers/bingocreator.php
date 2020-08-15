<?php
session_start();
if ($_SESSION['loggedin'] === "true") {
} else {
    header("location=' index.php'");
}
?>
<!DOCTYPE html>
<html>

<head>
<div class="middle"> 
        <div class="noflex">McQuest&copy</div>
    </div>
    <title>Editor</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../styles.css" type="text/css">
    <script> function goBack() {window.history.back();}</script>
</head>

<body onload="start()">
    <div class="center">
            <a class="a" onclick="goBack()">
                <i class="fa fa-backward"></i>Terug
            </a>

        <a class="a" href="../deelnemers/logout.php">
            <i class="fa fa-sign-out"></i> Uitloggen
          </a>

        <a class="a" href="mcquest.php">
            <i class="fa fa-question-circle"></i> Info over de quest
        </a>

        <h1>Bingo</h1>
        <p>Jouwn score is:</p>
        <p id="points">0</p>


    <div class="grid-container">
        <div class="grid-item" onClick="mouseClick(1)" id="1">ERROR</div>
        <div class="grid-item" onClick="mouseClick(2)" id="2">ERROR</div>
        <div class="grid-item" onClick="mouseClick(3)" id="3">ERROR</div>
        <div class="grid-item" onClick="mouseClick(4)" id="4">ERROR</div>
        <div class="grid-item" onClick="mouseClick(5)" id="5">ERROR</div>
        <div class="grid-item" onClick="mouseClick(6)" id="6">ERROR</div>
        <div class="grid-item" onClick="mouseClick(7)" id="7">ERROR</div>
        <div class="grid-item" onClick="mouseClick(8)" id="8">ERROR</div>
        <div class="grid-item" onClick="mouseClick(9)" id="9">ERROR</div>
        <div class="grid-item" onClick="mouseClick(10)" id="10">ERROR</div>
        <div class="grid-item" onClick="mouseClick(11)" id="11">ERROR</div>
        <div class="grid-item" onClick="mouseClick(12)" id="12">ERROR</div>
        <div class="grid-item" onClick="mouseClick(13)" id="13">ERROR</div>
        <div class="grid-item" onClick="mouseClick(14)" id="14">ERROR</div>
        <div class="grid-item" onClick="mouseClick(15)" id="15">ERROR</div>
        <div class="grid-item" onClick="mouseClick(16)" id="16">ERROR</div>
    </div>
    </div>
    <script>
        var options = ['Niet slapen', 'Maak een huis', 'kill 10 mobs', 'Ga niet dood', 'Maak een diamond pickaxe', 'Vind een village', 'Maak een daylight sensor', 'Maak een eye of ender', 'Tame een wolf', '45 flint', 'Maak 3 paintings en hang die op dat ze 3x3 zijn', 'Maak 24 arrows', 'Maak een portaal naar de nether in de village', 'Saddle', '3 Ender pearls', 'Bow', 'Heart of the sea', 'Flower pot', 'Diamond', 'Koop iets van een villager', '5 Pumkings'];
        for (var x = 1; x < 17; x++) {
            var option = options[Math.floor(Math.random() * options.length)];
            for (var i = 0; i < options.length; i++) {
                if (options[i] === option) {
                    const index = options.indexOf(option);
                    if (index > -1) {
                        options.splice(index, 1);
                    }
                }
            } //=> [1, 2, 3, 4, 6, 7, 8, 9, 0]
            document.getElementById(x).innerHTML = option;
        }

        var points = 0;
        var page = 0;
        document.getElementById("points").innerHTML = points;

        function start() {
            for (var x = 1; x < 17; x++) {
                document.getElementById(x).style.color = "black";
            }
            y = 16;
            p = 16;
            un = 0;
        }

        function mouseClick(id) {
            if (document.getElementById(id).style.color == "black") {
                points++
                page++
                document.getElementById("points").innerHTML = points;
                document.getElementById(id).style.color = "lightgreen";
            } else if (document.getElementById(id).style.color == "lightgreen") {
                document.getElementById(id).style.color = "red";
                points--
                document.getElementById("points").innerHTML = points;
            } else {
                document.getElementById(id).style.color = "black";
                document.getElementById("points").innerHTML = points;
                page--
            }
            if(page == y && options.length > 1){
                y = y + p;
                for (var x = 1; x < 17; x++) {
            var option = options[Math.floor(Math.random() * options.length)];
            for (var i = 0; i < options.length; i++) {
                if (options[i] === option) {
                    const index = options.indexOf(option);
                    if (index > -1) {
                        options.splice(index, 1);
                    }
                }
            }
            document.getElementById(x).innerHTML = option;
        }
        for (var x = 1; x < 17; x++) {
                document.getElementById(x).style.color = "black";
            }
            }else if(page == y && options.length == 0){
                alert("Er zijn geen dingen meer om te doen ;(");
            }
            
        }
    </script>

</body>

</html>