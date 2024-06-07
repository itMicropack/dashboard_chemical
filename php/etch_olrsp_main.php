<?php

// Connecting to MySQL DB
require("connect.php");

// Switch Case 

// Data Information - POST Data
$action = (!empty($_POST['action'])) ? $_POST['action'] : ''; //action to be used(insert, delete, update, fetch)
$data_info = (!empty($_POST['data_info'])) ? $_POST['data_info'] : 'NULL'; //an array of the student details

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

		$sql_1 = " SELECT DATE(`dateAuto`) AS dt, `area_daily`, `area_cumulative`
				
				   FROM `etch_outerlayerresiststrip`
			
				   WHERE MONTH(`dateAuto`) = '".$date1."' AND YEAR(`dateAuto`) = '".$date2."'

				   GROUP BY DATE(`dateAuto`) ";
			
		$result_1 = mysqli_query($conn,$sql_1);
				
		// JSON Data 
		while ($row = mysqli_fetch_array($result_1)) {
			
			$dataset1['x'][] =  $row['dt'];
			$dataset1['data1'][] =  $row['area_daily'];
			$dataset1['data2'][] =  $row['area_cumulative'];
			
		}

		// Free Results
		mysqli_free_result($result_1);

		// Close MySQL DB Connection
		mysqli_close($conn);

		// JSON Data
		echo json_encode($dataset1);
		
		break;
		
	case 'graph_2':
	
		$sql_1 = " SELECT DATE(`dateAuto`) AS dt, `temperature`
				
				   FROM `etch_outerlayerresiststrip`
			
				   WHERE MONTH(`dateAuto`) = '".$date1."' AND `temperature` IS NOT NULL AND YEAR(`dateAuto`) = '".$date2."'

				   GROUP BY DATE(`dateAuto`) ";
			
		$result_1 = mysqli_query($conn,$sql_1);
				
		// JSON Data 
		while ($row = mysqli_fetch_array($result_1)) {
			$dataset1['x'][]=  $row['dt'] ;
			$dataset1['data1'][]=  $row['temperature'] ;
		}

		// Free Results
		mysqli_free_result($result_1);

		// Close MySQL DB Connection
		mysqli_close($conn);

		// JSON Data
		echo json_encode($dataset1);

		break;
		
	case 'graph_temp_new':
	
		$sql_1 = " SELECT DATE(`dateAuto`) AS dt, `temperature_microstrip`
				
				   FROM `etch_outerlayerresiststrip`
			
				   WHERE MONTH(`dateAuto`) = '".$date1."' AND `temperature_microstrip` IS NOT NULL AND YEAR(`dateAuto`) = '".$date2."'

				   GROUP BY DATE(`dateAuto`) ";
			
		$result_1 = mysqli_query($conn,$sql_1);
				
		// JSON Data 
		while ($row = mysqli_fetch_array($result_1)) {
			$dataset1['x'][]=  $row['dt'] ;
			$dataset1['data1'][]=  $row['temperature_microstrip'] ;
		}

		// Free Results
		mysqli_free_result($result_1);

		// Close MySQL DB Connection
		mysqli_close($conn);

		// JSON Data
		echo json_encode($dataset1);

		break;
		
	case 'graph_3a':
	
		$sql_1 = " SELECT DATE(`dateAuto`) AS dt, `chambers_1`
				
				   FROM `etch_outerlayerresiststrip`
			
				   WHERE MONTH(`dateAuto`) = '".$date1."' AND `chambers_1` IS NOT NULL AND YEAR(`dateAuto`) = '".$date2."'

				   GROUP BY DATE(`dateAuto`) ";
			
		$result_1 = mysqli_query($conn,$sql_1);
				
		// JSON Data 
		while ($row = mysqli_fetch_array($result_1)) {
			$dataset1['x'][]=  $row['dt'] ;
			$dataset1['data1'][]=  $row['chambers_1'] ;
		}

		// Free Results
		mysqli_free_result($result_1);

		// Close MySQL DB Connection
		mysqli_close($conn);

		// JSON Data
		echo json_encode($dataset1);

		break;
		
	case 'graph_3b':
	
		$sql_1 = " SELECT DATE(`dateAuto`) AS dt, `chambers_1b`
				
				   FROM `etch_outerlayerresiststrip`
			
				   WHERE MONTH(`dateAuto`) = '".$date1."' AND `chambers_1b` IS NOT NULL AND YEAR(`dateAuto`) = '".$date2."'

				   GROUP BY DATE(`dateAuto`) ";
			
		$result_1 = mysqli_query($conn,$sql_1);
				
		// JSON Data 
		while ($row = mysqli_fetch_array($result_1)) {
			$dataset1['x'][]=  $row['dt'] ;
			$dataset1['data1'][]=  $row['chambers_1b'] ;
		}

		// Free Results
		mysqli_free_result($result_1);

		// Close MySQL DB Connection
		mysqli_close($conn);

		// JSON Data
		echo json_encode($dataset1);

		break;
		
	case 'graph_4a':
	
		$sql_1 = " SELECT DATE(`dateAuto`) AS dt, `chambers_11`
		
				   FROM `etch_outerlayerresiststrip`
			
				   WHERE MONTH(`dateAuto`) = '".$date1."' AND `chambers_11` IS NOT NULL AND YEAR(`dateAuto`) = '".$date2."'

				   GROUP BY DATE(`dateAuto`) ";
	
		$result_1 = mysqli_query($conn,$sql_1);
					
		// JSON Data 
		while ($row = mysqli_fetch_array($result_1)) {
			$dataset1['x'][]=  $row['dt'] ;
			$dataset1['data1'][]=  $row['chambers_11'] ;
		}

		// Free Results
		mysqli_free_result($result_1);

		// Close MySQL DB Connection
		mysqli_close($conn);

		// JSON Data
		echo json_encode($dataset1);
	
		break;
		
	case 'graph_4b':
		
		$sql_1 = " SELECT DATE(`dateAuto`) AS dt, `chambers_11b`
		
				   FROM `etch_outerlayerresiststrip`
			
				   WHERE MONTH(`dateAuto`) = '".$date1."' AND `chambers_11b` IS NOT NULL AND YEAR(`dateAuto`) = '".$date2."'

				   GROUP BY DATE(`dateAuto`) ";
	
		$result_1 = mysqli_query($conn,$sql_1);
					
		// JSON Data 
		while ($row = mysqli_fetch_array($result_1)) {
			$dataset1['x'][]=  $row['dt'] ;
			$dataset1['data1'][]=  $row['chambers_11b'] ;
		}

		// Free Results
		mysqli_free_result($result_1);

		// Close MySQL DB Connection
		mysqli_close($conn);

		// JSON Data
		echo json_encode($dataset1);
	
		break;
		
	case 'graph_5':
	
		$sql_1 = " SELECT DATE(`dateAuto`) AS dt, `resiststrip_add`
		
				   FROM `etch_outerlayerresiststrip`
			
				   WHERE MONTH(`dateAuto`) = '".$date1."' AND `resiststrip_add` IS NOT NULL AND YEAR(`dateAuto`) = '".$date2."'

				   GROUP BY DATE(`dateAuto`) ";
	
		$result_1 = mysqli_query($conn,$sql_1);
				
		// JSON Data 
		while ($row = mysqli_fetch_array($result_1)) {
			$dataset1['x'][]=  $row['dt'] ;
			$dataset1['data1'][]=  $row['resiststrip_add'] ;
		}

		// Free Results
		mysqli_free_result($result_1);

		// Close MySQL DB Connection
		mysqli_close($conn);

		// JSON Data
		echo json_encode($dataset1);
	
		break;
		
	case 'graph_6':
	
		$sql_1 = " SELECT DATE(`dateAuto`) AS dt, `ph_val`
				
				   FROM `etch_outerlayerresiststrip`
			
				   WHERE MONTH(`dateAuto`) = '".$date1."' AND `ph_val` IS NOT NULL AND YEAR(`dateAuto`) = '".$date2."'

				   GROUP BY DATE(`dateAuto`) ";
			
		$result_1 = mysqli_query($conn,$sql_1);
				
		// JSON Data 
		while ($row = mysqli_fetch_array($result_1)) {
			$dataset1['x'][]=  $row['dt'] ;
			$dataset1['data1'][]=  $row['ph_val'] ;
		}

		// Free Results
		mysqli_free_result($result_1);

		// Close MySQL DB Connection
		mysqli_close($conn);

		// JSON Data
		echo json_encode($dataset1);
		
		break;
		
	case 'graph_7':

		// Query
		$sql_1 = " SELECT `area_cumulative`
				   FROM `etch_outerlayerresiststrip`
				   WHERE MONTH(`dateAuto`) = '".$date1."' AND YEAR(`dateAuto`) = '".$date2."'
				   GROUP BY DAY(`dateAuto`) ";		   

		$result_1 = mysqli_query($conn,$sql_1);

		// JSON Data 
		while ($row = mysqli_fetch_array($result_1)) {
			$dataset1[] = floatval($row['area_cumulative']);
		}

		// Free Results
		mysqli_free_result($result_1);

		// Close MySQL DB Connection
		mysqli_close($conn);

		$data1 = $dataset1;

		// JSON Data
		echo json_encode($data1);
		
		break;
	
	default: exit();

} 

?>
