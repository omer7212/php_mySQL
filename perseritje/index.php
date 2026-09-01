  <?php

$num =30;

function bmi($m,$h){

    $bmi = $m/($h*$h);
    return $bmi;


}


echo bmi(70,1.8);
$result = bmi(70,1.8);
echo $result;



?>

<?php
$age=15;
  
if($age<18){
    echo 'Minor';
}else if ($age==18){
    echo 'You are 18';
}else{
    echo 'You are an adult';
}


?> 
 


<?php 

$multi_arr=[["Basketball", "Football",5,"Esports"],[54,657,54,12]];
echo count ($multi_arr[1])."<hr>";

for($i=0;$i<count($multi_arr);$i++){
    for($j=0;$j<count($multi_arr[$i]);$j++){
        echo $multi_arr[$i][$j]."</br?";
    }
}


foreach($multi_arr[0] as $sport){
    echo "</br>" .$sport;
}

?>


