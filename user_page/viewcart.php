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
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        footer {
            background-color: #fcfcfc;
            display: flex;
            justify-content: flex-end;
            position: fixed;
            bottom: 10px;
            right: 5px;
        }
        .footerContainer {
            display: flex;
            width: 100%;
            height: 30px;
            justify-content: flex-end;
            align-items: center;
        }

        .footerNav {
            margin: 30px 0;
        }
    </style>
</head>
</html>

<?php
include "authgaurd.php";
include "../shared/connection.php";
include "menu.html";

$sql_result = mysqli_query($conn, "select * from cart join product on cart.pid=product.pid  where userid=$_SESSION[userid]");

while ($dbrow = mysqli_fetch_assoc($sql_result)) {
    echo "<div class='pdt'> 
        <div><b>Name-</b>$dbrow[name]</div>
        <div><b>Price-</b>$dbrow[price]</div>
        <img class = 'pdt-img' src = '$dbrow[impath]'>
        <div>&nbsp $dbrow[details]</div>
        <div>
            <div class='text-center'>
                <a href='delete.php?cartid=$dbrow[cartid]'>
                <button class='btn btn-warning'>delete</button></a>
            </div>
        </div>
    </div>
    <footer>
        <div class='footerContainer'>

            <div class='footerNav'>
                <a href='addorder.php?cartid=$dbrow[cartid]'>
                    <button class='btn btn-warning'>Place order</button>
                </a>
            </div>

        </div>

    </footer>";
}
?>