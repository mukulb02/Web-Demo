<div class="row">
				<div class="col-md-2">ID</div>
				<div class="col-md-2">Source</div>
				<div class="col-md-2">Destination</div>
				<div class="col-md-2">Type</div>
				<div class="col-md-2">Date</div>
</div>
<?php 
$conn=mysqli_connect("localhost","root","","bus_data");
$query="select * from route_details";
$c=mysqli_query($conn,$query);
				

				while ($row=mysqli_fetch_array($c)) 
            {
				?>
				
		<div class="row"><hr>
				<div class="col-md-2"> <?php  echo $row['id'];?> </div>
				<div class="col-md-2"><?php  echo $row['source'];?></div>
				<div class="col-md-2"><?php  echo $row['destination'];?></div>
				<div class="col-md-2"><?php  echo $row['type'];?></div>
				<div class="col-md-2"><?php  echo $row['date'];?></div>
		</div>
				
            <?php
			}			
            ?>
			
	</ul>
