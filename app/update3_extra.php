<?php
include ("db.php");
$last_id = $_POST['Номер_заказчика'];
$Name = $_POST['Название_компании'];
$Contact = $_POST['ФИО_контактного_лица'];
$Phone = $_POST['Номер_телефона'];
$Position = $_POST['Должность_контактного_лица'];
$Number = $_POST['Номер_заказа'];
$result = mysqli_query($db, "UPDATE заказчики SET Название_компании = '$Name', ФИО_контактного_лица = '$Contact', Номер_телефона = '$Phone', Должность_контактного_лица = '$Position', Номер_заказа = '$Number' WHERE заказчики . Номер_заказчика = '$last_id'");
header('Location: ./zakaz.php');