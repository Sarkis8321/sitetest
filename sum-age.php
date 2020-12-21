<?php include 'header.php'; ?>

<?php
     include 'qwery/get-users.php';
?>

<table class="table table-striped">
    <thead>
        <tr>
            <td>1 курс</td>
            <td>2 курс</td>
            <td>3 курс</td>
            <td>4 курс</td>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?= $n1 ?></td>
            <td><?= $n2 ?></td>
            <td><?= $n3 ?></td>
            <td><?= $n4 ?></td>
        </tr>
    </tbody>
</table>




<?php include 'footer.php'?>