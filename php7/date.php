<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>date</h1>
<?php
//вычиляем текущую дату в формате "день, месяц, год"
$dat = date("d.m y");
//вычисляем текущее время
$tm = date("h:i:s");
echo "Текущая дата: $dat года<br>";
echo "Текущее время: $tm<br>";
echo PHP_INT_MAX; ?>


</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Sekretary
 * Date: 23.11.2016
 * Time: 8:51
 */