<?php
session_start();

// * session_destroy() - destroy session
session_destroy();

header('Location: /php_demo/_starter_files/13_sessions.php');
