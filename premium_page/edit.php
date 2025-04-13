
<?php
include "../shared/connection.php";
include "authguard.php";
include "menu.html";
$pid=$_GET['pid'];
$pn=$_GET['pn'];
$pp=$_GET['pp'];
$pd=$_GET['pd'];

?>





<html >
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
</head>
<body> 

    <div class="d-flex justify-content-center align-items-center vh-100 ">
    <form action="doneedit.php" method="post" class="w-50 bg-warning p-4" >
        <h4 class="text-center"> EDIT PRODUCT DETAILS</h4>
        <input type="hidden" name="pid" value="<?php echo $pid; ?>">
        <b>Name:</b><input class="form-control m-2" type="text" name="pname" require value="<?php echo $pn; ?>" >  
        <b>Price:</b>  <input class="form-control m-2" type="number" name="pprice" require value="<?php echo $pp; ?>" >
        <b>Details:</b><textarea class="form-control m-2" name="pdetails" cols="30" require rows="4" ><?php echo $pd; ?></textarea>
        <input class="m-2" type="submit" name="submit" id="button" value="save changes">

    </form>
    </div>
</body>    
</html>

