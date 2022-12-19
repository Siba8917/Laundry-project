<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/red_star_PNG44.png" />
    <title>Login</title>
</head>
<body>
    <div class="center">
        <div id="show-message" style="text-align: center; color: green; padding-top:10px; font-size:18px;">
           <?php
              $message ="" ;
              if(isset($_GET['message'])){
                $message = $_GET['message'];
              }
               echo $message;
            ?>
        </div>
        <h1>Login</h1>
        <form action="signin_process.php" method="post">
            <div class="txt-field">
                <input type="text" required name="username">
                <span></span>
                <label>User Name</label>
            </div>
            <div class="txt-field">
                <input type="password" required name="password">
                <span></span>
                <label>Password</label>
            </div>
            <!-- <div class="pass"> <a href="#">Forgot Password ?</a></div> -->
            <input type="submit" name="submit" value="Login">
            <div class="signup_link">
                Not a member? <a href="signup.php">Signup</a>
            </div>
        </form>
    </div>

    <script>
        let x = document.getElementById('show-message');
        if(x.innerHTML != ""){
           setTimeout(()=>{
             x.innerHTML = "";
           },2000)
        }
    </script>
</body>
</html>