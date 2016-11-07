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
<h1>Cast</h1>
<?php

$sum = 145.34;
echo "Full sum: $sum<br>";
echo "Sum to int: " . (int)$sum; ?>
<br>
<br>
<h1>Const</h1>
<?php
$nullable = null;

define('MY_CONST', 100);
echo MY_CONST;

