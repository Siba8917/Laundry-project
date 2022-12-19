<?php
  include 'config.php';
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $query = "SELECT * FROM users WHERE email = '{$username}' AND password ='{$password}'";
  $res = mysqli_query($conn,$query) or die("Query unsuccessful.");
  $id = 0;
  if(mysqli_num_rows($res) > 0){
  foreach($res as $var){
      $id = $var['id'];
      $name = $var['name'];
      $email = $var['email'];
      $phone = $var['phone'];
    }
  }
  if($id>0){
      session_start();
      $_SESSION['id'] = $id;
      $_SESSION['name'] = $name;
      $_SESSION['email'] = $email;
      $_SESSION['phone'] = $phone;
      header('Location:dashboard.php');
  }
  else{
      $message = "Invalid email or password!";
      header("Location:login.php?message={$message}");
  }
?>