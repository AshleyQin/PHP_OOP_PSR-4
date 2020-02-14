<?php
include('vendor/autoload.php');
//use namaspace products
use products\Dish as Dish;
use products\Fiddle as Fiddle;
use products\Spoon as Spoon;

//set variables for name and measurements
$name;
$weight;
$length;
$width;
$height;

//check for POST request and if it's empty
if(count($_POST)>0 && isset($_POST)){
    if(isset($_POST['dish'])){
        $dishOne = new Dish();
        $name    = $dishOne->getName();
        $weight  = $dishOne->getWeight();
        $length  = $dishOne->getLength();
        $width   = $dishOne->getWidth();
        $height  = $dishOne->getHeight();
    }
    if(isset($_POST['fiddle'])){
        $fiddleOne = new Fiddle();
        $name    = $fiddleOne->getName();
        $weight  = $fiddleOne->getWeight();
        $length  = $fiddleOne->getLength();
        $width   = $fiddleOne->getWidth();
        $height  = $fiddleOne->getHeight();
    }
    if(isset($_POST['spoon'])){
        $spoonOne = new Spoon();
        $name    = $spoonOne->getName();
        $weight  = $spoonOne->getWeight();
        $length  = $spoonOne->getLength();
        $width   = $spoonOne->getWidth();
        $height  = $spoonOne->getHeight();
    }
}else{
    setcookie('error_message_second','Must Select Product for viewing!');//set error message in cookie
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <title >View Products</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <div class="text-center mt-5">
            <h1>Product details</h1>
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
            <a href="index.php" class="btn btn-outline-dark mt-3" id="tag">Get Back</a>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>