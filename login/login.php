<?php
session_start();

$login = $_POST['login'];
$pass = $_POST['pass'];


$loginM = "admin";
$passM = "12345";

if (($login == $loginM) && ($pass == $passM)) {

    $_SESSION['auth'] = $login;

    header('Location:'.$_SERVER['HTTP_ORIGIN']);
    exit;
} else {
    echo "логин и пароль неверные";
}








?>