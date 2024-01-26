<?php
session_start();

// Vernietig alle sessiegegevens
session_destroy();

// Stuur de gebruiker terug naar index.php
header("Location: index.php");
exit();
?>
