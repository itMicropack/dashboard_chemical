<?php

// Connecting to MySQL DB
require("connect.php");

// Switch Case 

// Data Information - POST Data
$action = (!empty($_POST['action'])) ? $_POST['action'] : ''; // action to be used(insert, delete, update, fetch)
$data_info = (!empty($_POST['data_info'])) ? $_POST['data_info'] : 'NULL'; // an array of the details

// Array Retrieval, otherqwise setting default data Month, Year
if (!empty($data_info)) {
	$date1 = $data_info['Month'];
	$date2 = $data_info['Year'];
}

// For Default Loading: Month & Year (Current) 
if (empty($date1)) {
	$date1 = date("m");
}
if (empty($date2)) {
	$date2 = date("Y");
}

// Return JSON data - Array
$dataset1 = array();

switch($action) {
	
	case 'graph_1':
		
	$sql_1 = " SELECT DATE(`dateAuto`) AS dt, `area_daily_m2`, `area_cumulative_m2`
			
			   FROM `eg_goldbath`
		
			   WHERE MONTH(`dateAuto`) = '".$date1."' AND YEAR(`dateAuto`) = '".$date2."'

			   GROUP BY DAY(`dateAuto`) ";
		
	$result_1 = mysqli_query($conn,$sql_1);

	// JSON Data 
	while ($row = mysqli_fetch_array($result_1)) {
		$dataset1['x'][]= $row['dt'];
		$dataset1['data1'][]= $row['area_daily_m2'];
		$dataset1['data2'][]= $row['area_cumulative_m2'];
	}

	// Free Results
	mysqli_free_result($result_1);

	// Close MySQL DB Connection
	mysqli_close($conn);

	// JSON Data
	echo json_encode($dataset1);
	
	break;
		
	case 'graph_2':
		
	$sql_1 = " SELECT DATE(`dateAuto`) AS dt, `area_daily_mto`, `area_cumulative_mto`, `gpc_add`
			
			   FROM `eg_goldbath`
		
			   WHERE MONTH(`dateAuto`) = '".$date1."' AND YEAR(`dateAuto`) = '".$date2."'

			   GROUP BY DAY(`dateAuto`) ";
		
	$result_1 = mysqli_query($conn,$sql_1);
			
	// JSON Data 
	while ($row = mysqli_fetch_array($result_1)) {
		$dataset1['x'][]= $row['dt'];
		$dataset1['data1'][]= $row['area_daily_mto'];
		$dataset1['data2'][]= $row['area_cumulative_mto'];
		$dataset1['data3'][]= $row['gpc_add'];
	}


	// Free Results
	mysqli_free_result($result_1);

	// Close MySQL DB Connection
	mysqli_close($conn);

	// JSON Data
	echo json_encode($dataset1);
	
	break;
		
	case 'graph_3':
		
	$sql_1 = " SELECT DATE(`dateAuto`) AS dt, `temperature`
			
			   FROM `eg_goldbath`
		
			   WHERE MONTH(`dateAuto`) = '".$date1."' AND `temperature` IS NOT NULL AND YEAR(`dateAuto`) = '".$date2."'

			   GROUP BY DAY(`dateAuto`) ";
		
	$result_1 = mysqli_query($conn,$sql_1);
			
	// JSON Data 
	while ($row = mysqli_fetch_array($result_1)) {
		$dataset1['x'][]= $row['dt'];
		$dataset1['data1'][]= $row['temperature'];
	}


	// Free Results
	mysqli_free_result($result_1);

	// Close MySQL DB Connection
	mysqli_close($conn);

	// JSON Data
	echo json_encode($dataset1);
	
	break;
		
	case 'graph_4':
		
	$sql_1 = " SELECT DATE(`dateAuto`) AS dt, `ph_val`
			
			   FROM `eg_goldbath`
		
			   WHERE MONTH(`dateAuto`) = '".$date1."' AND `ph_val` IS NOT NULL AND YEAR(`dateAuto`) = '".$date2."'

			   GROUP BY DAY(`dateAuto`) ";
		
	$result_1 = mysqli_query($conn,$sql_1);
			
	// JSON Data 
	while ($row = mysqli_fetch_array($result_1)) {
		$dataset1['x'][]= $row['dt'];
		$dataset1['data1'][]= $row['ph_val'];
	}


	// Free Results
	mysqli_free_result($result_1);

	// Close MySQL DB Connection
	mysqli_close($conn);

	// JSON Data
	echo json_encode($dataset1);
	
	break;

	default: exit();

} 

?>