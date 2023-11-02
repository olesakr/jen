<title>Ввод изменений</title>
<a href="rek.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
$pro_id = $_GET['id'];
$pro = mysqli_query($db, "SELECT * FROM заказы WHERE Номер_заказа = '$pro_id'");
$pro = mysqli_fetch_assoc($pro);
?>
<html>
<body>
<p align="right"><h1>Внесите изменения</h1></p>
<form action="update4_extra.php" method="POST">
<input type="hidden" name="Номер_заказа" value="<?= $pro['Номер_заказа'] ?>">
Номер_услуги: <input type="number" min="1" name="Номер_услуги" value="<?= $pro['Номер_услуги'] ?>">
Номер_заказчика: <input type="number" min="1" name="Номер_заказчика" value="<?= $pro['Номер_заказчика'] ?>">
Номер_в_табеле:  <input type="number" min="1" name="Номер_в_табеле" value="<?= $pro['Номер_в_табеле'] ?>">
Дата_создания: <input type="text" name="Дата_создания" value="<?= $pro['Дата_создания'] ?>">
<button type="submit">Применить</button>
</form>
</body>
</html>