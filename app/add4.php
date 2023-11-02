<title>Ввод новых данных</title>
<a href="rek.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
echo "<h1>Введите данные о заказе</h1>
<form action=\"add4.php\" method=\"POST\">
Номер_услуги: <input type=\"number\" min=\"1\" name=\"Номер_услуги\"/>
Номер_заказчика: <input type=\"number\" min=\"1\" name=\"Номер_заказчика\"/>
Номер_в_табеле: <input type=\"number\" min=\"1\" name=\"Номер_в_табеле\"/>
Дата_создания: <input type=\"text\" name=\"Дата_создания\"/>
<input type=\"submit\" value = \"Внести в базу\" name=\"send\"/>
</form>";

if(isset($_POST['send'])) {
$Usl = $_POST['Номер_услуги'];
$Zak = $_POST['Номер_заказчика'];
$Num = $_POST['Номер_в_табеле'];
$Date = $_POST['Дата_создания'];
$result = mysqli_query($db, "INSERT INTO заказы (Номер_услуги, Номер_заказчика, Номер_в_табеле, Дата_создания) VALUES ('$Usl','$Zak', '$Num', '$Date')") or die (mysqli_error($db));
$query = mysqli_query($db, "SELECT Номер_заказа FROM заказы ORDER BY Номер_заказа DESC LIMIT 1");
$myrow = mysqli_fetch_array($query);
$last_id = $myrow ['Номер_заказа'];
echo "<b><i>Информация была добавлена. Код - $last_id</i></b>";
}
?>