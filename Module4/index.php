<?php


$fruits=array("Mango","Banana","Apple","Pear","Orange","Cherries","Apricot");

echo count($fruits). "<br>";

foreach($fruits as $fruit)
    echo "$fruit, <br>";


for($i=0;$i<count($fruits);$i++){

echo $fruits[$i].",<br>";





}
// Built-in functions
// phpinfo();


$x=3.14;
echo gettype($x);


echo "<brr> Version of PHP:".phpversion();
?>


<?php

$cars=array("BMW", "VW", "Ferrari", "Buggati");

echo count($cars). "<br>";

foreach($cars as $car)
    echo "$car", "<br>";

?>



<?php

// function qe i krijojm ne

function sum(){
    echo "<br> Sum of two numbers:";
    echo 120+30;
}

sum();

function maximum($x,$y){

if($x <$y){
    return $y;
}else{
    return $x;
}

}


 $greatest=maximum(-50,20);
 echo "<br> The maximum number is: $greatest";



 function odd_or_even($number){

if($number %2 ==0){
    return "Even";
}else{
    return "Odd";
}
    
 }

echo odd_or_even(77);

?>