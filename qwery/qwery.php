<?php include 'config.php'; ?>

<?php
	// операции с БД, например:
	$my_data = $db->query("SELECT * FROM users");

	$dataArr = [];
	
	while ($data = $my_data->fetch_assoc()) {
	       array_push($dataArr, $data);
	}
	
	// завершение подключения
	$db->close();
?>