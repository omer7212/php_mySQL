<?php
$students=array(
    array("Drini","Prishtine",13),
    array("Syari","Prishtine",16),
    array("Lindrit","Berlin",16),
    array("Edlira","Kastriot",17),
    array("Patris","London",16),
);


for ($row=0;$row<count($students);$row++){
    echo "<ul>";
    for($column=0;$column<count($students[$row]);$column++){
        echo "<li>".$students[$row][$column]."</li> ";
    echo "</ul>";
}
}




$grades=array(
    "Math" => 3,
    "History" => 5,
    "English L" => 4,
);
echo $grades["History"];


?>










<?php


$cars = array(
    array("Volkswagen", "Golf 8", 2022),
    array("Audi", "A4", 2021),
    array("BMW", "M4", 2023),
    array("Mercedes-Benz", "C-Class", 2020),
    array("Porsche", "911", 2024),
);


for ($row = 0; $row < count($cars); $row++) {
    echo "<ul>"; 
    
    
    for ($column = 0; $column < count($cars[$row]); $column++) {
        echo "<li>" . $cars[$row][$column] . "</li>";
    }
    
    echo "</ul>"; 
}



?>













?>















