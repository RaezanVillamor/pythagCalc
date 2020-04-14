<?php 

if (isset($_POST['missing'])){
$opposite = $_POST['opposite'];
$adjacent = $_POST['adjacent'];

$calculate = sqrt(($opposite**2 +$adjacent**2 ) );

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
       
<br>
<input type="Submit" name='missing'>
    </form>
    <?php echo $calculate; ?>

</body>
</html>