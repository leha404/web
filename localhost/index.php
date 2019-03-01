<!DOCTYPE html>
<html>
    <head>
        <title>learn PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            include "factorial.php";

            function fp($something) {
                echo $something."<br>";
            }

            fp('');

            $arr = array('one', 'two', 'three');
            echo "Массив: ".$arr[0]."<br>";

            // __LINE__ и пр. - предопределенные константы
            echo "Константа: Строка ".__LINE__." в файле ".__FILE__."<br>";

            echo "Подключение файла: factorial(5) = ".getFactorial(5)."<br>";

            fp('');
            fp("Count: ".count($arr));

            print_r($arr);

            fp('');

            foreach($arr as $a) {
                fp($a);
            }

            
        ?>
    </body>
</html>
