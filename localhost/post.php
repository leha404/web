<!DOCTYPE html>
<html>
    <head>
        <title>learn PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $name = $_POST['firstname'];
            $surname = $_POST['lastname'];
            echo "Имя: ".$name." ".$surname."<br>";
        ?>
    </body>
</html>