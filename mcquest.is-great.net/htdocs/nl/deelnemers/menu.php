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
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="../styles.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
<body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
        <label class="logo">McQuest</label>
        <ul>
            <li><a class="active b" href="./home.php">Home</a></li>
            <li><a href="scores.php" class="fa fa-trophy b" style="color:gold">Score</a></li>
            <li><a class="b" href="#">Home</a></li>
            <li><a class="b" href="#">Home</a></li>
            <li><a class="b" href="#">Home</a></li>
            <li><a class="b" href="#">Home</a></li>
            <li><a class="b" href="#">Home</a></li>
            <li><a class="b" href="#">Home</a></li>
            <li><a class="b" href="#">Home</a></li>
        </ul>
    </nav>
  </body>

</html>