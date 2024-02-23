<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'login_register';
$conn = mysqli_connect($host, $user, $pass,$dbname);
if(!$conn){
die('Could not connect: '.mysqli_connect_error());
}
$id=$_POST['mobile'];
$sql = "SELECT * FROM details where mobilenumber='".$id."'";
$retval=mysqli_query($conn, $sql);
if(mysqli_num_rows($retval) > 0){
while($row = mysqli_fetch_assoc($retval)){
echo "Candidate Name :{$row['candidate_name']} <br> ".
"Mobile Number : {$row['mobilenumber']} <br> ".
"Email: {$row['email']} <br> ".
"10th percentage: {$row['10th_percentage']} <br> ".
"12th percentage: {$row['12th_percentage']} <br> ".
"Address: {$row['address']} <br> ".
"Date Of Birth: {$row['DOB']} <br> ".

" <br>";
} //end of while
}
else{
echo "0 results";
}
mysqli_close($conn);
?>