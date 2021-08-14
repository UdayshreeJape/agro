<?php
 
 $insert = false;
if (isset($_POST['user_id'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "agro";

    $con = mysqli_connect($server, $username, $password, $db);

    if (!$con) {
        die("connection not sucesss" . mysqli_connect_error());
    }
    // echo "sucessful connection";

    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    
    
    
 $sql = "SELECT * FROM `admin_login` WHERE user_id = '$user_id' AND password = '$password' ";
 $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_array($result);
 if($user_id == "" && $password == ""){
     header('location:admin.html');
 }
 if($row['user_id'] == $user_id && $row['password'] == $password){
     echo "login success";
 }
 else {
     echo "wrong data";
 }
}
?>