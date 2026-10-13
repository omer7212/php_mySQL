<?php

include_once('config.php');
if(isset($_POST['submit'])){
    $movie_name=$_POST['movie_id'];
    $notickets=$_POST['notickets'];
    $data=$_POST['data'];
    $seat=$_POST['seat'];
    $user_id=1;
}
if(empty($notickets)||empty($data)||empty($seat)){
    echo "Fill all fields!";
    header("refresh:2; url=details.php?movie_id=$movie_id");
}

$sql="INSERT INTO bookings(movieID,userID,[data],nr_tiketave,ulesja VALUES ($movie_id,$user_id,'$data - $time','$notickets','$seat')";
$insertBooking=$conn->prepare($sql);


$insertBooking->execute();
header("Location: home.php");

?>