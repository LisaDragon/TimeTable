<?php 

$connect = mysqli_connect(hostname: 'localhost', username: 'root', password: '', database: 'TimeTable2');
if(!$connect)
{
    die('Error');
}