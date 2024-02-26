<?php

class Animal
{
  public $type;

  public function __construct($type)
  {
    $this->type = $type;
  }
  // Getter
  public function getType()
  {
    return $this->type;
  }
}

// Sottoclassi per tipo di animale
class Dog extends Animal
{
  public function __construct($type)
  {
    parent::__construct($type);
  }
}

class Cat extends Animal
{
  public function __construct($type)
  {
    parent::__construct($type);
  }
}

class Bird extends Animal
{
  public function __construct($type)
  {
    parent::__construct($type);
  }
}

class Fish extends Animal
{
  public function __construct($type)
  {
    parent::__construct($type);
  }
}

// Classe per i prodotti
class Product
{
  public $name;
  public $category;
  public $type;
  public $price;

  public function __construct($name, $category, $type, $price)
  {
    $this->name = $name;
    $this->category = $category;
    $this->type = $type;
    $this->price = $price;
  }

  // Getter
  public function getName()
  {
    return $this->name;
  }

  public function getCategory()
  {
    return $this->category;
  }

  public function getType()
  {
    return $this->type;
  }

  public function getPrice()
  {
    return $this->price;
  }
}

// Sottoclassi per categorie specifiche di prodotti
class Food extends Product
{
  public function __construct($name, $category, $price)
  {
    parent::__construct($name, $category, "Cibo", $price);
  }
}

class Toy extends Product
{
  public function __construct($name, $category, $price)
  {
    parent::__construct($name, $category, "Gioco", $price);
  }
}

class Accessory extends Product
{
  public function __construct($name, $category, $price)
  {
    parent::__construct($name, $category, "Accessorio", $price);
  }
}
