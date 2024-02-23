<!DOCTYPE html>
<html>
<body>
<?php
$id=$_POST['mobile'];
$conn = mysqli_connect("localhost", "root","","login_register");
$sql = "SELECT * FROM details where mobilenumber=".$id."";
$retval=mysqli_query($conn, $sql);
$fname=$_POST['fname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
if(mysqli_num_rows($retval) > 0){
while($row = mysqli_fetch_assoc($retval)){
    if($id==$row['mobilenumber']){
    if($row['fullname']!=$fname){
        $row['fullname']=$fname;
        echo "Name Updated Successfully";
    }
    if($row['email']!=$email){
        $row['email']=$email;
        echo "Email Updated Successfully";
    }
    if($row['password']!=$pwd){
        $row['password']=$pwd;
        echo "Password Updated Successfully";
    }
}
}
}
else{
    echo "No records found";
}
?>
</body>
</html>