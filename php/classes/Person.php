<?php
class Person
{
    private $name;
    private $lastname;
    // private $age;
    // private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->mother = $mother;
        $this->father = $father;
        // $this->age = $age;
        // $this->hp = 100;
    }
    // function sayHi($name)
    // {
    //     return "Hi $name, I'm " . $this->name;
    // }
    // function setHp($hp)
    // {
    //     if ($this->hp + $hp >= 100) $this->hp = 100;
    //     else $this->hp = $this->hp + $hp;
    // }
    // function getHp()
    // {
    //     return $this->hp;
    // }
    function getName()
    {
        return $this->name;
    }
    function getLastname()
    {
        return $this->lastname;
    }
    function getMother()
    {
        return $this->mother;
    }
    function getFather()
    {
        return $this->father;
    }
    function getInfo()
    {
        return "
        <h3>A few words about myself</h3><br>" . "My name is " . $this->getName() . ".<br>" . "My lastname is " . $this->getLastname() . ".<br>" . "My grandfather on my mother's side is " . $this->getMother()->getFather()->getName() . ".<br>" . "My grandmother on my mother's side is " . $this->getMother()->getMother()->getName() . ".<br>" . "My grandfather on my father's side is " . $this->getFather()->getFather()->getName() . ".<br>" . "My grandmother on my father's side is " . $this->getFather()->getMother()->getName() . ".<br>";
    }
}
//$medKit = 50;
$igor = new Person("Igor", "Petrov", 68);
$anna = new Person("Anna", "Petrova", 67);
$oleg = new Person("Oleg", "Ivanov", 64);
$elena = new Person("Elena", "Ivanova", 63);

$alex = new Person("Alex", "Ivanov", 42, $elena, $oleg);
$olga = new Person("Olga", "Ivanova", 42, $anna, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

echo $valera->getInfo();

//echo $valera->getMother()->getFather()->getName();

//Здоровье человека не может быть выше 100
//$alex->name = "Alex";
// echo $alex-> name, "<br>";
// echo $alex->sayHi($igor->name);
// $alex->setHp(- 30); //Упал
// echo $alex->getHp()."<br>";
// $alex->setHp($medKit); //Нашел аптечку
// echo $alex->getHp();