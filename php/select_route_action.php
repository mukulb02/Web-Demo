<?php
$a=$_POST['source'];
	$b=$_POST['date'];
	$c=$_POST['dest'];
	$d=$_POST['bustype'];
if($a==$c)
{
$conn=mysqli_connect("localhost","root","","bus_data");
$query="insert into route_details(source,destination,date,type) values('$a','$c','$b','$d')";
$l=mysqli_query($conn,$query);
}
else{
	header('Location:bus.php ?source and destination cant be same');
}
if($l>0)
{
	header('Location:buslist.php ?success');
}
else
{
	header('Location:bus.php ?failed');
}