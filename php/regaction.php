
<?php
$conn=mysqli_connect("localhost","root","","reg_db");
$a=$_POST['user'];
$b=$_POST['pwd'];
$j=$_POST['cpwd'];
$h=$_POST['email'];
$k=$_POST['proof'];
$p_hash =($b);
if($p_hash==$j)
{
$c="INSERT INTO reg_tbl(uname,password,cpassword,email,proof) values('$a','$p_hash','$j','$h','$k')";
$d=mysqli_query($conn,$c);

// This results in an error.
// The output above is before the header() call
header('Location:login.php ?success');
}
else
{
	echo "warning--> Password and Confirm Password doesn't match try again";
}
?>