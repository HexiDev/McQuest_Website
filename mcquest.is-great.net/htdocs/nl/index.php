<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./styles.css" type="text/css">
  <style>
    .row {

      display: flex;
      flex-direction: row;
      flex-wrap: wrap;

      justify-content: center;
    }

    .column {
      margin: 50px;
      padding: 20px;
    }
  </style>

</head>

<body>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
        <label class="logo">McQuest&copy</label>
        <ul>
          <li><a class="active b" href="./index.php">Home</a></li>
          <?php
            session_start();

            if ($_SESSION['loggedin'] === "true") {
            echo '<a href="./deelnemers/scores.php" class="fa fa-trophy b" style="color:gold;margin:0 4px;">SCORE </a>';
            echo '<li><a class="b" href="./deelnemers/mcquest.php">Info&#10004;</a></li>';
            } else {
              echo '<li><a href="#" class="fa fa-trophy b closed" style="color:pwdergray;cursor:pointer">Score</a></li>';
              echo '<li><a class="b closed" href="#">Info&#10004;</a></li>';
            }
          ?>
          
            <li><a class="b" href="./ouders">Ouders</a></li>
            <li><a class="b" href="./deelnemers">Deelnemers</a></li>
        </ul>
    </nav>
  <div class="row">
    <div class="column">
      <a class="a" href="../nl/ouders/index.php">
        <div class="image1">
      <img src="../images/villager.png" alt="Ouders"></a>
      </div>
    </div>
    <div class="column">
      <div class="welkom">
      <h1>Welkom</h1>
      <p>Kies een plaatje</p>
      </div>
    </div>
    <div class="column">
      <a class="a" href=../nl/deelnemers/index.php>
        <p class="image2">
          <img src="../images/baby_zombie.png" alt="Deelnemers"></a>
          </p>
          </a>
    </div>
  </div>
</body>

</html>