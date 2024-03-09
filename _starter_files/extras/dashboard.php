<?php

// * session_start() - starts session to be able to access session variables

session_start();

if (isset($_SESSION['username'])) {
  echo '<h1> Hello ' . $_SESSION['username'] . '! </h1>';
  echo '<a href="logout.php">Logout</a>';
} else {
  echo '<h1> Welcome Guest </h1>';
  echo '<a href="http://localhost/php_demo/_starter_files/13_sessions.php"> Go back </a>';
}
