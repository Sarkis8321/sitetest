<?php
$userid = $_GET['userid'];
include $_SERVER['DOCUMENT_ROOT'].'/config.php'; 
$user_info = $db->query("SELECT * FROM `users` WHERE  `users`.`id` = ".$userid);
$user = $user_info->fetch_assoc();
// завершение подключения
$db->close(); 
?>


<?php include $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>

<h1>Редактирование информации о студенте</h1>


<form action="update-student.php" method="POST" >

    <input type="hidden" name="id" value="<? echo $user['id']?>">

    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" value="<? echo $user['name']?>"><br/>

    <label for="surname">Фамилия:</label>
    <input type="text" id="surname" name="surname" value="<? echo $user['surname']?>"><br/>
    
    <label for="age">Возраст:</label>
	<input type="number" id="age" name="age" value="<? echo $user['age']?>"><br/>

	<button>Изменить</button>
</form>


<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php'?>