<?php
include('header.php')?>
<div class="content">
   <?php include('home_menu.php')?>
   <br>
   <br>
   <?php
$con=mysqli_connect("localhost","root","","reg_db");
$query="select * from pic_tbl";
$c=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($c)) 
            {
				?>
				
				
				
			
				<img src="../admin/uploads/<?php echo $row['photo'];?>" alt="displpay picture " height="300" width="300">
               
            <?php
			}			
            ?>
			
	</ul>