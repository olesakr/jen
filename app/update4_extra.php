<?php
include ("db.php");
$id = $_POST['Номер_заказа'];
$Usl = $_POST['Номер_услуги'];
$Zak = $_POST['Номер_заказчика'];
$Num = $_POST['Номер_в_табеле'];
$Date = $_POST['Дата_создания'];
$result = mysqli_query($db, "UPDATE заказы SET Номер_услуги = '$Usl', Номер_заказчика = '$Zak',  Номер_в_табеле= '$Num', Дата_создания = '$Date' WHERE загоны . Номер_заказа = '$id'");
header('Location: ./rek.php');