<?php

$a=$_POST['name'];
$b=$_POST['mobile'];
$c=$_POST['email'];
$d=$_POST['10per'];
$e=$_POST['12per'];
$f=$_POST['address'];
$g=$_POST['dob'];


$con=mysqli_connect("localhost","root","","login_register");
$sql="INSERT INTO details(candidate_name,mobilenumber,email,10th_percentage,12th_percentage,address,dob) values('$a','$b','$c','$d','$e','$f','$g')";
$r=mysqli_query($con,$sql);
if($r)
{
	header("Location:index.html");
	exit();
}
else
{
	echo "STUDENTS DETAIS NOT ADDED";
}


?>