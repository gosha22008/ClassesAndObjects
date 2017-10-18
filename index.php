<?php

class Car
{
    public $color;
    public $mark;
    private $maxSpeed;

    function __construct($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function showMaxSpeed()
    {
        echo "Максимальная скорость $this->maxSpeed км/ч <br>";
    }

    public function stop()
    {
        echo 'стоп!<br>';
    }
}

$car1 = new Car(200);
$car1->showMaxSpeed();
$car1->stop();
$car1->mark = 'mazda';
$car1->color = 'red';
$car2 = new Car(250);
$car2->showMaxSpeed();

class TV
{
    private $model;
    public $diagonal;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function showModel()
    {
        echo "$this->model<br>";
    }

    public function changeChannel()
    {
        echo 'Изменить канал<br>';
    }
}

$tv1 = new TV('samsung');
$tv1->showModel();
$tv2 = new TV('acer');
$tv2->showModel();
$tv2->changeChannel();
$tv2->diagonal = 61;
echo $tv2->diagonal . '<br>';

class BallPen
{
    public $color;

    public function write()
    {
        echo 'Написать что-либо<br>';
    }

}

$pen1 = new BallPen();
$pen1->color = 'red';
$pen1->write();

class Duck
{
    private $variety;
    public $weight;

    function __construct($variety)
    {
        $this->variety = $variety;
    }

    public function showVariety()
    {
        echo "$this->variety<br>";
    }

    public function eat()
    {
        echo 'Покушать <br>';
    }

}

$duck1 = new Duck('wild');
$duck1->showVariety();
$duck2 = new Duck('home');
$duck2->showVariety();
$duck2->eat();
$duck2->weight = 15;
echo $duck2->weight . '<br>';

class Product
{
    private $name;
    private $price;
    private $discount;

    function __construct($name, $price, $discount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getName()
    {
    echo $this->name . '<br>';
    }

    public function getPrice()
    {
        echo "Цена " . $this->price . '<br>';
    }

    public function getPriceWithDiscount()
    {
        echo "Цена со скидкой ";
        echo $this->price - (($this->price / 100) * $this->discount);
        echo '<br>';
    }

}

$product1 = new Product('phone', 6600, 10);
$product1->getName();
$product1->getPrice();
$product1->getPriceWithDiscount();
$product2 = new Product('tv', 15000, 15);
$product2->getName();
$product2->getPrice();
$product2->getPriceWithDiscount();
