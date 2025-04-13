<?php
include "authgaurd.php";
include "../shared1/connection.php";
include "menu.html";
?>




<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .pdt{
                
                 display: inline-block;
                 background-color:#86b7fe;
                 margin: 10px;
                 padding: 10px;
                 width: 300px;
                 height: fit-content;
                 }
                 .pdt-img{
                    width: 100%;
                    height: 80%;
                 }
        </style>
    </head>
    <body>
    <div>
    if you want to track order <br>
    <a href="trackorder.php"><button>click</button></a>
</div>
    <div>
    redirect to home page... <br>
    <a href="home.php"><button>click</button></a>
</div>
</body>
</html>