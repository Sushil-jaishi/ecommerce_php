<?php
require_once "database/connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM admin WHERE email = '$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if ($password==$user['password']) {
      header('Location:admin/admin.php');
      exit();
    } else {
      $status = "Invalid password!";
    }
  }else{
    $status= "user not found";
  }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background: linear-gradient(to right, #6a11cb, #2575fc); /* Gradient background */
      font-family: Arial, sans-serif;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.8); /* Glass effect */
      border-radius: 15px; /* Rounded corners for the form */
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 10px; /* Rounded corners for the input */
      box-sizing: border-box;
    }

    .form-group input::placeholder {
      color: #aaa;
    }

    .form-group input[type="submit"] {
      background-color: #2575fc;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
      border-radius: 10px;
      transition: background-color 0.3s ease;
    }

    .form-group input[type="submit"]:hover {
      background-color: #1e63d0;
    }

    .show-password {
      display: flex;
      align-items: center;
      margin-top: 10px;
    }

    .show-password input[type="checkbox"] {
      margin-right: 10px;
    }

    .show-password label {
      color: #555;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div><?php if(isset($status))echo $status;?></div>
    <h2>Admin Login Form</h2>
    <form method="post">
      <div class="form-group">
        <label for="email" class="required">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      
      <div class="form-group">
        <label for="password" class="required">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      
      <div class="show-password">
        <input type="checkbox" id="showPassword">
        <label for="showPassword">Show Password</label>
      </div>
      
      <div class="form-group">
        <input type="submit" value="Login">
      </div>
    </form>
  </div>

  <script>
    document.getElementById('showPassword').addEventListener('change', function() {
      const passwordField = document.getElementById('password');
      if (this.checked) {
        passwordField.type = 'text';
      } else {
        passwordField.type = 'password';
      }
    });
  </script>
</body>

<?php

include 'footer.php';
?>
</html>
