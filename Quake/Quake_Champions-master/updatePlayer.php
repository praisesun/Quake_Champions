<?php

$mysqli = new mysqli('localhost', 'root', '', 'Dyak'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id'];
$nickname = $_POST['nickname']; $battle_pass = $_POST['battle_pass']; $rank = $_POST['rank']; $statistics = $_POST['statistics'];

$sql = "UPDATE player SET nickname='$nickname' battle_pass='$battle_pass', rank='$rank', statistics='$statistics' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



$mysqli->close();

include("player.php")
?>
