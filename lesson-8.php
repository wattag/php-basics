<?php error_reporting(-1);

$families = [
    'Ivanov',
    'Petrov',
    'Suvorov',
    ['Vasiliev', 'Vasilieva']
];

echo "<pre>";
print_r($families);
echo "</pre>";

$goods = [

    [
        'title' => 'Nokia',
        'price' => '100',
        'description' => 'Telephone'
    ],
    [
        'title' => 'Samsung',
        'price' => '250',
        'description' => 'Telephone'
    ]
];

echo "<pre>";
print_r($goods);
echo "</pre>";


$i = 0;
while ($i <= 1){
    echo $goods[$i]['title'] . ' - ' . $goods[$i]['price'] . ' - ' . $goods[$i]['description'];
    echo "<br>";
    $i++;
}