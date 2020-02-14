<?php
$message = '';
$message_second = '';
// Check if cookie is set
if(isset($_COOKIE['error_message']))
{   
    $show_modal="1";
    include('./js/scripts.js.php'); 
    $message = $_COOKIE['error_message'] ;
    setcookie('error_message', null, time() - 3600);
}
if(isset($_COOKIE['error_message_second']))
{
    $show_modal="1";
    include("./js/scripts.js.php"); 
    $message_second = $_COOKIE['error_message_second'] ;
    setcookie('error_message_second', null, time() - 3600);
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title >Di Di Co Products</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link href="https://fonts.googleapis.com/css?family=Gelasio&display=swap" rel="stylesheet">
   </head>
   <body>
      <div class="text-center my-5 title">
         <h1>Di Di Co Products</h1>
      </div>
      <div id="myModal" class="modal mt-5 mp-5" id="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body text-center">
               <?php echo $message_second;?>
               <?php echo $message;?>
               </div>
            </div>
         </div>
      </div>
      <hr class="style-one">
      <div class="text-center my-5">
         <h4>View Current Products</h4>
         <form action="display.php" method="POST">
            <div class="form-group row mt-5 justify-content-center">
               <div class="form-check form-check-inline col-sm-3 justify-content-center">
                  <input type="radio" class="form-check-input" id="materialInline1" name="fiddle">
                  <label class="form-check-label" id="radio" for="materialInline1">Fiddle</label>
               </div>
               <div class="form-check form-check-inline col-sm-3 justify-content-center">
                  <input type="radio" class="form-check-input" id="materialInline2" name="dish">
                  <label class="form-check-label" id="radio" for="materialInline2">Dish</label>
               </div>
               <div class="form-check form-check-inline col-sm-3 justify-content-center">
                  <input type="radio" class="form-check-input" id="materialInline3" name="spoon">
                  <label class="form-check-label" id="radio" for="materialInline3">Spoon</label>
               </div>
            </div>
            <div class="row mt-3 justify-content-center">
               <input class="btn btn-outline-dark" id="tag" type="submit" value="Submit">
            </div>
         </form>
      </div>
      <hr class="style-one">
      <div class="text-center mt-5">
         <h4>Modify/Add product</h4>
      </div>
      
      <div class="row mt-5 ">
         <div class="text-center col-md-3">
            <h5>Fiddle</h5>
            <form action="modify.php" method="GET">
               <div class="form-group row mt-3">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Name:</label>
                  <div class="col col-md-6">
                     <input type="text" class="form-control" value="Fiddle" name="name">
                  </div>
                  <div class="col col-md-2">
                  </div>
               </div>
               <div class="form-group row pt-3">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Weight:</label>
                  <div class="col col-md-4 ">
                     <input type="text" class="form-control" name="weight">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>kg</p>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Length:</label>
                  <div class="col col-md-4">
                     <input type="text" class="form-control" name="length">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>cm</p>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Width:</label>
                  <div class="col col-md-4">
                     <input type="text" class="form-control" name="width">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>cm</p>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Height:</label>
                  <div class="col col-md-4">
                     <input type="text" class="form-control" name="height">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>cm</p>
                  </div>
               </div>
               <div class="form-group row justify-content-center mb-5">
                  <input class="btn btn-outline-dark" id="tag" type="submit" value="Modify">
               </div>
            </form>
         </div>
         <div class="text-center col-md-3">
            <h5>Dish</h5>
            <form action="modify.php" method="GET">
               <div class="form-group row mt-3">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Name:</label>
                  <div class="col col-md-6">
                     <input type="text" class="form-control" value="Dish" name="name">
                  </div>
                  <div class="col col-md-2">
                  </div>
               </div>
               <div class="form-group row pt-3">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Weight:</label>
                  <div class="col col-md-4">
                     <input type="text" class="form-control" name="weight">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>kg</p>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Length:</label>
                  <div class="col col-md-4">
                     <input type="text" class="form-control" name="length">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>cm</p>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Width:</label>
                  <div class="col col-md-4">
                     <input type="text" class="form-control" name="width">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>cm</p>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Height:</label>
                  <div class="col col-md-4">
                     <input type="text" class="form-control" name="height">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>cm</p>
                  </div>
               </div>
               <div class="form-group row justify-content-center mb-5">
                  <input class="btn btn-outline-dark" id="tag" type="submit" value="Modify">
               </div>
            </form>
         </div>
         <div class="text-center col-md-3">
            <h5>Spoon</h5>
            <form action="modify.php" method="GET">
               <div class="form-group row mt-3">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Name:</label>
                  <div class="col col-md-6">
                     <input type="text" class="form-control" value="Spoon" name="name">
                  </div>
                  <div class="col col-md-2">
                  </div>
               </div>
               <div class="form-group row pt-3">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Weight:</label>
                  <div class="col col-md-4">
                     <input type="text" class="form-control" name="weight">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>kg</p>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Length:</label>
                  <div class="col col-md-4 ">
                     <input type="text" class="form-control" name="length">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>cm</p>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Width:</label>
                  <div class="col col-md-4">
                     <input type="text" class="form-control" name="width">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>cm</p>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Height:</label>
                  <div class="col col-md-4">
                     <input type="text" class="form-control" name="height">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>cm</p>
                  </div>
               </div>
               <div class="form-group row justify-content-center mb-5">
                  <input class="btn btn-outline-dark" id="tag" type="submit" value="Modify">
               </div>
            </form>
         </div>
         <div class="text-center col-md-3">
            <h5>New product</h5>
            <form action="modify.php" method="GET">
               <div class="form-group row mt-3">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Name:</label>
                  <div class="col col-md-6">
                     <input type="text" class="form-control" name="name">
                  </div>
                  <div class="col col-md-2">
                  </div>
               </div>
               <div class="form-group row pt-3">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Weight:</label>
                  <div class="col col-md-4">
                     <input type="text" class="form-control" name="weight">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>kg</p>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Length:</label>
                  <div class="col col-md-4">
                     <input type="text" class="form-control" name="length">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>cm</p>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Width:</label>
                  <div class="col col-md-4">
                     <input type="text" class="form-control" name="width">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>cm</p>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col col-md-4 col-form-label text-right" id="tag">Height:</label>
                  <div class="col col-md-4">
                     <input type="text" class="form-control" name="height">
                  </div>
                  <div class="col col-md-4 col-form-label text-left">
                     <p>cm</p>
                  </div>
               </div>
               <div class="form-group row justify-content-center">
                  <input class="btn btn-outline-dark" id="tag" type="submit" value="Add">
               </div>
            </form>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>