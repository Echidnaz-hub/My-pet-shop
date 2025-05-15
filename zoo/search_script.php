<?php
    session_start();

    $text = $_POST['finder'];
    $query = $text;
    $connect = mysqli_connect('localhost', 'root', '', 'zoo');
    $_SESSION['text'] = $text;
    $result = mysqli_query($connect, "SELECT * FROM `product` WHERE `title` LIKE '$query%'");
    $_SESSION['length'] = mysqli_num_rows($result);
    header('Location: /searched.php');
?>