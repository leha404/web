<?php
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $name3 = $_POST['name3'];
    $phone = $_POST['phone'];
    
    require_once 'connection.php';

    $link = mysqli_connect($host, $user, $pass, $database)
        or die("Ошибка " . mysqli_error($link));

    // Работаем с БД
    $query ="INSERT INTO users VALUES(NULL, '$name1', '$name2', '$name3', '$phone')";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

    mysqli_close($link);

    header("Location: index.php");
?>