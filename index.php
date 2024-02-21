<?php

declare(strict_types=1);

session_start ();

if (isset($_SESSION['login'])) {
    $currentUrl = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
  $newUrl = str_replace('index', 'exit', $currentUrl);
    echo 'Здравствуй, ' . $_SESSION['login'] . '!' . PHP_EOL;
    echo $newUrl;
    //echo ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/exit.php';

} else {
  include 'about.html';
};
