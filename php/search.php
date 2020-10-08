<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/index.css">


<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]-->
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body class="container">
<div class="container">
  <div class="header"><a href="#"><img src="../images/logo.png" alt="Insert Logo Here" name="Insert_logo" width="290" height="140" id="Insert_logo" style="background-color: #8090AB; display:block;"> 
    <!-- end .header -->
	<form action="searchaction.php" method="POST" style="margin-top: -26px;float: right;margin-right: 69px;/*! border-radius: 55px; */">
	<input type="text" placeholder="Search" name="search" style="border-radius: 9px;">
	<input type="Submit" value="Search" style="border-radius: 9px;"></form></a></div>
  <div class="sidebar1">
    <ul class="nav">
<br/>
<br/><!-- end .sidebar1 -->
    </ul>
  </div>
  <div class="content">
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a class="MenuBarItemSubmenu" href="#">Himachal</a>
        <ul>
          <li><a href="#">Item 1.1</a></li>
          <li><a href="#">Item 1.2</a></li>
          <li><a href="#">Item 1.3</a></li>
        </ul>
      </li>
      <li><a href="login.php">Login</a></li>
      <li><a class="MenuBarItemSubmenu" href="#">Booking</a>
        <ul>
          <li><a class="MenuBarItemSubmenu" href="#">Item 3.1</a>
            <ul>
              <li><a href="#">Item 3.1.1</a></li>
              <li><a href="#">Item 3.1.2</a></li>
            </ul>
          </li>
          <li><a href="#">Item 3.2</a></li>
          <li><a href="#">Item 3.3</a></li>
        </ul>
      </li>
      <li><a href="#">Gallary</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact us</a></li>
    </ul>
    <h1>&nbsp;</h1>
    <p>&nbsp;</p>
    <div class=frame></div>    
    <h4><strong>Search Results :-&gt;</strong></h4>
    <p>&nbsp;</p>
    <pre>&nbsp;</pre>
    <p>&nbsp;</p>
  <!-- end .content --></div>
  <div class="footer">
    <p>This .footer </p>
  <!-- end .footer --></div>
  <!-- end .container --></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>