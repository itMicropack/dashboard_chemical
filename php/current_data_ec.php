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
	
	$sql_afr2 = " SELECT `area_cumulative`, `afr2_amt1`, `afr2_add`, `afr2_amt2`, `temperature`, `dateAuto`
				  FROM `chemical_lab`.`ec_acidcleaner` 
		          ORDER BY `autoId` DESC
				  LIMIT 1 ";

	// MySQL Query Exection
	$result_afr2 = mysqli_query($conn,$sql_afr2);
	// Number of rows
	$rowcount = mysqli_num_rows($result_afr2);
	// Days interval
	//$n1++;

	//} while ($rowcount == 0);
	
	// Extract the Results
	while($row = mysqli_fetch_array($result_afr2)) {
		
		$bath_afr2_1 = floatval($row['area_cumulative']);
		$bath_afr2_2 = floatval($row['afr2_amt1']);
		$bath_afr2_3 = floatval($row['afr2_add']);
		$bath_afr2_4 = floatval($row['afr2_amt2']);
		$bath_afr2_5 = floatval($row['temperature']);
		$bath_afr2_6 = $row['dateAuto'];
		
	}

	// JSON Data Array 
	$data_afr2 = array("bath_afr2_1"=> $bath_afr2_1, "bath_afr2_2"=> $bath_afr2_2, "bath_afr2_3"=> $bath_afr2_3, "bath_afr2_4"=> $bath_afr2_4, "bath_afr2_5"=> $bath_afr2_5, "bath_afr2_6"=> $bath_afr2_6);


	// Free Results
	mysqli_free_result($result_afr2);
	
	$sql_1 = " SELECT `area_cumulative`, `ph_val1`, `alkaline_norm1`, `cleaner_233_add`, `ph_val2`, `alkaline_norm2`, `dateAuto`, `temperature` 
		   
			   FROM `chemical_lab`.`ec_cleaner233` 
		   
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
	$bath1_2 = floatval($row['ph_val1']);
	$bath1_3 = floatval($row['alkaline_norm1']);
	$bath1_4 = floatval($row['cleaner_233_add']);
	$bath1_5 = floatval($row['ph_val2']);
	$bath1_6 = floatval($row['alkaline_norm2']);
	$bath1_7 = $row['dateAuto'];
	$bath1_8 = floatval($row['temperature']);
	
}

/*
sql_1a = "SELECT `alkaline_norm1`, `dateAuto`
		  FROM `chemical_lab`.`ec_cleaner233` 
		  `alkaline_norm1` IS NOT NULL
		  ORDER BY `dateAuto` DESC
		  LIMIT 1";
		 

// MySQL Query Exection
$result_1a = mysqli_query($conn,$sql_1a);

// Number of rows
$rowcount = mysqli_num_rows($result_1a);		 

// Extract the Results
while($row = mysqli_fetch_array($result_1)) {
	$bath1_1 = floatval($row['alkaline_norm1']);
}
*/

// JSON Data Array 
$data_1 = array("bath1_1"=> $bath1_1, "bath1_2"=> $bath1_2, "bath1_3"=> $bath1_3, "bath1_4"=> $bath1_4, "bath1_5"=> $bath1_5, "bath1_6"=> $bath1_6, "bath1_7"=> $bath1_7, "bath1_8"=> $bath1_8, "bath1_9"=> $bath1_8);

if($bath1_3 == 0){
	
	$sql = "SELECT `alkaline_norm1`, `dateAuto`  
			
			FROM `chemical_lab`.`ec_cleaner233` 
		
			WHERE `alkaline_norm1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath1_3 = floatval($row['alkaline_norm1']);
	$bath1_9 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_1 = array("bath1_1"=> $bath1_1, "bath1_2"=> $bath1_2, "bath1_3"=> $bath1_3, "bath1_4"=> $bath1_4, "bath1_5"=> $bath1_5, "bath1_6"=> $bath1_6, "bath1_7"=> $bath1_7, "bath1_8"=> $bath1_8, "bath1_9"=> $bath1_9);

}

// Free Results
mysqli_free_result($result_1);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_2 = " SELECT `cumulative_area`, `cu_amt`, `sa_amt1`, `etch_rate1`, `sa_add`, `ad1481_add`, `sa_amt2`, `etch_rate2`, `date_auto`
		   
			   FROM `chemical_lab`.`ec_microetch` 
		   
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
	
	$bath2_1 = floatval($row['cumulative_area']);
	$bath2_2 = floatval($row['cu_amt']);
	$bath2_3 = floatval($row['sa_amt1']);
	$bath2_4 = floatval($row['etch_rate1']);
	$bath2_5 = floatval($row['sa_add']);
	$bath2_6 = floatval($row['ad1481_add']);
	$bath2_7 = floatval($row['sa_amt2']);
	$bath2_8 = floatval($row['etch_rate2']);
	$bath2_9 = $row['date_auto'];
	
}

// JSON Data Array 
$data_2 = array("bath2_1"=> $bath2_1, "bath2_2"=> $bath2_2, "bath2_3"=> $bath2_3, "bath2_4"=> $bath2_4, "bath2_5"=> $bath2_5, "bath2_6"=> $bath2_6, "bath2_7"=> $bath2_7, "bath2_8"=> $bath2_8, "bath2_9"=> $bath2_9, "bath2_10"=> $bath2_9);


if($bath2_3 == 0){
	
	$sql = "SELECT `sa_amt1`, `date_auto`  
			
			FROM `chemical_lab`.`ec_microetch` 
		
			WHERE `sa_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath2_3 = floatval($row['sa_amt1']);
	$bath2_10 = date('Y-m-d', strtotime($row['date_auto']));
	
}	

// JSON Data Array 
$data_2 = array("bath2_1"=> $bath2_1, "bath2_2"=> $bath2_2, "bath2_3"=> $bath2_3, "bath2_4"=> $bath2_4, "bath2_5"=> $bath2_5, "bath2_6"=> $bath2_6, "bath2_7"=> $bath2_7, "bath2_8"=> $bath2_8, "bath2_9"=> $bath2_9, "bath2_10"=> $bath2_10);

}

// Free Results
mysqli_free_result($result_2);


$sql_etch = " SELECT `cumulative_area`, `cu_amt`, `sa_amt1`, `etch_rate1`, `sa_add`, `salt_3330`, `sa_amt2`, `etch_rate2`, `date_auto`
		   
			   FROM `chemical_lab`.`ec_microetch_new` 
		   
		       ORDER BY `autoId` DESC
			   
			   LIMIT 1 ";

	// MySQL Query Exection
	$result_etch = mysqli_query($conn,$sql_etch);
	// Number of rows
	$rowcount = mysqli_num_rows($result_etch);
	// Days interval
	//$n1++;

//} while ($rowcount == 0);
	
// Extract the Results
while($row = mysqli_fetch_array($result_etch)) {
	
	$bath_etch_1 = floatval($row['cumulative_area']);
	$bath_etch_2 = floatval($row['cu_amt']);
	$bath_etch_3 = floatval($row['sa_amt1']);
	$bath_etch_4 = floatval($row['etch_rate1']);
	$bath_etch_5 = floatval($row['sa_add']);
	$bath_etch_6 = floatval($row['salt_3330']);
	$bath_etch_7 = floatval($row['sa_amt2']);
	$bath_etch_8 = floatval($row['etch_rate2']);
	$bath_etch_9 = $row['date_auto'];
	
}

// JSON Data Array 
$data_etch = array("bath_etch_1"=> $bath_etch_1, "bath_etch_2"=> $bath_etch_2, "bath_etch_3"=> $bath_etch_3, "bath_etch_4"=> $bath_etch_4, "bath_etch_5"=> $bath_etch_5, "bath_etch_6"=> $bath_etch_6, "bath_etch_7"=> $bath_etch_7, "bath_etch_8"=> $bath_etch_8, "bath_etch_9"=> $bath_etch_9, "bath_etch_10"=> $bath_etch_9);


if($bath_etch_3 == 0){
	
	$sql = "SELECT `sa_amt1`, `date_auto`  
			
			FROM `chemical_lab`.`ec_microetch_new` 
		
			WHERE `sa_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath_etch_3 = floatval($row['sa_amt1']);
	$bath_etch_10 = date('Y-m-d', strtotime($row['date_auto']));
	
}	

// JSON Data Array 
$data_etch = array("bath_etch_1"=> $bath_etch_1, "bath_etch_2"=> $bath_etch_2, "bath_etch_3"=> $bath_etch_3, "bath_etch_4"=> $bath_etch_4, "bath_etch_5"=> $bath_etch_5, "bath_etch_6"=> $bath_etch_6, "bath_etch_7"=> $bath_etch_7, "bath_etch_8"=> $bath_etch_8, "bath_etch_9"=> $bath_etch_9, "bath_etch_10"=> $bath_etch_10);

}

// Free Results
mysqli_free_result($result_etch);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_3 = " SELECT `area_cumulative`, `sa_amt1`, `sa_add`, `sa_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ec_10h2so4` 
		   
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
			
			FROM `chemical_lab`.`ec_10h2so4` 
		
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
	$sql_4 = " SELECT `cumulative_area`, `cu_amt`, `date_auto`
		   
			   FROM `chemical_lab`.`ec_catalystpredip404` 
		   
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
	
	$bath4_1 = floatval($row['cumulative_area']);
	$bath4_2 = floatval($row['cu_amt']);
	$bath4_3 = $row['date_auto'];
	
}

// JSON Data Array 
$data_4 = array("bath4_1"=> $bath4_1, "bath4_2"=> $bath4_2, "bath4_3"=> $bath4_3, "bath4_4"=> $bath4_3);

if($bath4_2 == 0){
	
	$sql = "SELECT `cu_amt`, `date_auto`  
			
			FROM `chemical_lab`.`ec_catalystpredip404` 
		
			WHERE `cu_amt` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath4_2 = floatval($row['cu_amt']);
	$bath4_4 = date('Y-m-d', strtotime($row['date_auto']));
	
}	

// JSON Data Array 
$data_4 = array("bath4_1"=> $bath4_1, "bath4_2"=> $bath4_2, "bath4_3"=> $bath4_3, "bath4_4"=> $bath4_4);

}

// Free Results
mysqli_free_result($result_4);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_5 = " SELECT `area_cumulative`, `pdcl2_amt`, `sncl2_amt1`, `specific_gravity1`, `bath_strength1`, `add_404`, `add_44_litre`, `add_44_ml`, `sncl2_amt2`, `specific_gravity2`, `bath_strength2`, `dateAuto`, `temperature`
		   
			   FROM `chemical_lab`.`ec_catalyst44` 
		   
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
	$bath5_2 = floatval($row['pdcl2_amt']);
	$bath5_3 = floatval($row['sncl2_amt1']);
	$bath5_4 = floatval($row['specific_gravity1']);
	$bath5_5 = floatval($row['bath_strength1']);
	$bath5_6 = floatval($row['add_404']);
	$bath5_7 = floatval($row['add_44_litre']);
	$bath5_8 = floatval($row['add_44_ml']);
	$bath5_9 = floatval($row['sncl2_amt2']);
	$bath5_10 = floatval($row['specific_gravity2']);
	$bath5_11 = floatval($row['bath_strength2']);
	$bath5_12 = $row['dateAuto'];
	$bath5_13 = floatval($row['temperature']);
	
}

// JSON Data Array 
$data_5 = array("bath5_1"=> $bath5_1, "bath5_2"=> $bath5_2, "bath5_3"=> $bath5_3, "bath5_4"=> $bath5_4, "bath5_5"=> $bath5_5, "bath5_6"=> $bath5_6, "bath5_7"=> $bath5_7, "bath5_8"=> $bath5_8, "bath5_9"=> $bath5_9, "bath5_10"=> $bath5_10, "bath5_11"=> $bath5_11, "bath5_12"=> $bath5_12, "bath5_13"=> $bath5_13, "bath5_14"=> $bath5_12);

if($bath5_3 == 0){
	
	$sql = "SELECT `sncl2_amt1`, `specific_gravity1`, `bath_strength1`, `dateAuto`  
			
			FROM `chemical_lab`.`ec_catalyst44` 
		
			WHERE `sncl2_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath5_3 = floatval($row['sncl2_amt1']);
	$bath5_4 = floatval($row['specific_gravity1']);
	$bath5_5 = floatval($row['bath_strength1']);
	$bath5_14 = date('Y-m-d', strtotime($row['dateAuto']));
	
}	

// JSON Data Array 
$data_5 = array("bath5_1"=> $bath5_1, "bath5_2"=> $bath5_2, "bath5_3"=> $bath5_3, "bath5_4"=> $bath5_4, "bath5_5"=> $bath5_5, "bath5_6"=> $bath5_6, "bath5_7"=> $bath5_7, "bath5_8"=> $bath5_8, "bath5_9"=> $bath5_9, "bath5_10"=> $bath5_10, "bath5_11"=> $bath5_11, "bath5_12"=> $bath5_12, "bath5_13"=> $bath5_13, "bath5_14"=> $bath5_14);

}
// Free Results
mysqli_free_result($result_5);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_6 = " SELECT `cumulative_area`, `cu_amt1`, `acid_norm_amt1`, `accelerator19_add`, `cu_amt2`, `acid_norm_amt2`, `date_auto`
		   
			   FROM `chemical_lab`.`ec_accelerator19` 
		   
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
	
	$bath6_1 = floatval($row['cumulative_area']);
	$bath6_2 = floatval($row['cu_amt1']);
	$bath6_3 = floatval($row['acid_norm_amt1']);
	$bath6_4 = floatval($row['accelerator19_add']);
	$bath6_5 = floatval($row['cu_amt2']);
	$bath6_6 = floatval($row['acid_norm_amt2']);
	$bath6_7 = $row['date_auto'];
	
}

// JSON Data Array 
$data_6 = array("bath6_1"=> $bath6_1, "bath6_2"=> $bath6_2, "bath6_3"=> $bath6_3, "bath6_4"=> $bath6_4, "bath6_5"=> $bath6_5, "bath6_6"=> $bath6_6, "bath6_7"=> $bath6_7, "bath6_8"=> $bath6_7);


if($bath6_2 == 0){
	
	$sql = "SELECT `cu_amt1`, `acid_norm_amt1`, `date_auto`  
			
			FROM `chemical_lab`.`ec_accelerator19` 
		
			WHERE `cu_amt1` IS NOT NULL 
			
			ORDER BY `autoId` DESC LIMIT 1";
			
	$result = mysqli_query($conn,$sql);		

while($row = mysqli_fetch_array($result)) {
	
	$bath6_2 = floatval($row['cu_amt1']);
	$bath6_3 = floatval($row['acid_norm_amt1']);
	$bath6_8 = date('Y-m-d', strtotime($row['date_auto']));
	
}	

// JSON Data Array 
$data_6 = array("bath6_1"=> $bath6_1, "bath6_2"=> $bath6_2, "bath6_3"=> $bath6_3, "bath6_4"=> $bath6_4, "bath6_5"=> $bath6_5, "bath6_6"=> $bath6_6, "bath6_7"=> $bath6_7, "bath6_8"=> $bath6_8);

}

// Free Results
mysqli_free_result($result_6);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_7 = " SELECT `cumulative_area`, `specific_gravity`, `edta_analysis1`, `m250_add`, `edta_analysis2`, `date_auto`, `temperature`
		   
			   FROM `chemical_lab`.`ec_copperbath` 
		   
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
	
	$bath7_1 = floatval($row['cumulative_area']);
	$bath7_2 = floatval($row['specific_gravity']);
	$bath7_3 = floatval($row['edta_analysis1']);
	$bath7_4 = floatval($row['m250_add']);
	$bath7_5 = floatval($row['edta_analysis2']);
	$bath7_6 = $row['date_auto'];
	$bath7_7 = floatval($row['temperature']);
	
}

// JSON Data Array 
$data_7 = array("bath7_1"=> $bath7_1, "bath7_2"=> $bath7_2, "bath7_3"=> $bath7_3, "bath7_4"=> $bath7_4, "bath7_5"=> $bath7_5, "bath7_6"=> $bath7_6, "bath7_7"=> $bath7_7);

// Free Results
mysqli_free_result($result_7);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$n1 = 0;

//$rowcount = 0;

//do {
	// 
	$sql_8 = " SELECT `area_cumulative`, `sa_amt1`, `sa_add`, `sa_amt2`, `dateAuto`
		   
			   FROM `chemical_lab`.`ec_5h2so4` 
		   
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
			
			FROM `chemical_lab`.`ec_5h2so4` 
		
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
	$sql_9 = " SELECT `area_cumulative`, `dateAuto`, `temperature`
		   
			   FROM `chemical_lab`.`ec_antitarnish` 
		   
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
	$bath9_2 = $row['dateAuto'];
	$bath9_3 = $row['temperature'];
	
}

// JSON Data Array 
$data_9 = array("bath9_1"=> $bath9_1, "bath9_2"=> $bath9_2, "bath9_3"=> $bath9_3);

// Free Results
mysqli_free_result($result_9);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Close MySQL DB Connection
mysqli_close($conn);

// Array Creation
$data = array($data_afr2, $data_1, $data_2, $data_etch, $data_3, $data_4, $data_5, $data_6, $data_7, $data_8, $data_9);


// JSON Data
echo json_encode($data)

?>
