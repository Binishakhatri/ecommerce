<?php

require_once'connection.php';
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$phone=$_POST['phone'];
$short_bio=$_POST['short_bio'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];

if($password !== $confirm_password){
echo 'password and confirm password is not equal';
return;
}
$sql = "INSERT INTO `signup`
(`fullname`, `email`,`username`,`password`,`confirm_password`,`phone`,`short_bio`,`DOB`,`gender`)
 VALUES ('$fullname', '$email','$username','$password','$confirm_password','$phone','$short_bio','$dob','$gender')";
$result = mysqli_query($conn, $sql);

echo $result;
if($result){
    echo"data sucessfully insert";
    header("location:../login.php");

}
else{
    echo"something went wrong";
}


$conn->close();
?>

