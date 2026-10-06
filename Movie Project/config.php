<?php 
$u='root';
$ass='';
$server='localhost';
$dbname='movie_project';


try{
    $conn=new PDO("mysql:host=$host;dbname=$movie_project",'root',"");
    echo "Connected succesfully!";


}catch(Exception $e){
    echo "Error".$e->getMessage();
}







?>