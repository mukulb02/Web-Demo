<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body style="margin-left: 0px;margin-top: -16px;">

<div class="w3-content w3-section" style="max-width:500px">
  

  <img class="mySlides w3-animate-fading" src="../images/56.jpg" style="width:900px; height:296px; margin-left:0;">
  <img class="mySlides w3-animate-fading" src="../images/himalayas.jpg" style="width:900px; height:296px; margin-left:0;">
  <img class="mySlides w3-animate-fading" src="../images/v.png" style="width:900px; height:296px; margin-left:-0;">
  
</div>

<script>
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
    setTimeout(carousel, 9000);    
}
</script>

</body>
</html>