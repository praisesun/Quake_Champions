<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Search lobbi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Search lobbi</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'Dyak');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT player.nickname, search.equipment_id, map.map_title, mode.title FROM search LEFT JOIN player ON search.player_id = player.id INNER JOIN map ON map.id = search.map_id RIGHT JOIN mode ON mode.id = search.mode_id ORDER BY player.nickname')) {

        printf("<h3>Звіт - Пошуку лоббі</h3><br>");
        printf("<table><tr><th>Гравець</th><th>Екіпірування</th><th>Карта</th><th>Режим</th></tr>"); 
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['nickname'], $row['equipment_id'], $row['map_title'], $row['title']);
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="player.php">Таблиця player</a><br></li>
        <li><a href="equipment.php">Таблиця equipment</a><br></li>
        <li><a href="map.php">Таблиця map</a><br></li>
        <li><a href="mode.php">Таблиця mode</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
