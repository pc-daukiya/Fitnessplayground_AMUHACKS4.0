<?php

$pid=$_GET['pid'];
echo "recivedpid=$pid";
include "../shared1/connection.php";

mysqli_query($conn,"delete from product where pid=$pid");

header("location:view.php");
?>