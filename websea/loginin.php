<?php
session_start();
include "config.php";
if(isset($_POST['email'])) {
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $email=validate($_POST['email']);
    $pass=validate($_POST['password']);
}

if(empty($email)){
    header("Location:login.php?error=E-mail is required");
    exit();
}
if(empty($pass)){
    header("Location:login.php?error=Password is required");
    exit();
}
$sql="SELECT * FROM user WHERE email='$email' AND password='$pass'";
$result=mysqli_query($mysqli,$sql);
if(mysqli_num_rows($result)===1){
    $row=mysqli_fetch_assoc($result);
    if($row['email']===$email && $row['password']===$pass){
        echo "Logged In!";
        $_SESSION['email']=$row['email'];
        $_SESSION['User_id']=$row['User_id'];
        header("Location:index.php?");
        exit();
    }
    else{
        
        header("Location: login.php?error=Incorrect User Name or Password");
        exit();
    }
}
else{
    header("Location:login.php?error=make sure your data is correct");
    exit();
}