<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/anime.jpg" alt="">
      </div>

      <div class="content">
         <h3>About Us</h3>
         <p style = "text-align: justify;">&nbsp;&nbsp;Welcome to Techno Mart, your one-stop shop for all your computer parts needs!
We are a passionate group of individuals dedicated to providing our customers with the highest quality computer parts at competitive prices. We understand that building or upgrading a computer can be a daunting task, so we strive to make the process as easy and enjoyable as possible</p>

      </div>

   </div>

</section>



<br><br><br><br><br><br><br><br>









<?php include 'components/footer.php'; ?>



<script src="js/script.js"></script>



</body>
</html>