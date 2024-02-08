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

<!-- LOGOUT -->
<section id="logout" class="full-height px-lg-5" data-aos="fade-up">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div id="logout-form">
                    <h2 class="form-heading">Log out</h2>
                    <!-- Logout-formulier -->
                    <form action="logout.php" method="post">
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <button type="submit">Log out</button>
                        </div>
                    </form>
                    <!-- Einde Logout-formulier -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Einde LOGOUT -->
</body>

<?php
session_start();

// Vernietig alle sessiegegevens
session_destroy();

// Stuur de gebruiker terug naar index.php
header("Location: index.php #login");
exit();
?>
