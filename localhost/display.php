<!DOCTYPE html>
<html>
    <head>
        <title>learn PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            include "factorial.php";

            function fprint($something) {
                echo $something."<br>";
            }

            $name = $_POST['firstname'];
            $surname = $_POST['lastname'];
            echo "Имя: ".$name." ".$surname."<br>";

            fprint('');

            $arr = array('one', 'two', 'three');
            echo "Массив: ".$arr[0]."<br>";

            // __LINE__ и пр. - предопределенные константы
            echo "Константа: Строка ".__LINE__." в файле ".__FILE__."<br>";

            echo "Подключение файла: factorial(5) = ".getFactorial(5)."<br>";

            fprint('');
            fprint("Count: ".count($arr));
            print_r($arr);
            fprint('');

            foreach($arr as $a) {
                fprint($a);
            }
        ?>
    </body>
</html>