<?php
include('config.php');
$pickupdt =$_POST['pickupdt'];
$dropdt =$_POST['dropdt'];
$topwear =$_POST['topwear'];
$bottomwear =$_POST['bottomwear'];
$woolencloth =$_POST['woolencloth'];
$other =$_POST['other'];
$service =$_POST['service'];
$phone =$_POST['phone'];
$description =$_POST['description'];
$query ="INSERT INTO request_table(pickupdate,dropdate,topwear,bottomwear,woolencloth,other,service,phone,description) VALUES ('{$pickupdt}','{$dropdt}','{$topwear}','{$bottomwear}','{$woolencloth}','{$other}','{$service}','{$phone}','{$description}')";
$result = mysqli_query($conn,$query) or die("Query unsuccessful.");
if($result){
    header("Location:status.php"); 
}      
?>