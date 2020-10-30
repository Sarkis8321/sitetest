<?php include 'header.php'; ?>
<?php include 'modal-form-add.php'?>

<h2 class="title">Список студентов</h2>

<?php include "main-menu.php"?>

<div class="main-content">
	<?php include 'qwery/qwery.php' ?>
	<table class="main-table">
	<?php foreach($dataArr as $key => $value) {?>
		<tr>
			<td><?php echo $value['name'] ?></td>
			<td><?php echo $value['surname'] ?></td>
			<td><?php echo $value['age'] ?></td>
		</tr>
	<?php } ?>
	</table>
</div>



<?php include 'footer.php'?>
