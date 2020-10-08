
 <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a class="MenuBarItemSubmenu" href="#">Himachal</a>
        <ul>
          <li><a href="history.php">History</a></li>
          <li><a href="himalayas.php">Himalayas</a></li>
          
        </ul>
      </li>
      <li>
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
	  </li>
      <li><a class="MenuBarItemSubmenu" href="#">Booking</a>
        <ul>
          <li><a class="MenuBarItemSubmenu" href="#">Travel</a>
            <ul>
              <li><a href="Bus.php">Bus</a></li>
              <li><a href="air.php">Air</a></li>
            </ul>
          </li>
          <li><a href="#">Hotels</a></li>
          
        </ul>
      </li>
	  
      <li><?php include('menulist.php')?>
    </ul>
