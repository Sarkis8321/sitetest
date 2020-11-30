<?php
session_start();
unset($_SESSION['auth']);
header('Location:'.$_SERVER['HTTP_ORIGIN'].'/login/');
exit;
?>