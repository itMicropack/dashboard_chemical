<?php
// Database Details
$DBServer = '192.168.1.66'; // e.g 'localhost' or '192.168.1.100'
$DBUser   = 'admin_server';  // Username admin_server or root
$DBPass   = 'Engg@5Admin'; // Password Engg@5Admin
$DBName   = 'chemical_lab'; // Database Name

$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
 
// check connection
if (mysqli_connect_errno()) {
  trigger_error('Database connection failed: ' . mysqli_connect_error(), E_USER_ERROR);
}

// $DBServer = '192.168.1.66'; // e.g 'localhost' or '192.168.1.100'
// $DBUser   = 'admin_server';  // Username admin_server
// $DBPass   = 'Engg@5Admin'; // Password Engg@5Admin

// $DBServer = 'localhost'; // e.g 'localhost' or '192.168.1.100'
// $DBUser   = 'root';  // Username admin_server or root
// $DBPass   = ''; // Password Engg@5Admin
?>