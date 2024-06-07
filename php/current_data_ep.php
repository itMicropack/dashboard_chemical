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
	$sql_1 = " SELECT `area_cumulative`, `afr2_amt1`, `afr2_add`, `afr2_amt2`, `temperature`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_acidcleaner` 
		   
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
	$bath1_2 = floatval($row['afr2_amt1']);
	$bath1_3 = floatval($row['afr2_add']);
	$bath1_4 = floatval($row['afr2_amt2']);
	$bath1_5 = floatval($row['temperature']);
	$bath1_6 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_1 = array("bath1_1"=> $bath1_1, "bath1_2"=> $bath1_2, "bath1_3"=> $bath1_3, "bath1_4"=> $bath1_4, "bath1_5"=> $bath1_5, "bath1_6"=> $bath1_6);


// Free Results
mysqli_free_result($result_1);

$sql_hcp = " SELECT `area_cumulative`, `hcp_amt1`, `hcp_add`, `hcp_amt2`, `temperature`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_acidcleaner_new` 
		   
		       ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_hcp = mysqli_query($conn,$sql_hcp);
	// Number of rows
	$rowcount = mysqli_num_rows($result_hcp);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_hcp)) {
	
	$bath_hcp_1 = floatval($row['area_cumulative']);
	$bath_hcp_2 = floatval($row['hcp_amt1']);
	$bath_hcp_3 = floatval($row['hcp_add']);
	$bath_hcp_4 = floatval($row['hcp_amt2']);
	$bath_hcp_5 = floatval($row['temperature']);
	$bath_hcp_6 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_hcp = array("bath_hcp_1"=> $bath_hcp_1, "bath_hcp_2"=> $bath_hcp_2, "bath_hcp_3"=> $bath_hcp_3, "bath_hcp_4"=> $bath_hcp_4, "bath_hcp_5"=> $bath_hcp_5, "bath_hcp_6"=> $bath_hcp_6);


// Free Results
mysqli_free_result($result_hcp);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_2 = " SELECT `area_cumulative`, `cu_amt`, `sa_amt1`, `etch_rate1`, `sa_add`, `ad1481_add`, `sa_amt2`, `etch_rate2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_microetch` 
		   
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
	$bath2_6 = floatval($row['ad1481_add']);
	$bath2_7 = floatval($row['sa_amt2']);
	$bath2_8 = floatval($row['etch_rate2']);
	$bath2_9 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_2 = array("bath2_1"=> $bath2_1, "bath2_2"=> $bath2_2, "bath2_3"=> $bath2_3, "bath2_4"=> $bath2_4, "bath2_5"=> $bath2_5, "bath2_6"=> $bath2_6, "bath2_7"=> $bath2_7, "bath2_8"=> $bath2_8, "bath2_9"=> $bath2_9, "bath2_10"=> $bath2_9);


if($bath2_2 == 0){
	
	$sql = "SELECT `cu_amt`, `sa_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_microetch` 
		
			WHERE `cu_amt` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath2_2 = floatval($row['cu_amt']);
	$bath2_3 = floatval($row['sa_amt1']);
	$bath2_10 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_2 = array("bath2_1"=> $bath2_1, "bath2_2"=> $bath2_2, "bath2_3"=> $bath2_3, "bath2_4"=> $bath2_4, "bath2_5"=> $bath2_5, "bath2_6"=> $bath2_6, "bath2_7"=> $bath2_7, "bath2_8"=> $bath2_8, "bath2_9"=> $bath2_9, "bath2_10"=> $bath2_10);

}

// Free Results
mysqli_free_result($result_2);

$sql_etch_ep = " SELECT `cumulative_area`, `cu_amt`, `sa_amt1`, `etch_rate1`, `sa_add`, `salt_3330`, `sa_amt2`, `etch_rate2`, `date_auto`
		   
			   FROM `chemical_lab`.`ept_microetch_new` 
		   
		       ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_etch_ep = mysqli_query($conn,$sql_etch_ep);
	// Number of rows
	$rowcount = mysqli_num_rows($result_etch_ep);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_etch_ep)) {
	
	$bath_etch_ep_1 = floatval($row['cumulative_area']);
	$bath_etch_ep_2 = floatval($row['cu_amt']);
	$bath_etch_ep_3 = floatval($row['sa_amt1']);
	$bath_etch_ep_4 = floatval($row['etch_rate1']);
	$bath_etch_ep_5 = floatval($row['sa_add']);
	$bath_etch_ep_6 = floatval($row['salt_3330']);
	$bath_etch_ep_7 = floatval($row['sa_amt2']);
	$bath_etch_ep_8 = floatval($row['etch_rate2']);
	$bath_etch_ep_9 = $row['date_auto'];
	
}

// JSON Data Array 
$data_etch_ep = array("bath_etch_ep_1"=> $bath_etch_ep_1, "bath_etch_ep_2"=> $bath_etch_ep_2, "bath_etch_ep_3"=> $bath_etch_ep_3, "bath_etch_ep_4"=> $bath_etch_ep_4, "bath_etch_ep_5"=> $bath_etch_ep_5, "bath_etch_ep_6"=> $bath_etch_ep_6, "bath_etch_ep_7"=> $bath_etch_ep_7, "bath_etch_ep_8"=> $bath_etch_ep_8, "bath_etch_ep_9"=> $bath_etch_ep_9);

// Free Results
mysqli_free_result($result_etch_ep);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_3 = " SELECT `area_cumulative`, `sa_amt1`, `sa_add`, `sa_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_12h2so4` 
		   
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
	$bath3_2 = floatval($row['sa_amt1']);
	$bath3_3 = floatval($row['sa_add']);
	$bath3_4 = floatval($row['sa_amt2']);
	$bath3_5 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_3 = array("bath3_1"=> $bath3_1, "bath3_2"=> $bath3_2, "bath3_3"=> $bath3_3, "bath3_4"=> $bath3_4, "bath3_5"=> $bath3_5, "bath3_6"=> $bath3_5);


if($bath3_2 == 0){
	
	$sql = "SELECT `sa_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_12h2so4` 
		
			WHERE `sa_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath3_2 = floatval($row['sa_amt1']);
	
	$bath3_6 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_3 = array("bath3_1"=> $bath3_1, "bath3_2"=> $bath3_2, "bath3_3"=> $bath3_3, "bath3_4"=> $bath3_4, "bath3_5"=> $bath3_5, "bath3_6"=> $bath3_6);
}

// Free Results
mysqli_free_result($result_3);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_4 = " SELECT `area_cumulative`, `cu_amt1`, `sa_amt1`, `cl_amt1`, `temperature`, `cu_add`, `sa_add`, `hcl_add`, `b2_analysis`, `c2_analysis`, `cu_amt2`, `sa_amt2`, `cl_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_copperbath18_19` 
		   
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
	$bath4_2 = floatval($row['cu_amt1']);
	$bath4_3 = floatval($row['sa_amt1']);
	$bath4_4 = floatval($row['cl_amt1']);
	$bath4_5 = floatval($row['temperature']);
	$bath4_6 = floatval($row['cu_add']);
	$bath4_7 = floatval($row['sa_add']);
	$bath4_8 = floatval($row['hcl_add']);
	$bath4_9 = floatval($row['b2_analysis']);
	$bath4_10 = floatval($row['c2_analysis']);
	$bath4_11 = floatval($row['cu_amt2']);
	$bath4_12 = floatval($row['sa_amt2']);
	$bath4_13 = floatval($row['cl_amt2']);
	$bath4_14 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_4 = array("bath4_1"=> $bath4_1, "bath4_2"=> $bath4_2, "bath4_3"=> $bath4_3, "bath4_4"=> $bath4_4, "bath4_5"=> $bath4_5, "bath4_6"=> $bath4_6, "bath4_7"=> $bath4_7, "bath4_8"=> $bath4_8, "bath4_9"=> $bath4_9, "bath4_10"=> $bath4_10, "bath4_11"=> $bath4_11, "bath4_12"=> $bath4_12, "bath4_13"=> $bath4_13, "bath4_14"=> $bath4_14, "bath4_15"=> $bath4_14);



if($bath4_2 == 0){

	$sql = "SELECT `cu_amt1`, `sa_amt1`, `cl_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_copperbath18_19` 
		
			WHERE `cu_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath4_2 = floatval($row['cu_amt1']);
	$bath4_3 = floatval($row['sa_amt1']);
	$bath4_4 = floatval($row['cl_amt1']);
	$bath4_15 = date('Y-m-d', strtotime($row['dateAuto']));
	

}	

// JSON Data Array 
$data_4 = array("bath4_1"=> $bath4_1, "bath4_2"=> $bath4_2, "bath4_3"=> $bath4_3, "bath4_4"=> $bath4_4, "bath4_5"=> $bath4_5, "bath4_6"=> $bath4_6, "bath4_7"=> $bath4_7, "bath4_8"=> $bath4_8, "bath4_9"=> $bath4_9, "bath4_10"=> $bath4_10, "bath4_11"=> $bath4_11, "bath4_12"=> $bath4_12, "bath4_13"=> $bath4_13, "bath4_14"=> $bath4_14, "bath4_15"=> $bath4_15);

}	



// Free Results
mysqli_free_result($result_4);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_5 = " SELECT `area_cumulative`, `cu_amt1`, `sa_amt1`, `cl_amt1`, `temperature`, `cu_add`, `sa_add`, `hcl_add`, `b2_analysis`, `c2_analysis`, `cu_amt2`, `sa_amt2`, `cl_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_copperbath20_21` 
		   
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
	$bath5_2 = floatval($row['cu_amt1']);
	$bath5_3 = floatval($row['sa_amt1']);
	$bath5_4 = floatval($row['cl_amt1']);
	$bath5_5 = floatval($row['temperature']);
	$bath5_6 = floatval($row['cu_add']);
	$bath5_7 = floatval($row['sa_add']);
	$bath5_8 = floatval($row['hcl_add']);
	$bath5_9 = floatval($row['b2_analysis']);
	$bath5_10 = floatval($row['c2_analysis']);
	$bath5_11 = floatval($row['cu_amt2']);
	$bath5_12 = floatval($row['sa_amt2']);
	$bath5_13 = floatval($row['cl_amt2']);
	$bath5_14 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_5 = array("bath5_1"=> $bath5_1, "bath5_2"=> $bath5_2, "bath5_3"=> $bath5_3, "bath5_4"=> $bath5_4, "bath5_5"=> $bath5_5, "bath5_6"=> $bath5_6, "bath5_7"=> $bath5_7, "bath5_8"=> $bath5_8, "bath5_9"=> $bath5_9, "bath5_10"=> $bath5_10, "bath5_11"=> $bath5_11, "bath5_12"=> $bath5_12, "bath5_13"=> $bath5_13, "bath5_14"=> $bath5_14, "bath5_15"=> $bath5_14);


if($bath5_2 == 0){
	
	$sql = "SELECT `cu_amt1`, `sa_amt1`, `cl_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_copperbath20_21` 
		
			WHERE `cu_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath5_2 = floatval($row['cu_amt1']);
	$bath5_3 = floatval($row['sa_amt1']);
	$bath5_4 = floatval($row['cl_amt1']);
	$bath5_15 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_5 = array("bath5_1"=> $bath5_1, "bath5_2"=> $bath5_2, "bath5_3"=> $bath5_3, "bath5_4"=> $bath5_4, "bath5_5"=> $bath5_5, "bath5_6"=> $bath5_6, "bath5_7"=> $bath5_7, "bath5_8"=> $bath5_8, "bath5_9"=> $bath5_9, "bath5_10"=> $bath5_10, "bath5_11"=> $bath5_11, "bath5_12"=> $bath5_12, "bath5_13"=> $bath5_13, "bath5_14"=> $bath5_14, "bath5_15"=> $bath5_15);

}	

// Free Results
mysqli_free_result($result_5);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_6 = " SELECT `area_cumulative`, `cu_amt1`, `sa_amt1`, `cl_amt1`, `temperature`, `cu_add`, `sa_add`, `hcl_add`, `b2_analysis`, `c2_analysis`, `cu_amt2`, `sa_amt2`, `cl_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_copperbath22_23` 
		   
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
	$bath6_2 = floatval($row['cu_amt1']);
	$bath6_3 = floatval($row['sa_amt1']);
	$bath6_4 = floatval($row['cl_amt1']);
	$bath6_5 = floatval($row['temperature']);
	$bath6_6 = floatval($row['cu_add']);
	$bath6_7 = floatval($row['sa_add']);
	$bath6_8 = floatval($row['hcl_add']);
	$bath6_9 = floatval($row['b2_analysis']);
	$bath6_10 = floatval($row['c2_analysis']);
	$bath6_11 = floatval($row['cu_amt2']);
	$bath6_12 = floatval($row['sa_amt2']);
	$bath6_13 = floatval($row['cl_amt2']);
	$bath6_14 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_6 = array("bath6_1"=> $bath6_1, "bath6_2"=> $bath6_2, "bath6_3"=> $bath6_3, "bath6_4"=> $bath6_4, "bath6_5"=> $bath6_5, "bath6_6"=> $bath6_6, "bath6_7"=> $bath6_7, "bath6_8"=> $bath6_8, "bath6_9"=> $bath6_9, "bath6_10"=> $bath6_10, "bath6_11"=> $bath6_11, "bath6_12"=> $bath6_12, "bath6_13"=> $bath6_13, "bath6_14"=> $bath6_14, "bath6_15"=> $bath6_14);

if($bath6_2 == 0){
	
	$sql = "SELECT `cu_amt1`, `sa_amt1`, `cl_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_copperbath22_23` 
		
			WHERE `cu_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath6_2 = floatval($row['cu_amt1']);
	$bath6_3 = floatval($row['sa_amt1']);
	$bath6_4 = floatval($row['cl_amt1']);
	$bath6_15 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_6 = array("bath6_1"=> $bath6_1, "bath6_2"=> $bath6_2, "bath6_3"=> $bath6_3, "bath6_4"=> $bath6_4, "bath6_5"=> $bath6_5, "bath6_6"=> $bath6_6, "bath6_7"=> $bath6_7, "bath6_8"=> $bath6_8, "bath6_9"=> $bath6_9, "bath6_10"=> $bath6_10, "bath6_11"=> $bath6_11, "bath6_12"=> $bath6_12, "bath6_13"=> $bath6_13, "bath6_14"=> $bath6_14, "bath6_15"=> $bath6_15);

	
}	


// Free Results
mysqli_free_result($result_6);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_7 = " SELECT `area_cumulative`, `cu_amt1`, `sa_amt1`, `cl_amt1`, `temperature`, `cu_add`, `sa_add`, `hcl_add`, `b2_analysis`, `c2_analysis`, `cu_amt2`, `sa_amt2`, `cl_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_copperbath24_25` 
		   
		       ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

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
	
	$bath7_1 = floatval($row['area_cumulative']);
	$bath7_2 = floatval($row['cu_amt1']);
	$bath7_3 = floatval($row['sa_amt1']);
	$bath7_4 = floatval($row['cl_amt1']);
	$bath7_5 = floatval($row['temperature']);
	$bath7_6 = floatval($row['cu_add']);
	$bath7_7 = floatval($row['sa_add']);
	$bath7_8 = floatval($row['hcl_add']);
	$bath7_9 = floatval($row['b2_analysis']);
	$bath7_10 = floatval($row['c2_analysis']);
	$bath7_11 = floatval($row['cu_amt2']);
	$bath7_12 = floatval($row['sa_amt2']);
	$bath7_13 = floatval($row['cl_amt2']);
	$bath7_14 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_7 = array("bath7_1"=> $bath7_1, "bath7_2"=> $bath7_2, "bath7_3"=> $bath7_3, "bath7_4"=> $bath7_4, "bath7_5"=> $bath7_5, "bath7_6"=> $bath7_6, "bath7_7"=> $bath7_7, "bath7_8"=> $bath7_8, "bath7_9"=> $bath7_9, "bath7_10"=> $bath7_10, "bath7_11"=> $bath7_11, "bath7_12"=> $bath7_12, "bath7_13"=> $bath7_13, "bath7_14"=> $bath7_14, "bath7_15"=> $bath7_14);

if($bath7_2 == 0){
	
	$sql = "SELECT `cu_amt1`, `sa_amt1`, `cl_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_copperbath24_25` 
		
			WHERE `cu_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath7_2 = floatval($row['cu_amt1']);
	$bath7_3 = floatval($row['sa_amt1']);
	$bath7_4 = floatval($row['cl_amt1']);
	$bath7_15 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_7 = array("bath7_1"=> $bath7_1, "bath7_2"=> $bath7_2, "bath7_3"=> $bath7_3, "bath7_4"=> $bath7_4, "bath7_5"=> $bath7_5, "bath7_6"=> $bath7_6, "bath7_7"=> $bath7_7, "bath7_8"=> $bath7_8, "bath7_9"=> $bath7_9, "bath7_10"=> $bath7_10, "bath7_11"=> $bath7_11, "bath7_12"=> $bath7_12, "bath7_13"=> $bath7_13, "bath7_14"=> $bath7_14, "bath7_15"=> $bath7_15);

	
}	


// Free Results
mysqli_free_result($result_7);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_8 = " SELECT `area_cumulative`, `sa_amt1`, `sa_add`, `sa_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_10h2so4` 
		   
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
	
	$bath8_1 = floatval($row['area_cumulative']);
	$bath8_2 = floatval($row['sa_amt1']);
	$bath8_3 = floatval($row['sa_add']);
	$bath8_4 = floatval($row['sa_amt2']);
	$bath8_5 = $row['dateAuto'];
}

// JSON Data Array 
$data_8 = array("bath8_1"=> $bath8_1, "bath8_2"=> $bath8_2, "bath8_3"=> $bath8_3, "bath8_4"=> $bath8_4, "bath8_5"=> $bath8_5, "bath8_6"=> $bath8_5);


if($bath8_2 == 0){
	
	$sql = "SELECT `sa_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_10h2so4` 
		
			WHERE `sa_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath8_2 = floatval($row['sa_amt1']);
	
	$bath8_6 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_8 = array("bath8_1"=> $bath8_1, "bath8_2"=> $bath8_2, "bath8_3"=> $bath8_3, "bath8_4"=> $bath8_4, "bath8_5"=> $bath8_5, "bath8_6"=> $bath8_6);

}

// Free Results
mysqli_free_result($result_8);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_9 = " SELECT `area_cumulative`, `tin_amt1`, `sa_amt1`, `tin_add`, `sa_add`, `pa_addition`, `pb_addition`, `tin_amt2`, `sa_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_tinbath` 
		   
			   ORDER BY `autoId` DESC
			   
			   LIMIT 1";

	// WHERE DATE(`dateAuto`) = DATE(DATE_SUB('".$date1."', INTERVAL '".$n1."' DAY))
	// MySQL Query Exection
	$result_9 = mysqli_query($conn,$sql_9);
	// Number of rows
	$rowcount = mysqli_num_rows($result_9);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_9)) {
	
	$bath9_1 = floatval($row['area_cumulative']);
	$bath9_2 = floatval($row['tin_amt1']);
	$bath9_3 = floatval($row['sa_amt1']);
	$bath9_4 = floatval($row['tin_add']);
	$bath9_5 = floatval($row['sa_add']);
	$bath9_6 = floatval($row['pa_addition']);
	$bath9_7 = floatval($row['pb_addition']);
	$bath9_8 = floatval($row['tin_amt2']);
	$bath9_9 = floatval($row['sa_amt2']);
	$bath9_10 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_9 = array("bath9_1"=> $bath9_1, "bath9_2"=> $bath9_2, "bath9_3"=> $bath9_3, "bath9_4"=> $bath9_4, "bath9_5"=> $bath9_5, "bath9_6"=> $bath9_6, "bath9_7"=> $bath9_7, "bath9_8"=> $bath9_8, "bath9_9"=> $bath9_9, "bath9_10"=> $bath9_10, "bath9_11"=> $bath9_10);

if($bath9_2 == 0){
	
	$sql = "SELECT `sa_amt1`, `tin_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_tinbath` 
		
			WHERE `tin_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath9_2 = floatval($row['tin_amt1']);
	$bath9_3 = floatval($row['sa_amt1']);
	$bath9_11 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_9 = array("bath9_1"=> $bath9_1, "bath9_2"=> $bath9_2, "bath9_3"=> $bath9_3, "bath9_4"=> $bath9_4, "bath9_5"=> $bath9_5, "bath9_6"=> $bath9_6, "bath9_7"=> $bath9_7, "bath9_8"=> $bath9_8, "bath9_9"=> $bath9_9, "bath9_10"=> $bath9_10, "bath9_11"=> $bath9_11);


}

// Free Results
mysqli_free_result($result_9);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_10 = " SELECT `cu_amt1`, `sa_amt1`, `cl_amt1`, `cu_add`, `sa_add`, `hcl_add`, `s3_analysis`, `xp7_analysis`, `cu_amt2`, `sa_amt2`, `cl_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_manualcubath` 
		   
			   ORDER BY `autoId` DESC
			   
			   LIMIT 1";

	// WHERE DATE(`dateAuto`) = DATE(DATE_SUB('".$date1."', INTERVAL '".$n1."' DAY))
	// MySQL Query Exection
	$result_10 = mysqli_query($conn,$sql_10);
	// Number of rows
	$rowcount = mysqli_num_rows($result_10);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_10)) {
	
	$bath10_1 = floatval($row['cu_amt1']);
	$bath10_2 = floatval($row['sa_amt1']);
	$bath10_3 = floatval($row['cl_amt1']);
	$bath10_4 = floatval($row['cu_add']);
	$bath10_5 = floatval($row['sa_add']);
	$bath10_6 = floatval($row['hcl_add']);
	$bath10_7 = floatval($row['s3_analysis']);
	$bath10_8 = floatval($row['xp7_analysis']);
	$bath10_9 = floatval($row['cu_amt2']);
	$bath10_10 = floatval($row['sa_amt2']);
	$bath10_11 = floatval($row['cl_amt2']);
	$bath10_12 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_10 = array("bath10_1"=> $bath10_1, "bath10_2"=> $bath10_2, "bath10_3"=> $bath10_3, "bath10_4"=> $bath10_4, "bath10_5"=> $bath10_5, "bath10_6"=> $bath10_6, "bath10_7"=> $bath10_7, "bath10_8"=> $bath10_8, "bath10_9"=> $bath10_9, "bath10_10"=> $bath10_10, "bath10_11"=> $bath10_11, "bath10_12"=> $bath10_12);

// Free Results
mysqli_free_result($result_10);

$sql_10_new = " SELECT `cu_amt1`, `sa_amt1`, `cl_amt1`, `cu_add`, `sa_add`, `hcl_add`, `har_add`, `har_lev`, `har_car`, `cu_amt2`, `sa_amt2`, `cl_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_manualcubath_new` 
		   
			   ORDER BY `autoId` DESC
			   
			   LIMIT 1";

	// WHERE DATE(`dateAuto`) = DATE(DATE_SUB('".$date1."', INTERVAL '".$n1."' DAY))
	// MySQL Query Exection
	$result_10_new = mysqli_query($conn,$sql_10_new);
	// Number of rows
	$rowcount = mysqli_num_rows($result_10_new);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_10_new)) {
	
	$bath10_new_1 = floatval($row['cu_amt1']);
	$bath10_new_2 = floatval($row['sa_amt1']);
	$bath10_new_3 = floatval($row['cl_amt1']);
	$bath10_new_4 = floatval($row['cu_add']);
	$bath10_new_5 = floatval($row['sa_add']);
	$bath10_new_6 = floatval($row['hcl_add']);
	$bath10_new_7 = floatval($row['har_add']);
	$bath10_new_8 = floatval($row['har_lev']);
	$bath10_new_9 = floatval($row['cu_amt2']);
	$bath10_new_10 = floatval($row['sa_amt2']);
	$bath10_new_11 = floatval($row['cl_amt2']);
	$bath10_new_12 = $row['dateAuto'];
	$bath10_new_13 = floatval($row['har_car']);
	
}

// JSON Data Array 
$data_10_new = array("bath10_new_1"=> $bath10_new_1, "bath10_new_2"=> $bath10_new_2, "bath10_new_3"=> $bath10_new_3, "bath10_new_4"=> $bath10_new_4, "bath10_new_5"=> $bath10_new_5, "bath10_new_6"=> $bath10_new_6, "bath10_new_7"=> $bath10_new_7, "bath10_new_8"=> $bath10_new_8, "bath10_new_9"=> $bath10_new_9, "bath10_new_10"=> $bath10_new_10, "bath10_new_11"=> $bath10_new_11, "bath10_new_12"=> $bath10_new_12, "bath10_new_13"=> $bath10_new_13);

// Free Results
mysqli_free_result($result_10_new);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_11 = " SELECT `tin_amt1`, `lead_amt1`, `acid_amt1`, `tin_add`, `lead_add`, `acid_add`, `tin_amt2`, `lead_amt2`, `acid_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_tinleadbath` 
		   
			   ORDER BY `autoId` DESC
			   
			   LIMIT 1";

	// WHERE DATE(`dateAuto`) = DATE(DATE_SUB('".$date1."', INTERVAL '".$n1."' DAY))
	// MySQL Query Exection
	$result_11 = mysqli_query($conn,$sql_11);
	// Number of rows
	$rowcount = mysqli_num_rows($result_11);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_11)) {
	
	$bath11_1 = floatval($row['tin_amt1']);
	$bath11_2 = floatval($row['lead_amt1']);
	$bath11_3 = floatval($row['acid_amt1']);
	$bath11_4 = floatval($row['tin_add']);
	$bath11_5 = floatval($row['lead_add']);
	$bath11_6 = floatval($row['acid_add']);
	$bath11_7 = floatval($row['tin_amt2']);
	$bath11_8 = floatval($row['lead_amt2']);
	$bath11_9 = floatval($row['acid_amt2']);
	$bath11_10 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_11 = array("bath11_1"=> $bath11_1, "bath11_2"=> $bath11_2, "bath11_3"=> $bath11_3, "bath11_4"=> $bath11_4, "bath11_5"=> $bath11_5, "bath11_6"=> $bath11_6, "bath11_7"=> $bath11_7, "bath11_8"=> $bath11_8, "bath11_9"=> $bath11_9, "bath11_10"=> $bath11_10);

// Free Results
mysqli_free_result($result_11);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$sql_hcp = " SELECT `area_cumulative`, `cu_amt`, `sa_amt1`, `etch_rate1`, `sa_add`, 'circuposit3330_add', 'sa_amt2', 'etch_rate2', `dateAuto`
		   
			   FROM `chemical_lab`.`ept_microetch_new1` 
		   
		       ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_hcp = mysqli_query($conn,$sql_hcp);
	// Number of rows
	$rowcount = mysqli_num_rows($result_hcp);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_hcp)) {
	
	$bath2c_1 = floatval($row['area_cumulative']);
	$bath2c_2 = floatval($row['cu_amt']);
	$bath2c_3 = floatval($row['sa_amt1']);
	$bath2c_4 = floatval($row['etch_rate1']);
	$bath2c_5 = floatval($row['sa_add']);
	$bath2c_6 = floatval($row['circuposit3330_add']);
	$bath2c_7 = floatval($row['sa_amt2']);
	$bath2c_8 = floatval($row['etch_rate2']);
	$bath2c_9 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_hcp1 = array("bath2c_1"=> $bath2c_1, "bath2c_2"=> $bath2c_2, "bath2c_3"=> $bath2c_3, "bath2c_4"=> $bath2c_4, "bath2c_5"=> $bath2c_5, "bath2c_6"=> $bath2c_6, "bath2c_7"=> $bath2c_7, "bath2c_8"=> $bath2c_8, "bath2c_9"=> $bath2c_9);


// Free Results
mysqli_free_result($result_hcp);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sql_etch_ep1 = " SELECT `area_cumulative`, `cu_amt1`, `sa_amt1`, `cl_amt1`, `temperature`, `cu_add`, `sa_add`, `hcl_add`,  `cu_amt2`, `sa_amt2`, `cl_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_copperbath18_19_rev` 
		   
		       ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_etch_ep1 = mysqli_query($conn,$sql_etch_ep1);
	// Number of rows
	$rowcount = mysqli_num_rows($result_etch_ep1);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_etch_ep1)) {
	
	$bath4k_1 = floatval($row['area_cumulative']);
	$bath4k_2 = floatval($row['cu_amt1']);
	$bath4k_3 = floatval($row['sa_amt1']);
	$bath4k_4 = floatval($row['cl_amt1']);
	$bath4k_5 = floatval($row['temperature']);
	$bath4k_6 = floatval($row['cu_add']);
	$bath4k_7 = floatval($row['sa_add']);
	$bath4k_8 = floatval($row['hcl_add']);
	$bath4k_9 = floatval($row['cu_amt2']);
	$bath4k_10 = floatval($row['sa_amt2']);
	$bath4k_11 = floatval($row['cl_amt2']);
	$bath4k_12 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_etch_ep18 = array("bath4k_1"=> $bath4k_1, "bath4k_2"=> $bath4k_2, "bath4k_3"=> $bath4k_3, "bath4k_4"=> $bath4k_4, "bath4k_5"=> $bath4k_5, "bath4k_6"=> $bath4k_6, "bath4k_7"=> $bath4k_7, "bath4k_8"=> $bath4k_8, "bath4k_9"=> $bath4k_9, "bath4k_10"=> $bath4k_10, "bath4k_11"=> $bath4k_11, "bath4k_12"=> $bath4k_12, "bath4k_13"=> $bath4k_12);

if($bath4k_2 == 0){
	
	$sql = "SELECT `cu_amt1`, `sa_amt1`, `cl_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_copperbath18_19_rev` 
		
			WHERE `cu_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);
	
	
	while($row = mysqli_fetch_array($result)) {
	
	$bath4k_2 = floatval($row['cu_amt1']);
	$bath4k_3 = floatval($row['sa_amt1']);
	$bath4k_4 = floatval($row['cl_amt1']);
	$bath4k_13 = date('Y-m-d', strtotime($row['dateAuto']));
	
}

// JSON Data Array 
$data_etch_ep18 = array("bath4k_1"=> $bath4k_1, "bath4k_2"=> $bath4k_2, "bath4k_3"=> $bath4k_3, "bath4k_4"=> $bath4k_4, "bath4k_5"=> $bath4k_5, "bath4k_6"=> $bath4k_6, "bath4k_7"=> $bath4k_7, "bath4k_8"=> $bath4k_8, "bath4k_9"=> $bath4k_9, "bath4k_10"=> $bath4k_10, "bath4k_11"=> $bath4k_11, "bath4k_12"=> $bath4k_12, "bath4k_13"=> $bath4k_13);

}			
// Free Results
mysqli_free_result($result_etch_ep1);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sql_etch_ep2 = " SELECT `area_cumulative`, `cu_amt1`, `sa_amt1`, `cl_amt1`, `temperature`, `cu_add`, `sa_add`, `hcl_add`,  `cu_amt2`, `sa_amt2`, `cl_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_copperbath20_21_rev` 
		   
		       ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_etch_ep2 = mysqli_query($conn,$sql_etch_ep2);
	// Number of rows
	$rowcount = mysqli_num_rows($result_etch_ep2);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_etch_ep2)) {
	
	$bath4k_1 = floatval($row['area_cumulative']);
	$bath4k_2 = floatval($row['cu_amt1']);
	$bath4k_3 = floatval($row['sa_amt1']);
	$bath4k_4 = floatval($row['cl_amt1']);
	$bath4k_5 = floatval($row['temperature']);
	$bath4k_6 = floatval($row['cu_add']);
	$bath4k_7 = floatval($row['sa_add']);
	$bath4k_8 = floatval($row['hcl_add']);
	$bath4k_9 = floatval($row['cu_amt2']);
	$bath4k_10 = floatval($row['sa_amt2']);
	$bath4k_11 = floatval($row['cl_amt2']);
	$bath4k_12 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_etch_ep20 = array("bath4k_1"=> $bath4k_1, "bath4k_2"=> $bath4k_2, "bath4k_3"=> $bath4k_3, "bath4k_4"=> $bath4k_4, "bath4k_5"=> $bath4k_5, "bath4k_6"=> $bath4k_6, "bath4k_7"=> $bath4k_7, "bath4k_8"=> $bath4k_8, "bath4k_9"=> $bath4k_9, "bath4k_10"=> $bath4k_10, "bath4k_11"=> $bath4k_11, "bath4k_12"=> $bath4k_12, "bath4k_13"=> $bath4k_12);

if($bath4k_2 == 0){
	
	$sql = "SELECT `cu_amt1`, `sa_amt1`, `cl_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_copperbath20_21_rev` 
		
			WHERE `cu_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);
	
	
	while($row = mysqli_fetch_array($result)) {
	
	$bath4k_2 = floatval($row['cu_amt1']);
	$bath4k_3 = floatval($row['sa_amt1']);
	$bath4k_4 = floatval($row['cl_amt1']);
	$bath4k_13 = date('Y-m-d', strtotime($row['dateAuto']));
	
}

// JSON Data Array 
$data_etch_ep20 = array("bath4k_1"=> $bath4k_1, "bath4k_2"=> $bath4k_2, "bath4k_3"=> $bath4k_3, "bath4k_4"=> $bath4k_4, "bath4k_5"=> $bath4k_5, "bath4k_6"=> $bath4k_6, "bath4k_7"=> $bath4k_7, "bath4k_8"=> $bath4k_8, "bath4k_9"=> $bath4k_9, "bath4k_10"=> $bath4k_10, "bath4k_11"=> $bath4k_11, "bath4k_12"=> $bath4k_12, "bath4k_13"=> $bath4k_13);

}			
// Free Results
mysqli_free_result($result_etch_ep2);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sql_etch_ep3 = " SELECT `area_cumulative`, `cu_amt1`, `sa_amt1`, `cl_amt1`, `temperature`, `cu_add`, `sa_add`, `hcl_add`,  `cu_amt2`, `sa_amt2`, `cl_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_copperbath20_21_rev` 
		   
		       ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_etch_ep3 = mysqli_query($conn,$sql_etch_ep3);
	// Number of rows
	$rowcount = mysqli_num_rows($result_etch_ep3);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_etch_ep3)) {
	
	$bath4k_1 = floatval($row['area_cumulative']);
	$bath4k_2 = floatval($row['cu_amt1']);
	$bath4k_3 = floatval($row['sa_amt1']);
	$bath4k_4 = floatval($row['cl_amt1']);
	$bath4k_5 = floatval($row['temperature']);
	$bath4k_6 = floatval($row['cu_add']);
	$bath4k_7 = floatval($row['sa_add']);
	$bath4k_8 = floatval($row['hcl_add']);
	$bath4k_9 = floatval($row['cu_amt2']);
	$bath4k_10 = floatval($row['sa_amt2']);
	$bath4k_11 = floatval($row['cl_amt2']);
	$bath4k_12 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_etch_ep22 = array("bath4k_1"=> $bath4k_1, "bath4k_2"=> $bath4k_2, "bath4k_3"=> $bath4k_3, "bath4k_4"=> $bath4k_4, "bath4k_5"=> $bath4k_5, "bath4k_6"=> $bath4k_6, "bath4k_7"=> $bath4k_7, "bath4k_8"=> $bath4k_8, "bath4k_9"=> $bath4k_9, "bath4k_10"=> $bath4k_10, "bath4k_11"=> $bath4k_11, "bath4k_12"=> $bath4k_12, "bath4k_13"=> $bath4k_12);

if($bath4k_2 == 0){
	
	$sql = "SELECT `cu_amt1`, `sa_amt1`, `cl_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_copperbath20_21_rev` 
		
			WHERE `cu_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);
	
	
	while($row = mysqli_fetch_array($result)) {
	
	$bath4k_2 = floatval($row['cu_amt1']);
	$bath4k_3 = floatval($row['sa_amt1']);
	$bath4k_4 = floatval($row['cl_amt1']);
	$bath4k_13 = date('Y-m-d', strtotime($row['dateAuto']));
	
}

// JSON Data Array 
$data_etch_ep22 = array("bath4k_1"=> $bath4k_1, "bath4k_2"=> $bath4k_2, "bath4k_3"=> $bath4k_3, "bath4k_4"=> $bath4k_4, "bath4k_5"=> $bath4k_5, "bath4k_6"=> $bath4k_6, "bath4k_7"=> $bath4k_7, "bath4k_8"=> $bath4k_8, "bath4k_9"=> $bath4k_9, "bath4k_10"=> $bath4k_10, "bath4k_11"=> $bath4k_11, "bath4k_12"=> $bath4k_12, "bath4k_13"=> $bath4k_13);

}			
// Free Results
mysqli_free_result($result_etch_ep3);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sql_etch_ep4 = " SELECT `area_cumulative`, `cu_amt1`, `sa_amt1`, `cl_amt1`, `temperature`, `cu_add`, `sa_add`, `hcl_add`,  `cu_amt2`, `sa_amt2`, `cl_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_copperbath20_21_rev` 
		   
		       ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_etch_ep4 = mysqli_query($conn,$sql_etch_ep4);
	// Number of rows
	$rowcount = mysqli_num_rows($result_etch_ep4);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_etch_ep4)) {
	
	$bath4k_1 = floatval($row['area_cumulative']);
	$bath4k_2 = floatval($row['cu_amt1']);
	$bath4k_3 = floatval($row['sa_amt1']);
	$bath4k_4 = floatval($row['cl_amt1']);
	$bath4k_5 = floatval($row['temperature']);
	$bath4k_6 = floatval($row['cu_add']);
	$bath4k_7 = floatval($row['sa_add']);
	$bath4k_8 = floatval($row['hcl_add']);
	$bath4k_9 = floatval($row['cu_amt2']);
	$bath4k_10 = floatval($row['sa_amt2']);
	$bath4k_11 = floatval($row['cl_amt2']);
	$bath4k_12 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_etch_ep24 = array("bath4k_1"=> $bath4k_1, "bath4k_2"=> $bath4k_2, "bath4k_3"=> $bath4k_3, "bath4k_4"=> $bath4k_4, "bath4k_5"=> $bath4k_5, "bath4k_6"=> $bath4k_6, "bath4k_7"=> $bath4k_7, "bath4k_8"=> $bath4k_8, "bath4k_9"=> $bath4k_9, "bath4k_10"=> $bath4k_10, "bath4k_11"=> $bath4k_11, "bath4k_12"=> $bath4k_12, "bath4k_13"=> $bath4k_12);

if($bath4k_2 == 0){
	
	$sql = "SELECT `cu_amt1`, `sa_amt1`, `cl_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_copperbath20_21_rev` 
		
			WHERE `cu_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);
	
	
	while($row = mysqli_fetch_array($result)) {
	
	$bath4k_2 = floatval($row['cu_amt1']);
	$bath4k_3 = floatval($row['sa_amt1']);
	$bath4k_4 = floatval($row['cl_amt1']);
	$bath4k_13 = date('Y-m-d', strtotime($row['dateAuto']));
	
}

// JSON Data Array 
$data_etch_ep24 = array("bath4k_1"=> $bath4k_1, "bath4k_2"=> $bath4k_2, "bath4k_3"=> $bath4k_3, "bath4k_4"=> $bath4k_4, "bath4k_5"=> $bath4k_5, "bath4k_6"=> $bath4k_6, "bath4k_7"=> $bath4k_7, "bath4k_8"=> $bath4k_8, "bath4k_9"=> $bath4k_9, "bath4k_10"=> $bath4k_10, "bath4k_11"=> $bath4k_11, "bath4k_12"=> $bath4k_12, "bath4k_13"=> $bath4k_13);

}			
// Free Results
mysqli_free_result($result_etch_ep4);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Close MySQL DB Connection
mysqli_close($conn);

// Array Creation
$data = array($data_1, $data_hcp, $data_2, $data_etch_ep, $data_3, $data_4, $data_5, $data_6, $data_7, $data_8, $data_9, $data_10, $data_10_new, $data_11, $data_hcp1, $data_etch_ep18,$data_etch_ep20, $data_etch_ep22 ,$data_etch_ep24);


// JSON Data
echo json_encode($data)

?>
