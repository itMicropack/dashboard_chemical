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

$sql_1 = " SELECT DATE(`dateAuto`) AS dt, `remarks`
		
		   FROM `ds_neutralizer_3316`
	
		   WHERE  MONTH(`dateAuto`) = '".$date1."' AND `remarks` != 'N/A' AND YEAR(`dateAuto`) = '".$date2."'
	
		   ORDER BY `dateAuto` DESC";
	
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