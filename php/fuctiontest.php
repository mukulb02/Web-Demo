<?php 
if (isset($_POST['submit']))
{
function valid($a)
{
$con=mysqli_connect("localhost","root","","drop_form");
$query="insert into drop_tbl(places) values ('$a')";
$c=mysqli_query($con,$query);
if($c>0)
{
	echo "successful";
}
else
{
	echo "error";
}
}
$b=$_POST['fname'];
valid($b);
}
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="fname" />
<input type="submit" name="submit" value="insert">
</form>