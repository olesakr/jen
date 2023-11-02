<title>Ввод новых данных</title>
<a href="worker.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
echo "<h1>Введите данные о работнике</h1>
<form action=\"add5.php\" method=\"POST\">
ФИО: <input type=\"text\" name=\"ФИО\"/>
Должность: <input type=\"text\" name=\"Должность\"/>
ИНН: <input type=\"text\" name=\"ИНН\"/>
Паспорт: <input type=\"text\" name=\"Паспорт\"/>
Статус: <input type=\"text\" name=\"Статус\"/>
<input type=\"submit\" value = \"Внести в базу\" name=\"send\"/>
</form>";

if(isset($_POST['send'])) {
$Name = $_POST['ФИО'];
$Post = $_POST['Должность'];
$Inn = $_POST['ИНН'];
$Passport = $_POST['Паспорт'];
$Status = $_POST['Статус'];
$result = mysqli_query($db, "INSERT INTO работники (ФИО, Должность, ИНН, Паспорт, Статус) VALUES ('$Name','$Post','$Inn', '$Passport','$Status')") or die (mysqli_error($db));
$query = mysqli_query($db, "SELECT Номер_в_табеле FROM работники ORDER BY Номер_в_табеле DESC LIMIT 1");
$myrow = mysqli_fetch_array($query);
$last_id = $myrow ['Номер_в_табеле'];
echo "<b><i>Информация была добавлена. Код - $last_id</i></b>";
}
?>