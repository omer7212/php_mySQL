<?php

$ditet_e_javes= array("Hene","Marte","Merkure","Enjte","Premte","Shtune","Diele");

// for-loop

for($i=0;$i<count($ditet_e_javes);$i++){
    echo $ditet_e_javes[$i];
    echo "<br>";
}

// foreach
foreach($ditet_e_javes as $dita){
    echo $dita;
    echo "<hr>";
}
//w -> write a file, create one if it doesn't exist
//r+ -> read and write
//a+ -> append
$my_file=fopen("ds.txt","r+");
// $all_text=fread($my_file,100);
// $my_text=$all_text."\Kujdes me karrige \n";


for($i=1;$i<101;$i++){
    fwrite($my_file,"TEST TEST TEST $i\n");
}

fclose($my_file);


?> 



