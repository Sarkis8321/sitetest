<?php

$userid = $_GET['userid'];

include $_SERVER['DOCUMENT_ROOT'].'/config.php'; 

$deleteUser = $db->query("DELETE FROM `users` WHERE `users`.`id` = ".$userid);

// завершение подключения
$db->close();


if($deleteUser) {
    echo "Данные пользователя с id = ".$userid." удалены!<br/>";
    echo "<a href='/'>Вернутся на главную</a>";
}


?>