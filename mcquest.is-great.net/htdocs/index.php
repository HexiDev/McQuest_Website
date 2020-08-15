<!DOCTYPE html>
<html>

<head>
  <link rel="icon" type="image/png" href="http://mcquest.is-great.net/images/logo.png">
  <link rel="stylesheet" href="styles.css" type="text/css">
  <link rel="stylesheet" href="deflang.js" type="text/js">
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

</body>
<div class="menu">
    <div class="lang">Languages-Talen</div>
<ul class="vis">
        <a class="a" href="../nl/">Nederlands</a>
        <a class="a" href="../en/">English</a>
</ul>
</div>
<script>
  var defaultLang = ((navigator.language || navigator.userLanguage).split('-')[0]);
    if (defaultLang == 'nl')
    {
        window.location.replace("nl/index.php");
    } 
    else
    {
        window.location.replace("en/index.php");
    }
</script>
</html>