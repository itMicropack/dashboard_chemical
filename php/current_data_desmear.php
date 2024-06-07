<?php

// Connecting to MySQL DB
require("connect.php");

// Current Day Date
//$date1 = date("Y-m-d");

//$date1 = "2015-07-09";

//$n1 = 0;

//$rowcount = 0;

//do {
	/*
	$sql_1 = " SELECT `area_cumulative`, `alkaline_norm1`, `bath_strength1`, `temperature`, `cuposit_2_add`, `add_211`, `alkaline_norm2`, `bath_strength2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ds_hole_conditioner_211` 
		   
		       ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";
	*/
	
	$sql_1 = " SELECT `area_cumulative`, `sample_val`, `chemical_per`, `temperature`, `addition`, `dateAuto`
		   
			   FROM `chemical_lab`.`ds_hole_conditioner_211` 
		   
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
	
	$bath1_1 = floatval($row['area_cumulative']);
	//$bath1_2 = floatval($row['alkaline_norm1']);
	//$bath1_3 = floatval($row['bath_strength1']);
	$bath1_4 = floatval($row['temperature']);
	//$bath1_5 = floatval($row['cuposit_2_add']);
	//$bath1_6 = floatval($row['add_211']);
	//$bath1_7 = floatval($row['alkaline_norm2']);
	//$bath1_8 = floatval($row['bath_strength2']);
	$bath1_9 = $row['dateAuto'];
	$bath1_11 = $row['sample_val'];
	$bath1_12 = $row['chemical_per'];
	$bath1_13 = $row['addition'];
	
}
/*
// JSON Data Array 
$data_1 = array("bath1_1"=> $bath1_1, "bath1_2"=> $bath1_2, "bath1_3"=> $bath1_3, "bath1_4"=> $bath1_4, "bath1_5"=> $bath1_5, "bath1_6"=> $bath1_6, "bath1_7"=> $bath1_7, "bath1_8"=> $bath1_8, "bath1_9"=> $bath1_9, "bath1_10"=> $bath1_9);
*/
$data_1 = array("bath1_1"=> $bath1_1, "bath1_4"=> $bath1_4, "bath1_9"=> $bath1_9, "bath1_11"=>$bath1_11, "bath1_12"=>$bath1_12, "bath1_13"=>$bath1_13);

/*
if($bath1_2 == 0){
	
	$sql = "SELECT `alkaline_norm1`, `bath_strength1`, `dateAuto`  
			
			FROM `chemical_lab`.`ds_hole_conditioner_211` 
		
			WHERE `alkaline_norm1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath1_2 = floatval($row['alkaline_norm1']);
	$bath1_3 = floatval($row['bath_strength1']);
	$bath1_10 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_1 = array("bath1_1"=> $bath1_1, "bath1_2"=> $bath1_2, "bath1_3"=> $bath1_3, "bath1_4"=> $bath1_4, "bath1_5"=> $bath1_5, "bath1_6"=> $bath1_6, "bath1_7"=> $bath1_7, "bath1_8"=> $bath1_8, "bath1_9"=> $bath1_9, "bath1_10"=> $bath1_10);

}
*/
// Free Results
mysqli_free_result($result_1);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_2 = " SELECT `area_cumulative`, `alkaline_norm1`, `na_per_mang`, `na_mang`, `total_mang`, `temperature`, `b213_add`, `a213_add`, `alkaline_norm2`, `etch_rate`, `dateAuto`
		   
			   FROM `chemical_lab`.`ds_promoter_bath` 
		   
		       ORDER BY `autoId` DESC
			   
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
	
	$bath2_1 = floatval($row['area_cumulative']);
	$bath2_2 = floatval($row['alkaline_norm1']);
	$bath2_3 = floatval($row['na_per_mang']);
	$bath2_4 = floatval($row['na_mang']);
	$bath2_5 = floatval($row['total_mang']);
	$bath2_6 = floatval($row['temperature']);
	$bath2_7 = floatval($row['b213_add']);
	$bath2_8 = floatval($row['a213_add']);
	$bath2_9 = floatval($row['etch_rate']);
	$bath2_10 = floatval($row['alkaline_norm2']);
	$bath2_11 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_2 = array("bath2_1"=> $bath2_1, "bath2_2"=> $bath2_2, "bath2_3"=> $bath2_3, "bath2_4"=> $bath2_4, "bath2_5"=> $bath2_5, "bath2_6"=> $bath2_6, "bath2_7"=> $bath2_7, "bath2_8"=> $bath2_8, "bath2_9"=> $bath2_9, "bath2_10"=> $bath2_10, "bath2_11"=> $bath2_11, "bath2_12"=> $bath2_11);


if($bath2_2 == 0){
	
	$sql = "SELECT `alkaline_norm1`, `dateAuto`  
			
			FROM `chemical_lab`.`ds_promoter_bath` 
		
			WHERE `alkaline_norm1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath2_2 = floatval($row['alkaline_norm1']);
	$bath2_12 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_2 = array("bath2_1"=> $bath2_1, "bath2_2"=> $bath2_2, "bath2_3"=> $bath2_3, "bath2_4"=> $bath2_4, "bath2_5"=> $bath2_5, "bath2_6"=> $bath2_6, "bath2_7"=> $bath2_7, "bath2_8"=> $bath2_8, "bath2_9"=> $bath2_9, "bath2_10"=> $bath2_10, "bath2_11"=> $bath2_11, "bath2_12"=> $bath2_12);

}

// Free Results
mysqli_free_result($result_2);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_3 = " SELECT `area_cumulative`, `cu_amt`, `alkaline_norm1`, `bath_strength_amt1`, `add_3314`, `add_h2o2`, `alkaline_norm2`, `bath_strength_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ds_neutralizer_3314` 
		   
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
	
	$bath3_1 = floatval($row['area_cumulative']);
	$bath3_2 = floatval($row['cu_amt']);
	$bath3_3 = floatval($row['alkaline_norm1']);
	$bath3_4 = floatval($row['bath_strength_amt1']);
	$bath3_5 = floatval($row['add_3314']);
	$bath3_6 = floatval($row['add_h2o2']);
	$bath3_7 = floatval($row['alkaline_norm2']);
	$bath3_8 = floatval($row['bath_strength_amt2']);
	$bath3_9 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_3 = array("bath3_1"=> $bath3_1, "bath3_2"=> $bath3_2, "bath3_3"=> $bath3_3, "bath3_4"=> $bath3_4, "bath3_5"=> $bath3_5, "bath3_6"=> $bath3_6, "bath3_7"=> $bath3_7, "bath3_8"=> $bath3_8, "bath3_9"=> $bath3_9, "bath3_10"=> $bath3_9);


if($bath3_2 == 0){
	
	$sql = "SELECT `cu_amt`, `alkaline_norm1`, `bath_strength_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ds_neutralizer_3314` 
		
			WHERE `cu_amt` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath3_2 = floatval($row['cu_amt']);
	$bath3_3 = floatval($row['alkaline_norm1']);
	$bath3_4 = floatval($row['bath_strength_amt1']);
	$bath3_10 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_3 = array("bath3_1"=> $bath3_1, "bath3_2"=> $bath3_2, "bath3_3"=> $bath3_3, "bath3_4"=> $bath3_4, "bath3_5"=> $bath3_5, "bath3_6"=> $bath3_6, "bath3_7"=> $bath3_7, "bath3_8"=> $bath3_8, "bath3_9"=> $bath3_9, "bath3_10"=> $bath3_10);

}

// Free Results
mysqli_free_result($result_3);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_4 = " SELECT `area_cumulative`, `temperature`, `cu_amt`, `mglass_etch_amt1`, `sa_amt1`, `mglass_etch_add`, `sa_add`, `mglass_etch_amt2`, `sa_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ds_mglass_etch` 
		   
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
	
	$bath4_1 = floatval($row['area_cumulative']);
	$bath4_2 = floatval($row['temperature']);
	$bath4_3 = floatval($row['cu_amt']);
	$bath4_4 = floatval($row['mglass_etch_amt1']);
	$bath4_5 = floatval($row['sa_amt1']);
	$bath4_6 = floatval($row['mglass_etch_add']);
	$bath4_7 = floatval($row['sa_add']);
	$bath4_8 = floatval($row['mglass_etch_amt2']);
	$bath4_9 = floatval($row['sa_amt2']);
	$bath4_10 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_4 = array("bath4_1"=> $bath4_1, "bath4_2"=> $bath4_2, "bath4_3"=> $bath4_3, "bath4_4"=> $bath4_4, "bath4_5"=> $bath4_5, "bath4_6"=> $bath4_6, "bath4_7"=> $bath4_7, "bath4_8"=> $bath4_8, "bath4_9"=> $bath4_9, "bath4_10"=> $bath4_10, "bath4_11"=> $bath4_10);


if($bath4_3 == 0){
	
	$sql = "SELECT `cu_amt`, `mglass_etch_amt1`, `sa_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ds_mglass_etch` 
		
			WHERE `cu_amt` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath4_3 = floatval($row['cu_amt']);
	$bath4_4 = floatval($row['mglass_etch_amt1']);
	$bath4_5 = floatval($row['sa_amt1']);
	$bath4_11 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_4 = array("bath4_1"=> $bath4_1, "bath4_2"=> $bath4_2, "bath4_3"=> $bath4_3, "bath4_4"=> $bath4_4, "bath4_5"=> $bath4_5, "bath4_6"=> $bath4_6, "bath4_7"=> $bath4_7, "bath4_8"=> $bath4_8, "bath4_9"=> $bath4_9, "bath4_10"=> $bath4_10, "bath4_11"=> $bath4_11);

}

// Free Results
mysqli_free_result($result_4);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_5 = " SELECT `area_cumulative`, `sa_amt1`, `sa_add`, `sa_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ds_10h2so4` 
		   
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
	
	$bath5_1 = floatval($row['area_cumulative']);
	$bath5_2 = floatval($row['sa_amt1']);
	$bath5_3 = floatval($row['sa_add']);
	$bath5_4 = floatval($row['sa_amt2']);
	$bath5_5 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_5 = array("bath5_1"=> $bath5_1, "bath5_2"=> $bath5_2, "bath5_3"=> $bath5_3, "bath5_4"=> $bath5_4, "bath5_5"=> $bath5_5, "bath5_6"=> $bath5_5);

if($bath5_2 == 0){
	
	$sql = "SELECT `sa_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ds_10h2so4` 
		
			WHERE `sa_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath5_2 = floatval($row['sa_amt1']);
	$bath5_6 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_5 = array("bath5_1"=> $bath5_1, "bath5_2"=> $bath5_2, "bath5_3"=> $bath5_3, "bath5_4"=> $bath5_4, "bath5_5"=> $bath5_5, "bath5_6"=> $bath5_6);

}

// Free Results
mysqli_free_result($result_5);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$sql_6 = " SELECT `area_cumulative`, `cu_amt`, `neu3316_val1`, `sul_acid_amt1`, `h2o2_amt1`, `add_3316`, `add_h2so4`, `add_h2o2`, `neu3316_val2`, `sul_acid_amt2`, `h2o2_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ds_neutralizer_3316` 
		   
		       ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_6 = mysqli_query($conn,$sql_6);
	// Number of rows
	$rowcount = mysqli_num_rows($result_6);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_6)) {
	
	$bath6_1 = floatval($row['area_cumulative']);
	$bath6_2 = floatval($row['cu_amt']);
	$bath6_3 = floatval($row['neu3316_val1']);
	$bath6_4 = floatval($row['sul_acid_amt1']);
	$bath6_5 = floatval($row['h2o2_amt1']);
	$bath6_6 = floatval($row['add_3316']);
	$bath6_7 = floatval($row['add_h2so4']);
	$bath6_8 = floatval($row['add_h2o2']);
	$bath6_9 = floatval($row['neu3316_val2']);
	$bath6_10 = floatval($row['sul_acid_amt2']);
	$bath6_11 = floatval($row['h2o2_amt2']);
	$bath6_12 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_6 = array("bath6_1"=> $bath6_1, "bath6_2"=> $bath6_2, "bath6_3"=> $bath6_3, "bath6_4"=> $bath6_4, "bath6_5"=> $bath6_5, "bath6_6"=> $bath6_6, "bath6_7"=> $bath6_7, "bath6_8"=> $bath6_8, "bath6_9"=> $bath6_9, "bath6_10"=> $bath6_10, "bath6_11"=> $bath6_11, "bath6_12"=> $bath6_12,  "bath6_13"=> $bath6_12);


if($bath6_2 == 0){
	
	$sql = "SELECT `cu_amt`, `neu3316_val1`, `sul_acid_amt1`, `h2o2_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ds_neutralizer_3316` 
		
			WHERE `cu_amt` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
	
	$bath6_2 = floatval($row['cu_amt']);
	$bath6_3 = floatval($row['neu3316_val1']);
	$bath6_4 = floatval($row['sul_acid_amt1']);
	$bath6_5 = floatval($row['h2o2_amt1']);
	$bath6_13 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_6 = array("bath6_1"=> $bath6_1, "bath6_2"=> $bath6_2, "bath6_3"=> $bath6_3, "bath6_4"=> $bath6_4, "bath6_5"=> $bath6_5, "bath6_6"=> $bath6_6, "bath6_7"=> $bath6_7, "bath6_8"=> $bath6_8, "bath6_9"=> $bath6_9, "bath6_10"=> $bath6_10, "bath6_11"=> $bath6_11, "bath6_12"=> $bath6_12, "bath6_13"=> $bath6_13);

}

// Free Results
mysqli_free_result($result_6);

// Close MySQL DB Connection
mysqli_close($conn);

// Array Creation
$data = array($data_1, $data_2, $data_3, $data_4, $data_5, $data_6);

// JSON Data
echo json_encode($data)

?>
