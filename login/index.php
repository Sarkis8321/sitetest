<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        form {
            display: block;
            width: 400px;
            margin: 10vh auto;
            border: 1px solid #ccc;
            box-shadow: 0px 0px 10px #000;
            padding: 20px;
            box-sizing: border-box;
        }
        form h2 {
            text-align: center;
        }
        form input {
            display: block;
            margin: 10px auto;
            width: 80%;
            padding: 5px 10px;
            font-size: 18px;
            box-sizing: border-box;
        }
        form button {
            display: block;
            width: 200px;
            height: 40px;
            margin: 10px auto;
        }
        form span {
            display: block;
            text-align: center;
            color: #f00;
        }

    </style>
</head>
<body>
    
    <Form action="login.php" method="post">
        <h2>Войти на сайт</h2>
        <input type="text" name="login" placeholder="введите логин">
        <input type="password" name="pass" placeholder="введите пароль">
        <span><?= $_SESSION['error'] ?></span>
        <button>Войти</button>
    </Form>


</body>
</html>