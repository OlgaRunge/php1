<?php
class Clerk extends Employer //класс клерк наследует класс эмплоер
{
    public $workFrom = '10:00';
    public $workTill = '18:00';
    public function getType ()
    {
        return "clerk";
    }
}