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
            // echo "Имя: ".$name." ".$surname;

            echo (2 + 2)."<br>";
            
            $a = 10;
            echo $a."<br>";

            if (isset($b))
                echo $b;
            else
                echo "b не определена";

            echo "<br>";

            $arr = array('one', 'two', 'three');
            echo $arr[0];
        ?>
    </body>
</html>