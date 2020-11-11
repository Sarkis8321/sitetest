<?php include 'header.php'; ?>

<h2> Список предметов </h2>

<?php 
include $_SERVER['DOCUMENT_ROOT'].'/qwery/getSubjects.php';
?>

<table class="main-table">
    <thead>
        <tr>
            <td>id</td>
            <td>Название предмета</td>
            <td>Преподаватель</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($subjectsArr as $key => $value) {?>
            <tr>
                <td> <?= $value['id']?> </td>
                <td> <?= $value['title']?> </td>
                <td> <?= $value['full_name']?> </td>
            </tr>
        <?php } ?>
    </tbody>
</table>


<form  action="qwery/add-subjects.php" method="POST">

	<h3>Добавить предмет</h3>
	<input type="text" name="title" placeholder="Введите название">
	<input type="text" name="fullname" placeholder="Введите фамилию преподавателя">

	<button>Добавить</button>
</form>


<?php include 'footer.php'; ?>