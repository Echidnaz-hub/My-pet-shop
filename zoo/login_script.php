<?php
    session_start();

    $login = $_POST['login'];
    $password = $_POST['password'];
    $password = md5($password);
    $connect = mysqli_connect('localhost', 'root', '', 'zoo');
    $check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
    
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
        print_r($user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
        ];

        header('Location: /index.php');
    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: /login.php');
    }
?>

<pre>
    <?php   
        print_r($_SESSION['user']['id']);
    ?>
</pre>