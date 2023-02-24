<?php
require_once '../config/connect.php';

$id = $_GET['id'];
mysqli_query($connect, query:"DELETE FROM `Raspisanie` WHERE `Raspisanie`.`Id_Raspisanie` = '$id';");

header('Location: /');