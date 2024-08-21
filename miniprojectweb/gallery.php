<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com  -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Hill Camp</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="script.js" defer></script>



  </head>
  <body>



<header>
    <input type="checkbox" name="" id=chk1>
    <div class="logo">
      <img src="images/the-hill-camp-low-resolution-logo-black-on-white-background.png">
    </div>
    <div class="search-box">
      <form action="">
        <input type="text" name="search" id ="srch" placeholder="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form> 
    </div>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">about</a></li>
      <li><a href="packages.php">Packages</a></li>
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


<style>

.top-gallery{
  width: 100%;
  text-align: center;
}

.gallery {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.gallery .images {
  gap: 15px;
  max-width: 85%;
  margin: 40px 0;
  columns: 5 310px;
  list-style: none;
}
.gallery .images .img {
  display: flex;
  cursor: pointer;
  overflow: hidden;
  position: relative;
  margin-bottom: 14px;
  border-radius: 4px;
}
.gallery .images img {
  width: 100%;
  transition: transform 0.2s ease;
}

.gallery .images .img:hover img {
  transform: scale(1.1);
}

/* Image lightbox styling */
.lightbox {
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 5;
  position: fixed;
  visibility: hidden;
  background: rgba(0,0,0,0.65);
}
.lightbox.show {
  visibility: visible;

}
.lightbox .wrapper_a1 {
  position: fixed;
  left: 50%;
  top: 50%;
  width: 100%;
  padding: 20px;
  max-width: 850px;
  background: #fff;
  border-radius: 6px;
  opacity: 0;
  pointer-events: none;
  transform: translate(-50%, -50%) scale(0.9);
  transition: transform 0.1s ease;
  
  margin-top: 4%;
}
.lightbox.show .wrapper_a1 {
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50%, -50%) scale(1);

}
.wrapper_a1 :where(header-section, .details) {
  display: flex;
  
}
.wrapper_a1 header-section {
  justify-content: space-between;
  
}
header-section .details i {
  font-size: 1.7rem;
}
header-section .details span {
  font-size: 1.2rem;
  margin-left: 10px;
}
header-section .buttons i {
  height: 40px;
  width: 40px;
  cursor: pointer;
  display: inline-block;
  color: #fff;
  margin-left: 10px;
  background: #6C757D;
  font-size: 1.25rem;
  line-height: 40px;
  text-align: center;
  border-radius: 4px;
  transition: 0.2s ease;

}
header-section .buttons i:hover {
  background: #5f666d;
}
.wrapper_a1 .preview-img {
  display: flex;
  justify-content: center;
  margin-top: 25px;

}
.preview-img .img {
  max-height: 65vh;
}
.preview-img img {
  width: 100%;
  height: 100%;
  object-fit: contain;
}

/* Responsive media query code */
@media screen and (max-width: 688px) {
  .lightbox .wrapper_a1{
    padding: 12px;
    max-width: calc(350px - 80px);
    
  }
  .wrapper_c1 .preview-img {
    margin-top: 15px;

  }
  .gallery .images {
    max-width: 100%;
    padding: 0 13px;
    margin-top: 20px;
  }

}

</style>


<div class="top-gallery">
  <div class="sm">
  <h1>Photo Gallery</h1>
      <div class="lightbox">
        <div class="wrapper_a1" >
          <header-section>
            <div class="details">
              <i class="uil uil-camera"></i>
              <span>Image Preview</span>
            </div>
            <div class="buttons"><i class="close-icon uil uil-times"></i></div>
          </header-section>
          <div class="preview-img">
            <div class="img"><img src="" alt="preview-img"></div>
          </div>
        </div>
      </div>
      <section class="gallery">
        <ul class="images">
          <li class="img"><img src="images/muss-1.jpg" alt="img"></li>
          <li class="img"><img src="images/ph-2.jpg" alt="img"></li>
          <li class="img"><img src="images/photo-4.jpg" alt="img"></li>
          <li class="img"><img src="images/ph-3.jpg" alt="img"></li>
          
          <li class="img"><img src="images/photo-5.jpg" alt="img"></li>
          <li class="img"><img src="images/ph-2.jpg" alt="img"></li>
          <li class="img"><img src="images/photo-4.jpg" alt="img"></li>
          <li class="img"><img src="images/mid.jpg" alt="img"></li>
          <li class="img"><img src="images/img2.jpg" alt="img"></li>
          <li class="img"><img src="images/mid-a.webp" alt="img"></li>

          <li class="img"><img src="images/photo-6.jfif" alt="img"></li>
          <li class="img"><img src="images/photo-7.jfif" alt="img"></li>
          <li class="img"><img src="images/photo-8.jfif" alt="img"></li>
          <li class="img"><img src="images/photo-9.jfif" alt="img"></li>
          <li class="img"><img src="images/photo-10.jpeg" alt="img"></li>
          <li class="img"><img src="images/photo-11.jfif" alt="img"></li>
          <li class="img"><img src="images/photo-12.jfif" alt="img"></li>
          <li class="img"><img src="images/photo-13.jpeg" alt="img"></li>
          <li class="img"><img src="images/photo-14.jpeg" alt="img"></li>
          <li class="img"><img src="images/photo-15.jpeg" alt="img"></li>
          <li class="img"><img src="images/photo-16.jpeg" alt="img"></li>
          <li class="img"><img src="images/photo-17.jpeg" alt="img"></li>
          <li class="img"><img src="images/photo-18.jpeg" alt="img"></li>
          <li class="img"><img src="images/photo-20.jpeg" alt="img"></li>
          <li class="img"><img src="images/photo-21.jpeg" alt="img"></li>
          <li class="img"><img src="images/photo22.jpeg" alt="img"></li>
          <li class="img"><img src="images/photo25.jpeg" alt="img"></li>
          <li class="img"><img src="images/WhatsApp Image 2023-05-12 at 7.52.24 PM (1).jpeg" alt="img"></li>
          <li class="img"><img src="images/WhatsApp Image 2023-05-12 at 7.52.24 PM.jpeg" alt="img"></li>
        </ul>
      </section>
  </div>    
</div>







<?php include "footer.php"; ?>      






</body>
</html>