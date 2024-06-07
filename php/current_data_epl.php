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
	$sql_1 = " SELECT `area_cumulative`, `hcp_amt1`, `hcp_add`, `hcp_amt2`, `temperature`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_acidcleaner_rev` 
		   
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
	
	$bath12_1 = floatval($row['area_cumulative']);
	$bath12_2 = floatval($row['hcp_amt1']);
	$bath12_3 = floatval($row['hcp_add']);
	$bath12_4 = floatval($row['hcp_amt2']);
	$bath12_5 = floatval($row['temperature']);
	$bath12_6 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_1 = array("bath12_1"=> $bath12_1, "bath12_2"=> $bath12_2, "bath12_3"=> $bath12_3, "bath12_4"=> $bath12_4, "bath12_5"=> $bath12_5, "bath12_6"=> $bath12_6);


// Free Results
mysqli_free_result($result_1);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




$sql_hcp = " SELECT `area_cumulative`, `cu_amt`, `sa_amt1`, `etch_rate1`, `sa_add`, 'circuposit3330_add', 'sa_amt2', 'etch_rate2', `dateAuto`
		   
			   FROM `chemical_lab`.`ept_circuposit_3330` 
		   
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
$data_hcp = array("bath2c_1"=> $bath2c_1, "bath2c_2"=> $bath2c_2, "bath2c_3"=> $bath2c_3, "bath2c_4"=> $bath2c_4, "bath2c_5"=> $bath2c_5, "bath2c_6"=> $bath2c_6, "bath2c_7"=> $bath2c_7, "bath2c_8"=> $bath2c_8, "bath2c_9"=> $bath2c_9);


// Free Results
mysqli_free_result($result_hcp);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_3 = " SELECT `area_cumulative`, `sa_amt1`, `sa_add`, `sa_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_12h2so4_rev` 
		   
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
	
	$bath13_1 = floatval($row['area_cumulative']);
	$bath13_2 = floatval($row['sa_amt1']);
	$bath13_3 = floatval($row['sa_add']);
	$bath13_4 = floatval($row['sa_amt2']);
	$bath13_5 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_2 = array("bath13_1"=> $bath13_1, "bath13_2"=> $bath13_2, "bath13_3"=> $bath13_3, "bath13_4"=> $bath13_4, "bath13_5"=> $bath13_5, "bath13_6"=> $bath13_5);


if($bath13_2 == 0){
	
	$sql = "SELECT `sa_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_12h2so4_rev` 
		
			WHERE `sa_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath13_2 = floatval($row['sa_amt1']);
	
	$bath13_6 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_2 = array("bath13_1"=> $bath13_1, "bath13_2"=> $bath13_2, "bath13_3"=> $bath13_3, "bath13_4"=> $bath13_4, "bath13_5"=> $bath13_5, "bath13_6"=> $bath13_6);
}

// Free Results
mysqli_free_result($result_3);





/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$sql_etch_ep = " SELECT `area_cumulative`, `cu_amt1`, `sa_amt1`, `cl_amt1`, `temperature`, `cu_add`, `sa_add`, `hcl_add`,  `cu_amt2`, `sa_amt2`, `cl_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_copperbath17_rev` 
		   
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
$data_etch_ep = array("bath4k_1"=> $bath4k_1, "bath4k_2"=> $bath4k_2, "bath4k_3"=> $bath4k_3, "bath4k_4"=> $bath4k_4, "bath4k_5"=> $bath4k_5, "bath4k_6"=> $bath4k_6, "bath4k_7"=> $bath4k_7, "bath4k_8"=> $bath4k_8, "bath4k_9"=> $bath4k_9, "bath4k_10"=> $bath4k_10, "bath4k_11"=> $bath4k_11, "bath4k_12"=> $bath4k_12, "bath4k_13"=> $bath4k_12);

if($bath4k_2 == 0){
	
	$sql = "SELECT `cu_amt1`, `sa_amt1`, `cl_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_copperbath17_rev` 
		
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
$data_etch_ep = array("bath4k_1"=> $bath4k_1, "bath4k_2"=> $bath4k_2, "bath4k_3"=> $bath4k_3, "bath4k_4"=> $bath4k_4, "bath4k_5"=> $bath4k_5, "bath4k_6"=> $bath4k_6, "bath4k_7"=> $bath4k_7, "bath4k_8"=> $bath4k_8, "bath4k_9"=> $bath4k_9, "bath4k_10"=> $bath4k_10, "bath4k_11"=> $bath4k_11, "bath4k_12"=> $bath4k_12, "bath4k_13"=> $bath4k_13);

}			
// Free Results
mysqli_free_result($result_etch_ep);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_5 = " SELECT `area_cumulative`, `cu_amt1`, `sa_amt1`, `cl_amt1`, `temperature`, `cu_add`, `sa_add`, `hcl_add`,  `cu_amt2`, `sa_amt2`, `cl_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_copperbath19_20_rev` 
		   
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
	
	$bath5f_1 = floatval($row['area_cumulative']);
	$bath5f_2 = floatval($row['cu_amt1']);
	$bath5f_3 = floatval($row['sa_amt1']);
	$bath5f_4 = floatval($row['cl_amt1']);
	$bath5f_5 = floatval($row['temperature']);
	$bath5f_6 = floatval($row['cu_add']);
	$bath5f_7 = floatval($row['sa_add']);
	$bath5f_8 = floatval($row['hcl_add']);
	$bath5f_9 = floatval($row['cu_amt2']);
	$bath5f_10 = floatval($row['sa_amt2']);
	$bath5f_11 = floatval($row['cl_amt2']);
	$bath5f_12 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_5 = array("bath5f_1"=> $bath5f_1, "bath5f_2"=> $bath5f_2, "bath5f_3"=> $bath5f_3, "bath5f_4"=> $bath5f_4, "bath5f_5"=> $bath5f_5, "bath5f_6"=> $bath5f_6, "bath5f_7"=> $bath5f_7, "bath5f_8"=> $bath5f_8, "bath5f_9"=> $bath5f_9, "bath5f_10"=> $bath5f_10, "bath5f_11"=> $bath5f_11, "bath5f_12"=> $bath5f_12, "bath5f_12"=> $bath5f_12, "bath5f_13"=> $bath5f_12);


if($bath5f_2 == 0){
	
	$sql = "SELECT `cu_amt1`, `sa_amt1`, `cl_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_copperbath19_20_rev` 
		
			WHERE `cu_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath5f_2 = floatval($row['cu_amt1']);
	$bath5f_3 = floatval($row['sa_amt1']);
	$bath5f_4 = floatval($row['cl_amt1']);
	$bath5f_13 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_5 = array("bath5f_1"=> $bath5f_1, "bath5f_2"=> $bath5f_2, "bath5f_3"=> $bath5f_3, "bath5f_4"=> $bath5f_4, "bath5f_5"=> $bath5f_5, "bath5f_6"=> $bath5f_6, "bath5f_7"=> $bath5f_7, "bath5f_8"=> $bath5f_8, "bath5f_9"=> $bath5f_9, "bath5f_10"=> $bath5f_10, "bath5f_11"=> $bath5f_11, "bath5f_12"=> $bath5f_12, "bath5f_13"=> $bath5f_13);

}	

// Free Results
mysqli_free_result($result_5);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_6 = " SELECT `area_cumulative`, `cu_amt1`, `sa_amt1`, `cl_amt1`, `temperature`, `cu_add`, `sa_add`, `hcl_add`,  `cu_amt2`, `sa_amt2`, `cl_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_copperbath21_rev` 
		   
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
	
	$bath6g_1 = floatval($row['area_cumulative']);
	$bath6g_2 = floatval($row['cu_amt1']);
	$bath6g_3 = floatval($row['sa_amt1']);
	$bath6g_4 = floatval($row['cl_amt1']);
	$bath6g_5 = floatval($row['temperature']);
	$bath6g_6 = floatval($row['cu_add']);
	$bath6g_7 = floatval($row['sa_add']);
	$bath6g_8 = floatval($row['hcl_add']);
	$bath6g_9 = floatval($row['cu_amt2']);
	$bath6g_10 = floatval($row['sa_amt2']);
	$bath6g_11 = floatval($row['cl_amt2']);
	$bath6g_12 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_6 = array("bath6g_1"=> $bath6g_1, "bath6g_2"=> $bath6g_2, "bath6g_3"=> $bath6g_3, "bath6g_4"=> $bath6g_4, "bath6g_5"=> $bath6g_5, "bath6g_6"=> $bath6g_6, "bath6g_7"=> $bath6g_7, "bath6g_8"=> $bath6g_8, "bath6g_9"=> $bath6g_9, "bath6g_10"=> $bath6g_10, "bath6g_11"=> $bath6g_11, "bath6g_12"=> $bath6g_12, "bath6g_13"=> $bath6g_12);

if($bath6g_2 == 0){
	
	$sql = "SELECT `cu_amt1`, `sa_amt1`, `cl_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_copperbath21_rev` 
		
			WHERE `cu_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath6g_2 = floatval($row['cu_amt1']);
	$bath6g_3 = floatval($row['sa_amt1']);
	$bath6g_4 = floatval($row['cl_amt1']);
	$bath6g_13 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_6 = array("bath6g_1"=> $bath6g_1, "bath6g_2"=> $bath6g_2, "bath6g_3"=> $bath6g_3, "bath6g_4"=> $bath6g_4, "bath6g_5"=> $bath6g_5, "bath6g_6"=> $bath6g_6, "bath6g_7"=> $bath6g_7, "bath6g_8"=> $bath6g_8, "bath6g_9"=> $bath6g_9, "bath6g_10"=> $bath6g_10, "bath6g_11"=> $bath6g_11, "bath6g_12"=> $bath6g_12, "bath6g_13"=> $bath6g_13);

	
}	


// Free Results
mysqli_free_result($result_6);



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_8 = " SELECT `area_cumulative`, `sa_amt1`, `sa_add`, `sa_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_10h2so4_rev` 
		   
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
	
	$bath8h_1 = floatval($row['area_cumulative']);
	$bath8h_2 = floatval($row['sa_amt1']);
	$bath8h_3 = floatval($row['sa_add']);
	$bath8h_4 = floatval($row['sa_amt2']);
	$bath8h_5 = $row['dateAuto'];
}

// JSON Data Array 
$data_8 = array("bath8h_1"=> $bath8h_1, "bath8h_2"=> $bath8h_2, "bath8h_3"=> $bath8h_3, "bath8h_4"=> $bath8h_4, "bath8h_5"=> $bath8h_5, "bath8h_6"=> $bath8h_5);


if($bath8h_2 == 0){
	
	$sql = "SELECT `sa_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_10h2so4_rev` 
		
			WHERE `sa_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath8h_2 = floatval($row['sa_amt1']);
	
	$bath8h_6 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_8 = array("bath8h_1"=> $bath8h_1, "bath8h_2"=> $bath8h_2, "bath8h_3"=> $bath8h_3, "bath8h_4"=> $bath8h_4, "bath8h_5"=> $bath8h_5, "bath8h_6"=> $bath8h_6);

}

// Free Results
mysqli_free_result($result_8);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_9 = " SELECT `area_cumulative`, `tin_amt1`, `sa_amt1`, `tin_add`, `sa_add`, `pa_addition`, `pb_addition`, `tin_amt2`, `sa_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ept_tinbath_rev` 
		   
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
	
	$bath9j_1 = floatval($row['area_cumulative']);
	$bath9j_2 = floatval($row['tin_amt1']);
	$bath9j_3 = floatval($row['sa_amt1']);
	$bath9j_4 = floatval($row['tin_add']);
	$bath9j_5 = floatval($row['sa_add']);
	$bath9j_6 = floatval($row['pa_addition']);
	$bath9j_7 = floatval($row['pb_addition']);
	$bath9j_8 = floatval($row['tin_amt2']);
	$bath9j_9 = floatval($row['sa_amt2']);
	$bath9j_10 = $row['dateAuto'];
	
}

// JSON Data Array 
$data_9 = array("bath9j_1"=> $bath9j_1, "bath9j_2"=> $bath9j_2, "bath9j_3"=> $bath9j_3, "bath9j_4"=> $bath9j_4, "bath9j_5"=> $bath9j_5, "bath9j_6"=> $bath9j_6, "bath9j_7"=> $bath9j_7, "bath9j_8"=> $bath9j_8, "bath9j_9"=> $bath9j_9, "bath9j_10"=> $bath9j_10, "bath9j_11"=> $bath9j_10);

if($bath9j_2 == 0){
	
	$sql = "SELECT `sa_amt1`, `tin_amt1`, `dateAuto`  
			
			FROM `chemical_lab`.`ept_tinbath_rev` 
		
			WHERE `tin_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath9j_2 = floatval($row['tin_amt1']);
	$bath9j_3 = floatval($row['sa_amt1']);
	$bath9j_11 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_9 = array("bath9j_1"=> $bath9j_1, "bath9j_2"=> $bath9j_2, "bath9j_3"=> $bath9j_3, "bath9j_4"=> $bath9j_4, "bath9j_5"=> $bath9j_5, "bath9j_6"=> $bath9j_6, "bath9j_7"=> $bath9j_7, "bath9j_8"=> $bath9j_8, "bath9j_9"=> $bath9j_9, "bath9j_10"=> $bath9j_10, "bath9j_11"=> $bath9j_11);


}

// Free Results
mysqli_free_result($result_9);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Close MySQL DB Connection
mysqli_close($conn);

// Array Creation
$data = array($data_1, $data_hcp, $data_2, $data_etch_ep, $data_5, $data_6, $data_8, $data_9);


// JSON Data
echo json_encode($data)

?>
