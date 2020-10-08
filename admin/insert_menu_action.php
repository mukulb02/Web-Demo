<?php
$b=$_POST['items'];
$p=$_POST['path'];
$con=mysqli_connect("localhost","root","","menu_tbl");
echo "$b"."path is "."$p";
$query="INSERT INTO menu_items_tbl(items,items_path) VALUES('$b','$p')";
$c=mysqli_query($con,$query);
if($c>0)
{
	header("location:insert_menu.php?msg=Success");
}
else
{
	header("location:insert_menu.php?msg=failed");
}
?>