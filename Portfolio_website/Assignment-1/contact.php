<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/contact.css" />
</head>
<body>
   <?php include 'header.php'; ?>
   <div>
   <section>
   <div class="container">
       <div class="contact-info">
           <div>
               <h1>Contact Information</h1>
               <ul class="info">
                   <li>
                       <span><i class="fa-solid fa-location-dot"></i></span>
                        <span>Uttam Nagar - East<br>New Delhi</span>
                    </li>
                    <li>
                       <span><i class="fa-solid fa-envelope-open-text"></i></span>
                        <span>ema00608@gmail.com</span>
                    </li>
                    <li>
                       <span><i class="fa-solid fa-phone"></i></span>
                        <span>+91 84484018xx</span>
                    </li>
               </ul>
               <ul class="socials">
                   <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                   <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                   <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                   <li><a href="https://www.linkedin.com/in/neha-gupta-b7b720200/"><i class="fa-brands fa-linkedin"></i></a></li>
                   <li><a href="https://github.com/neha06-git"><i class="fa-brands fa-github"></i></a></li>
            </ul>
           </div>
        </div>
        <div class="contact-form">
            <h2>Send a Message</h2>
            <hr>
            <?php 
               if(isset($_GET['error'])){
                   $msg = "Please fill in the Blanks ";
                   echo '<div class="alert alert-danger">'.$msg.'</div>';
               }
               if(isset($_GET['success'])){
                $msg = "Your Message Has Been Sent ";
                echo '<div class="alert alert-success">'.$msg.'</div>';
               }
               
            ?>
            <div class="form-box">
                <form action="thankyou.php" method="post">
                    <div class="input-box">
                        <input type="text" name="firstName" placeholder="First Name"  required>
                    </div>
                    <div class="input-box">
                        <input type="text" name="lastName"  placeholder="Last Name" required>
                         
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Email" required>
                        
                    </div>
                    <div class="input-box">
                        <input type="number" name="mobileNo" placeholder="Enter Mobile Number"  required>
                         
                    </div>
                    <div class="input-box">
                        <textarea name="message" type="message" placeholder="Write your feedback here..." required></textarea>
                         
                    </div>
                    <div class="input-box">
                        <button class="btn" type="button" name="btn-send">Submit</button>

                         
                    </div>
                </form>
            </div>
        </div>
   </div>
</section>
</div>
</body>
</html>
