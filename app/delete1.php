<?php
include ("db.php");
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM услуги WHERE услуги.Номер_услуги = '$id'");
header('Location: ./service.php');