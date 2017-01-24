<?php
class Entity
{
    protected $entityName; //если мы хотим это свойство инициализировать когда создается объект класса
    protected $width;

    public function __construct($name, $width) //то мы создаем такое магическое свойство конструкт
    {
        $this->entityName = $name; //передали туда name и можем им манипулировать в рамках нашего класса
        $this->width = $width; //теперь мы это свойство (ширину) инициализируем
    }
    public function __destruct()
    {
        echo 'oh, no';
    }
    public function getName()
    {
        return $this->entityName;
    }
    public function getWidth()
    {
        return $this->width; //сюда передаем ширину
    }
}
$e = new Entity('this is entity name', 100);
echo $e->getName() . "<br>";
echo $e->getWidth() . "<br>";