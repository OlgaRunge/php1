<?php


echo 'это простая строка' . '<br>';

echo 'Также вы можете вставлять в строки
символ новой строки вот так,
это нормально' . '<br>';

// Выводит: Однажды Арнольд сказал: "I'll be back"
echo 'Однажды Арнольд сказал: "I\'ll be back"' . '<br>';

// Выводит: Вы удалили C:\*.*?
echo 'Вы удалили C:\\*.*?' . '<br>';

// Выводит: Вы удалили C:\*.*?
echo 'Вы удалили C:\*.*?' . '<br>';

// Выводит: Это не будет развернуто: \n новая строка
echo 'Это не будет развернуто: \n новая строка' . '<br>';

// Выводит: Переменные $expand также $either не разворачиваются
echo 'Переменные $expand также $either не разворачиваются' . '<br>';
?>
//Примеры строк в двойных кавычках
<?php
$capital = "Paris";

echo "The capital of France is ", $capital,"<br />";
?>
//интерполяция
<?php
$capital = "Paris";

echo "The capital of France is $capital <br />";
?>

<?php
print "It cost $10.25 <br>";
$cost = '$10,25';
print "It cost $cost <br>";
print "It cost \$\061\060.\x32\x35\ <br>"; //в кодировке ASCII 1 = 49 или 061

    $name = 'Olga';
    print $name[1] . '<br>';
?>

<br>

<?php
$name = 'Vladislav Gusev';

$substring = substr($name, 0, 4);

echo $substring;
