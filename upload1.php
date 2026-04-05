<?php
$HostName = "sql204.infinityfree.com";
$DatabaseName = "if0_36253202_SalmaOmar";
$HostUser = "if0_36253202";
$HostPass = "Az1234com";
$db = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
if (!$db) {
echo "Database connection faild";
}
$img = $_POST['img'];


$insert = "INSERT INTO MESSAGE (message)
VALUES ('$img');";
$query = mysqli_query($db,$insert);
if ($query) {
echo json_encode("Img Succefully Added");
}
else{
    echo json_encode("Something Went Wrong in IMAGE");
}


?>