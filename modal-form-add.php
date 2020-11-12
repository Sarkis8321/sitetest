<?php 
	include 'qwery/getGroups.php';

?>




<form class="form-add" action="qwery/add-student.php" method="POST" id="form-add">
	<span class="close-btn" id="close-btn">X</span>
	<h3>Добавить студента</h3>
	<input type="text" name="name" placeholder="Введите имя">
	<input type="text" name="surname" placeholder="Введите фамилию">
	<input type="number" name="age" placeholder="Введите возраст">

	<select name="group_id">
		<?php foreach($groupsArr as $key => $value) {?>

			<option value="<?= $value['id'] ?>"><?= $value['group_name']?></option>

		<?php }?>
	</select>

	<button>Добавить</button>
</form>