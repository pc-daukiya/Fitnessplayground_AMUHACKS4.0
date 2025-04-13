<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
       .pdt{
                
                display: inline-block;
                background-color:#83b4ff;
                margin: 10px;
                padding: 10px;
                width: 300px;
                border-radius: 2rem;
                height: fit-content;
                vertical-align: top;
                }
        .pdt-img {
            width: 100%;
            height: 80%;
        }
    </style>
</head>
</html>

<?php
include "authgaurd.php";
include "../shared1/connection.php";
include "menu.html";

$sql_result = mysqli_query($conn, "select * from placeorder join product on placeorder.pid=product.pid ");

while ($dbrow = mysqli_fetch_assoc($sql_result)) {
    echo "<div class='pdt'> 
    <h4>Your order will be delivered soon... </h4>
        <div><b>Name-</b>$dbrow[name]</div>
        <div><b>Price-</b>$dbrow[price]<i>Rs</i></div>
        <img class = 'pdt-img' src = '$dbrow[impath]'>
        <div>&nbsp&nbsp $dbrow[details]</div> 
        <div>
            <div class='text-center'>
                <a href='deleteorder.php?cartid=$dbrow[cartid]'>
                <button class='btn btn-warning'>Cancel order</button></a>
            </div>
        </div>
    </div>";
}
?>