<?php 
// Protected Page
// (A) START SESSION
session_start();
 
// (B) LOGOUT REQUEST
if (isset($_POST["logout"])) { unset($_SESSION["Username"]); }
 
// (C) REDIRECT TO LOGIN PAGE IF NOT LOGGED IN
if (!isset($_SESSION["Username"])) {
  header("Location: http://localhost/Portfolio_website/Assignment-2/login.php");
  exit();
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/homepage.css" />
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <img src="https://cdni.iconscout.com/illustration/premium/thumb/front-end-developer-doing-web-designing-4487948-3722636.png"/>
        <div class="top-right"><h1>FRONTEND DEVELOPER!</h1>
        <p>A freelancer creative designer and a developer</p>
        <center><button><a href="NehaGupta_Cv.pdf">Download CV</a></button></div></center>
    </div>
    <form class="logout" method="post">
     <input type="hidden" name="logout" value="1"/>
     <input type="submit" value="Logout"/>
    </form>
    
    <?php include 'footer.php'; ?>
    
    
</body>
</html>

