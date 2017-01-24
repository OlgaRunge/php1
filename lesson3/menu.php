<?php

$pageTitle = 'Рептошоп';

$menu = [];
$menu [0] = [
    'item' => 'index.php',
    'text' => 'Главная'
];
$menu[1] = [
    'item' => 'animals.php',
    'text' => 'Животные'
];
$menu [2] = [
    'item' => 'food.php',
    'text' => 'Живые корма'
];
$menu [3] = [
    'item' => 'terrarium.php',
    'text' => 'Террариум'
];
$menu [4] = [
    'item' => 'decor.php',
    'text' => 'Декорации'
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$pageTitle?></title>
</head>
<body>
    <h1>Меню</h1>

    <ul><?php
        foreach ($menu as $key => $href) {
        } foreach  ($href as $item => $page) {

            echo "<ul>";
            echo "<li><a href ='$item'>$page</a></li>";
                echo "</ul>";
        }
        ?>

</body>
</html>



