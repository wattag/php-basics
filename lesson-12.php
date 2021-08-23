<?php

error_reporting(-1);

/*$text = 'Bienvenido chez nous';

$result = match (true) {
    str_contains($text, 'Welcome') || str_contains($text, 'Hello') => 'en',
    str_contains($text, 'Bienvenido') || str_contains($text, 'Bonjour') => 'fr',
};

var_dump($result);*/

$bool = true;
$str1 = 1;
$str2 = 2;
$str3 = 3;
/*if ($bool){
    echo '<table class="table" border="1">
                <tr>
                    <td>'.$str1.'</td>
                    <td>'.$str2.'</td>
                    <td>'.$str3.'</td>
                </tr>
        </table>';
}*/
?>

<?php if ($bool): ?>
    <table class="table" border="1">
        <tr>
            <td><?php echo $str1?></td>
            <td><?php echo $str2?></td>
            <td><?php echo $str3?></td>
        </tr>
    </table>
<?php endif;?>
