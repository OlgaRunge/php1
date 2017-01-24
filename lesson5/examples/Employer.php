<?php
class Employer
{
    const EMPLOYER_TYPE_MANAGER = 1;
    const EMPLOYER_TYPE_CLERC = 2;

    public $name;
    public $type = self::EMPLOYER_TYPE_CLERC; //по умолчанию равен

    public static $workFrom = '9:00';
    public static $workTill = '21:00';
    public static function setSchedule($from, $till)
    {
        self::$workFrom = $from;
        self::$workTill = $till;
    }
    public static function getTypeName ($type) //ф-я которая может проинициализировать типы
    {
        switch($type)
        {
            case self::EMPLOYER_TYPE_MANAGER:
                return "manager";
                break;
            case self::EMPLOYER_TYPE_CLERC:
                return "clerc";
                break;
        }
        return "Not exists employer position!";
    }
    public function getSchedule()
    {
        return $this->name . ' : my tabletable : from ' . self::$workFrom . ' till ' . self::$workTill;
    }
    public function getType()
    {
        return "This employer position is: " . self::getTypeName($this->type);
    }
    public function setType($type)
    {
        $this->type = $type;
    }
}
Employer::setSchedule('10:00', '21:00');

var_dump(Employer::$workFrom);
$worker1 = new Employer();//создаем нового работника
$worker1->name = 'George';
echo $worker1->getSchedule() . "<br>"; // получаем его расписание

$worker2 = new Employer();
$worker2->name = 'John';
echo $worker2->getSchedule() . "<br>";
Employer::setSchedule('8:00', '17:00');

echo $worker1->getSchedule() . "<br>";
echo $worker2->getSchedule() . "<br>";

$worker1->setType(Employer::EMPLOYER_TYPE_MANAGER); //сделали менеджером
echo $worker1->getType() . "<br>";

$worker1->setType(Employer::EMPLOYER_TYPE_CLERC);
echo $worker1->getType() . "<br>";
ImageHelper::getImageType($image);