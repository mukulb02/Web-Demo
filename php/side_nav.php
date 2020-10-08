
<html>
<head>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","","nav_tbl");
$query="select * from items";
$c=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($c)) 
            {
				?>
				
				<li><a href="#"><?php  echo $row['list'];?></a></li>
               
            <?php
			}			
            ?>
			
	</ul>
