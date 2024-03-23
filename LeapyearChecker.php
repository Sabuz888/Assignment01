<?php
// 2. Develop a PHP program that determines whether a given year $year is a leap year, prints "Leap year" if it is, and "Not a leap year" otherwise.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Leap year cheker</title>

    <style><?php include 'style.css'?></style>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

</head>
<body>

    <div class="container pt-5">
        <h1>Leap year cheker</h1>
        <div class="row">
            <div class="col-md-12 ">
                <form method="post" action="">
                    <input class="input" type="number" name="year" placeholder="Enter a Year">
                    <button type="submit" class="btn btn-success">Check</button>
                    
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['year'])){
        $year= $_POST['year'];
       
        if ($year != null){
           
            if ($year % 4 == 0) {
                
                if ($year % 100 != 0 || ($year % 100 == 0 && $year % 400 == 0)) {
                    echo "Leap year";
                }
            }else{
            echo "Not a Leap year";
            }
        }else{
            echo "Enter a year to check";
        }
        
    } 
    ?>
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

</body>
</html>