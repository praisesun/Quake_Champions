<?php

$mysqli = new mysqli('localhost', 'root', '', 'Dyak'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id'];
$character = $_POST['character']; $weapon_set = $_POST['weapon_set']; $character_skin_title = $_POST['character_skin_title'];

$sql = "UPDATE equipment SET character='$character' weapon_set='$weapon_set', character_skin_title='$character_skin_title' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



$mysqli->close();

include("equipment.php")
?>
