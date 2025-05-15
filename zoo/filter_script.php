<?php
    session_start();

    $tag = $_POST['checkbox'];
    $connect = mysqli_connect('localhost', 'root', '', 'zoo');
    $class = $_SESSION['class'];
    $result = mysqli_query($connect, "SELECT * FROM `product` WHERE `brand` = '$tag' AND `class` = '$class'");
    $_SESSION['length'] = mysqli_num_rows($result);
    $_SESSION['tag'] = $tag;
    
    header('Location: /filtered_catalog.php');
?>