<?php include 'config.php'; ?>

<?php
	// операции с БД, например:
	$my_data = $db->query("SELECT * FROM subjects");

	$subjectsArr = [];
	
	while ($data = $my_data->fetch_assoc()) {
	       array_push($subjectsArr, $data);
	}
	
	// завершение подключения
	$db->close();
?>