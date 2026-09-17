<?php 
$host='localhost';
$db_name='testdb';
$user='root';
$password='';


try{
    $conn=new PDO("mysql:host=$host;dbname=$db_name",'root',"");
    echo "Connected succesfully!";


}catch(Exception $error){
    echo $error;
}







?>