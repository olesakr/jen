<?php
include ("db.php");
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM работники WHERE работники.Номер_в_табеле = '$id'");
header('Location: ./worker.php');