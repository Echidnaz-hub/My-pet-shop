<?php
    session_start();

    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {
        $connect = mysqli_connect('localhost', 'root', '', 'zoo');
        $password = md5($password);
        $user = mysqli_query($connect, "INSERT INTO `user` (`id`, `login`, `password`) VALUES (NULL, '$login', '$password');");
        $_SESSION['message'] = 'Пользователь зарегистрирован';
        header("Location: /register.php");
    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: /register.php');
    }
?>