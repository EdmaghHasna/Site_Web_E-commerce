
<!DOCTYPE html>
<html>
<title>Contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>



<!-- Menu-->
<div class="w3-top">
 <div class=" w3-theme-d2 w3-left-align">
  <a ><img src="image\17.jpg" style="width: 200px; height: 100px;"></a>
  


 <!-- <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Logo</a>-->
  <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Acceuil</a>
  <a href="#Produits" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Produits</a>
  <a href="login_signup.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Log In</a>
  <a href="Contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
  <a href="Commande.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><i class="fa fa-shopping-cart w3-margin-right"></i> </a>

  </div>
<!--  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>-->
 </div>


  <!-- Contact -->
  
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">Contactez Nous</h3>
  <p class="w3-center w3-large"></p>
  <form class="w3-container" action="/action_page.php" target="_blank">
    <div class="w3-section">
      <label>Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" required>
    </div>
    <div class="w3-section">
      <label>Email</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email" required>
    </div>
    <div class="w3-section">
      <label>Subject</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Subject" required>
    </div>
    <div class="w3-section">
      <label>Message</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" required>
    </div>
    <button type="submit" class="w3-button w3-block w3-black">Send</button>
  </form>

</div>








</body>
</html>
