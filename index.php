<?php include 'header.php'; ?>
<?php include 'modal-form-add.php'?>

<h2 class="title">Список студентов</h2>

<?php include "main-menu.php"?>

<div class="main-content">
	<?php include 'qwery/qwery.php' ?>
	<table class="main-table">
	<thead>
		<tr>
			<td>id</td>
			<td>Имя</td>
			<td>Фамилия</td>
			<td>Возраст</td>
		</tr>
	</thead>
  <tbody>
	<?php foreach($dataArr as $key => $value) {?>
		<tr>
			<td><?php echo $value['id'] ?></td>
			<td><?php echo $value['name'] ?></td>
			<td><?php echo $value['surname'] ?></td>
      <td><?php echo $value['age'] ?></td>
      <td><a class="delete-btn" href="/qwery/edit-user-info.php?userid=<?echo $value['id']; ?>">изменить</a></td>
      <td><a class="delete-btn" href="/qwery/deleteStudent.php?userid=<?echo $value['id']; ?>">удалить</a></td>
		</tr>
	<?php } ?>
  </tbody>
	</table>
</div>



<?php include 'footer.php'?>
