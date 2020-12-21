<?php include 'config.php'; ?>

<?php
	// операции с БД, например:
	$my_data_1 = $db->query("SELECT * FROM users WHERE `users`.`group_id` = 1");
	$dataArr_1 = [];
	while ($data = $my_data_1->fetch_assoc()) {
	       array_push($dataArr_1, $data);
    }
    
    $my_data_2 = $db->query("SELECT * FROM users WHERE `users`.`group_id` = 2");
	$dataArr_2 = [];
	while ($data = $my_data_2->fetch_assoc()) {
	       array_push($dataArr_2, $data);
    }


    $my_data_3 = $db->query("SELECT * FROM users WHERE `users`.`group_id` = 3");
	$dataArr_3 = [];
	while ($data = $my_data_3->fetch_assoc()) {
	       array_push($dataArr_3, $data);
    }

    $my_data_4 = $db->query("SELECT * FROM users WHERE `users`.`group_id` = 4");
	$dataArr_4 = [];
	while ($data = $my_data_4->fetch_assoc()) {
	       array_push($dataArr_4, $data);
    }


    $n1 = 0;
    foreach($dataArr_1 as $key => $value) {
        $n1 += $value['age'];
    }

    $n2 = 0;
    foreach($dataArr_2 as $key => $value) {
        $n2 += $value['age'];
    }

    $n3 = 0;
    foreach($dataArr_3 as $key => $value) {
        $n3 += $value['age'];
    }

    $n4 = 0;
    foreach($dataArr_4 as $key => $value) {
        $n4 += $value['age'];
    }


	
	// завершение подключения
	$db->close();
?>