<?php
define("DB_HOST", "localhost");
define("DB_USER", "admin");
define("DB_PASS", "admin");
define("DB_NAME", "php_demo");

// create connection using mysqli
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if ($conn->connect_error) {
  die("Connection Failed " . $conn->connect_error); // terminates everything
}
