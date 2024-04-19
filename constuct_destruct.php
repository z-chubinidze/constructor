<?php
    class car {
    public $name;
    public $color;
    public $model;

    function __construct($name,$color,$model) {
        $this->name = $name;
        $this->color = $color;
        $this->model = $model;
    }
    function __destruct() {
        echo " this cars name is {$this->name}, its color is {$this->color} and its model is {$this->model}"; 
    }
    }

    $myCar = new car("Toiota", "black", "Prius");
?>