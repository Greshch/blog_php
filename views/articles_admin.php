<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table</title>
</head>
<body>


<table border="1">
    <tr>
        <th>Дата</th>
        <th>Заголовок</th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach ($articles as $item) : ?>
        <tr>
            <td>2015-01-01</td>
            <td>Заголовок 1</td>
            <td><a href="#">Редактировать</a></td>
            <td><a href="#">Удалить</a></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>