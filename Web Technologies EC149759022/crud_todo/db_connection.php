
<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'todo_db');

// Establish connection
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
