<?php
    class Person
    {
        public $name = 'Qwerty';
    }
    $person1 = new Person();
    $person1->name = 'Alex';

    $person2 = new Person();
    $person2->name = 'George';

    $person3 = new Person();

    var_dump($person1, $person2, $person3);

//object(Person)#1 (1) { ["name"]=> string(4) "Alex" }
// object(Person)#2 (1) { ["name"]=> string(6) "George" }
// object(Person)#3 (1) { ["name"]=> string(6) "Qwerty" }