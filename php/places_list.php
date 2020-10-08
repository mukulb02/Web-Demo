 <?php
$con=mysqli_connect("localhost","root","","nav_tbl");
$query="select * from items";
$c=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($c)) 
            {
				?>
				
				<li><a href="<?php  echo $row['list_path'];?>"  style="font-family:Segoe Print;border:solid 1px black;color:black;font-size:12px;padding:8px;letter-spacing:2px;text-transform:uppercase;
				font-weight:600;text-align:center;"><?php  echo $row['list'];?></a></li>
               
            <?php
			}			
            ?>
			
	</ul>