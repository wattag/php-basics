
<!--include вызывает ошибку уровня warning, т.е. продолжит работать, даже если не найдет файл
    require вызывает ошибку уровня fatal error, следовательно прекращает работу скрипта-->

<!--include_once/require_once запускает файл лишь один раз. Проверяет был ли запущен файл ранее, если да, то проигнорирует -->

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <p>Lorem ipsum dolor sit amet.</p>
        <?php include 'lesson-13 pt2.php'?>
        <?php require 'lesson-13 pt2.php'?>
    </body>
</html>