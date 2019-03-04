<!DOCTYPE html>
<html>
    <head>
        <title>Phonebook</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="index.css"/>
    </head>
    <body>
        <?php
            require_once 'connection.php';

            $link = mysqli_connect($host, $user, $pass, $database)
                or die("Ошибка " . mysqli_error($link));
        
            // Работаем с БД
            $query ="select * from users";
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

            // Форма для создания
            echo '
                <h2>Телефонный справочник</h2>
                <div>
                    <h4>Создать новую запись</h4>
        
                    <form method="POST" action="create.php">
                        <input type="text" name="name1" placeholder="Введите имя" />
                        <input type="text" name="name3" placeholder="Введите отчество" />
                        <input type="text" name="name2" placeholder="Введите фамилию" />
                        <input type="text" name="phone" placeholder="Введите телефон" />
                        <input type="submit" value="Создать" />
                    </form>
        
                </div>
            ';

            // Форма для редактирования
            echo '
                <div>
                    <H4>Редактировать</H4>
                    <form method="POST" action="delete.php">
                            <label for="Name">Выберите ФИО:</label>
                    
                            <select name="userId">
                                <optgroup label="ФИО, телефон">';
            

                            if ($result) {
                                while ($row = mysqli_fetch_row($result)) {
                                    echo  "
                                        <option value=\"$row[0]\"> $row[2] $row[1] $row[3] - $row[4]</option>
                                    ";              
                                }
                            }

            echo '              </optgroup>
                            </select>
                        
                        <input type="submit" value="Удалить" />

                    </form>
                </div>    

                <br><br>
            ';

            mysqli_free_result($result);

            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

            echo "
                <table>
                    <caption><b>Телефонная книга</b></caption>
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>ФИО</th>
                            <th>Телефон</th>
                        </tr>
                    </thead>
                    <tbody>";


            if ($result) {
                while ($row = mysqli_fetch_row($result)) {
                    echo "
                        <tr>
                            <td>$row[0]</td>
                            <td>$row[2] $row[1] $row[3]</td>
                            <td>$row[4]</td>
                        </tr>
                    ";
                }
            }

            echo        "<tbody>
                </table>
            ";

            mysqli_close($link);
        ?>
    </body>
</html>