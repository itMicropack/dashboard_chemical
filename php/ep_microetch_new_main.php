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
	
	$sql_1 = " SELECT DATE(`date_auto`) AS dt, `daily_area`, `cumulative_area`
		
		   FROM `ept_microetch_new`
	
		   WHERE MONTH(`date_auto`) = '".$date1."' AND YEAR(`date_auto`) = '".$date2."'

		   GROUP BY DATE(`date_auto`) ";
		
	$result_1 = mysqli_query($conn,$sql_1);
			
	// JSON Data 
	while ($row = mysqli_fetch_array($result_1)) {
		
		$dataset1['x'][] = $row['dt'];
		$dataset1['data1'][] = $row['daily_area'];
		$dataset1['data2'][] = $row['cumulative_area'];
		
	}


	// Free Results
	mysqli_free_result($result_1);

	// Close MySQL DB Connection
	mysqli_close($conn);

	// JSON Data
	echo json_encode($dataset1);
	
	break;
		
	case 'graph_2':
	
	$sql_1 = " SELECT DATE(`date_auto`) AS dt, `cu_amt`
			
			   FROM `ept_microetch_new`
		
			   WHERE MONTH(`date_auto`) = '".$date1."' AND YEAR(`date_auto`) = '".$date2."'

			   GROUP BY DAY(`date_auto`) ";
		
	$result_1 = mysqli_query($conn,$sql_1);
			
	// JSON Data 
	while ($row = mysqli_fetch_array($result_1)) {
		
		$dataset1['x'][] = $row['dt'];
		$dataset1['data1'][] = $row['cu_amt'];
		
	}


	// Free Results
	mysqli_free_result($result_1);

	// Close MySQL DB Connection
	mysqli_close($conn);

	// JSON Data
	echo json_encode($dataset1);
	
	break;
		
	case 'graph_3':
	
	$sql_1 = " SELECT DATE(`date_auto`) AS dt, `sa_amt1`, `sa_add`
			
			   FROM `ept_microetch_new`
		
			   WHERE MONTH(`date_auto`) = '".$date1."' AND `sa_amt1` IS NOT NULL AND YEAR(`date_auto`) = '".$date2."' 

			   GROUP BY DAY(`date_auto`) ";
		
	// , `sa_amt2`
		
	$result_1 = mysqli_query($conn,$sql_1);
			
	// JSON Data 
	while ($row = mysqli_fetch_array($result_1)) {
		
		$dataset1['x'][] = $row['dt'];
		$dataset1['data1'][] = $row['sa_amt1'];
		$dataset1['data2'][] = $row['sa_add'];
		
		//$dataset1['data3'][]= array(
		//	$row['sa_amt2']
		//);
	}


	// Free Results
	mysqli_free_result($result_1);

	// Close MySQL DB Connection
	mysqli_close($conn);

	// JSON Data
	echo json_encode($dataset1);
	
	break;
		
	case 'graph_4':
	
	$sql_1 = " SELECT DATE(`date_auto`) AS dt, `etch_rate1`, `salt_3330`, `etch_rate2`
			
			   FROM `ept_microetch_new`
		
			   WHERE MONTH(`date_auto`) = '".$date1."' AND YEAR(`date_auto`) = '".$date2."'

			   GROUP BY DAY(`date_auto`) ";
		
	$result_1 = mysqli_query($conn,$sql_1);
			
	// JSON Data 
	while ($row = mysqli_fetch_array($result_1)) {
		
		$dataset1['x'][] = $row['dt'];
		$dataset1['data1'][] = $row['etch_rate1'];
		$dataset1['data2'][] = $row['salt_3330'];
		$dataset1['data3'][] = $row['etch_rate2'];
		
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