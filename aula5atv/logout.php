<?php
session_start();
session_destroy();
$_SESSION = [];
setcookie("email", "", (time() - 3600));
header('Location: index.php');