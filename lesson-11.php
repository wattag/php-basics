<?php

error_reporting(-1);

//цикл foreach идеально подходит для работы с ассоциативными массивами

$people = [
    'Ivan' => 'Ivanov',
    'Ilya' => 'Petrov',
    'Alexey' => 'Suvorov',
    'Andrew' => 'Sedov',
];
echo '<pre>';
print_r($people);
echo '</pre>';

/*foreach ($people as $key => $person){
    echo $key . ' '. $person . "<br>";
    if ($key == 'Ilya'){
        echo '<h1>Found!</h1>';
        break;
    }
}
*/
foreach ($people as $key => $person){
    if ($key == 'Ilya') continue;
    echo $key . ' '. $person . "<br>";
}