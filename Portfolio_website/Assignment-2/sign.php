<?php
$success=0;
$user=0;
   if($_SERVER['REQUEST_METHOD']=='POST'){
       include 'connect.php';
       $username=$_POST['Username'];
       $pass=$_POST['Password'];
   
    $sql="Select * from registration where 
    Username='$username' ";

    $res=mysqli_query($con,$sql);
    if($res){
        $num=mysqli_num_rows($res);
        if($num > 0 ){
            // echo "User already exist";
            $user=1;
        }else{
            $sql="insert into registration (Username,Password)
                values('$username','$pass')";
            $res=mysqli_query($con,$sql);
            if($res){
               
                $success=1;
                header('location:login.php');
              }else{
                  die(mysqli_error($con));
               }
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
    <title>Signup page</title>
    <link rel="stylesheet" href="css\sign.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php
if($user){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Ohh no Sorry!</strong><br>User already exist.
    <button type="button" class="close" data-dismiss="alert"
    aria-label="close">
      <span aria-hidden="true">&times;</span></button>
    </div>';
}
?>
<?php
if($success){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong><br>You are successfully signed up.
    <button type="button" class="close" data-dismiss="alert"
    aria-label="close">
      <span aria-hidden="true">&times;</span></button>
    </div>';
}
?>
<div class="container">
 <div class="form">
  <div class="btn">
  <button class="loginBtn">SIGN UP</button>
  </div>
  <form action="sign.php" method="post" class="form-box">
  
  <div class="formGroup">
  <input type="text" name="Username" placeholder="User name" required/>
  </div>
  <div class="formGroup">
  <input type="password" name="Password" placeholder="Enter your password" required/>
  </div>
  <div class="formGroup">
  <input class="btn2" type="submit" value="Signup"/>
  </div>
</form>
</div>
</div>
</body>
</html>