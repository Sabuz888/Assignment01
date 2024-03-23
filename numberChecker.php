<?php 
//  1. Write a PHP script that checks if a given number $num is positive, negative, or zero, and prints an appropriate message.
// 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number checker</title>

    <style><?php include 'style.css'?></style>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

</head>
<body>
    <div class="container">
      <h1>Number checker</h1>
        <div class="row">
            <div class="col-md-12">
                <form method="post" >
                    <input class="input" type="number" name="num" placeholder="Enter a Number">
                    <button type="submit" class="btn btn-success">Check</button>
                    
                </form>
            </div>
        </div>
    </div>


<?php

if (isset($_POST['num'])){
  $num= $_POST['num'];
  
  if ($num != null){
    
    if ($num > 0){
      echo "The input number {$num} is : Positive";
    }elseif ($num < 0){
      echo "The input number {$num} is : Negative";
    }else{
      echo "The input number {$num} is : Zero";
    }
  }else{
    echo "Please enter a number to check";
  }
}

// if (isset($_POST['num'])){
//     $num= $_POST['num'];
//     if($num>0){
//         echo "The input number {$num} is Positive ";
//       }elseif($number<0 && $number!= null){
//         echo "The input number {$num} is Negative ";
//       }elseif($num==null){
//         echo "please input a number";
//       }else{
//         echo "The input number {$num} is Zero";
//       }
// }


?>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>
</html>