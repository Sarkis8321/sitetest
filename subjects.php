<?php include 'header.php'; ?>

<h2> Список предметов </h2>


<form  action="qwery/add-subjects.php" method="POST">

	<h3>Добавить предмет</h3>
	<input type="text" name="title" placeholder="Введите название">
	<input type="text" name="fullname" placeholder="Введите фамилию преподавателя">

	<button>Добавить</button>
</form>


<?php include 'footer.php'; ?>