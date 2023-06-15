<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

session_destroy();

foreach ($_SESSION as $k => $v) {
    unset($_SESSION[$k]);
}

header("Location: ./login.php");
exit();
?>
