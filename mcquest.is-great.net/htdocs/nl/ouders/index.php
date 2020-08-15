<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="../styles.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script> function goBack() {window.history.back();}</script>
<body>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
        <label class="logo">McQuest&copy</label>
        <ul>
          <li><a class="active b" href="../index.php">Home</a></li>
          <?php
            session_start();

            if ($_SESSION['loggedin'] === "true") {
            echo '<a href="../deelnemers/scores.php" class="fa fa-trophy b" style="color:gold;margin:0 5px;">SCORE </a>';
            echo '<li><a class="b" href="../deelnemers/mcquest.php">Info&#10004;</a></li>';
            } else {
              echo '<li><a href="#" class="fa fa-trophy b closed" style="color:pwdergray">Score</a></li>';
              echo '<li><a class="b closed" href="#">Info&#10004;</a></li>';
            }
          ?>
          
            <li><a class="b" href="#">Ouders</a></li>
            <li><a class="b" href="../deelnemers">Deelnemers</a></li>
        </ul>
    </nav>
        <div class="middle"> 
        <div class="noflex">McQuest&copy</div>
        </div>
    <div class="center">
      <header>
        <i class="fa fa-warning">Comming soon!!</i>
      </header>
      <a class="a" onclick="goBack()">
                <i class="fa fa-backward"></i>Terug
            </a>
    </div>
  </body>

</html>