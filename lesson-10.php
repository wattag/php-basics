<?php

error_reporting(-1);

$families = [
    'Ivanov',
    'Petrov',
    'Suvorov',
    'Sedov',
];

/*for ($i=1; $i < 11; $i++){
    echo $i . "<br>";
}
*/
for ($i=0; $i < count($families); $i++){
    echo $families[$i] . "<br>";
}

echo '<select>';
for ($i=1900; $i<=2021; $i++){
    echo "<option value='$i'>$i</option>";
}
echo '</select>';
