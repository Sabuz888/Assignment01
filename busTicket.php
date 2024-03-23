<?php
//  Implement a PHP code snippet that calculates the total fare for a bus ticket based on the age of the passenger. The fare is $5 for children (age < 12), $10 for adults (age between 12 and 60), and $7 for seniors (age >= 60).
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
        <h1>Search for Sits</h1>
        <div class="row">
            <div class="col-md-12 ">
                <form method="post" action="">
                    <input class="input" type="number" name="age" placeholder="Enter your age">
                    <br>
                    <button type="submit" class="btn btn-success mt-5">Check</button>
                    
                </form>
            </div>
        </div>
    </div>

    <?php

    if(isset($_POST['age'])){
        $age= $_POST['age'];
        
        if($age!=null){
            
            if($age<12){
                
                echo "Have 5 sits for children";
            }elseif($age >= 12 && $age < 60){
                
                echo "Have 10 sits for adults";
            }else{
                
                echo "Have 7 sits for seniors";
            }
        }else{
            echo "please choose your age";
        }
    }
    ?>

</body>
</html>