<?php

class Animal
{
  public $type;

  public function __construct($type)
  {
    $this->type = $type;
  }
}

class Products extends Animal
{
  public $food;
  public $game;
  public $accessories;

  public function __construct($type, $food, $game, $accessories)
  {
    parent::__construct($type);
    $this->food = $food;
    $this->game = $game;
    $this->accessories = $accessories;
  }
}

class Game extends Products
{
  public $material;
  public $age;

  public function __construct($type, $food, $material, $age)
  {
    parent::__construct($type, $food, null, null);
    $this->material = $material;
    $this->age = $age;
  }
}

class Accessories extends Products
{
  public $training;
  public $clothing;

  public function __construct($type, $food, $training, $clothing)
  {
    parent::__construct($type, $food, null, null);
    $this->training = $training;
    $this->clothing = $clothing;
  }
}
