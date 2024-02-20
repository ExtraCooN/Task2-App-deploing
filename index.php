<?php

declare(strict_types=1);

include 'about.html';

if ($_SESSION['login'] = isset($_SESSION['login'])) {
    echo 'Здравствуй, ' . $_SESSION['login'] . '!';
    echo PHP_EOL;
    echo ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . 'exit.php';

}