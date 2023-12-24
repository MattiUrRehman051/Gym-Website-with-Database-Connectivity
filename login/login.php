
<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "user";

$conn = new mysqli($host, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] === "POST")
 {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM signup WHERE email = '$email' OR password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // header("Location: index.html");
    //    echo "<p>You are successfully login</p>";
    echo "ok";
    }
     else {
        echo "<h1>Your credentials are wrong.</h1>";
    }
}

$conn->close();

?>
