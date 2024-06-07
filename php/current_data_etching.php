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
	$sql_1 = " SELECT `area_cumulative`, `temperature`, `density`, `pressure_top`, `pressure_bot`, `orp_amt1`, `hcl_add`, `h2o2_add`, `orp_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`etch_innerlayer` 
		   
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
	$bath1_2 = floatval($row['temperature']);
	$bath1_3 = floatval($row['density']);
	$bath1_4 = floatval($row['pressure_top']);
	$bath1_5 = floatval($row['pressure_bot']);
	$bath1_6 = floatval($row['orp_amt1']);
	$bath1_7 = floatval($row['hcl_add']);
	$bath1_8 = floatval($row['h2o2_add']);
	$bath1_9 = floatval($row['orp_amt2']);
	$bath1_10 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_1 = array("bath1_1"=> $bath1_1, "bath1_2"=> $bath1_2, "bath1_3"=> $bath1_3, "bath1_4"=> $bath1_4, "bath1_5"=> $bath1_5, "bath1_6"=> $bath1_6, "bath1_7"=> $bath1_7, "bath1_8"=> $bath1_8, "bath1_9"=> $bath1_9, "bath1_10"=> $bath1_10);


// Free Results
mysqli_free_result($result_1);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_2 = " SELECT `area_cumulative`, `temperature`, `resiststrip_add`, `ph_val`, `chambers_1`, `chambers_2`, `dateAuto`
		   
			   FROM `chemical_lab`.`etch_innerlayerresiststrip` 
		   
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
	$bath2_2 = floatval($row['temperature']);
	$bath2_3 = $row['dateAuto'];
	$bath2_4 = $row['resiststrip_add'];
	$bath2_5 = $row['ph_val'];
	$bath2_6 = $row['chambers_1'];
	$bath2_7 = $row['chambers_2'];
	
}

// JSON Data Array 
$data_2 = array("bath2_1"=> $bath2_1, "bath2_2"=> $bath2_2, "bath2_3"=> $bath2_3, "bath2_4"=> $bath2_4, "bath2_5"=> $bath2_5, "bath2_6"=> $bath2_6, "bath2_7"=> $bath2_7);

// Free Results
mysqli_free_result($result_2);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_3 = " SELECT `area_cumulative`, `temperature`, `density`, `pressure_top`, `pressure_bot`, `ph_val`, `cu_amt`, `cl_amt`, `dateAuto`
		   
			   FROM `chemical_lab`.`etch_outerlayer` 
		   
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
	$bath3_3 = floatval($row['density']);
	$bath3_4 = floatval($row['pressure_top']);
	$bath3_5 = floatval($row['pressure_bot']);
	$bath3_6 = floatval($row['ph_val']);
	$bath3_7 = floatval($row['cu_amt']);
	$bath3_8 = floatval($row['cl_amt']);
	$bath3_9 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_3 = array("bath3_1"=> $bath3_1, "bath3_2"=> $bath3_2, "bath3_3"=> $bath3_3, "bath3_4"=> $bath3_4, "bath3_5"=> $bath3_5, "bath3_6"=> $bath3_6, "bath3_7"=> $bath3_7, "bath3_8"=> $bath3_8, "bath3_9"=> $bath3_9);

// Free Results
mysqli_free_result($result_3);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_4 = " SELECT `area_cumulative`, `specific_gravity`, `dateAuto`, `temperature`
		   
			   FROM `chemical_lab`.`etch_tinstrip` 
		   
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
	$bath4_2 = floatval($row['specific_gravity']);
	$bath4_3 = $row['dateAuto'];
	$bath4_4 = $row['temperature'];
	
}

// JSON Data Array 
$data_4 = array("bath4_1"=> $bath4_1, "bath4_2"=> $bath4_2, "bath4_3"=> $bath4_3, "bath4_4"=> $bath4_4);

// Free Results
mysqli_free_result($result_4);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	
	$sql_6 = " SELECT `area_cumulative`, `ph_val`, `temperature`, `chambers_1`, `chambers_11`, `chambers_1b`, `chambers_11b`, `resiststrip_add`, `dateAuto`, `temperature_microstrip`
		   
			   FROM `chemical_lab`.`etch_outerlayerresiststrip` 
		   
			   ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_6 = mysqli_query($conn,$sql_6);
	// Number of rows
	//$rowcount = mysqli_num_rows($result_6);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_6)) {
	
	$bath6_1 = floatval($row['area_cumulative']);
	$bath6_2 = floatval($row['ph_val']);
	$bath6_3 = floatval($row['temperature']);
	$bath6_3b = floatval($row['temperature_microstrip']);
	$bath6_4t = floatval($row['chambers_1']);
	$bath6_5t = floatval($row['chambers_11']);
	$bath6_4b = floatval($row['chambers_1b']);
	$bath6_5b = floatval($row['chambers_11b']);
	$bath6_6 = floatval($row['resiststrip_add']);
	$bath6_7 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_6 = array("bath6_1"=> $bath6_1, "bath6_2"=> $bath6_2, "bath6_3"=> $bath6_3, "bath6_3b"=> $bath6_3b, "bath6_4t"=> $bath6_4t, "bath6_5t"=> $bath6_5t, "bath6_4b"=> $bath6_4b, "bath6_5b"=> $bath6_5b, "bath6_6"=> $bath6_6, "bath6_7"=> $bath6_7);

// Free Results
mysqli_free_result($result_6);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Close MySQL DB Connection
mysqli_close($conn);

// Array Creation
$data = array($data_1, $data_2, $data_3, $data_4, $data_6);


// JSON Data
echo json_encode($data);

?>
