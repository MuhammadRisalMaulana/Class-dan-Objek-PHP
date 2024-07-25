<?php
class Vehicle {
    public $make;
    public $model;

    function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    function get_make() {
        return $this->make;
    }

    function get_model() {
        return $this->model;
    }

    function display() {
        echo "Vehicle Make: {$this->get_make()}, Model: {$this->get_model()}<br>";
    }
}

class Car extends Vehicle {
    private $doors;

    function __construct($make, $model, $doors) {
        parent::__construct($make, $model);
        $this->doors = $doors;
    }

    function get_doors() {
        return $this->doors;
    }

    function display() {
        parent::display();
        echo "Doors: {$this->get_doors()}<br>";
    }
}

$myCar = new Car("Toyota", "Corolla", 4);
$myCar->display();
// Output:
// Vehicle Make: Toyota, Model: Corolla
// Doors: 4
?>