<?php

$GOODS = [
    'Корма' => [
        "Сверчки", "Гусеницы", "Саранча"
    ],
    'Террариумы' => [
        "Большие", "Маленькие"
    ],
    'Обогрев' => [
        "Коврики","Термошнуры"
    ]
];

print_r($GOODS);
$position = isset($_GET['pos']) ? $_GET['pos'] : null;
foreach ($GOODS as $href => $item) {
    if (isset($_GET['pos']) && $href == $position) {
        echo "<p>{$href}</p>";
    } else
        echo "<p><a href='?pos={$href}'>{$href}</a></p>";
}