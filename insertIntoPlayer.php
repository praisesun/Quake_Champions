<?php

$mysqli = new mysqli('localhost', 'root', '', 'Dyak'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$nickname = $_POST['nicknamenickname']; $battle_pass = $_POST['battle_pass']; $rank = $_POST['rank']; $statistics = $_POST['statistics'];

$sql = "INSERT INTO player (nickname, battle_pass, rank, statistics) VALUES ('$nickname', '$battle_pass', '$rank', '$statistics')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("player.php")
?>