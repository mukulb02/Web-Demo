
<?php
$b=$_POST['place'];
$f=$_POST['path'];
$con=mysqli_connect("localhost","root","","nav_tbl");
echo "$b"." $f";
$query="INSERT INTO items(list,list_path) VALUES('$b','$f')";
$c=mysqli_query($con,$query);
if($c>0)
{
	header("location:insert_nav.php?msg=Success");
}
else
{
	header("location:insert_nav.php?msg=failed");
}
?>