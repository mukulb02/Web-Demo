<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/login_reg.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript">
</script>
</head>

<body>

<?php include('header.php')?>
  <div class="content">
  
    <ul id="MenuBar1" class="MenuBarHorizontal" style="margin-top: -10px;">
      <li><a class="MenuBarItem" href="index.php">Home</a>
       
      </li>
      
      <li><a href="#">Contact us</a>
      
          </li>
    
      <li><a href="#">About</a></li>
    </ul>
<div class="form"> 
 <table border="2px" cellspacing="1" cellpadding="7" width="100px" style="border-radius: 16px;background-color: lightgrey;margin-left: 471px;margin-top: 71px;">
<tr>
<td><h4>Register To view Full content -></h4></td></tr>
<form action="regaction.php" method="POST">
<tr>
<td>
<input type="text" Placeholder="Username" name="user"  required style="height: 41px;width: 298px;" ></td></tr>
<tr>
<td><input type="password" placeholder="Password" name="pwd" required style="height: 41px;width: 298px;" ></td></tr>
<tr><td><input type="password" placeholder="Confirm-Password" name="cpwd" required style="height: 41px;width: 298px;" ></td></tr>
<tr><td><input type="Email" placeholder="Email" name="email" required style="height: 41px;width: 298px;" ></td></tr>
<tr>
<td><input type="Text" placeholder="Adhar OR Licence NO." name="proof" required style="height: 41px;width: 298px;" ></td></tr>
<tr><td><input type="submit" value="Register" name="button"  style="background-color: green;width: 124px;height: 34px;">

<a href="forgot.php">Forgot password ?</a></td></tr>
</table>
	</form>
</table>
	
	</div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
	
    
	
  <!-- end .content --></div></div>
  
<!-- end .container --></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<?php
include('footer.php')?>
</body>
</html>