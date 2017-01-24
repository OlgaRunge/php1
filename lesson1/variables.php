<h1>Users</h1>
<?php
$userName = "Olga Runge";
$age = 30;
echo "<b>username: </b>$userName <br> <b>age: </b> $age"; ?>
<br>
<br>
<br>
<h1>Math operation</h1>
<h2>Rectangle area</h2>

<?php
$width = 20;
$height = 30;
$rectangleAerae = $width * $height;
echo $rectangleAerae;
?>
<br>
<br>


<h1>Bool type</h1>

<?php
$check = true;

echo "value check var: $check<br>";

$width = 10;
$height = 20;

$isSquare = $width == $height;
echo "is square: $isSquare"; ?>
<br>
<br>
<br>
<h1>Cast - приведение типов</h1>
<?php

$sum = 145.34;
echo "Full sum: $sum<br>";
echo "Sum to int: " . (int)$sum; ?>
<br>
<br>
<?php
$a = (int)'05';
echo "Строка - число - строка: $a <br>";
$b = (string)145.3;
echo "Число - строка: $b <br>";

$c = (bool)-4;
echo "Число - булев - строка: $c <br>";



?>
<h1>Const</h1>
<?php
$nullable = null;

define('MY_CONST', 100);
echo MY_CONST;
?>
<br>
<br>
<?php
$a = 4;
$b = 5;
$a+= $b;
echo $a;
?>
<h3>Инкременты</h3>
<?php $a = 0;
echo $a++; //Постинкремент
echo ++$a; //Преникремент
echo $a--; //Постдекремент
echo --$a; //Предекремент
?>
<h3>Операции сравнения</h3>
<?php
$a = 4;
$b = 5;
var_dump($a==$b); //Сравнение с приведением типов
var_dump($a === $b); //сравнение без приведения типов
var_dump($a > $b); // больше
var_dump($a <> $b); //не равно
?>

<h3>Чем отличается сравнение с приведением типов и без</h3>
<?php
$a = 4;
$b = '4';
var_dump($a == $b);
var_dump($a === $b);
?>
<br>
<h1>Типы данных мануал</h1>
<?php
$a_bool = TRUE;   // логический
$a_str  = "foo";  // строковый
$a_str2 = 'foo';  // строковый
$an_int = 12;     // целочисленный

echo gettype($a_bool); // выводит: boolean
echo gettype($a_str);  // выводит: string

// Если это целое, увеличить на четыре
if (is_int($an_int)) {
    $an_int += 4;
}

// Если $a_bool - это строка, вывести ее
// (ничего не выводит)
if (is_string($a_bool)) {
    echo "Строка: $a_bool";
}
?>
<br>
<br>
<?php
$var1 = true;
$var2 = FALSE;

echo $var1; // Will display the number 1

echo $var2; //Will display nothing

/* To get it to display the number 0 for
a false value you have to typecast it: */

echo (int)$var2; //This will display the number 0 for false.
?>


