<?php
include "authguard.php";
include "menu.html";
?>



<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body> 

    <div class="d-flex justify-content-center align-items-center vh-100 ">
    <form action="upload.php" method="post" class="w-50 bg-warning p-4" enctype="multipart/form-data">
        <h4 class="text-center"> UPLOAD PRODUCT</h4>
<input class="form-control m-2" type="text" name="pname" placeholder="Product name">
<input class="form-control m-2" type="number" name="pprice" placeholder="Product price">
<textarea class="form-control m-2" name="pdetails" cols="30" rows="4" placeholder="product description" ></textarea>

<input name="pdtimg" class="form-control m-2" type="file" accept=".png,.jpg" >
<div class="text-center mt-4">
<button class="btn btn-danger"> upload product</button>
</div>
    </form>
    </div>
</body>
</html>
