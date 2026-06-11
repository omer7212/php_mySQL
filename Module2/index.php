<?php

// $school="Digital School";

// echo "I love $school";


$numri1=1;
$numri2=58;


echo $numri1 + $numri2;


?>


<br>
<?php echo $numri1 - $numri2; ?>
<br>
<?php echo $numri1 * $numri2;?>
<br>
<?php echo $numri1 / $numri2;?>
<br>

<?php 

$x=20;
$y=8;

echo "Mbetja: " .$x % $y;?>
<br>
<?php
$a= "First ";
$b= "Plane";

$c=$a.$b. " was departed in 1995";
echo "$c \n";


?>
<br>
<?php 
$school="Digital School";
echo "Gjatesia e stringut: " .$school. " eshte:"  .strlen($school); 


?>

<br>
<?php 

echo "$c:" .str_word_count($c);
?>

<br>
<?php 

$new_string = str_replace("School" , "Academy",$school);
echo $new_string;


?>
<br>
<?php 

echo strrev($school);


?>