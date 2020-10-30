<?php

$db_host = "localhost"; // сервер
$db_user = "root"; // имя пользователя
$db_pass = ""; // пароль
$db_name = "sitetest"; // название базы данных

// выполнение подключения
$db = new mysqli($db_host, $db_user, $db_pass, $db_name);

// проверка на успешное подключение и вывод ошибки, если оно не выполнено
if ($db->connect_error) {
	echo "Нет подключения к БД. Ошибка:".mysqli_connect_error();
	exit;
}


?>