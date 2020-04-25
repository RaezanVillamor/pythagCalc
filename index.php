<?php 

if (isset($_POST['missing'])){
$opposite = $_POST['opposite'];
$adjacent = $_POST['adjacent'];

// Calculations
$calculatehyp = sqrt(($opposite**2 +$adjacent**2 ) );
$calculateadj


//What our outputs will look like
$hypcalculation = "Hypotenuse: " . $calculatehyp;



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="index.php" method="POST">
        <label> Opposite: </label> 
       <input type="number" name="opposite" > 
        <label> Adjacent: </label> 
        <input type="number" name="adjacent">
       <!-- Put hypotenuse stuff tmrw -->
       <label> Hypotenuse: </label>
       <input type="number" name="hypotenuse">
<br>
<input type="Submit" name='missing'>
    </form>
    <?php echo $hypcalculation; ?>


    <!-- <form action="ondex.php"> -->
</body>
</html>