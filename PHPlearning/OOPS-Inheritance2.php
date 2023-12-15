<?php
class Car {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The Car is {$this->name} and the color is {$this->color}.";
  }
}


class Santro extends Car {
  public function message() {
    echo "Market Price over";
  }
}
$mod = new Santro("Tata", "red");
$mod->message();
$mod->intro();
