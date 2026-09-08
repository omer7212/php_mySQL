<?php
    //With this file we include the database connection
    include_once("index.php");

    if(isset($_POST['submit'])){
        $username=$_POST['uname'];
        $password=$_POST['passwordi'];
        $age=$_POST['age'];

        //We encrypt the password to hide details of password

        $hashed_password=password_hash($password,PASSWORD_BCRYPT);

        $sql="INSERT INTO users(username,password,age) VALUES ('$username','$hashed_password',$age)";


        $conn->exec($sql);
        echo "New record created successfully!";
    }




?>