<title>Ввод изменений</title>
<a href="zakaz.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
$pro_id = $_GET['id'];
$pro = mysqli_query($db, "SELECT * FROM заказчики WHERE Номер_заказчика = '$pro_id'");
$pro = mysqli_fetch_assoc($pro);
?>
<html>
<body>
<p align="right"><h1>Внесите изменения</h1></p>
<form action="update3_extra.php" method="POST">
<input type="hidden" name="Номер_заказчика" value="<?= $pro['Номер_заказчика'] ?>">
Название_компании: <input type="text" name="Название_компании" value="<?= $pro['Название_компании'] ?>">
ФИО_контактного_лица : <input type="text" name="ФИО_контактного_лица" value="<?= $pro['ФИО_контактного_лица'] ?>">
Номер_телефона: <input type="text" name="Номер_телефона" value="<?= $pro['Номер_телефона'] ?>">
Должность_контактного_лица: <input type="text" name="Должность_контактного_лица" value="<?= $pro['Должность_контактного_лица'] ?>">
Номер_заказа: <input type="number" name="Номер_заказа" value="<?= $pro['Номер_заказа'] ?>">
<button type="submit">Применить</button>
</form>
</body>
</html>