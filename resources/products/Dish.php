<?php
namespace products;

class Dish extends Product{
    //set dish measrements
    public function __construct(){
        $this->setName("Dish");
        $this->setWeight(0.1);
        $this->setLength(30);
        $this->setWidth(30);
        $this->setHeight(5);
    }
}

?>