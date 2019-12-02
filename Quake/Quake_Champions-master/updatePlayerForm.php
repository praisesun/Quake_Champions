<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Зміна даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("player.php")    
    ?>

<form action="updatePlayer.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Нік</label><input name="nickname" type="text"><br>
        <label>Battle pass</label><input name="battle_pass" type="text"><br>
        <label>Ранг</label><input name="rank" type="text"><br>
        <label>Статистика</label><input name="statistics" type="text"><br>
        <input type="submit" value="Змінити рядок">
</form>

</body>
</html>