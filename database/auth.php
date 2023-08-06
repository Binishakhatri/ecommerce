<?php
require_once'connection.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['uname'];
    $password = ($_POST['psw']);

    $sql = "SELECT id FROM login WHERE
     username = '$username'AND password ='$password'"; 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    if($count == 1){
        $_SESSION["username"]= $username;
        header("location:../product.php");

    }
    
}
?>