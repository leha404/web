<?php
    $userId = $_POST['userId'];
    
    require_once 'connection.php';

    $link = mysqli_connect($host, $user, $pass, $database)
        or die("Ошибка " . mysqli_error($link));

    // Работаем с БД
    $query ="delete from users where id = $userId";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

    mysqli_close($link);

    header("Location: index.php");
?>