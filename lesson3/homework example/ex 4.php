<?php
$pageTitle = 'Ñïèñîê ïîëüçîâàòåëåé';
$value = $_GET['value'];
echo $value;
/**
 * Ôóíêöèÿ äîáàâëÿåò ïîëüçîâàòåëåé
 * @param $name
 * @param $age
 * @param $mail
 * @param $additional
 * @return array
 */
function addUsers($name, $age, $mail = null, $additional = null) {
    $user = [
        'name' => $name,
        'age' => $age,
        'email' => $mail,
        'additional' => $additional
    ];
    return $user;
}
/**
 * @param $key
 * @return bool|mixed
 */
function getVarAlias($key)
{
    $aliases = [];
    $aliases['name'] = 'Èìÿ';
    $aliases['email'] = 'Ýëåêòðîííàÿ ïî÷òà';
    $aliases['age'] = 'Âîçðàñò';
    $aliases['additional'] = 'Äîïîëíèòåëüíî';
    return $aliases[$key];
}
/**
 * Ôóíêöèÿ âûâîäèò èíôîðìàöèþ î ïîëüçîâàòåëå
 * @param $user
 * @return string
 */
function getUserInfo($user) {
    $output = '<ul>';
    foreach ($user as $k => $v) {
        if ($v == null) {
            continue;
        } else {
            $varAlias = getVarAlias($k);
            $output .= '<li>' . $varAlias . ': ' . $v . '</li>';
        }
    }
    $output .= '</ul>';
    return $output;
}
$users[] = addUsers('Alex', 35, 'alex@domain.com');
$users[] = addUsers('George', 25, null, 'Hello!');
$users[] = addUsers('Kate', 18, 'kate@mail.com', 'I like geekbrains!');
$users[] = addUsers('Serj', 30, 'serj@mail.com');
$users[] = addUsers('Max', 27, null, 'Hello people!');
$users[] = addUsers('Julia', 23, 'julia@mail.com', 'I like php =)!');
foreach($users as $user) {
    echo getUserInfo($user) . "<br>";
}