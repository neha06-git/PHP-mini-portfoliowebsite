<?php
$login=0;
$invalid=0;
   if($_SERVER['REQUEST_METHOD']=='POST'){
       include 'connect.php';
       $username=$_POST['Username'];
       $pass=$_POST['Password'];
   
    $sql="Select * from registration where 
    Username='$username' and Password='$pass' ";

    $res=mysqli_query($con,$sql);
    if($res){
        $num=mysqli_num_rows($res);
        if($num > 0 ){
            $login=1;
            session_start();
            $_SESSION['Username']=$username;
            header('location:http://localhost/Portfolio_website/Assignment-1/homepage.php');
        }else{
            $invalid=1;
        }
           
     }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="css\login.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>

<?php
if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong><br>User successfully logged in.
    <button type="button" class="close" data-dismiss="alert"
    aria-label="close">
      <span aria-hidden="true">&times;</span></button>
    </div>';
}
?>
<?php
if($invalid){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error</strong><br>Invalid credentials.
    <button type="button" class="close" data-dismiss="alert"
    aria-label="close">
      <span aria-hidden="true">&times;</span></button>
    </div>';
}
?>

<div class="container">
 <div class="form">
  <div class="btn">
  <button class="loginBtn">LOG IN</button>
  </div>
  <form action="login.php" method="post" class="form-box">
  
  <div class="formGroup">
  <input type="text" name="Username" placeholder="User name" required/>
  </div>
  <div class="formGroup">
  <input type="password" name="Password" placeholder="Enter your password" required/>
  </div>
  <div class="formGroup">
  <input class="btn2" type="submit" value="Login"/>
  </div>
</form>
</div>
</div>
</body>
</html>