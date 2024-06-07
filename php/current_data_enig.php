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
	$sql_1 = " SELECT `area_cumulative`, `acidcleaner_add`, `temperature`, `dateAuto`
		   
			   FROM `chemical_lab`.`eg_acidcleaner` 
		   
		       ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_1 = mysqli_query($conn,$sql_1);
	// Number of rows
	$rowcount = mysqli_num_rows($result_1);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_1)) {
	
	$bath1_1 = floatval($row['area_cumulative']);
	$bath1_2 = floatval($row['acidcleaner_add']);
	$bath1_3 = floatval($row['temperature']);
	$bath1_4 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_1 = array("bath1_1"=> $bath1_1, "bath1_2"=> $bath1_2, "bath1_3"=> $bath1_3, "bath1_4"=> $bath1_4);


// Free Results
mysqli_free_result($result_1);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_2 = " SELECT `area_cumulative`, `cu_amt`, `sa_amt1`, `etch_rate1`, `sa_add`, `securiganth_add`, `sa_amt2`, `etch_rate2`, `temperature`, `dateAuto`
		   
			   FROM `chemical_lab`.`eg_microetch` 
		   
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
	$bath2_2 = floatval($row['cu_amt']);
	$bath2_3 = floatval($row['sa_amt1']);
	$bath2_4 = floatval($row['etch_rate1']);
	$bath2_5 = floatval($row['sa_add']);
	$bath2_6 = floatval($row['securiganth_add']);
	$bath2_7 = floatval($row['sa_amt2']);
	$bath2_8 = floatval($row['etch_rate2']);
	$bath2_9 = floatval($row['temperature']);
	$bath2_10 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_2 = array("bath2_1"=> $bath2_1, "bath2_2"=> $bath2_2, "bath2_3"=> $bath2_3, "bath2_4"=> $bath2_4, "bath2_5"=> $bath2_5, "bath2_6"=> $bath2_6, "bath2_7"=> $bath2_7, "bath2_8"=> $bath2_8, "bath2_9"=> $bath2_9, "bath2_10"=> $bath2_10, "bath2_11"=> $bath2_10);

if($bath2_2 == 0){
	
	$sql = "SELECT `cu_amt`, `dateAuto`
			
			FROM `chemical_lab`.`eg_microetch`
		
			WHERE `cu_amt` IS NOT NULL
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath2_2 = floatval($row['cu_amt']);
	$bath2_11 = date('Y-m-d', strtotime($row['dateAuto']));
	
}

// JSON Data Array
$data_2 = array("bath2_1"=> $bath2_1, "bath2_2"=> $bath2_2, "bath2_3"=> $bath2_3, "bath2_4"=> $bath2_4, "bath2_5"=> $bath2_5, "bath2_6"=> $bath2_6, "bath2_7"=> $bath2_7, "bath2_8"=> $bath2_8, "bath2_9"=> $bath2_9, "bath2_10"=> $bath2_10, "bath2_11"=> $bath2_11);

}

// Free Results
mysqli_free_result($result_2);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_3 = " SELECT `area_cumulative`, `temperature`, `dateAuto`
		   
			   FROM `chemical_lab`.`eg_aurodip` 
		   
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
	$bath3_2 = floatval($row['temperature']);
	$bath3_3 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_3 = array("bath3_1"=> $bath3_1, "bath3_2"=> $bath3_2, "bath3_3"=> $bath3_3);

// Free Results
mysqli_free_result($result_3);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_4 = " SELECT `area_cumulative`, `date`
		   
			   FROM `chemical_lab`.`eg_predip` 
		   
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
	$bath4_2 = $row['date'];
	
}

// JSON Data Array 
$data_4 = array("bath4_1"=> $bath4_1, "bath4_2"=> $bath4_2);

// Free Results
mysqli_free_result($result_4);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_5 = " SELECT `area_cumulative`, `date`
		   
			   FROM `chemical_lab`.`eg_activator` 
		   
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
	$bath5_2 = $row['date'];
	
}

// JSON Data Array 
$data_5 = array("bath5_1"=> $bath5_1, "bath5_2"=> $bath5_2);

// Free Results
mysqli_free_result($result_5);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_6 = " SELECT `area_cumulative`, `date`
		   
			   FROM `chemical_lab`.`eg_postdip` 
		   
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
	
	$bath6_1 = floatval($row['area_cumulative']);
	$bath6_2 = $row['date'];
	
}

// JSON Data Array 
$data_6 = array("bath6_1"=> $bath6_1, "bath6_2"=> $bath6_2);

// Free Results
mysqli_free_result($result_6);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_7 = " SELECT `parta_add`, `area_cumulative`, `nh_add1`, `temperature`, `ph_val1`, `ni_amt1`, `ph_val2`, `ni_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`eg_nickelbath` 
		   
			   ORDER BY `autoId` DESC
			   
			   LIMIT 1";

	// WHERE DATE(`dateAuto`) = DATE(DATE_SUB('".$date1."', INTERVAL '".$n1."' DAY))
	// MySQL Query Exection
	$result_7 = mysqli_query($conn,$sql_7);
	// Number of rows
	$rowcount = mysqli_num_rows($result_7);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_7)) {
	
	$bath7_1 = floatval($row['parta_add']);
	$bath7_2 = floatval($row['area_cumulative']);
	$bath7_3 = floatval($row['nh_add1']);
	$bath7_4 = floatval($row['temperature']);
	$bath7_5 = floatval($row['ph_val1']);
	$bath7_6 = floatval($row['ni_amt1']);
	$bath7_7 = floatval($row['ph_val2']);
	$bath7_8 = floatval($row['ni_amt2']);
	$bath7_9 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_7 = array("bath7_1"=> $bath7_1, "bath7_2"=> $bath7_2, "bath7_3"=> $bath7_3, "bath7_4"=> $bath7_4, "bath7_5"=> $bath7_5, "bath7_6"=> $bath7_6, "bath7_7"=> $bath7_7, "bath7_8"=> $bath7_8, "bath7_9"=> $bath7_9);

// Free Results
mysqli_free_result($result_7);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_8 = " SELECT `area_cumulative_m2`, `area_cumulative_mto`, `gpc_add`, `ph_val`, `temperature`, `dateAuto`
		   
			   FROM `chemical_lab`.`eg_goldbath` 
		   
			   ORDER BY `autoId` DESC
			   
			   LIMIT 1";

	// WHERE DATE(`dateAuto`) = DATE(DATE_SUB('".$date1."', INTERVAL '".$n1."' DAY))
	// MySQL Query Exection
	$result_8 = mysqli_query($conn,$sql_8);
	// Number of rows
	$rowcount = mysqli_num_rows($result_8);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_8)) {
	
	$bath8_1 = floatval($row['area_cumulative_m2']);
	$bath8_2 = floatval($row['area_cumulative_mto']);
	$bath8_3 = floatval($row['gpc_add']);
	$bath8_4 = floatval($row['ph_val']);
	$bath8_5 = floatval($row['temperature']);
	$bath8_6 = $row['dateAuto'];
}

// JSON Data Array 
$data_8 = array("bath8_1"=> $bath8_1, "bath8_2"=> $bath8_2, "bath8_3"=> $bath8_3, "bath8_4"=> $bath8_4, "bath8_5"=> $bath8_5, "bath8_6"=> $bath8_6);

// Free Results
mysqli_free_result($result_8);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Close MySQL DB Connection
mysqli_close($conn);

// Array Creation
$data = array($data_1, $data_2, $data_3, $data_4, $data_5, $data_6, $data_7, $data_8);


// JSON Data
echo json_encode($data);

?>
