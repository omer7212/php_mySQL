<?php


$host='localhost';
$user= 'root';
$pass="";


try{
    $conn=new PDO("mysql:host=$host",$user,$pass); //krijon lidhje te php me database
    $sql="CREATE DATABASE ora_fundit"; //string qe permban kod te sql
    $conn->exec($sql); //ekzekuton pjesen (query-n) e sql
    echo "Database is created";


}catch(Exception $e){
    echo "Not connected, for reason" .$e->getMessage(); //Kjo thirret vetem nese ndodh ndonje error
}






?>