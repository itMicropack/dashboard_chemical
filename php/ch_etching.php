<!--	
	Created For Micropack Private Limited
	Version : 
	Purpose : 
	Requirements : 
	Date : 
	Last Edit Date :
-->

<!DOCTYPE html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
		<meta name="description" content=" Chemical Data Analysis ">
		<meta name="author" content="Arun Danegoudar & Devesh N.">
		<meta name="keywords" content="" />
		<title> Chemical Data Analysis </title>
		

		<!-- Bootstrap CSS -->
		<link href="../components/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Custom styles for this template -->
		<link href="../css/style.css" rel="stylesheet"/>
		
		<!-- MetisMenu CSS -->
		<link href="../components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
		
		
		<!-- Font Awesome CSS file -->
		<link rel="stylesheet" href="../components/fontawesome/css/font-awesome.min.css">
		
		<!-- iCheck Plugin-->
		<link href="../components/icheck/skins/all.css" rel="stylesheet">
		
		<!-- c3 CSS -->
		<link href="../components/c3js/c3.min.css" rel="stylesheet">
		


<style>
	.navbar-default {
		background-color: #4cccf2;
    
	}
	
	.imgbor {
		border: 1px;
		background-color: #5a2a5a;
		color:#fff;
		padding:6px;
		border-radius: 4px;
	}
	
	.main_page {
		padding-top:50px;
		padding-left:15px;
		padding-right:15px;
	}
	
	a {
		color: #000000;
	}
	
	.jqstooltip {
			box-sizing: content-box;
	}
	
	.panel-footer {
		background-color: #bdbdbd;
	}
	
	#return-to-top {
		position: fixed;
		bottom: 20px;
		right: 20px;
		background: #bdbdbd;
		
		opacity: .8;
		width: 50px;
		height: 50px;
		display: block;
		z-index:1;
		text-decoration: none;
		-webkit-border-radius: 35px;
		-moz-border-radius: 35px;
		border-radius: 35px;
		display: none;
		-webkit-transition: all 0.3s linear;
		-moz-transition: all 0.3s ease;
		-ms-transition: all 0.3s ease;
		-o-transition: all 0.3s ease;
		transition: all 0.3s ease;
	}
	
	#return-to-top i {
		color: #fff;
		margin: 0;
		position: relative;
		left: 16px;
		top: 13px;
		font-size: 19px;
		-webkit-transition: all 0.3s ease;
		-moz-transition: all 0.3s ease;
		-ms-transition: all 0.3s ease;
		-o-transition: all 0.3s ease;
		transition: all 0.3s ease;
	}
	
	#return-to-top:hover {
		background: rgba(0, 0, 0, 0.9);
	}
	
	#return-to-top:hover i {
		color: #fff;
		top: 5px;
	}
	
	.navbar .navbar-nav {
		display: inline-block;
		float: none;
		vertical-align: top;
   }

    .navbar .navbar-collapse {
        text-align: center;
    }
	
	
	
</style>



</head>
<body style="background-color:#dcedc8">

<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

<!--------------------------------------------------------------------------------------------------------->
<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container-fluid">  
	<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav navbar-left">
						
    <li>
						
        <a  href="">Etching</a>
							
    </li>
						
												
    </ul>
	
	<ul class="nav navbar-nav" style="font-size: 18px;">
						
		<li>
			<a style="color: #f12b6b;">DOC.NO&nbsp;&nbsp;-&nbsp;&nbsp;MP-FM-CMR-ETCH-01&nbsp;,&nbsp;V-1.0&nbsp;,&nbsp;&nbsp;17/08/2020 &nbsp;</a>
			
		</li>
						
	</ul>
	
	<ul class="nav navbar-nav navbar-right">
		<li><a href="home.php"><i class="fa fa-home"></i> &nbsp;Home</a></li>
		<li><a style="color:black"><i class="fa fa-calendar"></i> &nbsp;<?php echo date("l d/m/20y"); ?></a></li>
	</ul>
    </div>        
  </div>  
</nav>

<!--------------------------------------------------------------------------------------------------------->

<div class="main_page tab-content">


<!---------------------------------------------Etching Main------------------------------------------------>

<div class="tab-pane fade in active" id="etching_main">
	
		<h3 class="imgbor" align="center">Etching</h3>
		<div class="row" style="padding-top:10px;">
			<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Inner Layer Etching</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									
                                    <span class="pull-right" id="sparkline61">&nbsp;</span>
								
									<script id="template_61" type="x-tmpl-mustache">
										<p>As On Date : {{bath1_10}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath1_1}} m<sup>2</sup></li>
											<li>Temperature : {{bath1_2}} <sup>o</sup>C</li>
											<li>Density : {{bath1_3}} Baume</li>
											<li>Chambers Spray Pressure - Top : {{bath1_4}} psi</li>
											<li>Chambers Spray Pressure - Bottom : {{bath1_5}} psi</li>
											<li>ORP : {{bath1_6}} mv</li>
											<li>Addition of Hydrogen Chloride ( HCl ) : {{bath1_7}} L</li>
											<li>Addition of CE - 48 : {{bath1_8}}</li>
											<li>ORP : {{bath1_9}} mv</li>
										</ul>
									</script>
									
									<div id="target_61">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_61"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 1000 m<sup>2</sup></li>
										<li>Temperature : 45 - 55 <sup>o</sup>C</li>
										<li>Density : 28 - 34 Baume</li>
										<li>Chambers Spray Pressure - Top : 25 - 35 psi</li>
										<li>Chambers Spray Pressure - Bottom : 10 - 20 psi</li>
										<li>ORP : 460 - 560 mv</li>
										<br>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/etch_innerlayer.html" target="_blank">
							<span class="pull-right">Inner Layer Etching - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Inner Layer Resist Stripping</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									
                                    <span class="pull-right" id="sparkline62">&nbsp;</span>
								
									<script id="template_62" type="x-tmpl-mustache">
										<p>As On Date : {{bath2_3}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath2_1}} m<sup>2</sup></li>
											<li>Temperature : {{bath2_2}} <sup>o</sup>C</li>
											<li>Addition Of Resist Stripper : {{bath2_4}}</li>
											<li>pH : {{bath2_5}}</li>
											<li>Chambers Spray Pressure - Top : {{bath2_6}} bar</li>
											<li>Chambers Spray Pressure - Bottom : {{bath2_7}} bar</li>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_62">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_62"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 250 m<sup>2</sup></li>
										<li>Temperature : 46 - 57 <sup>o</sup>C</li>
										<li>pH : 8 - 12</li>
										<li>Chambers Spray Pressure - Top : 2 - 3 bar</li>
										<li>Chambers Spray Pressure - Bottom : 2 - 3 bar</li>
										<br>
										<br>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/etch_ilrsp.html" target="_blank">
							<span class="pull-right">Inner Layer Resist Stripping - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Outer Layer Etching</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									
                                    <span class="pull-right" id="sparkline63">&nbsp;</span>
								
									<script id="template_63" type="x-tmpl-mustache">
										<p>As On Date : {{bath3_9}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath3_1}} m<sup>2</sup></li>
											<li>Temperature : {{bath3_2}} <sup>o</sup>C</li>
											<li>Density : {{bath3_3}} Baume</li>
											<li>Chambers Spray Pressure - Top : {{bath3_4}} psi</li>
											<li>Chambers Spray Pressure - Bottom : {{bath3_5}} psi</li>
											<li>pH : {{bath3_6}} mv</li>
											<li>Copper ( Cu ) : {{bath3_7}} gm/L</li>
											<li>Chloride ( Cl ) : {{bath3_8}} Molarity</li>
											<br>
										</ul>
									</script>
									
									<div id="target_63">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_63"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 1500 m<sup>2</sup></li>
										<li>Temperature : 46 - 54 <sup>o</sup>C</li>
										<li>Density : 22 - 26 Baume</li>
										<li>Chambers Spray Pressure - Top : 30 - 40 psi</li>
										<li>Chambers Spray Pressure - bottom : 30 - 40 psi</li>
										<li>pH : 8.2 - 8.8</li>
										<li>Copper ( Cu ) : 140 - 170 gm/L</li>
										<li>Chloride ( Cl ) : 5 - 5.8 Molarity</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/etch_outerlayer.html" target="_blank">
							<span class="pull-right">Outer Layer Etching - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		
		</div>
		<div class="row" style="padding-top:10px;">
			<div class="col-md-2"></div>
			<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Tin Stripping</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									
                                    <span class="pull-right" id="sparkline64">&nbsp;</span>
								
									<script id="template_64" type="x-tmpl-mustache">
										<p>As On Date : {{bath4_3}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath4_1}} m<sup>2</sup></li>
											<li>Temperature : {{bath4_4}} <sup>o</sup>C</li>
											<li>Specific Gravity : {{bath4_2}}</li>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_64">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
							<div class="col-xs-6">
								<!-- Gauge Chart -->
								<div id="chart_64"></div>
							</div>
							<div class="col-xs-6">
								<!-- Gauge Chart -->
								<div id="chart_64b"></div>
							</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 200 m<sup>2</sup></li>
										<li>Temperature : 26 - 37<sup>o</sup>C</li>
										<li>Specific Gravity : &lt; 1.30</li>
										<br>
										<br>
										<br>
										<br>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/etch_tinstrip.html"  target="_blank">
							<span class="pull-right">Tin Stripping - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Outer Layer Resist Stripping</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									
                                    <span class="pull-right" id="sparkline66">&nbsp;</span>
								
									<script id="template_66" type="x-tmpl-mustache">
										<p>As On Date : {{bath6_7}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath6_1}} m<sup>2</sup></li>
											<li>pH : {{bath6_2}}</li>
											<li>Temperature ( ADF 30 ) : {{bath6_3}} <sup>o</sup>C</li>
											<li>Temperature ( Micro Strip 1 ) : {{bath6_3b}} <sup>o</sup>C</li>
											<li>Chambers 1 Spray - Top : {{bath6_4t}} psi</li>
											<li>Chambers 1 Spray - Bottom : {{bath6_4b}} psi</li>
											<li>Chambers 2 Spray - Top : {{bath6_5t}} psi</li>
											<li>Chambers 2 Spray - Bottom : {{bath6_5b}} psi</li>
											<li>Addition of Resist Stripper : {{bath6_6}} L</li>
										</ul>
									</script>
									
									<div id="target_66">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_66"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 450 m<sup>2</sup></li>
										<li>Temperature ( ADF 30 ) : 46 - 57 <sup>o</sup>C</li>
										<li>Temperature ( Micro Strip 1 ) : 43 - 54 <sup>o</sup>C</li>
										<li>Chambers 1 Spray - Top : 20 - 30 psi</li>
										<li>Chambers 1 Spray - Bottom : 20 - 30 psi</li>
										<li>Chambers 2 Spray - Top : 20 - 30 psi</li>
										<li>Chambers 2 Spray - Bottom : 20 - 30 psi</li>
										<li>pH : 8 - 12</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/etch_olrstp.html" target="_blank">
							<span class="pull-right">Outer Layer Resist Stripping - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		</div>
</div>

<!--------------------------------------------------------------------------------------------------------->

</div>
<!-- jQuery -->
<script src="../components/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../components/bootstrap/js/bootstrap.min.js"></script>	
	
<!-- Metis Menu Plugin JavaScript -->
<script src="../components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Black Oxide JavaScript -->
<script src="../js/index_bo_main.js"></script>

<!-- Electroless Copper JavaScript-->
<script src="../js/index_ec_main.js"></script>

<!-- Electro Plating JavaScript-->
<script src="../js/index_ep_main.js"></script>

<!-- Desmear JavaScript-->
<script src="../js/index_desmear_main.js"></script>

<!-- ENIG JavaScript-->
<script src="../js/index_enig_main.js"></script>

<!-- Etching JavaScript-->
<script src="../js/index_etching_main.js"></script>

<script src="../components/c3js/c3.min.js"></script>
<script src="../components/c3js/d3.min.js"></script>

<script src="../components/mustache/mustache.min.js"></script>
	
<script src="../components/sparklines/jquery.sparkline.min.js"></script>

<script>
	//-----------------------------Scroll to Top-------------------------------// 
	$(window).scroll(function() {
		if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
			$('#return-to-top').fadeIn(200);    // Fade in the arrow
		} else {
			$('#return-to-top').fadeOut(200);   // Else fade out the arrow
		}
	});
	$('#return-to-top').click(function() {      // When arrow is clicked
		$('body,html').animate({
			scrollTop : 0                       // Scroll to top of body
		}, 1000);
	});

	$(document).ready(function () {
		
		current_data_bo_main();
		current_data_ec_main();
		current_data_ep_main();
		current_data_desmear_main();
		current_data_enig_main();
		current_data_etching_main();
	
	});
		
	//------------------------- For Black Oxide Main -------------------------//
	
	$(document).ready(function () {
	
	$.ajax({
		method: "GET",
		url: "../php/basic_cleaner7.php",
		cache: false
	}).done(function(data1) {
		// Parsing Data JSON
		var data_1 = [];
		data_1 = JSON.parse(data1);
		// alert(data_1);
		//data_1 = [587.22,614.55,650.81,672.79,700.16,734.48,761.33,804.88,842.31,875.51,909.19,953.26,994.97,1031.79,1031.79];
 		$("#sparkline1").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 1500,
			//colorMap: ['white'],
			//height: '50',
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/micro_etch7.php",
		cache: false
	}).done(function(data1) {
		// Parsing Data JSON
		var data_1 = [];
		data_1 = JSON.parse(data1);
		// alert(data_1);
		//data_1 = [587.22,614.55,650.81,672.79,700.16,734.48,761.33,804.88,842.31,875.51,909.19,953.26,994.97,1031.79,1031.79];
 		$("#sparkline2").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 15,
			//colorMap: ['white'],
			//height: '50',
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Copper Amount',
			tooltipSuffix:' g/L'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/predip4.php",
		cache: false
	}).done(function(data1) {
		// Parsing Data JSON
		var data_1 = [];
		data_1 = JSON.parse(data1);
		// alert(data_1);
		//data_1 = [587.22,614.55,650.81,672.79,700.16,734.48,761.33,804.88,842.31,875.51,909.19,953.26,994.97,1031.79,1031.79];
 		$("#sparkline3").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 500,
			//colorMap: ['white'],
			//height: '50',
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});

	
	
	$.ajax({
		method: "GET",
		url: "../php/black_oxide8.php",
		cache: false
	}).done(function(data1) {
		// Parsing Data JSON
		var data_1 = [];
		data_1 = JSON.parse(data1);
		// alert(data_1);
		//data_1 = [587.22,614.55,650.81,672.79,700.16,734.48,761.33,804.88,842.31,875.51,909.19,953.26,994.97,1031.79,1031.79];
 		$("#sparkline4").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 4000,
			//colorMap: ['white'],
			//height: '50',
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});

	
	
	$.ajax({
		method: "GET",
		url: "../php/reducer_predip4.php",
		cache: false
	}).done(function(data1) {
		// Parsing Data JSON
		var data_1 = [];
		data_1 = JSON.parse(data1);
		// alert(data_1);
		//data_1 = [587.22,614.55,650.81,672.79,700.16,734.48,761.33,804.88,842.31,875.51,909.19,953.26,994.97,1031.79,1031.79];
 		$("#sparkline5").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 100,
			//fillColor: '#00FF00',
			//colorMap: ['white'],
			//height: '50',
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});

	
	
	$.ajax({
		method: "GET",
		url: "../php/reducer_sr8.php",
		cache: false
	}).done(function(data1) {
		// Parsing Data JSON
		var data_1 = [];
		data_1 = JSON.parse(data1);
		// alert(data_1);
		//data_1 = [587.22,614.55,650.81,672.79,700.16,734.48,761.33,804.88,842.31,875.51,909.19,953.26,994.97,1031.79,1031.79];
 		$("#sparkline6").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 3000,
			//colorMap: ['white'],
			//height: '50',
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	//----------------------For Electroless Copper Main-----------------------//
	
	$.ajax({
		method: "GET",
		url: "../php/ec_acidcleanerafr2_6.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline_afr2").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 1000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	$.ajax({
		method: "GET",
		url: "../php/ec_cleaner233_6.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline21").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 1800,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});

		
	$.ajax({
		method: "GET",
		url: "../php/ec_microetch_7.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline22").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 15,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Copper Amount',
			tooltipSuffix:' g/L'}
		);
	});
	
	$.ajax({
		method: "GET",
		url: "../php/ec_microetch_new_7.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline_etch").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 15,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Copper Amount',
			tooltipSuffix:' g/L'}
		);
	});
		
	$.ajax({
		method: "GET",
		url: "../php/ec_10h2so4_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline23").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 500,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});

		
	$.ajax({
		method: "GET",
		url: "../php/ec_catalystpredip404_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline24").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 500,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});

		
	$.ajax({
		method: "GET",
		url: "../php/ec_catalyst44_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline25").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 36000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});

		
	$.ajax({
		method: "GET",
		url: "../php/ec_accelerator19_6.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline26").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 720,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});

		
	$.ajax({
		method: "GET",
		url: "../php/ec_5h2so4_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline28").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 500,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});

		
	$.ajax({
		method: "GET",
		url: "../php/ec_antitarnish_4.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline29").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 180,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	//---------------------For Electro Plating Main----------------------//
	$.ajax({
		method: "GET",
		url: "../php/ep_acidcleanerafr2_6.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline31").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 3000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	$.ajax({
		method: "GET",
		url: "../php/ep_acidcleaner_hcp_6.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline_hcp").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 3000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/ep_microetch_8.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline32a").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 3000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/ep_microetch_9.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline32b").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 40,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Copper Amount',
			tooltipSuffix:' g/L'}
		);
	});
	
	$.ajax({
		method: "GET",
		url: "../php/ep_microetch_new_8.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline_etch_ep").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 3000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	$.ajax({
		method: "GET",
		url: "../php/ep_microetch_new_7.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline_etch_ep_2").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 15,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Copper Amount',
			tooltipSuffix:' g/L'}
		);
	});
	
	
	$.ajax({
		method: "GET",
		url: "../php/ep_12h2so4_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline33").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 1000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	

	$.ajax({
		method: "GET",
		url: "../php/ep_10h2so4_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline38").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 1000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	//-------------------------For Desmear Main--------------------------//
	
	$.ajax({
		method: "GET",
		url: "../php/ds_holeconditioner211_7.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline41").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 3000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/ds_promoterbath_10.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline42").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 20000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/ds_neutralizer3314_7.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline43").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 20,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Copper Area',
			tooltipSuffix:' g/L'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/ds_mglassetch_9.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline44a").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 2700,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	

	$.ajax({
		method: "GET",
		url: "../php/ds_mglassetch_10.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline44b").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 1500,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Copper Area',
			tooltipSuffix:' ppm'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/ds_10h2so4_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline45").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 500,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/ds_neutralizer3316_8.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline43").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 20,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Copper Area',
			tooltipSuffix:' g/L'}
		);
	});
	//--------------------------For ENIG Main---------------------------//
	$.ajax({
		method: "GET",
		url: "../php/enig_acidcleaner_6.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline51").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 750,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/enig_microetch_8.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline52").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 200,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/enig_aurodip_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline53").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 60,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Panel Area Processed',
			tooltipSuffix:' g/L'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/enig_predip_4.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline54").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 60,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	
	$.ajax({
		method: "GET",
		url: "../php/enig_activator_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline55").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 5,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Panel Area Processed',
			tooltipSuffix:' MTO'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/enig_postdip_4.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline56").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 60,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/enig_nickelbath_7.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline57").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 6,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Panel Area Processed',
			tooltipSuffix:' MTO'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/enig_goldbath_8.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline58").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 11,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Panel Area Processed',
			tooltipSuffix:' MTO'}
		);
	});
	
	//-------------------------For Etching Main-------------------------//
	
	$.ajax({
		method: "GET",
		url: "../php/etch_innerlayer_9.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline61").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 1000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/etch_ilrsp_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline62").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 250,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/etch_outerlayer_11.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline63").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 1500,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Panel Area Processed',
			tooltipSuffix:' g/L'}
		);
	});
	
	
	
	$.ajax({
		method: "GET",
		url: "../php/etch_tinstrip_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline64").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 1.3,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Specific Gravity'
			} //,
			//tooltipSuffix:' m²'}
		);
	});
	
	
	
	$.ajax({
		method: "POST",
		url: "../php/etch_olrsp_main.php",
		data: {'data_info' : {Month: '', Year: ''}, 'action' : 'graph_7'},
		//dataType: 'json',
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline66").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 450,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	});
</script>


</body>
</html>