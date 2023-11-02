<?php
include ("db.php");
$id = $_POST['Номер_услуги'];
$Type = $_POST['Название'];
$Time = $_POST['Время_исполнения'];
$Price = $_POST['Цена'];
$result = mysqli_query($db, "UPDATE услуги SET Название = '$Type', Время_исполнения = '$Time', Цена = '$Price' WHERE услуги . Номер_услуги = '$id'");
header('Location: ./service.php');