<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];



//change mysqli_connect(host_name,username, password); 
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'demo');

if($connection){
    //echo "Connection successful";
    $sql="insert into `user_feedback`(name,email,message)values('$name','$email','$message')";
    $result=mysqli_query($connection,$sql);
    if($result){
        echo "Message sent";
    }
    else{
        die(mysqli_error($connection));
    }
    
}else{
    die(mysqli_error($connection));
}
}
?>