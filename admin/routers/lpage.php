<?php
$con = mysqli_connect("localhost", "root", "", "food");
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $user = $row['username'];
        $pass = $row['password'];
        if($user = $_POST['username'] && $pass = $_POST['password']){
            header('location:../../index.html');
        }else{
            echo 'Unsuccessful';
        } 
    }
}
?>