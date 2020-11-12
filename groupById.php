<?php 
    $groupId = $_GET['groupid'];
    $groupName = $_GET['groupname'];


    function getGroupUserById($gId){
        include 'config.php';
        $my_data = $db->query("SELECT * FROM `users` WHERE `users`.`group_id` = ".$gId);
        $groupArr = [];
        while ($data = $my_data->fetch_assoc()) {
            array_push($groupArr, $data);
        }
        $db->close();
        return $groupArr;
    }
    include 'header.php'; 

$getUserInfo = getGroupUserById($groupId);

?>

<h2>Список студентов группы <?= $groupName ?></h2>

<table class="main-table">
    <thead>
        <tr>
            <td>Id</td>
            <td>Имя</td>
            <td>Фамилия</td>
            <td>Возраст</td>
        </tr>
    </thead>
    <tbody>
 
	<?php foreach($getUserInfo as $key => $value) { ?>

        <tr>
            <td> <?= $value['id']?> </td>
            <td> <?= $value['name']?> </td>
            <td> <?= $value['surname']?> </td>
            <td> <?= $value['age']?> </td>
        </tr>

    <?php } ?>

    </tbody>
</table>








<?php include 'footer.php'?>