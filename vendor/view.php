
<html >
    <head>
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
                 .pdt-img{
                    width: 100%;
                    height: 80%;
                 }
                 
        </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
    
    </body>
</html>


<?php  
    include "authguard.php";
    include "../shared1/connection.php" ;
include "menu.html";

    $sql_result=mysqli_query($conn,"select * from product where owner= $_SESSION[userid]");

    while($dbrow=mysqli_fetch_assoc($sql_result)){
    // print_r($dbrow);
    // echo"<br>";
    echo "<div class='pdt'> 
        <div>$dbrow[name]</div>
        <div>price-$dbrow[price]</div>
        <img class = 'pdt-img' src = '$dbrow[impath]'>
        <div>$dbrow[details]</div>
        <div>
            <div>
                <a href='edit.php?pid=$dbrow[pid]&pn=$dbrow[name]&pp=$dbrow[price]&pd=$dbrow[details]'>
                <button  class='btn btn-outline-dark'>edit</button></a>
                <a href='delete.php?pid=$dbrow[pid]'>
                <button class='btn btn-outline-dark'>delete</button></a>
            </div>
        </div>
    </div>
    ";


    }

?>

