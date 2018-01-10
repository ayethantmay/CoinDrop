<?php
session_start();
session_destroy();
//unset($_SESSION["log_in"]);
//unset($_SESSION["uname"]);
header("location: index.php");

?>