<?php
namespace products;

class Fiddle extends Product{
    // set fiddle measurements
    public function __construct(){
        $this->setName("Fiddle");
        $this->setWeight(1);
        $this->setLength(60);
        $this->setWidth(20);
        $this->setHeight(10);
    }
}

?>