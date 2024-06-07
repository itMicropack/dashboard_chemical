<?php

// Connecting to MySQL DB
require("connect.php");

// Return JSON data
$dataset1 = array();

$sql_1 = " SELECT `cu_amt`
		
		   FROM `ds_mglass_etch`
	
		   ORDER BY `autoId` DESC LIMIT 1";
	
$result_1 = mysqli_query($conn,$sql_1);
		
// JSON Data 
while ($row = mysqli_fetch_array($result_1)) {
	$dataset1['data1'][]= array(
		$row['cu_amt']
	);
}

// Free Results
mysqli_free_result($result_1);

// Close MySQL DB Connection
mysqli_close($conn);

// JSON Data
echo json_encode($dataset1);

?>
