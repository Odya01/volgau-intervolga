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
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body style="background-color: #34383d;">

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label style="color: white;">ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свое полное имя">
        <label style="color: white;">Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label style="color: white;">Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label style="color: white;">Изображение профиля</label>
        <input style="color: white;" type="file" name="avatar">
        <label style="color: white;">Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label style="color: white;">Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Войти</button>
        <p style="color: white;">
            У вас уже есть аккаунт? - <a href="login.php">авторизируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>