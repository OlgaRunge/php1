<?php
class Person1
{
    public $name = 'Qwerty';
}
$person1 = new Person1();
$person1->name = 'Alex';

$person2 = new Person1();
$person2->name = 'George';

$person3 = new Person1();

var_dump($person1, $person2, $person3);

/**
 * object(Person1)#1 (1) { ["name"]=> string(4) "Alex" }
 * object(Person1)#2 (1) { ["name"]=> string(6) "George" }
 * object(Person1)#3 (1) { ["name"]=> string(6) "Qwerty" }
 */