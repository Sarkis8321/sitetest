<?php
session_start();
if (!isset($_SESSION['auth'])){
	header('Location:'.$_SERVER['HTTP_ORIGIN'].'/login/');
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>1 страница приложения</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>

<?php include "main-menu.php"?>