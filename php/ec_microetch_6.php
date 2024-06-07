<?php

// Connecting to MySQL DB
require("connect.php");

// Return JSON data
$data = array();

$date1 = $_GET["Month"];

if ($date1 == ""){
	$date1 = date("m");
}

$date2 = $_GET["Year"];

if ($date2 == ""){
	$date2 = date("Y");
}

$sql_1 = " SELECT DATE(`date_auto`) AS dt, `remarks`
		
		   FROM `ec_microetch`
	
		   WHERE  MONTH(`date_auto`) = '".$date1."' AND `remarks` != 'N/A' AND YEAR(`date_auto`) = '".$date2."' 
	
		   ORDER BY `date_auto` DESC";
	
$result_1 = mysqli_query($conn,$sql_1);
	
// JSON Data 
while ($row = mysqli_fetch_array($result_1)) {
	$data[] = array(
		"date"=>$row['dt'], "info"=>$row['remarks']
	);
}

// Free Results
mysqli_free_result($result_1);

// Close MySQL DB Connection
mysqli_close($conn);

// JSON Data
echo json_encode($data);

?>
