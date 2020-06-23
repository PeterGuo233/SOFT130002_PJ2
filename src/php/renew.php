<?php


session_start();


$_SESSION['renew'] = 1;


header("Location: /PJ2/src/index.php");



