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
                            <a data-toggle="tab" href="#enig_main">ENIG Plating</a>
							
                        </li>
	</ul>
	
	<ul class="nav navbar-nav" style="font-size: 18px;">
						
		<li>
			<a style="color: #f12b6b;">DOC.NO&nbsp;&nbsp;-&nbsp;&nbsp;MP-FM-CMR-ENIG-01&nbsp;,&nbsp;V-1.0&nbsp;,&nbsp;&nbsp;17/08/2020 &nbsp;</a>
			
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



<!----------------------------------------------ENIG Main-------------------------------------------------->

<div class="tab-pane fade in active" id="enig_main">
	
		<h3 class="imgbor" align="center">Electroless Nickel Immersion Gold Plating</h3>
		<div class="row" style="padding-top:10px;">
			<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Acid Cleaner</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									
                                    <span class="pull-right" id="sparkline51">&nbsp;</span>
								
									<script id="template_51" type="x-tmpl-mustache">
										<p>As On Date : {{bath1_4}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath1_1}} m<sup>2</sup></li>
											<li>Acid Cleaner FR : {{bath1_2}} ml</li>
											<li>Temperature : {{bath1_3}} <sup>o</sup>C</li>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_51">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_51"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 750 m<sup>2</sup></li>
										<li>Temperature : 40 - 45 <sup>o</sup>C</li>
										<br>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/enig_acidcleaner.html" target="_blank">
							<span class="pull-right">Acid Cleaner - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Micro Etch</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									
                                    <span class="pull-right" id="sparkline52">&nbsp;</span>
								
									<script id="template_52" type="x-tmpl-mustache">
										<p>As On Date : {{bath2_10}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath2_1}} m<sup>2</sup></li>
											<li>Copper ( Cu ) : {{bath2_2}} g/L , Date : {{bath2_11}}</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath2_3}} ml/L</li>
											<li>Etch Rate : {{bath2_4}} &micro;m</li>
											<li>Sulphuric Acid Addition ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath2_5}} L</li>
											<li>Securiganth Addition : {{bath2_6}} g</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath2_7}} ml/L</li>
											<li>Etch Rate : {{bath2_8}} &micro;m</li>
											<li>Temperature : {{bath2_9}} <sup>o</sup>C</li>
										</ul>
									</script>
									
									<div id="target_52">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_52"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper ( Cu ) : &lt; 10 g/L</li>
										<li>Temperature : 32 - 38 <sup>o</sup>C</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 25 - 50 ml/L</li>
										<li>Etch Rate : 1.0 - 2.0 &micro;m</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/enig_microetch.html" target="_blank">
							<span class="pull-right">Micro Etch - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Auro Dip</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									
                                    <span class="pull-right" id="sparkline53">&nbsp;</span>
								
									<script id="template_53" type="x-tmpl-mustache">
										<p>As On Date : {{bath3_3}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath3_1}} m<sup>2</sup></li>
											<li>Temperature : {{bath3_2}} <sup>o</sup>C</li>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_53">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_53"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 60 m<sup>2</sup></li>
										<li>Temperature : 70 - 80 <sup>o</sup>C</li>
										<br>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/enig_aurodip.html" target="_blank">
							<span class="pull-right">Auro Dip - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		
		</div>
		<div class="row" style="padding-top:10px;">
			<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Predip</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									
                                    <span class="pull-right" id="sparkline54">&nbsp;</span>
								
									<script id="template_54" type="x-tmpl-mustache">
										<p>As On Date : {{bath4_2}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath4_1}} m<sup>2</sup></li>
										</ul>
									</script>
									
									<div id="target_54">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_54"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 60 m<sup>2</sup></li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/enig_predip.html" target="_blank">
							<span class="pull-right">Predip - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Activator</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									
                                    <span class="pull-right" id="sparkline55">&nbsp;</span>
								
									<script id="template_55" type="x-tmpl-mustache">
										<p>As On Date : {{bath5_2}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath5_1}} MTO ( Metal Turn - Over )</li>
										</ul>
									</script>
									
									<div id="target_55">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_55"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 5 MTO ( Metal Turn - Over )</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/enig_activator.html" target="_blank">
							<span class="pull-right">Activator - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Postdip</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									
                                    <span class="pull-right" id="sparkline56">&nbsp;</span>
								
									<script id="template_56" type="x-tmpl-mustache">
										<p>As On Date : {{bath6_2}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath6_1}} m<sup>2</sup></li>
										</ul>
									</script>
									
									<div id="target_56">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_56"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 60 m<sup>2</sup></li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/enig_postdip.html" target="_blank">
							<span class="pull-right">Postdip - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
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
					<div class="panel-title" align="center">Nickel Bath</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									
                                    <span class="pull-right" id="sparkline57">&nbsp;</span>
								
									<script id="template_57" type="x-tmpl-mustache">
										<p>As On Date : {{bath7_9}}</p>
										<hr />
										<ul>
											<li>Addition of Part - A : {{bath7_1}} ml</li>
											<li>Panel Area Processed : {{bath7_2}} MTO ( Metal Turn - Over )</li>
											<li>Addition of Ammonia ( NH<sub>3</sub> ) : {{bath7_3}} ml</li>
											<li>Temperature : {{bath7_4}} <sup>o</sup>C</li>
											<li>pH Analysis : {{bath7_5}} </li>
											<li>Nickel ( Ni ) Analysis : {{bath7_6}} </li>
											<li>pH Analysis : {{bath7_7}} </li>
											<li>Nickel ( Ni ) Analysis : {{bath7_8}} </li>
										</ul>
									</script>
									
									<div id="target_57">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_57"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 6 MTO ( Metal Turn - Over )</li>
										<li>pH : 4.8 - 5.1</li>
										<li>Nickel ( Ni ) : 5.7 - 6.3 g/L</li>
										<li>Temperature : 80 - 90 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/enig_nickelbath.html" target="_blank">
							<span class="pull-right">Nickel Bath - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Gold Bath</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									
                                    <span class="pull-right" id="sparkline58">&nbsp;</span>
								
									<script id="template_58" type="x-tmpl-mustache">
										<p>As On Date : {{bath8_6}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath8_1}} m<sup>2</sup></li>
											<li>Panel Area Processed : {{bath8_2}} MTO ( Metal Turn - Over )</li>
											<li>Addition of Gold Potassium Cyanide : {{bath8_3}}</li>
											<li>pH Analysis : {{bath8_4}} </li>
											<li>Temperature : {{bath8_5}} <sup>o</sup>C</li>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_58">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_59"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 1970 m<sup>2</sup></li>
										<li>Panel Area Processed: &lt; 11 MTO ( Metal Turn - Over)</li>
										<li>pH: 4.4 - 5.4</li>
										<li>Temperature: 80 - 90 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/enig_goldbath.html" target="_blank">
							<span class="pull-right">Gold Bath - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		
		
		</div>
</div>
<!--------------------------------------------------------------------------------------------------------->


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