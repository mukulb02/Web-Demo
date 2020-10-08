<?php
include('header.php')?>
 <body background="../images/56.jpg">
 <div class="container" style="width: 95%;">
 <div class="row">
 

<div class="col-md-3" style="background-color:#8090AB; color:white;height: 538px;">
<br/>
<br/>
<div class="nav">
<b style="font-color:black;font-family:Segoe Print;font-size:20px;"><center>Tourist Places</center></b>
 
	 
	 <?php include('places_list.php')?>
	 
    <p>&nbsp;</p></div>
	</div>
  <!-- end .sidebar1 -->
	<div class="col-md-9"style="background-color:lightgrey">
	
   <?php include('home_menu.php')?>
   
   
    <h1>&nbsp;</h1>
    <p>&nbsp;</p>
	<br>
    
    <iframe src="slider.php" scrolling="no" style="width: 97%;height: 296px;margin-top: -63px;">
    </iframe>
    <center><h4><strong>Himachal Pradesh</strong></h4></center>
    <p style="text-align:justify;"> is home to several hill stations.Situated on the River Beas,Manali is one of the most 
	visited hill stations in Himachal Pradesh.
	Shimla in Himachal Pradesh boasts of old world charm and  monuments. 
	Chamba and Dharamshala in the upper reaches of the state of Himachal Pradesh are 
     extremely popular with those seeking peace and quiet. 
	For adventure lovers,Himachal Pradesh offers  great trekking and hiking trails in 
	Khajjiar,Chail and Kufri.Naldera in Himachal Pradesh has the  distinction of having 
	one of the highest golf courses in the country. 
	Holiday in Himachal Pradesh for a  truly memorable vacation.</p>
    <p>&nbsp;</p>
  <!-- end .content --></div>
  </div>
  </div>
  
  <!-- end .container --></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<?php
include('footer.php')?>
</body>
</html>