<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/red_star_PNG44.png" />
</head>
<body>
   
    <div class="signup-box">
        <h1>Sign Up</h1>
        <form action="signup_process.php" method="post">
            <label>Full Name :</label>
            <input type="text" name="name" required>
            <label>Email</label>
            <input type="text" name="email" required>
            <label>Mobile Number :</label>
            <input type="tel" name="phone" required>
            <label>Password :</label>
            <input type="password" name="password" required>
            <input type="submit" name="sb" value="Register">
        </form>

        <p>Already have an account? <a href="login.php">Login Here</a></p>
    </div>
    
</body>
</html>