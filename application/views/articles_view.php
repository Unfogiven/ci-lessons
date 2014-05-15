<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница статей</title>
</head>
<body>
    <h1>Страница статей сайта</h1>
    <?php foreach($articles as $item): ?>
        <h3><?=$item['title'];?></h3>
        <p><?=$item['text'];?></p>
        <hr />
    <?php endforeach; ?>
    <?php
    echo $this->pagination->create_links();

    ?>
</body>
</html>