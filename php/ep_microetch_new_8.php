<?php

// Connecting to MySQL DB
require("connect.php");

// Date
$date1 = date("m");
$date2 = date("Y");

// Return JSON data
$dataset1 = array();

// Query
$sql_1 = " SELECT `cumulative_area`
		   FROM `ept_microetch_new` 
		   WHERE MONTH(`date_Auto`) = '".$date1."' AND YEAR(`date_Auto`) = '".$date2."'
		   GROUP BY DAY(`date_Auto`)";  

$result_1 = mysqli_query($conn,$sql_1);

// JSON Data 
while ($row = mysqli_fetch_array($result_1)) {
	$dataset1[] = floatval($row['cumulative_area']);
}

// Free Results
mysqli_free_result($result_1);

// Close MySQL DB Connection
mysqli_close($conn);

//$dataset1 = [587.22,614.55,650.81,672.79,700.16,734.48,761.33,804.88,842.31,875.51,909.19,953.26,994.97,1031.79,1031.79];
$data1 = $dataset1;

// JSON Data
echo json_encode($data1);

?>
