 <?php
$pid=$_GET['cartid'];

include "authgaurd.php";
include "../shared1/connection.php";

mysqli_query($conn,"insert into placeorder(userid,cartid,pid) select userid,cartid,pid from cart");
mysqli_query($conn,"delete from cart ");

header("location:orderplaced.php");
?> 