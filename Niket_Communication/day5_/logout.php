<?php
// Start the session to access and destroy it
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to index.html
header("Location: index.html");
exit();
?>