<?php

session_start();
$_SESSION["login_status"] = false;

$conn=new mysqli("localhost","root","","shopping",3306);
$query="select * from user where username='$_POST[username]' and password='$_POST[password]'";

echo $query;
$sql_result=mysqli_query($conn,$query);

echo"<br>";
print_r($sql_result);
echo"<br>";

if($sql_result->num_rows>0){
    echo "login success";
    $dbrow=mysqli_fetch_assoc($sql_result);
    
    $_SESSION["login_status"] = true;
    $_SESSION["usertype"]=$dbrow['usertype'];
    $_SESSION['userid']=$dbrow['userid'];
    $_SESSION['username']=$dbrow['username'];

    

    echo "<br>";
    print_r($dbrow);

    if($dbrow['usertype']=='vendor'){
        header("location:../vendor/addproduct.php");
    }
    else if($dbrow['usertype']=='customer'){
        header("location:../customer/home.php");
    }
    
}
else{
    echo "login failed";
}

?>