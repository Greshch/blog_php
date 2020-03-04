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
    <h1>Заголовок</h1>
    <div class="article">
        <h2>Статья 1</h2>
        <?php echo 'Опубликовано: '.date("d M Y"); ?>

        <pre>
            Чтобы запретить распознавание символа как форматирующего,
            следует экранировать его с помощью обратного слэша.
            Если экранированный символ также является форматирующей
            последовательностью, то следует экранировать его повторно.
        </pre>
    </div>

    <div class="article">
        <h2>Статья 2</h2>
        <?php echo 'Опубликовано: '.date("d M Y", strtotime("04 Sep 2008")); ?>
        <pre>
            Антисе́птики (от греч. άντί «против» + σηπτικός «гноистый») —
            противогнилостные средства,предназначенные для предотвращения
            процессов разложения на поверхности открытых ран,например
            в ранах, образующихся после больших операций или ушибов,
            или для задержания уженачавшихся изменений в крови.
            Антисептики применяются для обработки рук хирургов и
            медицинского персонала перед контактом с пациентами.
        </pre>
    </div>

    <footer>
        <p>Мой первый блог &nbsp; &copy; <?php echo date("Y"); ?></p>
    </footer>
</div>
</body>
</html>
