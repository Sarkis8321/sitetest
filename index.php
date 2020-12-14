<?php include 'header.php'; ?>
<?php include 'modal-form-add.php'?>

<a href="#" id="add-student" class="btn btn-success">Добавить студентов</a>

<h2 class="title">Список студентов</h2>

<div class="main-content">
	<?php include 'qwery/qwery.php' ?>
	<?php include 'qwery/getGroups.php' ?>

	<table class="table table-hover table-dark">
	<thead>
		<tr>
			<td>id</td>
			<td>Имя</td>
			<td>Фамилия</td>
			<td>Возраст</td>
			<td>Группа</td>
		</tr>
	</thead>
  <tbody>
	<?php foreach($dataArr as $key => $value) {?>
		<tr>
			<td><?php echo $value['id'] ?></td>
			<td><?php echo $value['name'] ?></td>
			<td><?php echo $value['surname'] ?></td>
      <td><?php echo $value['age'] ?></td>
      <td><?php echo $groupsArr[$value['group_id']-1]['group_name'] ?></td>
      <td><a class="edit-btn" href="/qwery/edit-user-info.php?userid=<?echo $value['id']; ?>"><img src="/assets/img/edit.svg" alt=""></a></td>
      <td><a class="delete-btn" href="/qwery/deleteStudent.php?userid=<?echo $value['id']; ?>"><img src="/assets/img/delete.svg" alt=""></a></td>
		</tr>
	<?php } ?>
  </tbody>
	</table>
</div>



<?php include 'footer.php'?>
