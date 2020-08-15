<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171562962-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171562962-1');
</script>

<?php
    session_start();
    $_SESSION['loggedin'] = false;
?>
<script>
  var defaultLang = ((navigator.language || navigator.userLanguage).split('-')[0]);
        window.location.replace("../index.php");
</script>