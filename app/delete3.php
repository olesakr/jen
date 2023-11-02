<?php
include ("db.php");
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM заказчики WHERE заказчики.Номер_заказчика = '$id'");
header('Location: ./zakaz.php');