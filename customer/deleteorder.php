<?php

$cartid=$_GET['cartid'];
echo "recivedpid=$cartid";
include "../shared1/connection.php";

mysqli_query($conn,"delete from placeorder where cartid=$cartid");

header("location:trackorder.php");
?>