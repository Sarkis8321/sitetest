<?php include $_SERVER['DOCUMENT_ROOT'].'/config.php'; ?>

<?php
	// операции с БД, например:
	$my_data = $db->query("SELECT * FROM `groups`");

	$groupsArr = [];
	
	while ($data = $my_data->fetch_assoc()) {
	       array_push($groupsArr, $data);
	}
	
	// завершение подключения
	$db->close();
?>