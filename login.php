<?php
    session_start();
    include("db.php");

    if($_SERVER['REQUEST_METHOD']=="POST")
    {

      $Email=$_POST['Email'];
      $Password=$_POST['Password'];
    

    if(!empty($Email)&& !empty($Password)){
      $query ="select * from where email='$Email'limit 1";
       $result=mysqli_query($con,$query);

      if($result){
        if($result && mysqli_num_rows($result)>0){
          $user_data = mysqli_fetch_assoc($result);

          if($user_data['pass']==$Password){
            header("locaction:home.php");
            die;
          }
        }
      }
       echo "<script type='text/javascript'> alert ('wrong user or password')</script>";

    }
    else{
      echo  "<script type='text/javascript'> alert ('wrong user or password')</script>";
    }
  }
      ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animal Website Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url("./happy-dogs.jpg"); /* Replace 'https://example.com/background.jpg' with the URL of your background image */
      background-size: cover;
      background-position: center;
    }
    .overlay {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      margin: 50px auto;
    }
    h2 {
      text-align: center;
    }
    form {
      margin-top: 20px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-group input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }
    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="overlay">
    <h2>Welcome Back! Log In to Your Account</h2>
    <form action="#" method="post">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Log In">
      </div>
      <div class="login-link">
        <span>Already have an account? <a href="index.php">Log in here</a></span>
      </div>
    </form>
  </div>
</body>
</html>
