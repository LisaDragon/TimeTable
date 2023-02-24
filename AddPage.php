<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление</title>
    <style>
        .layer {

            margin-left: 45%;
            /* Отступ слева */

            margin-right: 43%;

        }

        .layer1 {
            background: #850435;
            color: aliceblue;
            height: 120px;
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
            width: 200px;
            text-align:center;
        }


        h2 {
            text-align: center;
        }
        .gradient-button {
            text-decoration: none;
            display: inline-block;
            color: white;
            padding: 20px 40px;
            margin-left: 1350px;
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
<?php
require_once 'config/connect.php';

$Teachers = mysqli_query($connect, query: "SELECT `name_Teacher` FROM `Teachers`;");
$Auditoria = mysqli_query($connect, query: "SELECT `name_Auditoria` FROM `Auditoria`;");
$Class = mysqli_query($connect, query: "SELECT `number_Class` FROM `Сlass`; ");
$Groups = mysqli_query($connect, query: "SELECT `name_Group` FROM `Groups`;");
$Discipline = mysqli_query($connect, query: "SELECT `name_Discipline` FROM `Disciplines`;");
$Day = mysqli_query($connect, query: "SELECT `name_Day` FROM `DayOfWeek`;");


?>

<body>
    <div class="layer">
        <h1>Добавление</h1>
    </div>
   
    <form action="vendor/addRasp.php" method="post">
   
        <table>
            <thead class="layer1">
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

           
            <tbody class="layer2">
                <tr>

                    
                    <td>
                    <input type="date" name="Data"  list="Data">
                    </td>
                    <td>
                    <datalist id="Day">
                        <?php
                        while($D=mysqli_fetch_assoc($Day))
                        {
                        ?>
                            <option value="<?= $D['name_Day'] ?>">
                        <?}?>
                     </datalist>
                    <input type="text" name="DayOfWeek"  list="Day">
                    </td>
                    <td>
                    <datalist id="Class">
                        <?php
                        while($Cla=mysqli_fetch_assoc($Class))
                        {
                        ?>
                            <option value="<?= $Cla['number_Class'] ?>">
                        <?}?>
                     </datalist>  
                    <input type="text" name="NumberClass" list="Class">
                    </td>
                    <td>
                    <datalist id="Group">
                        <?php
                        while($Group=mysqli_fetch_assoc($Groups))
                        {
                        ?>
                            <option value="<?= $Group['name_Group'] ?>">
                        <?}?>
                     </datalist>  
                    <input type="text" name="Group"  list="Group">
                    </td>
                    <td>
                    <datalist id="Discip">
                        <?php
                        while($Dis=mysqli_fetch_assoc($Discipline))
                        {
                        ?>
                            <option value="<?= $Dis['name_Discipline'] ?>">
                        <?}?>
                     </datalist>
                    <input type="text" name="Discipline"  list="Discip">
                    </td>
                    <td>
                    <datalist id="Auditorii">
                        <?php
                        while($Audi=mysqli_fetch_assoc($Auditoria))
                        {
                        ?>
                            <option value="<?= $Audi['name_Auditoria'] ?>">
                        <?}?>
                     </datalist>  
                    <input type="text" name="Auditorii"  list="Auditorii">
                    </td>
                    
                    <td>
                    <datalist id="test">
                        <?php
                        while($Teach=mysqli_fetch_assoc($Teachers))
                        {
                        ?>
                            <option value="<?= $Teach['name_Teacher'] ?>">
                        <?}?>
                     </datalist>
                    <input type="text" name="Teachers"  list="test">
                    </td>
                </tr>

            </tbody>
        </table><br>
        <button class="gradient-button" type="submit">Добавить</button>
    </form>
 
</body>

</html>