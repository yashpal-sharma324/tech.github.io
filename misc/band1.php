<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<body>
        
<!-- Navigation -->
<nav class="w3-bar w3-black">
  <a href="#home" class="w3-button w3-bar-item">Home</a>
  <a href="#band" class="w3-button w3-bar-item">Band</a>
  <a href="#tour" class="w3-button w3-bar-item">Tour</a>
  <a href="#contact" class="w3-button w3-bar-item">Contact</a>
</nav>

<!-- Slide Show -->
<section>

	
  <img class="mySlides" src="007.jpg"  style="width:100%">
  
   <img class="mySlides" src="11.jpg" style="width:100%" >
 
  <img class="mySlides" src="12.jpg"  style="width:100%">

</section>
<style>
P{ text-indent:150px;
}
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<div class ="row">
  <div class ="column">
   <p>YASH PAL SHARMA</p>
    <img src="009.jpg" alt="Random Name" style="width:95%">
	 <p>SOFTWARE ENGINEER </p>
  </div>
    <div class ="column">
	 <p>SUKHCHIN SINGH</p>
	 <img src="009.jpg" alt="Random Name" style="width:95%">
	  <p>THE GREAT SCIENTIST </p>
    </div>
	<div class ="column">
	 <p>MANDEEP BATRA</p>
    <img src="009.jpg" alt="Random Name" style="width:95%">
	 <p>THE BEST ADMINISTRATOR </p>
    </div>
	</div>
	
























<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>

</body>
</html>