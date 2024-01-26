<?php
session_start();

$host = "localhost";
$username = "hw_portfolio";
$password = "GOUDESTRAATLANTAARNPAAL123...";
$database = "hwportfolio";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["login-email"];
    $password = $_POST["login-password"];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Inloggen geslaagd
        $_SESSION["user_email"] = $email;
        header("Location: succes.php");
    } else {
        // Inloggen mislukt
        echo "Invalid email or password";
    }
}

mysqli_close($conn);
?>
