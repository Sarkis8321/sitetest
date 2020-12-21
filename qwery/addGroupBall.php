<?php 


$balls = $_POST['ball'] +  $_POST['balls'];
$id =  $_POST['id'];




include $_SERVER['DOCUMENT_ROOT'].'/config.php'; 
$user_info = $db->query("UPDATE `groups` SET `balls` = '".$balls."' WHERE `groups`.`id`=".$id);

// завершение подключения
$db->close(); 


if($user_info) {
    echo "Данные группы с id = ".$id." изменены!<br/>";
    echo "<a href='/groupById.php?groupid=".$id.">Вернутся</a>";
}

?>

