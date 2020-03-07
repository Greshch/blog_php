<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table</title>
    <link href="../style.css" rel="stylesheet">
</head>
<body>

<h1>Мой первый Блог</h1>
<h2><a href="index.php?action=add">Добавить статью</a></h2>

<table class="admin-table" >
    <tr>
        <th>Дата</th>
        <th>Заголовок</th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach ($articles as $article) : ?>
        <tr>
            <td><?= $article['date'] ?></td>
            <td><?= $article['title'] ?></td>
            <td><a href="index.php?action=edit&id=<?= $article['id'] ?>">Редактировать</a></td>
            <td><a href="index.php?action=delete&id=<?= $article['id'] ?>">Удалить</a></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>