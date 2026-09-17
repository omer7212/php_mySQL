<?php 

include_once("config.php");

if(isset($_POST['submit'])){
        $username=$_POST['uname'];
        $password=$_POST['passwordi'];
        $age=$_POST['age'];
        $id=$_POST['id'];
        //We encrypt the password to hide details of password

        $hashed_password=password_hash($password,PASSWORD_BCRYPT);

        $sql="UPDATE users SET username='$username',password='$hashed_password',age=$age WHERE id=$id";
        $prep=$conn->prepare($sql);
        $prep->execute();
        echo"The record has been updated successfully!";

        
        header("Location:index.php");
    }

?>