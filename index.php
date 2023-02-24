<?php
require_once 'config/connect.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Расписание</title>
    <style>
        .layer {

            margin-left: 45%;
            /* Отступ слева */

            margin-right: 43%;

        }

        .layer2 {
            margin-left: 10px;
            align="center"
        }

        th,
        td {
            padding: 30px;
        }

        th {

            background: #850435;
            color: aliceblue;
        }

        td {
            background: #feecf0;
        }


        h2 {
            text-align: center;
        }

        .gradient-button {
            text-decoration: none;
            display: inline-block;
            color: white;
            padding: 20px 40px;
            margin: 0 1200px;
            border-radius: 10px;
            font-family: 'Montserrat', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            background-image: linear-gradient(to right, #f2b3c1 0%, #850435 51%, #850435 100%);
            background-size: 200% auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, .1);
            transition: .5s;

        }
    </style>
</head>

<body>

    <a href="" class="gradient-button">Перейти к редактированию</a>
    <div class="layer">
        <h1>Расписание</h1>
    </div>


    <div class="layer2">
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
                </tr>
            </thead>
       
        <div class="scrol-table-body">
            
                <tbody>
                    <?php
                    $Raspisanie = mysqli_query($connect, query: "SELECT `Raspisanie`.`Data`, `Auditoria`.name_Auditoria, `Teachers`.name_Teacher, `DayOfWeek`.name_Day, `Disciplines`.name_Discipline, `Groups`.name_Group, `Сlass`.`number_Class` FROM ( ( ( ( (( `Raspisanie` INNER JOIN `Auditoria` ON `Raspisanie`.id_Auditoria = `Auditoria`.id_Auditoria ) INNER JOIN `Teachers` ON `Raspisanie`.id_Teacher = `Teachers`.id_Teacher ) INNER JOIN `DAYOFWEEK` ON `Raspisanie`.id_Day = `DAYOFWEEK`.id_Day ) INNER JOIN `Disciplines` ON `Raspisanie`.id_Discipline = `Disciplines`.id_Discipline ) INNER JOIN `Groups` ON `Raspisanie`.id_Group = `Groups`.id_Group ) INNER JOIN `Сlass` ON `Raspisanie`.`id_Class` = `Сlass`.id_Class); ");
                    $Raspisanie = mysqli_fetch_all($Raspisanie);

                    foreach ($Raspisanie as $rasp) {
                        ?>
                        <tr>
                            <td>
                                <h2>
                                    <?= $rasp[0] ?>
                                </h2>
                            </td><br>
                            <td>
                                <h2>
                                    <?= $rasp[3] ?>
                                </h2>
                            </td>
                            <td>
                                <h2>
                                    <?= $rasp[6] ?>
                                </h2>
                            </td>
                            <td>
                                <h2>
                                    <?= $rasp[5] ?>
                                </h2>
                            </td>
                            <td>
                                <h2>
                                    <?= $rasp[4] ?>
                                </h2>
                            </td>
                            <td>
                                <h2>
                                    <?= $rasp[1] ?>
                                </h2>
                            </td>
                            <td>
                                <h2>
                                    <?= $rasp[2] ?>
                                </h2>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>>
            </table>>
        </div>>

    </div>
</body>

</html>