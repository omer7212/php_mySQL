<?php 
include("config.php");


if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];


    if(empty($username)|| empty($password)){
        echo "You need to fill all data";
        header("refresh:3; url=login.php");
    }else{
        $query="SELECT * from user_login WHERE username='$username'";
        $sql=$conn->prepare($query);
        $sql->execute();

    if($sql-> rowCount()>0){
        $user=$sql->fetch();
        if(password_verify($password,$user['password'])){
            $_SESSION['username']=$user['username'];
            header("Location: dashboard.php");
        }else{
            echo "Passowrd incorrect";
            header("refresh:3; url=login.php");
        }
        }else{
        echo "No user found with this username";
        header("refresh:3; url=login.php");
        }




    }


    }
















?>



