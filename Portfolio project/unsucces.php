
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
        header("Location: unsucces.php");
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hugo Winkel portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/78abc389d1.js" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./js/AOS.js"></script>

</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container flex-lg-column">
        <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
            <span class="h3 fw-bold d-block d-lg-none">Hugo Winkel</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">

                <img src="./images/hugo.png" class="foto-nav d-lg-block rounded-circle" alt="Hugo">
            
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#certificates">Certificates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
<!-- //NAVBAR -->
<!-- //login -->
<section id="login" class="full-height px-lg-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                <div class="alert alert-primary alert-dismissible fade show" role="alert">                
                        Email or Password wrong. 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <div id="login-form">
                    <h2 class="form-heading">Log in</h2>
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="login-email">Enter Email</label>
                                <input type="email" id="login-email" name="login-email" placeholder="example123@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label for="login-password">Enter Password</label>
                                <input type="password" id="login-password" name="login-password" placeholder="Example123" required>
                            </div>
                            <div class="form-group">
                                <button type="submit">Log in</button>
                            </div>
                        </form>

        <!-- Notification element -->
        <div id="notification" style="display:none;" class="alert alert-success" role="alert">
            <!-- Notification will be displayed here -->
        </div>

    </section>
    <!-- //LOGIN -->
</body>