<!DOCTYPE html>
<html>
    <head>
        <title>learn PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            include "factorial.php";

            $name = $_POST['firstname'];
            $surname = $_POST['lastname'];
            echo "Имя: ".$name." ".$surname."<br>";

            echo "Тест echo: 2 + 2 = ".(2 + 2)."<br>";
            
            $a = 9;
            echo "Переменная: ".$a."<br>";

            if (isset($b))
                echo $b."<br>";
            else
                echo "b не определена <br>";

            $arr = array('one', 'two', 'three');
            echo "Массив: ".$arr[0]."<br>";

            // __LINE__ и пр. - предопределенные константы
            echo "Константа: Строка ".__LINE__." в файле ".__FILE__."<br>";

            $b = 1;
            settype($b, "string");
            echo "settype: ".$b." - это строка<br>";

            switch($a)
            {
                case 9:
                    echo "SwitchCase: Это девять<br>";
                    break;
                case 10:
                    echo "SwitchCase: Это десять<br>";
            }

            echo "Подключение файла: facorial(5) = ".getFactorial(5);
        ?>
    </body>
</html>