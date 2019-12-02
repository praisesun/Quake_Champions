<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця user</h1>


    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'Dyak');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM user')) { 
        printf("Список користувачів: <br><br>");
        printf("<table><tr><th>ID</th><th>id гравця</th><th>ПІБ</th><th>Вік</th><th>Логін</th><th>Пароль</th><th>email</th><th>Секретне питання</th></tr>");
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['id_player'], $row['full_name'], $row['name'], $row['age'], $row['login'], $row['password'], $row['email'], $row['Answer_to_a_secret_question']);
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoUserForm.php">Вставити рядок</a><br></li>
        <li><a href="updateUserForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromUserForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>