<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Hill Camp</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--font v4.0.0-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>


<header>
    <input type="checkbox" name="" id=chk1>
    <div class="logo"><img src="images/the-hill-camp-low-resolution-logo-black-on-white-background.png"></div>
    <div class="search-box">
      <form action="">
        <input type="text" name="search" id ="srch" placeholder="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form> 
    </div>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">about</a></li>
      <li><a href="packeges.php">Packages</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="contact.php">contact</a></li>
      <li>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </li> 
    </ul>
    <div class="menu">
      <label for="chk1">
        <i class="fa fa-bars"></i>
      </label>  
    </div>  
  </header>

<div class="slide-col-image">
  <img src="images/about-background.jpg">
</div>
<div class="about_in">
  <div class="sm">
    <div class="about_in_col">
      <li>&#10097;&#10097;&nbsp;Home</li>&nbsp;<li>&#10097;&#10097;&nbsp;TheHillCamp</li>
    </div>  
  </div>  
</div> 













    <div class="container-contact">
      <div class="sm">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form-1">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Want more fun?? Then go for camping!!! Camping is one of the most elegant ways to enjoy nature with our family and friends. It gives a lot of fun and helps to explore the places to the fullest.
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>Ghatudhar Kempty road, Mussoorie,near
Santura devi Temple, Ghatudhar
Near Kampty Fall Road</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>thehillcamps1999@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>+91 9568277431, +91 9149160272</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form-1">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>
 </div>






<?php include "footer.php"; ?>


    <script src="app.js"></script>
  </body>
</html>
