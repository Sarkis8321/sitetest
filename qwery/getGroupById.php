<?php include 'config.php'; ?>

<?php
	// операции с БД, например:
	$my_data = $db->query("SELECT * FROM `groups` WHERE `groups`.`id` = $groupId");

	$group = $my_data->fetch_assoc();;
	

	
	// завершение подключения
	$db->close();
?>