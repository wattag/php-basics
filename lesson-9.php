<?php
$families = [
    'Ivanov',
    'Petrov',
    'Suvorov',
    [
        'Vasiliev',
        'Vasilieva'
    ],
];

$count = count($families, 1);
//echo $count;
$sort = sort($families);
print_r($sort);