<?php include 'header.php'; ?>

<h2> Список групп </h2>

<?php 
include $_SERVER['DOCUMENT_ROOT'].'/qwery/getGroups.php';
include $_SERVER['DOCUMENT_ROOT'].'/qwery/getTeachers.php';
?>
<table class="main-table">
	<thead>
		<tr>
			<td>id</td>
			<td>Название группы</td>
			<td>Курс</td>
			<td>Id преподавателя</td>
		</tr>
	</thead>
  <tbody>
	<?php foreach($groupsArr as $key => $value) {?>
		<tr>
			<td><?php echo $value['id'] ?></td>
			<td>
				<a href="<?=  '/groupById.php?groupid='.$value['id'].'&groupname='.$value['group_name']  ?>">
					<?php echo $value['group_name'] ?>
				</a>
			</td>
			<td><?php echo $value['course'] ?></td>
            <td><?php echo $value['teacher_id'] ?></td>
		</tr>
	<?php } ?>
  </tbody>
</table>

<form action="qwery/add-group.php" method="POST">
	<h3>Добавить группу</h3>
	<input type="text" name="groupname" placeholder="Введите название группы">
	
    <select name="course">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>

    <select name="teacher">
        <?php foreach($teachersArr as $key1 => $value1) {?>

            <option value="<?= $value1['id'] ?>"><?= $value1['full_name'] ?></option>

        <?php } ?>
    </select>



	<button>Добавить</button>
</form>



<?php include 'footer.php'?>