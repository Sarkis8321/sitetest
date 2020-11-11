<?php include 'config.php'; ?>

<?php
	// операции с БД, например:
	$my_data = $db->query("SELECT * FROM `teachers`");

	$teachersArr = [];
	
	while ($data = $my_data->fetch_assoc()) {
	       array_push($teachersArr, $data);
	}
	
	// завершение подключения
	$db->close();
?>