<?php

define('MIN_AGE', 18);
define('SEX_MALE', 1);
define('SEX_FEMALE', 2);
define('SEX_UNKNOWN', 3);
define('SEX_UFO', 4);
define('SEX_UFOS', 5);

?>
    <h1>Здравствуй чувак!</h1>

<?php
$age = 19;
$sex = SEX_UFO;

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
}


switch ($sex) {
    case SEX_MALE:
        ?>
        <p>Ваш возраст <?= $age ?> Добро пожаловать на новости спорта </p>
        <?php

        break;

    case SEX_FEMALE:
        ?>
        <p>Ваш возраст <?= $age ?> Добро пожаловать на новости моды </p>
        <?php
        break;
    case SEX_UFO;
        case SEX_UFOS;

    ?>
    <p>
        Добро пожаловать на новости алфа-центавры
    </p>
    <?php
    break;
    default:
        ?>
        <p>
            Добро пожаловать на новости политики
        </p>
        <?php
        break;
};


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