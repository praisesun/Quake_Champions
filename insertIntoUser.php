<?php

$mysqli = new mysqli('localhost', 'root', '', 'Dyak'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$id_player = $_POST['id_player']; $full_name = $_POST['full_name']; $age = $_POST['age']; $login = $_POST['login']; $password = $_POST['password']; $email = $_POST['email']; $Answer_to_a_secret_question = $_POST['Answer_to_a_secret_question'];

$sql = "INSERT INTO user (id_player, full_name, age, login, password, email, Answer_to_a_secret_question) VALUES ('$id_player', '$full_name', '$age', '$login', '$password', '$email', '$Answer_to_a_secret_question')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("user.php")
?>