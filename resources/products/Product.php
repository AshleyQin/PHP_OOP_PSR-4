<?php
namespace products;

class Product{
    private $name;
    private $weight;
    private $length;
    private $width;
    private $height;
    //set product details
    public function __construct($name, $weight, $length, $width, $height){
        $this->setName($name);
        $this->setWeight($weight);
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }
    //name getter
    public function getName(){
        return $this->name;
    }
    //name setter
    public function setName($value) {
        $this->name = $value;
    }
    //weight getter
    public function getWeight(){
        return $this->weight;
    }
    //weight setter
    public function setWeight($value) {
        $this->weight = $value;
    }
    //width getter
    public function getWidth(){
        return $this->width;
    }
    //width setter
    public function setWidth($value) {
        $this->width = $value;
    }
    //height getter
    public function getHeight(){
        return $this->height;
    }
    //height setter
    public function setHeight($value) {
        $this->height = $value;
    }
    //length getter
    public function getLength(){
        return $this->length;
    }
    //length setter
    public function setLength($value) {
        $this->length = $value;
    }
}

?>