<?php

$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];

include $_SERVER['DOCUMENT_ROOT'].'/config.php'; 

$addStudent = $db->query("UPDATE `users` SET `name` = '".$name."', `surname` = '".$surname."', `age` = '".$age."' WHERE `users`.`id` =".$id);


// завершение подключения
$db->close();


if($addStudent) {
    
    echo "Данные пользователя с id = ".$id." обновлены!<br/>";
    echo "<a href='/'>Вернутся на главную</a>";

}