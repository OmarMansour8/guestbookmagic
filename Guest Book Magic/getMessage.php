<?php
$HostName = "sql204.infinityfree.com";
$DatabaseName = "if0_36253202_SalmaOmar";
$HostUser = "if0_36253202";
$HostPass = "Az1234com";
$db = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
if (!$db) {
echo "Database connection faild";
}

$query = $db->query("SELECT * FROM MESSAGE");
$result = array();
while ($rowData = $query->fetch_assoc()) {
$result[] = $rowData;
}
echo json_encode($result);