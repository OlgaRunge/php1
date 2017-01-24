<?php

define('MIN_AGE', 18);
define('SEX_MALE', 1);
define('SEX_FEMALE', 2);
?>
    <h1>Здравствуй чувак!</h1>

<?php
$age = 19;
$sex = SEX_MALE;

$emailIsSuccess = true;
$emailNotification = false;

$phoneisSuccess = true;
/**
 * денежный счет пользователя
 */
$account = 1000000;

if ($age < MIN_AGE) {
    ?>
    <p>Ваш возраст <?= $age ?>, вы еще не можете посещать наш портал </p>
    <?php
} else {
    if ($sex == SEX_MALE) {

        ?>
        <p>Ваш возраст <?= $age ?> Добро пожаловать на новости спорта </p>
        <?php
    }

    if ($sex == SEX_FEMALE) {

        ?>
        <p>Ваш возраст <?= $age ?> Добро пожаловать на новости моды </p>
        <?php
    }
}
if ($emailIsSuccess && $emailNotification) {

    ?>
    <p>Вам отправлены последние новости на почту </p>
    <?php
} else if (!$emailIsSuccess) {

    ?>
    <p>Вы не подтвердили email </p>
    <?php
} else if (!$emailNotification) {

    ?>
    <p>Вы не настроили email уведомления </p>
    <?php
}
if ($emailIsSuccess || $phoneisSuccess) {

    ?>
    <p>Вы настроили оповещение </p>
    <?php
} else {

    ?>
    <p>Вы не настроили оповещания </p>
    <?php
}
/**
 *тернарный оператор
 */

 $isBuyer = $account > 0 ? true : false;

$buyerInfo = $account > 0 ? "Вы можете делать покупки и имеете на счету $account р."
    :
    "Вы не можете делать покупки - у вас бабок нет";
?>
    <p> <?= $buyerInfo?> </p>
<?php