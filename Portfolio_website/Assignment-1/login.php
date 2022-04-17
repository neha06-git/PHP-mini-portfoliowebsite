<?php
// (A) LOGIN CHECKS
require "check.php";
 // (B) LOGIN PAGE HTML
if (isset($failed)) {
"<div>Invalid user or password.</div>";}
 ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/login.css"/>
</head>
<body>
<div class="container">
 <div class="form">
  <div class="btn">
  <button class="loginBtn">LOG IN</button>
  </div>
 <form id="login-form"  method="post" target="_self">
  
  <div class="formGroup">
  <input type="text" name="user" placeholder="Enrolment number" required/>
  </div>
  <div class="formGroup">
  <input type="password" name="password" placeholder="Enter password" required/>
  </div>
  <div class="formGroup">
  <input class="btn2" type="submit" value="Sign In"/>
  </div>
</form>
</div>
</div>
</body>
</html>