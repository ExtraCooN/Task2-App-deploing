<?php session_start ();
?>
<html> 
  <head>
    <title>Главная страница</title>
  </head>
  <body>
    <?php
    if (isset($_SESSION['login'])) {
      $currentUrl = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
      $newUrl = str_replace('index', 'exit', $currentUrl);?>
      <p> Здравствуй, <?php echo $_SESSION["login"]; ?>!<br> </p>
      <a href= "<?php echo $newUrl ?>"> Выход </a>
    <?php } else {
      include 'about.html';
    }
    ?>
  </body>
</html>
