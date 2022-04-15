<?php
require 'adatb.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: bejelentkezes.php");
?>