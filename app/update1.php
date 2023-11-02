<title>Ввод изменений</title>
<a href="service.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
$pro_id = $_GET['id'];
$pro = mysqli_query($db, "SELECT * FROM услуги WHERE Номер_услуги = '$pro_id'");
$pro = mysqli_fetch_assoc($pro);
?>
<html>
<body>
<p align="right"><h1>Внесите изменения</h1></p>
<form action="update1_extra.php" method="POST">
<input type="hidden" name="Номер_услуги" value="<?= $pro['Номер_услуги'] ?>">
Название: <input type="text" name="Название" value="<?= $pro['Название'] ?>">
Время_исполнения : <input type="text" name="Время_исполнения" value="<?= $pro['Время_исполнения'] ?>">
Цена: <input type="text" name="Цена" value="<?= $pro['Цена'] ?>">
<button type="submit">Применить</button>
</form>
</body>
</html>