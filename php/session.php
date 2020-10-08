<?php
	  if(isset($_SESSION['user']))
	  {
		  
	  echo '<a href="logout.php">Logout</a>';
	  }
	  else
	  {
		  echo '<a href="login.php">Login</a>';  
	  }
	  ?>