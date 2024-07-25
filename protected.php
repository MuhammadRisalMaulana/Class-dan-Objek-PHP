<?php
class Fruit {
    protected $name;
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}
class Apple extends Fruit {
    function get_apple_name() {
        return $this->get_name();
    }
}
$apple = new Apple();
$apple->set_name('Apple');
echo $apple->get_apple_name();  // Output: Apple
?>