<title>Ввод новых данных</title>
<a href="service.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
echo "<h1>Введите данные</h1>
<form action=\"add1.php\" method=\"POST\">
Название: <input type=\"text\" name=\"Название\"/>
Время_исполнения: <input type=\"text\" name=\"Время_исполнения\"/>
Цена: <input type=\"text\" name=\"Цена\"/>
<input type=\"submit\" value = \"Внести в базу\" name=\"send\"/>
</form>";

if(isset($_POST['send'])) {
$Type = $_POST['Название'];
$Time = $_POST['Время_исполнения'];
$Price = $_POST['Цена'];
$result = mysqli_query($db, "INSERT INTO услуги (Название, Время_исполнения, Цена) VALUES ('$Type','$Time','$Price')") or die (mysqli_error($db));
$query = mysqli_query($db, "SELECT Номер_услуги FROM услуги ORDER BY Номер_услуги DESC LIMIT 1");
$myrow = mysqli_fetch_array($query);
$last_id = $myrow ['Номер_услуги'];
echo "<b><i>Информация была добавлена. Код - $last_id</i></b>";
}
?>