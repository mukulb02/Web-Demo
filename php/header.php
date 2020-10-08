<?php 
if(!isset($_SESSION))
{
	session_start();

}
?>

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HIMACHAL</title>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/nav.css">
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]-->
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
<div class="container"style="width: 95%;">

  <div class="row" style="background-image:url(../images/2.png);background-size:cover;">
   
	<div class="col-md-3>"<a href="index.php"><img src="../images/logo.png" alt="Insert Logo Here" name="Insert_logo" width="320px" height="140" id="Insert_logo" style=" display:block;"> </a></div>
  <?php
  if(isset($_SESSION['user']))
  {
	  echo "Welcome ". $_SESSION[ 'user'];
  }?>
  <div class="col-md-6"></div>
    <!-- end .header -->
	<div class="col-md-3" style="align:right;"><form action="searchaction.php" method="POST" style="margin-top: -26px;float:right;margin-right:-302px;border-radius:55px; ">
	<input type="text" placeholder="Search" name="search" style="border-radius: 9px;">
	<input type="Submit" value="Search" style="border-radius: 9px;"></form></div>
	
	</div>
	</div>