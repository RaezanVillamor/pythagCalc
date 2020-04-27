<?php 



 if (isset($_POST['missing'])){
 $opposite = $_POST['opposite'];
 $adjacent = $_POST['adjacent'];
// Calculations
 $calculatehyp = sqrt(($opposite**2 +$adjacent**2 ) );
 //What our outputs will look like
 $hypcalculation = "hypotenuse: " . $calculatehyp;

} 

if (isset($_POST['missing2'])){
    $hypotenuse = $_POST['hypotenuse'];
    $adjacent = $_POST['adjacent2'];
   // Calculations
    $calculateopp = sqrt(($hypotenuse**2 - $adjacent**2 ) );
    //What our outputs will look like
    $oppcalculation = "opposite: " . $calculateopp;
}


if (isset($_POST['missing3'])){
    $hypotenuse = $_POST['hypotenuse2'];
    $opposite = $_POST['opposite2'];
   // Calculations
    $calculateadj = sqrt(($hypotenuse**2 - $opposite**2 ) );
    //What our outputs will look like
    $adjcalculation = "adjacent: " . $calculateadj;
}


?>

<!DoCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Find missing hypotenuse</h3>
    <form action ="index.php" method="POST">
         <label> opposite: </label> 
        <input type="number" name="opposite" > 
            <label> Adjacent: </label> 
             <input type="number" name="adjacent">
       <!-- Put hypotenuse stuff tmrw -->

<br>
<input type="Submit" name='missing'>
    </form>
    <?php echo $hypcalculation; ?>

<!-- Other calculations -->
<h3>Find missing opposite </h3>
        <form action="index.php" method="POST">
             <label> opposite: </label>
                 <input type="number" name="adjacent2">
              <label> hypotenuse: </label>
                 <input type="number" name="hypotenuse">
    <br>
                <input type="Submit" name='missing2'>
         </form>
    <?php echo $oppcalculation ?>


<h3> Find missing adjacent </h3>
        <form action="index.php" method="POST">
            <label> Adjacent: </label>
                <input type="number" name="opposite2">
            <label> Hypotenuse: </label>
                <input type="number" name ="hypotenuse2">
    <br>
                <input type="Submit" name="missing3">
        </form>
    <?php echo $adjcalculation ?>


</body>
</html>