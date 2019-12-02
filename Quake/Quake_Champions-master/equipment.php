<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Equipment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця equipment</h1>


    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'Dyak');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM equipment')) { 
        printf("Список екіпірування: <br><br>");
        printf("<table><tr><th>ID</th><th>Персонаж</th><th>Набір зброї</th><th>Скін персонажа</th></tr>");
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['character'], $row['weapon_set'], $row['character_skin_title']);
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoEquipmentForm.php">Вставити рядок</a><br></li>
        <li><a href="updateEquipmentForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromEquipmentForm.php">Видалити рядок</a><br></li>
        <li><a href="search_lobbi.php">Звіт Пошук лоббі</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>