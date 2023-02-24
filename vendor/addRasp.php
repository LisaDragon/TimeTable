<?php
require_once '../config/connect.php';

$Data = $_POST['Data'];
$Day = $_POST['DayOfWeek'];
$Class = $_POST['NumberClass'];
$Groups = $_POST['Group'];
$Discipline = $_POST['Discipline'];
$Auditoria = $_POST['Auditorii'];
$Teachers =  $_POST['Teachers'];

mysqli_query($connect, query:"INSERT INTO `Raspisanie` SET `id_Day` =( SELECT `id_Day` FROM `DayOfWeek` WHERE `name_Day` = '$Day' ), `id_Class` =( SELECT `id_Class` FROM `Сlass` WHERE `number_Class` = '$Class' ), `id_Group` =( SELECT `id_Group` FROM `Groups` WHERE `name_Group` = '$Groups' ), `id_Discipline` =( SELECT `id_Discipline` FROM `Disciplines` WHERE `name_Discipline` = '$Discipline' ), `id_Auditoria` =( SELECT `id_Auditoria` FROM `Auditoria` WHERE `name_Auditoria` = '$Auditoria' ), `id_Teacher` =( SELECT `id_Teacher` FROM `Teachers` WHERE `name_Teacher` = '$Teachers' ), `Data` = '$Data';");
header('Location: /');