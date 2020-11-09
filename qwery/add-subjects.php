<?php

$title = $_POST['title'];
$fullname = $_POST['fullname'];

include $_SERVER['DOCUMENT_ROOT'].'/config.php'; 

$addSubjects = $db->query("INSERT INTO `subjects` (`id`, `title`, `full_name`) VALUES (NULL, '".$title."','".$fullname."')");

// завершение подключения
$db->close();


if($addSubjects) {
	header('Location:'.$_SERVER['HTTP_ORIGIN'].'/subjects.php');
	exit;
}


