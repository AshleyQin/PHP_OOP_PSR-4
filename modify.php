<?php
include('vendor/autoload.php');

use products\Dish as Dish;
use products\Fiddle as Fiddle;
use products\Spoon as Spoon;
use products\Product as Product;

//check get inputs, if it's valid and non-empty store the values
if(count($_GET)>0){
    if(preg_match("/^[a-zA-Z]/",$_GET['name']) && isset($_GET['name'])){
        $name   = $_GET['name'];
    }else{
        //set error message cookie
        setcookie('error_message','Invalid/Empty input, please enter only charaters for name and numbers for measurements!');
        header('Location: index.php');
    }
    if(preg_match("/^[0-9]/",$_GET['weight']) && isset($_GET['weight'])){
        $weight = $_GET['weight'];
    }else{
        //set error message cookie
        setcookie('error_message','Invalid/Empty input, please enter only charaters for name and numbers for measurements!');
        header('Location: index.php');
    }
    if(preg_match("/^[0-9]/",$_GET['length']) && isset($_GET['length'])){
        $length = $_GET['length'];
    }else{
        //set error message cookie
        setcookie('error_message','Invalid/Empty input, please enter only charaters for name and numbers for measurements!');
        header('Location: index.php');
    }
    if(preg_match("/^[0-9]/",$_GET['width']) && isset($_GET['width'])){
        $width = $_GET['width'];
    }else{
        //set error message cookie
        setcookie('error_message','Invalid/Empty input, please enter only charaters for name and numbers for measurements!');
        header('Location: index.php');
    }
    if(preg_match("/^[0-9]/",$_GET['height']) && isset($_GET['height'])){
        $height = $_GET['height'];
    }else{
        //set error message cookie
        setcookie('error_message','Invalid/Empty input, please enter only charaters for name and numbers for measurements!');
        header('Location: index.php');
    }

    if($name == 'Dish'){
        $DishOne = new Dish();
        $DishOne->setWeight($weight);
        $DishOne->setLength($length);
        $DishOne->setWidth($width);
        $DishOne->setHeight($height);
    }
    else if($name == 'Fiddle'){
        $FiddleOne = new Fiddle();
        $FiddleOne->setWeight($weight);
        $FiddleOne->setLength($length);
        $FiddleOne->setWidth($width);
        $FiddleOne->setHeight($height);
    }
    else if($name == 'Spoon'){
        $SpoonOne = new Spoon();
        $SpoonOne->setWeight($weight);
        $SpoonOne->setLength($length);
        $SpoonOne->setWidth($width);
        $SpoonOne->setHeight($height);
    }
    else{
        $newProduct = new Product($name, $weight, $length, $width, $height);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <title >Modified Products</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <div class="text-center mt-5">
            <h1>
                <?php 
                if(($name != "Fiddle") && ($name != "Spoon") && ($name !="Dish")){
                    echo $name . " Created Successfully!";
                }else{
                    echo $name . " Modified Successfully";
                }
                ?>
            </h1>
        </div>
        <div class="form-popup text-center" id="myForm">
            <div class="form-group row mt-5 form-container">
                <label class="col col-sm-4 col-form-label text-right" id="tag">Name:</label>
                <div class="col col-sm-4">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
                <div class="col col-sm-4">
                </div>
            </div>
            <div class="form-group row form-container">
                <label class="col col-sm-4 col-form-label text-right" id="tag">Weight:</label>
                <div class="col col-sm-4">
                    <input type="text" class="form-control" name="weight" value="<?php echo $weight; ?>kg">
                </div>
                <div class="col col-sm-4">
                </div>
            </div>
            <div class="form-group row form-container">
                <label class="col col-sm-4 col-form-label text-right" id="tag">Length:</label>
                <div class="col col-sm-4">
                    <input type="text" class="form-control" name="length" value="<?php echo $length; ?>cm">
                </div>
                <div class="col col-sm-4">
                </div>
            </div>
            <div class="form-group row form-container">
                <label class="col col-sm-4 col-form-label text-right" id="tag">Width:</label>
                <div class="col col-sm-4">
                    <input type="text" class="form-control" name="width" value="<?php echo $width; ?>cm"> 
                </div>
                <div class="col col-sm-4">
                </div>
            </div>
            <div class="form-group row form-container">
                <label class="col col-sm-4 col-form-label text-right" id="tag">Height:</label>
                <div class="col col-sm-4">
                    <input type="text" class="form-control" name="height" value="<?php echo $height; ?>cm">
                </div>
                <div class="col col-sm-4">
                </div>
            </div>
            <a href="index.php" class="btn mt-3 btn-outline-dark" id="tag">Get Back</a>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>