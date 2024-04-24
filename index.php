<?php
    session_start();
    include("db.php");

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
      $Name=$_POST['name'];
      $Email=$_POST['email'];
      $Password=$_POST['password'];
    

    if(!empty($Name)&& !empty($Email)&& !empty($Password)){
      $query ="insert into user_signup (name,email,password) values ('$Name','$Email','$Password') ";

     
     mysqli_query($con,$query);

     echo "<script type='text/javascript'> alert ('Successfully Signup')</script>";

    }
     else{
      echo "<script type='text/javascript'> alert ('Please enter some vaild information')</script>";
     }

    
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animal Website Signup</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('./happy-dogs.jpg'); /* Replace 'https://example.com/background.jpg' with the URL of your background image */
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
    .login-link {
      text-align: center;
      margin-top: 10px;
    }
    .login-link a {
      color: #333;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="overlay">
    <h2>Sign Up to Our Animal Website</h2>
    <form action="home.php" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Sign Up">
      </div>
     
    </form>
  </div>

  <script>
    document.getElementById("signupForm").addEventListener("submit", function(event) {
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirm_password").value;
      var passwordMatchError = document.getElementById("passwordMatchError");

      if (password !== confirmPassword) {
        passwordMatchError.textContent = "Passwords do not match";
        event.preventDefault(); // Prevent form submission
      } else {
        passwordMatchError.textContent = ""; // Clear error message if passwords match
      }
    });
  </script>
</body>
</html>
