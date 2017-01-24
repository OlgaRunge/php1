<?php

class Employer //базовый класс
{
    public $name;
    public $workFrom = '9:00'; //базово работают с 9 до 9
    public $workTill = '21:00';
    protected $salary;
    public function getSalary()
    {
        return $this->salary; //в это свойстов salary может выпасть то, что мы прогрмано просчитали
    }
    public function getType ()
    {
        return "Base type function";
    }
    public function setSchedule($from, $till)
    {
        $this->workFrom = $from;
        $this->workTill = $till;
    }
    public function getSchedule()
    {
        return $this->name . ' : my tabletable : from ' . $this->workFrom .
        ' till ' . $this->workTill;
    }
}