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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../styles.css" type="text/css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171562962-1"></script>
    <script> function goBack() {window.history.back();}</script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-171562962-1');
    </script>
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
            <li><a href="scores.php" class="fa fa-trophy b" style="color:gold;">Score</a></li>
            <li><a class="b" href="./mcquest.php">Info&#10004;</a></li>
            <li><a class="b" href="../ouders">Ouders</a></li>
            <li><a class="active b" href="../deelnemers">Deelnemers</a></li>
        </ul>
    </nav>
    <div class="middle">

            <a class="a" onclick="goBack()">
                <i class="fa fa-backward"></i>Terug
            </a>
    <a class="a" href="logout.php">
        <i class="fa fa-sign-out"></i> Uitloggen
    </a>
</div>
    <div class="center">
        <h1 styles="">Welkom</h1>

        <br>
        <br>
        </a>
        </div>

</body>

</html>