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

<?php
error_reporting(-1);

/* $i = 1;
while ($i <= 10){
    echo $i . '<br>';
    $i++;
}*/

/*$i = 1;
echo "<table>" . PHP_EOL;
while ($i <= 10){
    echo "\t<tr>\n";
    $s = 1;
    while ($s <= 3){
        echo "\t\t<td>[row $i - col $s]</td>\n";
        $s++;
    }
    echo "\t</tr>\n";
    $i++;
}
echo "\t</table>\n"
*/

/* $year = 1900;
echo '<select>';
while ($year <= 2021)
{
   echo "<option value='$year'>$year</option>";
   $year++;
}
echo '</select>';
*/

/*$i = 1;
do {
    echo $i++ . "<br>";
}while($i <= 10);
*/

// Таблица умножения
$i = 1;
echo "\t<table>\n";
while ($i<=10){
    echo "\t<tr>\n";
    $s = 1;
    while ($s <= 10){
        echo "\t\t<td>$s * $i = " .$s*$i. "</td>\n";
        $s++;
    }
    echo "\t</tr>\n";
    $i++;
}
echo "\t</table>\n"
?>
</body>
</html>