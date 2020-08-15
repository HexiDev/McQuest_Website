<?php
   $password = "password";

   session_start();

   if (
      isset($_SESSION['loggedin']) &&
      $_SESSION['loggedin'] === "true"
   ) {

      header("location: home.php");
   }

   if (isset($_GET['p']) && $_GET['p'] == "login") {

      if ($_POST['keypass'] != $password) {

         echo "Wachtwoord incorrect.";
      } else if ($_POST['keypass'] == $password) {

         $_SESSION["loggedin"] = "true";

         header("Location: home.php");
      } else {

         echo "Er is een fout opgetreden.";
      }
   }
?>
<html manifest="cache.manifest">

<head>
   <title>Deelnemers</title>
   <script type="text/javascript" src="update_cache.js"></script>
   <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
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
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   <link rel="stylesheet" href="../styles.css" type="text/css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
   <nav>
      <label for="check" class="checkbtn">
         </label>
         <label class="logo">McQuest&copy</label>
      </nav>
      <div class="login-screen">
      <div class="middle">
         <a class="a" onclick="goBack()">
            <i class="fa fa-backward"></i>Terug
         </a>
         <br>
      </div>
   <div class="center">
      <img src="./images/logo.png" width="100" height="100">
      <h1>Deelnemers Login</h1>
      <div class="login">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" method="post">
         <input type="password" name="keypass" id="keypass" required/>
         <label for="name" class="label-name">
           <span class="content-name">
            Wachtwoord
           </span> 
         </label> 
         <input type="submit" id="submit" value="Inloggen" />
         <br>
         
      </form>
      </div>
   </div>
   </div>
</body>

</html>