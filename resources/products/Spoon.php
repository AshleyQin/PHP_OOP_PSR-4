<?php
namespace products;

class Spoon extends Product{
    //set spoon measuremnts
    public function __construct(){
        $this->setName("Spoon");
        $this->setWeight(0.05);
        $this->setLength(15);
        $this->setWidth(5);
        $this->setHeight(2);
    }
}

?>