<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Now</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	 <link rel="stylesheet" href="css/style.css" />
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

<style>
.form-container_a1{
  width: 100%;
  max-width: 950px;
  margin: 0 auto;
  padding: 20px;
  margin-top: 5%;
  color: #fff;
  background-color: #C0392B;
  margin-bottom: 10%;

}

.form-container_a1 p{
/*  font-family: Poppins, sans-serif;*/
  font-size: 20px;
}

.form-container_a1 p a{
  color: yellow;
}
.input-row{
  margin-bottom: 10px;
  margin-top: 2%;
}
.input-row label{
  display: block;
  margin-bottom: 3px;
  font-family: Poppins, sans-serif;
}
.input-row input,
.input-row input textarea{
  width: 100%;
  padding: 10px;
  border: 0;
  border-radius: 3px;
  outline: 0;
  margin-bottom: 3px;
  font-size: 18px;
  font-family: arial;
}
.input-row textarea{
  height: 150px;
  width: 100%;
}

.input-row input[type="submit"]{
  width: 100%;
  display: block;
  margin: 0 auto;
  text-align: center;
  color: #fff;
  cursor: pointer;
  background: #002f3a;
  padding: 20px;
}



.input-row select{
  width: 100%;
  padding: 10px;
  border: 0;
  border-radius: 3px;
  outline: 0;
  margin-bottom: 3px;
  font-size: 18px;
  font-family: arial;
}

.success{
  background: #9fd2a1;
  padding: 5px 10px;
  text-align: center;
  color: #326b07;
  border-radius: 3px;
  font-synthesis: 14px;
  margin-top: 10px;
}
</style>
</head>
<body>


<?php
  if(!empty($_POST["send"])){
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userPhone = $_POST["userPhone"];
    $userCity = $_POST["userCity"];

    $userPerson = $_POST["userPerson"];


    $userIn = $_POST["userIn"];
    $userOut = $_POST["userOut"];
    
   
    $userMessage = $_POST["userMessage"];
    $toEmail = "ajaysajwan13@gmail.com";
    //mail creating to sra developer team
    //join our sra developer team 
    $mailHeaders = "Name: " . $userName .
    
    "\r\n Email: " . $userEmail .
    "\r\n Phone: " . $userPhone .
    "\r\n City: " . $userCity .

    "\r\n Person: " . $userPerson .
    "\r\n In: " . $userIn .
    "\r\n Out: " . $userOut .


    
  
    "\r\n Message: " . $userMessage . "\r\n";

    if(mail($toEmail, $userName, $mailHeaders)){
      $message = "Your Information is Received Successfully.";
    } 
  }
?>

<?php include "header.php"; ?>

<div class="form-container_a1">
<h1>BOOK NOW</h1>
  <form method="post" name="emailContact">
    <div class="input-row">
      <label>Name <em>*</em></label>
      <input type="text" placeholder="ex: Mariam Aziz" name="userName" required>
    </div>
    <div class="input-row">
      <label>Email <em>*</em></label>
      <input type="email"  placeholder="ex: mariam@example.com" name="userEmail" required>
    </div>
    <div class="input-row">
      <label>Phone <em>*</em></label>
      <input type="text" placeholder="ex: 123456789" name="userPhone" required>
    </div>
    <div class="input-row">
      <label>City <em>*</em></label>
      <input type="text" placeholder="ex: United States" name="userCity" required>
    </div>
    


    <div class="input-row">
      <label>Person<em>*</em></label>
      
      <select type="text" placeholder="Person" name="userPerson" required>
        <option>Select</option>
        
        <option value="Person">1</option>
        <option value="Person">2</option>
        <option value="Person">3</option>
        <option value="Person">4</option>
        <option value="Person">5</option>
        <option value="Person">Family</option>
      </select>
    </div>

    <div class="input-row">
      <label>camp check in<em>*</em></label>
      <input type="date" placeholder="camp check in" name="userIn" required>
    </div>

    <div class="input-row">
      <label>camp check out<em>*</em></label>
      <input type="date" placeholder="camp check in" name="userOut" required>
    </div>


    <div class="input-row">
      <label>Message or Any Specific Questions? <em>*</em></label>
      <textarea name="userMessage" required></textarea>
    </div>
    <div class="input-row">
      <input type="submit" name="send" value="Submit">
      <?php if(!empty($message)){ ?>
      <div class="success">
        <strong><?php echo $message; ?></strong>
      </div>
      <?php } ?>  
    </div>  
  </form>
</div>

<?php include "footer.php"; ?>
	
</body>
</html>