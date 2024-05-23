<?php
    session_start();

    $con = mysqli_connect('localhost', 'root', '','register') or die(mysql_error());

    include("db.php")
    if($SERVER['REQUEST_METHOD']=="POST")
    {
    $Username = $_post['fname'];
    $email = $_post['email'];
    $password = $_post['password'];

if(!empty($email) && !empty($password) && !is_numeric($email))
{
  $query="insert into register(Username, email, password) values('$Username', '$email', '$password')";

  mysqli_query($con, $query);

  echo "<script type ='text/javascript'> alert('Successfully Register')</script>";

}

else{
echo "<script type ='text/javascript'> alert('Please enter some Valid Information')</script>";
}

    }

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>
        <link rel="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/x-icon" href="logo1.JPG" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    
    <section id="login-header">
        <a href="#"><img src="logo2.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="login.html">Login</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="index.html">Home</a></li>
                
            </ul>
        </div>

    </section>
  <div class="wrapper">
    <form method="POST">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" name="fname"  required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="email"
                id="email"
                name="email"
                placeholder="Enter Email"/>
                
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="register-link"></div>
        <p>Dont have an account? <a href="registration.php">Register</a></p>
      </div>
    </form>
  </div>
</<section>
    <script src="copy.js"></script>
</body>
</html>