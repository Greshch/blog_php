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

<form action="index.php?action=add" method="post" class="form-item">
    <label>Название<br>
    <input type="text" name="title" autofocus required value="<?= $article['title'] ?>"></label><br>
    <label>Дата<br>
    <input type="date" name="date" required value="<?= $article['date'] ?>"></label><br>
    <label>Контент<br>
    <textarea name="content" required><?= $article['content'] ?></textarea></label><br>
    <input type="submit" value="Сохранить">
</form>

</body>
</html>
