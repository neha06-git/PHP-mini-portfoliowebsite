<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill page</title>
    <link rel="stylesheet" href="css\skill.css" />
    <!-- <script>
    $(".bar").each(function(){
    $(this).find(".bar-inner").animate({
    width: $(this).attr("data-width")
   },4000)
   });
   </script> -->
</head>

<body>
    <?php include 'header.php'; 
    ?>
<div class="container-box">  
    <h1 class="heading">My Skills</h1>
<p class="sub-heading">HTML</p>
<div class="container">
  <div class="skills html">95%</div>
</div>

<p class="sub-heading">CSS</p>
<div class="container">
  <div class="skills css">90%</div>
</div>

<p class="sub-heading">JavaScript</p>
<div class="container">
  <div class="skills js">85%</div>
</div>

<p class="sub-heading">PHP</p>
<div class="container">
  <div class="skills php">70%</div>
</div>
</div> 
    <?php include 'footer2.php'; 
    ?>

</body>
</html>