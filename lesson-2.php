<?php
error_reporting(-1);
/*
 * Переменную можно сравнивать с коробкой, то бишь в нее можно что-нибудь положить.
 * В коробку можно положить все что угодно.
 * Коробка имеет наименование.
 * Мы можем использовать разные коробки, чтобы хранить в них временные данные.
 */

$var = 'hello world';
$fruit = 'apple';
$count = 1;
$winnie_pooh = "Hello, I'm Winnie. I have $count $fruit";

/*
 * Константа - это постоянное значение, которое невозможно изменить.
 */

const PAGE = "Это страница Вини Пуха";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php  echo  $var; ?></title>
</head>
<body>
    <h1><?php  echo  $var; ?></h1>
    <p><?php echo $winnie_pooh; ?></p>
    <p><strong><?php echo PAGE?></strong></p>
</body>
</html>
