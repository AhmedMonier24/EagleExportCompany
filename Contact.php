<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submitToSend'])):
        require_once("sendMail.class.php");
        $sendNow = new sendMail();
        $sendNow->sendMailFunction($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['subject'], $_POST['message']);
    endif;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Contact</title>
<link rel="icon" href="assesst/img/favicon~1.ico">
<link rel="stylesheet" href="assesst/css/all.min.css">
<link rel="stylesheet" href="assesst/css/bootstrap.min.css" />
<link rel="stylesheet" href="assesst/css/style.css" />
<link rel="stylesheet" href="assesst/css/contact.css">

</head>
<body>
<!----------------navbar------------------->
<div class="py-2 bg-green"></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
 <!-- translator -->
 <a href="#" id="ftwtranslation_button" hreflang="en" title="" style="border:0;"><img src="http://free-website-translation.com/img/fwt_button_en.gif" id="ftwtranslation_image" alt="Free Website Translator" style="border:0;"/></a> <script type="text/javascript" src="http://free-website-translation.com/scripts/fwt.js" ></script> 
 <div class="container">
 <a class="navbar-brand" href="#"><img src="assesst/img/logo.png" alt="Eagle Export"></a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto cairo font-weight-bold">
 <li class="nav-item active">
  <a class="nav-link px-5 bg-green text-white" href="index.html">Home <span class="sr-only">(current)</span></a>
 </li>
 <li class="nav-item dropdown">
  <a class="px-5 nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Products
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
   <a class="dropdown-item" href="Fruits.html">Fruits</a>
   <a class="dropdown-item" href="vegetables.html">Vegetables</a>
   <a class="dropdown-item" href="spices-herbs.html">Spice&Herb</a>
   <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="varieties-timetable.html">varieties&timetable</a>
   <a class="dropdown-item" href="our-work-and-products.html">Our Work & Products</a>
  </div>
  
 </li>
 <li class="nav-item">
  <a class="px-5 nav-link" href="CoreValues.html">Core Values
  </a>
 </li>

 <li class="nav-item">
  <a class="px-5 nav-link" href="About.html">About</a>
 </li>
 <li class="nav-item">
  <a class="px-5 nav-link" href="Contact.php">Contact</a>
 </li>

  </ul>
 </div>
</div>
</nav>
<!----------------wallpaper------------------->
<section class="contact mb-5  d-flex align-items-center justify-content-center">
  <div class="container">
  <div class="myFirstFont col-12 text-headw text-center">
  <h2>Contact</h2>
  </div>
  <div class="overlay col-12"></div>
<div class="conta"></div>

</section>  
<!----------------Contact------------------->
<section class="box-contact my-5">
  <div class="container">
    <div class="row">
      <div class="text-muted col-lg-7 col-sm-12 shadow">
        <h2 class="pt-5 pl-3">Send Message</h2>
        <div class="col-12 px-3">
          <form method="POST">
            <label class="my-2" for="name">Name</label>
            <input id="inputName" name="name" type="text" class="form-control" placeholder="Your name..." required>
            <label class="my-2" for="name">Message Subject</label>
            <input id="inputsub" name="subject" type="text" class="form-control" placeholder="Message Subject..." required>
            <label class="my-2" for="name">E-mail</label>
            <input id="inputMail" name="email" type="text"  class="form-control" placeholder="Your Mail..." required>
            <label class="my-2" for="name">Phone</label>
            <input id="inputPhone" name="phone" type="Phone" class="form-control" placeholder="Your Phone..." required>
            <label class="my-2" for="product">Product</label>
              <select id="inputState" class="form-control">
                <option selected>Fruits</option>
                <option>Vegetables</option>
                <option>Spice & herbs</option>
              </select>
              <label class="my-2" for="">Leave Message</label>
              <textarea class="form-control" name="message" placeholder="Leave Message" required></textarea>
              <button  class="btn bg-green my-5" name="submitToSend" type="submit">Send Message <i class="fa fa-paper-plane ml-5"></i></button>
            </form>
    </div>
      </div>
      <div class="col-lg-5 col-sm-6  bg-green text-white ">
        <h2 class="pt-5 font-weight-bold text-center">Contact Information</h2>
        <hr class="bg-light mt-3">
        <h4 class="text-center px-5 pb-3">Egypt HQ Office</h4>
        <hr class="bg-light my-2 mb-3">
        <div class="pl-5 font-weight-bold">
          <i class="fas fa-envelope mr-3 " aria-hidden="true"></i>
          <p style="display: inline-block" ><a href="" class="text-white">info@eagleexportsco.com</a></p>
        </div>
        <div class="pl-5 font-weight-bold">
          <i class="fas fa-phone mr-3 " aria-hidden="true"></i>
          <i class="fab fa-whatsapp mr-3 " aria-hidden="true"></i>
          <p style="display: inline-block" ><a href="" class="text-white">+2 012 210 398 59</a></p>
        </div>
        <div class="pl-5 font-weight-bold">
          <i class="fas fa-map mr-3 " aria-hidden="true"></i>
          <p style="display: inline-block" ><a href="" class="text-white">5th Settlement, Narges District</a></p>
        </div>
        <hr class="bg-light ">
        <h4 class="text-center px-5 pb-3">Russia Office</h4>
        <hr class="bg-light my-2 mb-3">
        <div class=" pl-5 font-weight-bold">
          <i class="fas fa-envelope mr-3 " aria-hidden="true"></i>
          <p style="display: inline-block" ><a href="" class="text-white">selim@eagleexportsco.com</a></p>
        </div>
        <div class="pl-5 font-weight-bold">
        <i class="fas fa-envelope mr-3 " aria-hidden="true"></i>
        <p style="display: inline-block" ><a href="" class="text-white">sales@eagleexportsco.com</a></p>
      </div>

        <div class="pl-5 font-weight-bold">
          <i class="fas fa-phone mr-3 " aria-hidden="true"></i>
          <p style="display: inline-block" ><a href="" class="text-white">+7 961 008 3528</a></p>
        </div>
        <div class="pl-5 font-weight-bold">
          <i class="fas fa-phone mr-3 " aria-hidden="true"></i>
          <p style="display: inline-block" ><a href="" class="text-white">+7 905 136 7205</a></p>
        </div>
        <div class="pl-5 font-weight-bold">
          <i class="fas fa-phone mr-3 " aria-hidden="true"></i>
          <p style="display: inline-block" ><a href="" class="text-white">+7 915 139 5089</a></p>
        </div>

        <div class=" pl-5 font-weight-bold">
          <i class="fas fa-map mr-3 " aria-hidden="true"></i>
          <p style="display: inline-block" ><a href="" class="text-white">russian Federation , 150014, <p>Yaroslavl Region , Yaroslavl Prospect</p></a></p>


      </div>
  </div>
</div>
</section>
<!----------------Footer------------------->
<footer id="footer" class="footer-1 bg-black">
<div class="main-footer widgets-dark typo-light">
<div class="container">
<div class="row">

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget subscribe no-box">
<h4 class="widget-title text-uppercase">eagle exports<span></span></h4>
<p>We believe that customer satisfaction is a key to business success. We understand that knowing your customers and their needs will help providing them with the best products and services. We also believe that providing excellent customer service, makes our customers feel valued, and assures them that we stand behind our products.
</p>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h4 class="widget-title text-uppercase">Quick Links<span></span></h4>
<ul class="thumbnail-widget">
<li>
<div class="thumb-content"><a href="index.html" class="text-white">Home</a></div>	
</li>
<li>
<div class="thumb-content"><a href="About.html " class="text-white">About</a></div>	
</li>
<li>
<div class="thumb-content"><a href="Contact.php" class="text-white">Contact</a></div>	
</li>
<li>
<div class="thumb-content"><a href="Fruits.html" class="text-white">Fruits</a></div>	
</li>
<li>
<div class="thumb-content"><a href="vegetables.html" class="text-white">Vegetables</a></div>	
</li>
<li>
<div class="thumb-content"><a href="spices-herbs.html" class="text-white">spice&herb</a></div>	
</li>
<li>
    <div class="thumb-content"><a href="varieties-timetable.html" class="text-white">varieties time table</a></div>	
    </li>
    <li>
        <div class="thumb-content"><a href="varieties-timetable.html" class="text-white">Glance of our work and products</a></div>	
        </li>
        <li>
            <div class="thumb-content"><a href="CoreValues.html" class="text-white">Core Values</a></div>	
            </li>
    
</ul>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box ">
<h4 class="widget-title text-uppercase">Egypt Office<span></span></h4>
<div class="color">
<p ><a href="mailto:info@domain.com" target="_blank" title="E-mail" class="text-white"><i class="fas fa-envelope mr-2"></i>info@eagleexportsco.com
</a></p>
<p><a href="https://wa.me/01221039859" target="_blank" title="Whatsapp" class="text-white"><i class="fab fa-whatsapp mr-2"></i>+2 012 210 398 59</a>
</p>
<p ><a href="mailto:info@domain.com" target="_blank" title="E-mail" class="text-white"><i class="fas fa-map mr-2"></i>5th Settlement, Narges District</a></p>

</div>
</div>
</div> 
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h4 class="widget-title text-uppercase">Russia Office<span></span></h4>
<div class="color align-baseline">
    <p ><a href="mailto:info@domain.com" target="_blank" title="E-mail" class="text-white"><i class="fas fa-envelope mr-2"></i> selim@eagleexportsco.com</a></p>
    <p ><a href="mailto:info@domain.com" target="_blank" title="E-mail" class="text-white"><i class="fas fa-envelope mr-2"></i> sales@eagleexportsco.com</a></p>
    <p><a href="#" title="Whatsapp" class="text-white"><i class="fas fa-phone mr-2"></i>+7 961 008 3528</a>
    </p>
    <p><a href="#" title="Whatsapp" class="text-white"><i class="fas fa-phone mr-2"></i> +7 905 136 7205</a>
    </p>
    <p><a href="#" title="Whatsapp" class="text-white"><i class="fas fa-phone mr-2"></i>+79151395089</a>
    </p>

    <p><a href="mailto:info@domain.com" target="_blank" title="Address" class="text-white"><i class="fas fa-map mr-2"></i>russian Federation , 150014 , Yaroslavl Region , Yaroslavl Prospect</a></p>
    
    </div>
</div>
</div> 

</div>
</div>
</div>
<div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<p >Copyright © 2020 - 2021. All rights reserved <a class="text-info" target="_blank" href="https://www.facebook.com/AhmedMonier24">Ahmed Monier</a>.</p>
</div>
</div>
</div>
</div>
</footer> 
<!----------------Box Option------------------->
<section id="box-option">
<div class="option float-left">
<h4 class="myFirstFont text-green">Change Color</h4>
<div class="box-color rounded"></div>
<div class="box-color mx-1 rounded"></div>
<div class="box-color rounded"></div>

</div>
<i class="fa fa-cog float-left x1 text-beig p-2 bg-success"></i>

<div class="clearfix"></div>

</section>
<!----------------Script------------------->
<script src="assesst/js/jquery.min.js"></script>
<script src="assesst/js/popper.min.js"></script>
<script src="assesst/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="assesst/js/main.js"></script>
</body>
</html>
