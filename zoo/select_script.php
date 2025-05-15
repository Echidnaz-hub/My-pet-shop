<?php
    session_start();

    $class = $_GET['class'];
    $category = $_GET['category'];
    $connect = mysqli_connect('localhost', 'root', '', 'zoo');
    $products = mysqli_query($connect, "SELECT * FROM `product` WHERE `class` = '$class' AND `category`='$category'");
    $_SESSION['length'] = mysqli_num_rows($products);
    //$products = mysqli_fetch_array($products);
    $_SESSION['class'] = $class;
    $_SESSION['category'] = $category;
    header('Location: /catalog.php');
?>