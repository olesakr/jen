<?php
include ("db.php");
$id = $_POST['Номер_в_табеле'];
$Name = $_POST['ФИО'];
$Post = $_POST['Должность'];
$Inn = $_POST['ИНН'];
$Passport = $_POST['Паспорт'];
$Status = $_POST['Статус'];
$result = mysqli_query($db, "UPDATE работники SET ФИО = '$Name', Должность = '$Post', ИНН = '$Inn', Паспорт = '$Passport', Статус = '$Status' WHERE работники . 'Номер_в_табеле' = '$id'");
header('Location: ./worker.php');