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
  public $brand;
  public $category;
  public $price;
  public $imageURL;

  public function __construct($brand, $category, $price, $imageURL)
  {
    $this->brand = $brand;
    $this->category = $category;
    $this->price = $price;
    $this->imageURL = $imageURL;
  }

  // Getter
  public function getbrand()
  {
    return $this->brand;
  }

  public function getCategory()
  {
    return $this->category;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function getImageURL()
  {
    return $this->imageURL;
  }
}

// Sottoclassi per categorie specifiche di prodotti
class Food extends Product
{
  public function __construct($brand, $category, $price, $imageURL)
  {
    parent::__construct($brand, $category, $price, $imageURL);
  }
}

class Toy extends Product
{
  public function __construct($brand, $category, $price, $imageURL)
  {
    parent::__construct($brand, $category, $price, $imageURL);
  }
}

class Accessory extends Product
{
  public function __construct($brand, $category, $price, $imageURL)
  {
    parent::__construct($brand, $category, $price, $imageURL);
  }
}
