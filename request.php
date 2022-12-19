<?php
session_start();
if($_SESSION['id'] == 0){
  header("Location:login.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/req.css">
    <link rel="shortcut icon" href="image/red_star_PNG44.png" />
    <script src="https://kit.fontawesome.com/6134494814.js" crossorigin="anonymous"></script>
    <title>Request</title>
</head>
<body>
    <input type="checkbox" name="" id="menu">
    <div class="sidebar">
        <div class="sidebar-brand">
    <h2>Laundry Management System |||</h2>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li><a href="dashboard.php" class="active"><span class=" fa-solid fa-gauge"></span><span>Dashboard</span></a></li>
            <li><a href="request.php" class="active"><span class=" fa fa-folder"></span><span>Laundry Request</span></a></li>
            <li><a href="#" class="active"><span class=" fa  fa-folder"></span><span>Request Status</span></a></li> 
        </ul>
    </div>
    </div>
    <div class="content">
        <header>
            <p><label for="menu"><span class="fa fa-bars"></span></label><span class="dashboard">Laundry Request</span></p>
            </header>
            </div>
    <section class="container">
    <form action="request_send.php" method="post" class="form">
        <div class="column">
        <div class="input-box">
            <label>Pick Up</label>
            <input type="date" placeholder="mm/dd/yyyy" required name="pickupdt">
        </div>
        <div class="input-box">
            <label>Drop </label>
            <input type="date" placeholder="mm/dd/yyyy" required name="dropdt">
        </div>
        <div class="input-box">
            <label>Top Wear</label>
         <div class="select-box">
            <select name="topwear">
            <option value=" disabled">select</option>
                <option value="Tshirt">T-Shirt</option>
                <option value="Shirt">Shirt</option>
                <option value="Non"> Non of the above</option>
            </select>
        </div>
        </div>
    </div>
        <div class="input-box">
            <label>Bottom Wear</label>
            <div class="select-box">
            <select name="bottomwear">
            <option value=" disabled">select</option>
            <option value="Jeans">Jeans</option>
                <option value="Trousert">Trouser</option>
                <option value="Leggins">Leggins</option>
                <option value="Non"> Non of the above</option>
                
                
            </select>
        </div>
        </div>
        <div class="input-box">
            <label>Woolen Cloth</label>
            <input type="Text" placeholder="" name="woolencloth" >
        </div>
        <div class="input-box">
            <label>Others</label>
            <input type="text" placeholder=""  name="other">
        </div>
        <div class="input-box">
            <label>Select Service</label>
        <div class="select-box">
            <select name="service">
                <option value=" disabled">select</option>
                <option value="other">Others</option>
                <option value="upi">UPI</option>
                <option value="card">Debit/Credit card</option>
                <option value="transfer">Bank Transfer</option>
                <option value="cod">Cash On Delivery</option>
            </select>
            
        </div>
        </div>
        <div class="input-box">
            <label>Contact Person</label>
            <input type="tel" name="phone" id="num" required>
        </div>
        <div class="input-box">
            <label>Description</label>
            <input type="text" placeholder="(If Any)"  name="description">
        </div>
        <button type="submit">Submit</button>
    </form>
    </section>

</body>
</html>