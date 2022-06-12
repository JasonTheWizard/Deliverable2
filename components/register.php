<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>Pizza</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">



<form action="action_page.php">
  <div class="container">
  
    <h1>Register</h1> 
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="name"><b>Name</b></label>
    <input type="name" placeholder="Enter name" name="name" id="name" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" name="register" class="registerbtn">Register</button>
  </div>

  <div class="container">
    <p>Already have an account? <a href="login.php">Login</a>. <a href="../index.php">Home</a>.</p>
    
  </div>
</form>

