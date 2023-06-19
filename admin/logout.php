<?php
session_start();
// unset($_SESSION["usname"]);
session_unset();
session_destroy();
header("location:index.php");
?>