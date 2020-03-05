<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>My Blog</title>
</head>
<body>
<div class="container">
    <h1>Мой первый Блог</h1>
    <div class="article">
        <h2><?= $article['title'] ?></h2>
        <p>Опубликовано: <?= $article['date'] ?></p>
        <p><?= $article['content']?></p>
    </div>

    <footer>
        <p>Мой первый блог &nbsp; &copy; <?php echo date("Y"); ?></p>
    </footer>
</div>
</body>
</html>