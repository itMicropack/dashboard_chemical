<?php

// Connecting to MySQL DB
require("connect.php");

// Current Day Date
//$date1 = date("Y-m-d");

//$date1 = "2015-07-09";

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_1 = " SELECT `area_cumulative`, `temperature`, `analysis_val1`, `analysis_val2`, `dateAuto`, `basic_cleaner_add`
		   
			   FROM `chemical_lab`.`basic_cleaner` 
		   
		       ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_1 = mysqli_query($conn,$sql_1);
	// Number of rows
	$rowcount = mysqli_num_rows($result_1);
	// Days interval
	// $n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_1)) {
	
	$bc_1 = floatval($row['area_cumulative']);
	$bc_5 = floatval($row['temperature']);
	$bc_2 = floatval($row['analysis_val1']);
	$bc_4 = floatval($row['analysis_val2']);
	$bc_3 = floatval($row['basic_cleaner_add']);
	$bc_6 = date($row['dateAuto']);
	
}

// JSON Data Array 
$data_1 = array("bc_1"=> $bc_1, "bc_2"=> $bc_2, "bc_3"=> $bc_3, "bc_4"=> $bc_4, "bc_5"=> $bc_5, "bc_6"=> $bc_6, "bc_7"=> $bc_6);

if($bc_2 == 0){

	$sql = "SELECT `analysis_val1`, `basic_cleaner_add`, `analysis_val2`, `dateAuto`  
			
			FROM `chemical_lab`.`basic_cleaner` 
		
			WHERE `analysis_val1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bc_2 = floatval($row['analysis_val1']);
	$bc_7 = date('Y-m-d', strtotime($row['dateAuto']));
	//$bc_5 = floatval($row['basic_cleaner_add']);
	//$bc_2 = floatval($row['analysis_val2']);

}	

// JSON Data Array 
$data_1 = array("bc_1"=> $bc_1, "bc_2"=> $bc_2, "bc_3"=> $bc_3, "bc_4"=> $bc_4, "bc_5"=> $bc_5, "bc_6"=> $bc_6, "bc_7"=> $bc_7);

}	

// Free Results
mysqli_free_result($result_1);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	
	$sql_2 = " SELECT `cumulative_area`, `cu_amt`, `sa_amt`, `etch_rate1`, `etch_rate2`, `date_auto`
		   
			   FROM `chemical_lab`.`micro_etch` 
		   
		       ORDER BY `auto_id` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_2 = mysqli_query($conn,$sql_2);
	// Number of rows
	$rowcount = mysqli_num_rows($result_2);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_2)) {
	
	$me_1 = floatval($row['cumulative_area']);
	$me_2 = floatval($row['cu_amt']);
	$me_3 = floatval($row['sa_amt']);
	$me_4 = floatval($row['etch_rate1']);
	$me_5 = floatval($row['etch_rate2']);
	$me_6 = $row['date_auto'];
	
}

// JSON Data Array 
$data_2 = array("me_1"=> $me_1, "me_2"=> $me_2, "me_3"=> $me_3, "me_4"=> $me_4, "me_5"=> $me_5, "me_6"=> $me_6);

// Free Results
mysqli_free_result($result_2);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_3 = " SELECT `area_cumulative`, `date`
		   
			   FROM `chemical_lab`.`predip` 
		   
		       ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_3 = mysqli_query($conn,$sql_3);
	// Number of rows
	$rowcount = mysqli_num_rows($result_3);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_3)) {
	
	$pd_1 = floatval($row['area_cumulative']);
	$pd_2 = $row['date'];
	
}

// JSON Data Array 
$data_3 = array("pd_1"=> $pd_1, "pd_2"=> $pd_2);

// Free Results
mysqli_free_result($result_3);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	
	$sql_4 = " SELECT `area_cumulative`, `pa_analysis1`, `pa_add`, `pb_analysis1`, `pb_add`, `weight_gain1`, `pa_analysis2`, `pb_analysis2`, `weight_gain2`, `temperature`, `dateAuto`
		   
			   FROM `chemical_lab`.`black_oxide` 
		   
		       ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_4 = mysqli_query($conn,$sql_4);
	// Number of rows
	$rowcount = mysqli_num_rows($result_4);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_4)) {
	
	$bo_1 = floatval($row['area_cumulative']);
	$bo_2 = floatval($row['pa_analysis1']);
	$bo_3 = floatval($row['pa_add']);
	$bo_4 = floatval($row['pb_analysis1']);
	$bo_5 = floatval($row['pb_add']);
	$bo_6 = floatval($row['weight_gain1']);
	$bo_7 = floatval($row['pa_analysis2']);
	$bo_8 = floatval($row['pb_analysis2']);
	$bo_9 = floatval($row['weight_gain2']);
	$bo_10 = floatval($row['temperature']);
	$bo_11 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_4 = array("bo_1"=> $bo_1, "bo_2"=> $bo_2, "bo_3"=> $bo_3, "bo_4"=> $bo_4, "bo_5"=> $bo_5, "bo_6"=> $bo_6, "bo_7"=> $bo_7, "bo_8"=> $bo_8, "bo_9"=> $bo_9, "bo_10"=> $bo_10, "bo_11"=> $bo_11);

// Free Results
mysqli_free_result($result_4);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	
	$sql_5 = " SELECT `area_cumulative`, `date`
		   
			   FROM `chemical_lab`.`reducer_predip` 
		   
			   ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_5 = mysqli_query($conn,$sql_5);
	// Number of rows
	$rowcount = mysqli_num_rows($result_5);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_5)) {
	
	$rp_1 = floatval($row['area_cumulative']);
	$rp_2 = $row['date'];
	
}

// JSON Data Array 
$data_5 = array("rp_1"=> $rp_1, "rp_2"=> $rp_2);

// Free Results
mysqli_free_result($result_5);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	
	$sql_6 = " SELECT `area_cumulative`, `mbsr_ana1`, `mbsr_add`, `ph_val1`, `naoh_add`, `acid_resist`, `peel_strength`, `mbsr_ana2`, `ph_val2`, `dateAuto`
		   
			   FROM `chemical_lab`.`reducer_sr` 
		   
			   ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// WHERE DATE(`dateAuto`) = DATE(DATE_SUB('".$date1."', INTERVAL '".$n1."' DAY))
	// MySQL Query Exection
	$result_6 = mysqli_query($conn,$sql_6);
	// Number of rows
	$rowcount = mysqli_num_rows($result_6);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_6)) {
	
	$rs_1 = floatval($row['area_cumulative']);
	$rs_2 = floatval($row['mbsr_ana1']);
	$rs_3 = floatval($row['mbsr_add']);
	$rs_4 = floatval($row['ph_val1']);
	$rs_5 = floatval($row['naoh_add']);
	$rs_6 = floatval($row['acid_resist']);
	$rs_7 = floatval($row['peel_strength']);
	$rs_8 = floatval($row['mbsr_ana2']);
	$rs_9 = floatval($row['ph_val2']);
	$rs_10 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_6 = array("rs_1"=> $rs_1, "rs_2"=> $rs_2, "rs_3"=> $rs_3, "rs_4"=> $rs_4, "rs_5"=> $rs_5, "rs_6"=> $rs_6, "rs_7"=> $rs_7, "rs_8"=> $rs_8, "rs_9"=> $rs_9, "rs_10"=> $rs_10);

// Free Results
mysqli_free_result($result_6);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Close MySQL DB Connection
mysqli_close($conn);

// Array Creation
$data = array($data_1, $data_2, $data_3, $data_4, $data_5, $data_6);

// JSON Data
echo json_encode($data)

?>
