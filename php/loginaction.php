<?php 
if(!isset($_SESSION))
{
	session_start();

}
$con=mysqli_connect("localhost","root","","reg_db");
    $a=$_POST['user'];
	$b=$_POST['pwd'];
	 $query="select * from reg_tbl where uname='$a' and password='$b'";
	$c=mysqli_query($con,$query);
	if(mysqli_num_rows($c)>0)
	{
		$_SESSION['user']=$a;
		header("location:index.php?msg=login successfully");
	}
	else
	{
		header("location:login.php?msg=failed");
	
	}
?>


