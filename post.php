<?php
declare(strict_types=1);

session_start ();

$_SESSION['login'] = $_POST['login'];

header("Location: index.php");
