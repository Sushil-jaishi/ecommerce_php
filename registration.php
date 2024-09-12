<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
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

    .form-container {
      background: rgba(255, 255, 255, 0.8); /* Glass effect */
      border-radius: 15px; /* Rounded corners for the form */
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
    }

    .form-container h2 {
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

    .form-group .required::after {
      content: ' *';
      color: red;
    }

    .form-group .optional {
      color: #777;
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
  <div class="form-container">
    <h2>Registration Form</h2>
    <form>
      <div class="form-group">
        <label for="username" class="required">UserName</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
      </div>
      
      <div class="form-group">
        <label for="email" class="required">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      
      <div class="form-group">
        <label for="contact" class="required">Contact</label>
        <input type="tel" id="contact" name="contact" placeholder="Enter your contact number" required>
      </div>
      
      <div class="form-group">
        <label for="address" class="required">Address</label>
        <input type="text" id="address" name="address" placeholder="Enter your address" required>
      </div>
      
      <div class="form-group">
        <label for="zip">Zip Code <span class="optional">(Optional)</span></label>
        <input type="text" id="zip" name="zip" placeholder="Enter your zip code">
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
        <input type="submit" value="Submit">
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
