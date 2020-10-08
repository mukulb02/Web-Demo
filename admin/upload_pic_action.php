<?php
$con=mysqli_connect("localhost","root","","reg_db");
$a=$_FILES['photo']['name'];
$path="uploads/". "$a";
move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/". $a);
$query="INSERT INTO pic_tbl(photo) values('$a')";
$c=mysqli_query($con,$query);
if($c>0)
	echo "successful";
else
	echo "error";
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
<input type="file" name="photo">
<input type="submit" value="Upload Image">
</form>

