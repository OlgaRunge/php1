<?php

define('MIN_AGE', 18);

define('SEX_UNKNOWN', 0);
define('SEX_MALE', 1);
define('SEX_FEMALE', 2);
?>
    <h1>Здравствуй чувак!</h1>

<?php
$age = 19;
$sex = SEX_UNKNOWN;

if ($age < MIN_AGE) {
    ?>
    <p>Ваш возраст <?= $age ?>, вы еще не можете посещать наш портал </p>
    <?php
}

else if ($sex == SEX_MALE) {

        ?>
        <p>Ваш возраст <?= $age ?> Добро пожаловать на новости спорта </p>
        <?php
    }

else if ($sex == SEX_FEMALE) {

        ?>
        <p>Ваш возраст <?= $age ?> Добро пожаловать на новости моды </p>
        <?php
    }
else {

    ?>
    <p>Ваш возраст <?= $age ?> Добро пожаловать! </p>
    <?php
}