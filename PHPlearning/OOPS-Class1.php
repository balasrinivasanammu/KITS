<?php
class Car {
  // Properties
  public $name;
  public $model;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($model) {
    $this->model = $model;
  }
  function get_color() {
    return $this->model;
  }
}

$apple = new Car();
$apple->set_name('TATA');
$apple->set_color('White');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>
