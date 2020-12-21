<?php

echo '<pre>';
    print_r($_FILES);
echo '</pre>';


$uploaddir = $_SERVER['DOCUMENT_ROOT']."/files/";
$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";

} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}


?>