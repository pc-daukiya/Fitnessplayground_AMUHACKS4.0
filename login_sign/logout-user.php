<?php
session_start();
session_unset();
session_destroy();
header('location:../before_login/homepage.html');
?>