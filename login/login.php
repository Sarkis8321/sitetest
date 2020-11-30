<?php
session_start();

$login = $_POST['login'];
$pass = $_POST['pass'];


$loginM = "admin";
$passM = "12345";

unset($_SESSION['error']);

if (($login == $loginM) && ($pass == $passM)) {

    $_SESSION['auth'] = $login;

    header('Location:'.$_SERVER['HTTP_ORIGIN']);
    exit;
} else { 
    $_SESSION['error'] = "логин и пароль неверные";
    header('Location:'.$_SERVER['HTTP_ORIGIN'].'/login/');
    exit;
}








?>