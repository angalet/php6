<?php
class Product {
public $name;
public $model;
public $price;

public function __construct($name,$model,$price) 
{
    	$this->name = $name;
	$this->model = $model;
	$this->price = $model;
	}

public function getFullName() {
    $full_name = $this->model." ".$this->name;
}

}

class Cars extends Product {
public $motor_type;
}

$bmw new Cars(‘BMV’,‘X6’,200000);
$bmw->motor_type=‘disel’;
$audi new Cars(‘audi’,‘a3’,150000);
$bmw->motor_type=‘gasoline’;

class Ballpen extends Product {
public $color;
}
$pen new Ballpen(‘coolpen’,‘first’,20);
$pen->color=‘white’;
$pen1 new Ballpen(‘coolpen’,‘second’,30);
$pen1->color=‘red’;

class Game_Duck extends Product {
public $child_age;
}
$duck_big new Game_Duck(‘ducker’,‘first’,20);
$pen->child_age=‘10’;
$duck_litle new Game_Duck(‘ducker’,‘second’,20);
$pen->child_age=‘12’;

class TvSet extends Product {
public $diagonal;
}

$s262d new TvSet(‘samsung’,‘s262d’,300);
$pen->diagonal=‘40’;
$s265s new TvSet(‘samsung’,‘s265s’,400);
$pen->diagonal=‘55’;
?>
