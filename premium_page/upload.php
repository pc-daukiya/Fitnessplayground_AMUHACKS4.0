<?php 

session_start();

// print_r($_POST);
// echo "<br>";
// print_r($_FILES);

$source=$_FILES['pdtimg']['tmp_name'];
$target="../shared/images/".$_FILES['pdtimg']['name'];

move_uploaded_file($source,$target);

include "../shared/connection.php" ;
 
mysqli_query($conn,"insert into product(
name, 
price,
details,
impath,
owner) 
values(
'$_POST[pname]',
$_POST[pprice], 
'$_POST[pdetails]',
'$target',
 $_SESSION[userid]
 )");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    upload successfull click to add more
    <a href="addproduct.html">
        <button>click</button>
    </a>
    </div>
    <div>
    upload successfull click to redirect to home page
    <a href="home1.php">
        <button>click</button>
    </a>
    </div>
</body>
</html>