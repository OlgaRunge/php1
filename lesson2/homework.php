<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php level1</title>
</head>
<body>
<?php

/**
 * мы проверяем какой язык изучает пользователь и приветствуем его
 */
define('ENGLISH', 1);
define('SPANISH', 2);
define('GERMAN', 3);


$lang = SPANISH;

function checkLang($lang) {

    switch ($lang) {
        case ENGLISH:
            return 'Добро пожаловать на курс английского языка';
            break;
        case GERMAN:
            return 'Добро пожаловать на курс немецкого языка';
            break;
        case SPANISH:
            return 'Добро пожаловать на курс испанского языка';
            break;
        default:
            return 'Добро пожаловать на языковые курсы';
            break;
    }
}
?>
 <h1><?=checkLang($lang)?></h1>
<br>
<br>

<?php
/**
 * Не дошло как вывести приветсвие на языке в зависимости от значени $lang, например $lang = ENGLISH echo 'Good evening!' ??
 */

$time = (int)date("G");
$lang = SPANISH;
function welcomeMessage($time, $lang) {

        global $lang;
     if ($time >= 6 && $time < 12 && $lang = SPANISH) {
                 echo "Buenos dias!";
     } else if ($time >= 12 && $time < 18 && $lang = SPANISH) {
                 echo "Buenas tardes!";
     } else if ($time >= 18 && $time < 24 && $lang = SPANISH) {
                echo "Buenas noches!";
     }else {
         "Buenas noches!";
     }
  }

  ?>

<h1><?=welcomeMessage($time, $lang)?></h1>

<br>
<br>
<?php

/**
 * Функциz, которая выводит все целые числа
 */
function recursion($a, $b)
{
    if ($a > $b) {
        recursion($a, $b + 1);
    }

    echo $b;

}

recursion(9, 0);
?>

</body>
</html>
