<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("search.php")
    ?>

    <form action="insertIntoSearch.php" method="post">
        <label>id гравця</label><input name="player_id" type="text"><br>
        <label>id екіпірування</label><input name="equipment_id" type="text"><br>
        <label>id карти</label><input name="map_id" type="text"><br>
        <label>id режиму</label><input name="mode_id" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>