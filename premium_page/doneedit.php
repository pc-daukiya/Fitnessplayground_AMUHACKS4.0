<?php
include "../shared/connection.php";
include "authguard.php";
if(isset($_POST['submit'])){
    $id=$_POST['pid'];
    $na=$_POST['pname'];
    $pr=$_POST['pprice'];
    $de=$_POST['pdetails'];
    $query="update product set name='$na',price='$pr',details='$de' where pid = $id";
    $data = mysqli_query($conn,$query);
    if($data){
        echo "<script>alert('request updated')</script>";
    }
    else{
        echo "failed";
    }
}
header("location:view.php");
?>