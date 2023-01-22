<?php
$con = mysqli_connect("localhost", "root", "", "food");
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $insert = "INSERT INTO customer (username,name,password,phone,mail,address)VALUES('$username','$name','$password','$phone','$mail','$address')";
    $store = mysqli_query($con, $insert);
    if($store){
        header('location:../../index.php');
    }else{
        echo 'Unsuccessful';
    }
}
?>