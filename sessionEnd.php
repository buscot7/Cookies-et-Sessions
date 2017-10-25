<?php
session_start();
if ($_SESSION['login']) {
session_destroy();
header('location: login.php'); }
else {
    header('location: index.php');
}