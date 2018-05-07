<?php
// Destroy the session.
session_destroy();

// Redirect to login page
header("location: http://localhost/Yoken%20Online/main.php");
exit;
?>
