<?php 

// echo "Hello World";

$num = 10;

if($num<=10){

echo "$num is less than 10";

}else{

echo "$num is greater than 10";
}

?>
<br>

<?php

$neg_check=0;


if ($neg_check<0){
 echo "this number is negative";

} elseif($neg_check==0){
 echo "this number is equal to zero";


} else{
  echo "this number is greater than zero";
}

?>

<!-- Switch -->
<br>
<?php

$age=15;
switch($age){

case ($age>=0 && $age<18):

        echo "You are a minor <br>";
        break;
       case($age>= 18 && $age <25):
            echo "You are young adult <br>";
            break;
       case($age>=25):
            echo "You are an adult <br>";
            break;
       default:
            echo "Invalid age input!<br>";
            break;     

}

//Loops (While, do-while)

$x=1;

while($x<10){

echo "The number is $x. <br>";
$x++;
}

do{
    echo "The number i\$ $x. <br>";
    $x++;
}while($x==5);


for($i=0;$i<10;$i++){
    echo " <strong>The number with for-loop is: $i.</strong><br>";

}


$ds= "World Cup 2026";
$length=strlen($ds);

for($i=0;$i<$length;$i++){
    echo $ds[$i]."<br>";

}

$cars=array("BMW","VW","Audi","Tesla");


$nr_elem=count($cars);

for($i=0;$i<$nr_elem;$i++){
    echo $cars[$i]. "<br>";

}





?>



