<title>Ввод изменений</title>
<a href="worker.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
$pro_id = $_GET['id'];
$pro = mysqli_query($db, "SELECT * FROM работники WHERE Номер_в_табеле = '$pro_id'");
$pro = mysqli_fetch_assoc($pro);
?>
<html>
<body>
<p align="right"><h1>Внесите изменения</h1></p>
<form action="update5_extra.php" method="POST">
<input type="hidden" name="Номер_в_табеле" value="<?= $pro['Номер_в_табеле'] ?>">
ФИО: <input type="text" name="ФИО" value="<?= $pro['ФИО'] ?>">
Должность: <input type="text" name="Должность" value="<?= $pro['Должность'] ?>">
ИНН: <input type="text" name="ИНН" value="<?= $pro['ИНН'] ?>">
Паспорт: <input type="text" name="Паспорт" value="<?= $pro['Паспорт'] ?>">
Статус: <input type="text" name="Статус" value="<?= $pro['Статус'] ?>">
<button type="submit">Применить</button>
</form>
</body>
</html>