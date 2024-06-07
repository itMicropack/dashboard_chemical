<?php

// Connecting to MySQL DB
require("connect.php");

// Return JSON data
$dataset1 = array();

$date1 = $_GET["Month"];

if ($date1 == ""){
	$date1 = date("m");
}

$date2 = $_GET["Year"];

if ($date2 == ""){
	$date2 = date("Y");
}

//$date1 = date("m");

$sql_1 = " SELECT DATE(`date`) AS dt, `area_daily`, `area_cumulative`
		
		   FROM `eg_predip`
	
		   WHERE MONTH(`date`) = '".$date1."' AND YEAR(`date`) = '".$date2."'

		   GROUP BY DAY(`date`)";
	
$result_1 = mysqli_query($conn,$sql_1);
		
// JSON Data 
while ($row = mysqli_fetch_array($result_1)) {
	$dataset1['x'][]= $row['dt'];
	$dataset1['data1'][]= $row['area_daily'];
	$dataset1['data2'][]= $row['area_cumulative'];
}


// Free Results
mysqli_free_result($result_1);

// Close MySQL DB Connection
mysqli_close($conn);

// JSON Data
echo json_encode($dataset1)

?>
