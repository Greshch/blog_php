<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
</head>
<body>
    <h1>Заголовок</h1>
    <h2>Статья 1</h2>
    <?php echo 'Опубликовано: '.date("d M Y"); ?>

    <h2>Статья 1</h2>
    <?php echo 'Опубликовано: '.date("d M Y", strtotime("04 Sep 2008")); ?>

    <footer>
        <p>Мой первый блог &nbsp; &copy; <?php echo date("Y"); ?></p>
    </footer>
</body>
</html>
