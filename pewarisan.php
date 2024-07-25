<?php
class Fruit {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

// Inherited class (Child)
class Strawberry extends Fruit {
    function message() {
        echo "Am I a fruit or a berry? ";
    }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();  // Output: Am I a fruit or a berry?
$strawberry->intro();    // Output: The fruit is Strawberry and the color is red.
?>