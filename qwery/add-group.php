<?php

$groupname = $_POST['groupname'];
$course = $_POST['course'];
$teacher = $_POST['teacher'];


include $_SERVER['DOCUMENT_ROOT'].'/config.php'; 

$addGroup = $db->query("INSERT INTO `groups` (`id`, `group_name`, `course`, `teacher_id`) VALUES (NULL, '".$groupname."','".$course."', '".$teacher."')");

// завершение подключения
$db->close();

if($addGroup) {
    echo '<a href="../groups.php">Группа успешно добавлена</a>';
}