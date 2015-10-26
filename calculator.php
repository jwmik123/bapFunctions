<html>
<head>
    <title>your BMI</title>
</head>
</html>




<?php
/**
 * Created by IntelliJ IDEA.
 * User: joelmik
 * Date: 26/10/15
 * Time: 14:02
 */

$height = $_POST["height"];
$weight = $_POST["weight"];

print "Your height is $height and your weight is $weight";
echo "<br>";

$bmi = $weight / pow($height, 2);

print "Your BMI = $bmi";





?>