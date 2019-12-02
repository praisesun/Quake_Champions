<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Search</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця search</h1>


    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'Dyak');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM search')) { 
        printf("Список пошуку лоббі: <br><br>");
        printf("<table><tr><th>ID</th><th>id гравця</th><th>id екіпірування</th><th>id карти</th><th>id режиму</th></tr>");
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['player_id'], $row['equipment_id'], $row['map_id'], $row['mode_id']);
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoSearchForm.php">Вставити рядок</a><br></li>
        <li><a href="updateSearchForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromSearchForm.php">Видалити рядок</a><br></li>
        <li><a href="search_lobbi.php">Звіт Пошук лоббі</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>