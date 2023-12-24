<?php

$host="localhost";
$username="root";
$password="";
$database="user";

$conn = new mysqli($host, $username, $password, $database);

if($_SERVER["REQUEST_METHOD"]==="POST")
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    

    $sql = "INSERT INTO signup (name, email) VALUES ('$name', '$email')";
    if($conn->query($sql)===true)
    {
        echo "your account has been created successfully";
        echo '<a href="../login/login.html">LOGIN</a>';
    }
    else{
        echo " your cradentials are wrong";
    }

}
?>
