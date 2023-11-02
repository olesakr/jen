<?php
include ("db.php");
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM заказы WHERE заказы.Номер_заказа = '$id'");
header('Location: ./rek.php');