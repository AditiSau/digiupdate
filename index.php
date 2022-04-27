<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- .........................................................................................--><!-- 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<meta charset="utf-8">

	<!-- Linking the stylesheet -->
	<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Linking the Jquery script -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<script>
		$(document).ready(function() {
			$(".fa-search").click(function() {
				$(".icon").toggleClass("active");
				$("input[type='text']").toggleClass("active");
			});
		});
	</script>

	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="onlyindex.css">
	
</head>
<body>

 <?php include('includes/headerr.php');?>

<!-- <h1 style="text-align:left;  color: black; font-family: arial;">Live</h1>
 --><div class="slideshow-container">

<div class="Slides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images\game2.jpeg" style="width:100%;">
  <div class="text">  </div>
</div>

<div class="Slides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images\img2.jpeg" style="width:100%;">
  <div class="text">Mayank Agarwal's century </div>
</div>

<div class="Slides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images\Bajrangdal.jpg" style="width:100%;">
  <div class="text">Bajrang Dal activist stabbed to death in Karnataka</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("Slides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>
<?php include('middle.php');?>
<!-- ..................................................................................................... -->
<!-- <div id="flip">Click to slide down panel</div>
<div id="panel">Hello world!</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideDown("slow");
  });
});
</script> -->

<?php include('includes/footerr.php');?>
</body>
</html>