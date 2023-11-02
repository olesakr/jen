<title>Ввод новых данных</title>
<a href="zakaz.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
echo "<h1>Введите данные о заказчике</h1>
<form action=\"add3.php\" method=\"POST\">
Название_компании: <input type=\"text\" name=\"Название_компании\"/>
ФИО_контактного_лица: <input type=\"text\" name=\"ФИО_контактного_лица\"/>
Номер_телефона: <input type=\"text\" name=\"Номер_телефона\"/>
Должность_контактного_лица: <input type=\"text\" name=\"Должность_контактного_лица\"/>
Номер_заказа: <input type=\"number\" min=\"0\" name=\"Номер_заказа\"/>
<input type=\"submit\" value = \"Внести в базу\" name=\"send\"/>
</form>";

if(isset($_POST['send'])) {
$Name = $_POST['Название_компании'];
$Contact = $_POST['ФИО_контактного_лица'];
$Phone = $_POST['Номер_телефона'];
$Position = $_POST['Должность_контактного_лица'];
$Number = $_POST['Номер_заказа'];
$result = mysqli_query($db, "INSERT INTO заказчики (Название_компании, ФИО_контактного_лица, Номер_телефона, Должность_контактного_лица, Номер_заказа) VALUES ('$Name','$Contact','$Phone','$Position','$Number')") or die (mysqli_error($db));
$query = mysqli_query($db, "SELECT Номер_заказчика FROM заказчики ORDER BY Номер_заказчика DESC LIMIT 1");
$myrow = mysqli_fetch_array($query);
$last_id = $myrow ['Номер_заказчика'];
echo "<b><i>Информация была добавлена. Код - $last_id</i></b>";
}
?>