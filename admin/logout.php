<?php

session_start(); 
session_unset();
session_destroy();
$_SESSION = array();
?>
<script>window.location="index.php";</script>