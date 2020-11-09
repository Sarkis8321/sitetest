<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];


include $_SERVER['DOCUMENT_ROOT'].'/config.php'; 

$addStudent = $db->query("INSERT INTO `users` (`id`, `name`, `surname`, `age`) VALUES (NULL, '".$name."','".$surname."', '".$age."')");


// завершение подключения
$db->close();


if($addStudent) {
	header('Location:'.$_SERVER['HTTP_ORIGIN']);
	exit;
}




