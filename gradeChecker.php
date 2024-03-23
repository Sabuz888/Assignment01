<?php
// 3. Create a PHP script to classify a given student's marks stored in the variable $marks into grades (A, B, C, D, or Fail) based on the following criteria:

//     A: 90 and above
//     B: 80-89
//     C: 70-79
//     D: 60-69
//     Fail: Below 60
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade checker</title>
    <style><?php include 'style.css'?></style>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

</head>
<body>
    <div class="container pt-5">
        <h1>Grade calculator</h1>
        <div class="row">
            <div class="col-md-12 ">
                <form method="post" action="">
                    <input class="input" type="number" name="grade" placeholder="Enter a Number">
                    <br>
                    <button type="submit" class="btn btn-success mt-5">Calculate</button>
                    
                </form>
            </div>
        </div>
    </div>
    

    <?php
    if (isset($_POST['grade'])){
        $grade=$_POST['grade'];

        if($grade!=null){
            
            if ($grade>=90){
                
                echo"{$grade} is A grade";

            }elseif($grade>=80 && $grade<=89){
                
                echo"{$grade} is B grade";
            }elseif($grade>=70 && $grade<=79){
                
                echo"{$grade} is C grade";
            }elseif($grade>=60 && $grade<=69){
                
                echo"{$grade} is D grade";
            }else{
                
                echo "Below 60 is Fail";
            }
        }else{
            
            echo "please input a number";
        }

        }

    
    ?>



<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

</body>
</html>