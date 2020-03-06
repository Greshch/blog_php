<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
</head>
<body>

<h1>Мой первый Блог</h1>

<form action="article_admin.php" method="get" class="form-item">
    <label>Название<br>
    <input type="text" name="title" autofocus></label><br>
    <label>Дата<br>
    <input type="date" name="date"></label><br>
    <label>Контент<br>
    <textarea name="content"></textarea></label><br>
    <input type="submit" value="Сохранить">
</form>

</body>
</html>
