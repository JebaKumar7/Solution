<?php
$uname=$_POST['uname'];
$uemail=$_POST['uemail'];
$umessage=$_POST['umessage'];

//database connection
$con=mysqli_connect("localhost","root","","user_data");

//connect data to database
$sql="INSERT INTO user(name,email,message)values('$uname','$uemail','$umessage')";

$r=mysqli_query($con,$sql);

if($r)
{
    echo "User Details Added Successfully";
}
else{
    echo "User Details Not Added";
}
?>