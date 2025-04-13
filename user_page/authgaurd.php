<?php
session_start();

if(!isset($_SESSION["login_status"])){
    echo "illegal login";
    die;
}
if($_SESSION["login_status"]==false){
    echo "unauthorised access";
    die;
}
if($_SESSION['usertype']!="customer"){
    echo "forbiden access";
    die;
}

?>