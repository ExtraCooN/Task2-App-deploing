<?php

declare(strict_types=1);

session_start ();

if (isset($_SESSION['login'])) {
    echo 'Здравствуй, ' . $_SESSION['login'] . '!' . PHP_EOL;
    echo ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/exit.php';

} else {
  include 'about.html';
};