 
 <?php
$con=mysqli_connect("localhost","root","","menu_tbl");
$query="select * from menu_items_tbl";
$c=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($c)) 
            {
				
				?>
				
				<li><a href="<?php echo $row['items_path'];?>"><?php echo $row['items'];?></a></li>
				
            <?php
			}	
						
            ?>
			
	</ul>