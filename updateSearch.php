<?php

$mysqli = new mysqli('localhost', 'root', '', 'Dyak'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id'];
$player_id = $_POST['player_id']; $equipment_id = $_POST['equipment_id']; $map_id = $_POST['map_id']; $mode_id = $_POST['mode_id'];

$sql = "UPDATE search SET player_id='$player_id' equipment_id='$equipment_id', map_id='$map_id', mode_id='$mode_id' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



$mysqli->close();

include("search.php")
?>
