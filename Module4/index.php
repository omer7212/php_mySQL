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


echo "<br> Version of PHP:".phpversion();
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




<?php

function odd_even($nr){

if($nr%2==0){
echo "Even"

}else{
echo "Odd"

}

}
for($i=100;$i<105;$i++){

        echo "$i is:";
        odd_even($i);
        echo "<br>";
}

$fruits=["Banana","Apple","Mango","Orange","Pear",]

    foreach($fruits as $fruit){
        echo "$fruit <br>"
    }
    echo count($fruits);
for($i=0;$i< count($fruits);$i++){
    echo $fruits[$i]."<br>";
}








?>





