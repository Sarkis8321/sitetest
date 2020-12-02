<?php
session_start();

$login = $_POST['login'];
$pass = $_POST['pass'];


include $_SERVER['DOCUMENT_ROOT'].'/config.php'; 


$sqlQ = $db->query("SELECT * FROM `regusers` WHERE `name` = '".$login."' AND `pass` = '".$pass."' ");

$reguser = $sqlQ->fetch_assoc();
	// завершение подключения
$db->close();

unset($_SESSION['error']);

if (isset($reguser)) {

    $_SESSION['auth'] = $login;

    $_SESSION['auth-array'] = $reguser;

    header('Location:'.$_SERVER['HTTP_ORIGIN']);
    exit;
} else { 
    $_SESSION['error'] = "логин и пароль неверные";
    header('Location:'.$_SERVER['HTTP_ORIGIN'].'/login/');
    exit;
}


?>