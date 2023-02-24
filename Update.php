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

        .layer1 {
            background: #850435;
            color: aliceblue;
            height: 120px;
        }
    </style>
</head>
<?php
require_once 'config/connect.php';
$Raspisanie_id = $_GET['id'];
$Raspisanie = mysqli_query($connect, query: "SELECT `Raspisanie`.`Data`, `Auditoria`.name_Auditoria, `Teachers`.name_Teacher, `DayOfWeek`.name_Day, `Disciplines`.name_Discipline, `Groups`.name_Group, `Сlass`.`number_Class`,`Raspisanie`.`Id_Raspisanie` FROM ( ( ( ( (( `Raspisanie` INNER JOIN `Auditoria` ON `Raspisanie`.id_Auditoria = `Auditoria`.id_Auditoria ) INNER JOIN `Teachers` ON `Raspisanie`.id_Teacher = `Teachers`.id_Teacher ) INNER JOIN `DAYOFWEEK` ON `Raspisanie`.id_Day = `DAYOFWEEK`.id_Day ) INNER JOIN `Disciplines` ON `Raspisanie`.id_Discipline = `Disciplines`.id_Discipline ) INNER JOIN `Groups` ON `Raspisanie`.id_Group = `Groups`.id_Group ) INNER JOIN `Сlass` ON `Raspisanie`.`id_Class` = `Сlass`.id_Class);");
$Raspisanie = mysqli_fetch_assoc($Raspisanie);
$Teachers = mysqli_query($connect, query: "SELECT `name_Teacher` FROM `Teachers`;");
$Auditoria = mysqli_query($connect, query: "SELECT `name_Auditoria` FROM `Auditoria`;");
$Class = mysqli_query($connect, query: "SELECT `number_Class` FROM `Сlass`; ");
$Groups = mysqli_query($connect, query: "SELECT `name_Group` FROM `Groups`;");
$Discipline = mysqli_query($connect, query: "SELECT `name_Discipline` FROM `Disciplines`;");
$Day = mysqli_query($connect, query: "SELECT `name_Day` FROM `DayOfWeek`;");
print_r($Raspisanie);

?>





<body>
    <div class="layer">
        <h1>Редактирование</h1>
    </div>
   
    <form action="vendor/updateinfo.php" method="post">
   
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

                    <input type="hidden" name="id" value="<?= $Raspisanie['Id_Raspisanie'] ?>">
                    <td>
                    <input type="date" name="Data" value="<?= $Raspisanie['Data'] ?>" list="Data">
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
                    <input type="text" name="DayOfWeek" value="<?= $Raspisanie['name_Day'] ?>" list="Day">
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
                    <input type="text" name="Номер пары" value="<?= $Raspisanie['number_Class'] ?>" list="Class">
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
                    <input type="text" name="Группа" value="<?= $Raspisanie['name_Group'] ?>" list="Group">
                    </td>
                    <td>
                    <datalist id="Discipline">
                        <?php
                        while($Dis=mysqli_fetch_assoc($Discipline))
                        {
                        ?>
                            <option value="<?= $Dis['name_Discipline'] ?>">
                        <?}?>
                     </datalist>
                    <input type="text" name="Дисциплина" value="<?= $Raspisanie['name_Discipline'] ?>" list="Discipline">
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
                    <input type="text" name="Аудитория" value="<?= $Raspisanie['name_Auditoria'] ?>" list="Auditorii">
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
                    <input type="text" name="Преподаватель" value="<?= $Raspisanie['name_Teacher'] ?>" list="test">
                    </td>
                </tr>

            </tbody>
        </table>
        <button type="submit">Изменить</button>
    </form>
 
</body>

</html>