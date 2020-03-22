<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-quarter img{margin-bottom: -6px; cursor: pointer}
.w3-quarter img:hover{opacity: 0.6; transition: 0.3s}
</style>
<body class="w3-light-grey">

<!-- Links (sit on top) -->
<div class="w3-top">
 <div class=" w3-theme-d2 w3-left-align">
  <a ><img src="image\17.jpg" style="width: 200px; height: 100px;"></a>

 <!-- <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Logo</a>-->
  <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Acceuil</a>
  <a href="Produit.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Produits</a>
  <a href="Contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>

  </div>
<!--  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>-->
 </div>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content" style="max-width:1600px;margin-top:83px">
  
  <!-- Photo grid -->
  <div class="w3-container" id="work">
    <div class=" w3-padding-64" id="Produits">
  <h3 class="w3-center">Collection Femme </h3>
  <p class="w3-center w3-large">Trouver vos chaussures parfaites</p>
</div>
<!--
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="image\6.jpg" style="width:310px;height:310px;" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
    </div>
    <div class="w3-col l3 m6">
      <img src="image\7.jpg" style="width:310px;height:310px;" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
    </div>
    <div class="w3-col l3 m6">
      <img src="image\8.jpg" style="width:310px;height:310px;" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
    </div>
    <div class="w3-col l3 m6">
      <img src="image\9.jpg" style="width:310px;height:310px;" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="image\10.jpg" style="width:310px;height:310px;" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
    </div>
    <div class="w3-col l3 m6">
      <img src="image\11.jpg" style="width:310px;height:310px;" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
    </div>
    <div class="w3-col l3 m6">
      <img src="image\12.jpg" style="width:310px;height:310px;" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
    </div>
    <div class="w3-col l3 m6">
      <img src="image\13.jpg" style="width:310px;height:310px;" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
    </div>
  </div>
</div>-->

<!-- Overlay effect when opening sidebar on small screens -->


  

  <div class="w3-container w3-text-grey" id="jeans">
    
  </div>

  <!-- Product grid -->
  <div class="w3-row">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="image\6.jpg" style="width:310px;height:310px">
        <p>Model_A<br><b>$24.99</b></p>
      </div>
      <div class="w3-container">
        <img src="image\7.jpg" style="width:310px;height:310px">
        <p>Model_AA<br><b>$19.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="image\8.jpg" style="width:310px;height:310px">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Model_AB<br><b>$19.99</b></p>
      </div>
      <div class="w3-container">
        <img src="image\9.jpg" style="width:310px;height:310px">
        <p>Model_B<br><b>$20.50</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="image\10.jpg" style="width:310px;height:310px">
        <p>Model_BB<br><b>$20.50</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="image\11.jpg" style="width:310px;height:310px">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Model_BC<br><b>$14.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="image\12.jpg" style="width:310px;height:310px">
        <p>Model_C<br><b>$14.99</b></p>
      </div>

      <div class="w3-container">
        <img src="image\13.jpg" style="width:310px;height:310px">
        <p>Model_C<br><b>$24.99</b></p>
      </div>
    </div>
  </div>
 
  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  

<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
<!--
  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>/

 End page content -->
</div>

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>


</body>
</html>
