<?php

$mysqli = new mysqli('localhost', 'root', '', 'Dyak'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id'];
$id_player = $_POST['id_player']; $full_name = $_POST['full_name']; $age = $_POST['age']; $login = $_POST['login']; $password = $_POST['password']; $email = $_POST['email']; $Answer_to_a_secret_question = $_POST['Answer_to_a_secret_question'];

$sql = "UPDATE user SET id_player='$id_player' full_name='$full_name', age='$age', login='$login', password='$password', email='$email', Answer_to_a_secret_question='$Answer_to_a_secret_question' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



$mysqli->close();

include("user.php")
?>
