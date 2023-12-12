<?php
class Magic {
    public string $card = 'As';

    public function __construct() {
        echo "__construct : is called when we create an object of our class. Basically this is used to create a constructor in php5.";
    }

    public function __destruct() {
        echo "__destruct : is called when the object of our class is not defined. It's just the opposite of __construct.";
    }

    public function __get($name) {
        echo "__get : is called when our object tries to read a property or a variable of the class which is inaccessible or unavailable.";
        return $this->$name ?? null;
    }

    public function __set($name, $value) {
        echo "__set : is called when an object of our class tries to set the value of the property which is really inaccessible or unavailable in our class.";
        $this->$name = $value;
    }

    public function __isset($name) {
        echo "__isset : __isset methods are triggered when the isset () function is applied to any property of the class that is inaccessible or unavailable.";
    }

    public function __toString() {
        echo "__toString : __toString runs when you use echo on your object.";
        return $this->card;
    }
}

$magic = new Magic();
echo $magic->card . "\n";
$magic->card = 'King';
isset($magic->card);
echo $magic;
