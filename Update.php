<?php
require_once 'config/connect.php';
$Raspisanie_id = $_GET['id'];
$Raspisanie = mysqli_query($connect, query:"SELECT * FROM `Raspisanie` WHERE `Raspisanie`.`Id_Raspisanie`= '$Raspisanie_id';");
$Raspisanie = mysqli_fetch_assoc($Raspisanie);
print_r($Raspisanie);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование</title>
    <style>
        .layer {

            margin-left: 45%;
            /* Отступ слева */

            margin-right: 43%;

        }
        .layer1{
            
        }
    </style>
</head>

<body>
    <div class="layer">
        <h1>Редактирование</h1>
    </div>
    <form action="vendor/updateinfo.php" method="post">
    <div class="layer1">
    <table>
            <thead>
                <tr>
                    <th>
                        <h2>Дата</h2>
                    </th><br>
                    <th>
                        <h2>День недели</h2>
                    </th>
                    <th>
                        <h2>Номер пары</h2>
                    </th>
                    <th>
                        <h2>Группа</h2>
                    </th>
                    <th>
                        <h2>Дисциплина</h2>
                    </th>
                    <th>
                        <h2>Аудитория</h2>
                    </th>
                    <th>
                        <h2>Преподаватель</h2>
                    </th>
                   
            </thead>
    </table>
    </div>
        <input type="hidden" name ="id" value ="<?=$Discipline['idDiscipline']?>"> 
        
        <input type="text" name="Дата" value="<?=$Discipline['nameDiscipline']?>"><br><br>
        <input type="text" name="День недели" value="<?=$Discipline['nameDiscipline']?>">
        <input type="text" name="Дата" value="<?=$Discipline['nameDiscipline']?>">
        <input type="text" name="Номер пары" value="<?=$Discipline['nameDiscipline']?>">
        <input type="text" name="Группа" value="<?=$Discipline['nameDiscipline']?>">
        <input type="text" name="Дисциплина" value="<?=$Discipline['nameDiscipline']?>">
        <input type="text" name="Аудитория" value="<?=$Discipline['nameDiscipline']?>">
        <input type="text" name="Преподаватель" value="<?=$Discipline['nameDiscipline']?>">
        <button type="submit">Изменить</button>

    </form>

</body>

</html>