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
        include("equipment.php")
    ?>

    <form action="insertIntoEquipment.php" method="post">
        <label>Персонаж</label><input name="character" type="text"><br>
        <label>Набір зброї</label><input name="weapon_set" type="text"><br>
        <label>Скін персонажа</label><input name="character_skin_title" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>