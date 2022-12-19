<?php
include('config.php');
$name =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$password =md5($_POST['password']);
echo $password;
$query ="INSERT INTO  users(name,email,phone,password) VALUES ('{$name}','{$email}','{$phone}','{$password}')";
$result = mysqli_query($conn,$query) or die("Query unsuccessful.");
if($result){
    $message = "Registration completed Successfully";
    header("Location:login.php?message={$message}"); 
}
       
?>