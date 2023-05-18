<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<!-- Форма авторизации -->
    <div id="wrapper">
        <form id="signin" action="vendor/signin.php" method="post">
        <input type="text" name="login" id="user" placeholder="Введите свой логин">
        <input type="password" name="password" id="pass" placeholder="Введите пароль">
        <button type="submit">&#xf0da;</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
        </p>
        <p>
            <a href="/index.php">Вернуться на основную страницу</a>
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
    </div>

    

</body>
</html>