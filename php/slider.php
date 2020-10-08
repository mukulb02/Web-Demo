<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/slider.css">
<link rel="stylesheet" href="../css/w3.css">
</head>
<body>
<div class="w3-content w3-display-container">
  <img class="mySlides" src="../images/03.png" style="width:100%">
  <img class="mySlides" src="../images/3.jpg" style="width:100%">
  <img class="mySlides" src="../images/04.jpg" style="width:100%">
  
  <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>