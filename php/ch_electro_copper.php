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
	<div class="collapse navbar-collapse navbar-" id="myNavbar">
	<ul class="nav navbar-nav navbar-left">
						
                       
						
						<li>
                            <a href="">Electroless Copper</a>
							
                        </li>
						
						
												
    </ul>
	
	<ul class="nav navbar-nav" style="font-size: 18px;">
						
		<li>
			<a style="color: #f12b6b;">DOC.NO&nbsp;&nbsp;-&nbsp;&nbsp;MP-FM-CMR-ELPT1-01&nbsp;,&nbsp;V-1.0&nbsp;,&nbsp;&nbsp;17/08/2020 &nbsp;</a>
			
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



<!---------------------------------------Electroless Copper Main------------------------------------------->

<div class="tab-pane fade in active" id="ec_main">
	
		<h3 class="imgbor" align="center">Electroless Copper</h3>
		<div class="row" style="padding-top:10px;">
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">EVP 221C</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline_afr2">&nbsp;</span>
								
									<script id="template_afr2" type="x-tmpl-mustache">
										<p>As On Date : {{bath_afr2_6}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath_afr2_1}} m<sup>2</sup></li>
											<li>Cleaner : {{bath_afr2_2}} ml/L</li>
											<li>Cleaner Addition : {{bath_afr2_3}} L</li>
											<li>Cleaner : {{bath_afr2_4}} ml/L</li>
											<li>Temperature : {{bath_afr2_5}} <sup>o</sup>C</li>
											<br>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_afr2">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_afr2"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 900 m &plusmn; 100 m<sup>2</sup></li>
										<li>Cleaner : 1.7N - 2.1N</li>
										<li>Temperature : 35 - 45 <sup>o</sup>C</li>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ec_cleaner_afr2.html" target="_blank">
								<span class="pull-right">Cleaner - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
								<div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Cleaner - 233</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline21">&nbsp;</span>
								
									<script id="template_21" type="x-tmpl-mustache">
										<p>As On Date : {{bath1_7}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath1_1}} m<sup>2</sup></li>
											<li>pH : {{bath1_2}}</li>
											<li>Alkaline Normality : {{bath1_3}} N , Date : {{bath1_9}}</li>
											<li>Cleaner - 233 Addition : {{bath1_4}} L</li>
											<li>pH : {{bath1_5}}</li>
											<li>Alkaline Normality : {{bath1_6}} N</li>
											<li>Temperature : {{bath1_8}} <sup>o</sup>C</li>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_21">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_21"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 1800 m<sup>2</sup></li>
										<li>pH : 9.5 - 11.0</li>
										<li>Alkaline Normality : 0.07 - 0.11 N</li>
										<li>Temperature: 40 - 50 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ec_cleaner233.html" target="_blank">
							<span class="pull-right">Cleaner 233 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<!--div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Micro Etch</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline22">&nbsp;</span>
								
									<script id="template_22" type="x-tmpl-mustache">
										<p>As On Date : {{bath2_9}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath2_1}} m<sup>2</sup></li>
											<li>Copper ( Cu ) : {{bath2_2}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath2_3}} ml/L , Date : {{bath2_10}} </li>
											<li>Etch Rate : {{bath2_4}} &micro;m</li>
											<li>Sulphuric Acid Addition ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath2_5}} L</li>
											<li>AD 1481 Addition : {{bath2_6}} Kg</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath2_7}} ml/L</li>
											<li>Etch Rate : {{bath2_8}} &micro;m</li>
											<br>
										</ul>
									</script>
									
									<div id="target_22">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
						<!--			<div id="chart_22"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper ( Cu ) : &lt; 15 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 1% &plusmn; 0.5%</li>
										<li>Etch Rate : 1.0 - 1.5 &micro;m</li>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ec_microetch.html" target="_blank">
							<span class="pull-right">Micro Etch - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div-->
		
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Micro Etch</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline_etch">&nbsp;</span>
								
									<script id="template_etch" type="x-tmpl-mustache">
										<p>As On Date : {{bath_etch_9}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath_etch_1}} m<sup>2</sup></li>
											<li>Copper ( Cu ) : {{bath_etch_2}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath_etch_3}} ml/L , Date : {{bath_etch_10}} </li>
											<li>Etch Rate : {{bath_etch_4}} &micro;m</li>
											<li>Sulphuric Acid Addition ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath_etch_5}} L</li>
											<li>Chemical Addition : {{bath_etch_6}} Kg</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath_etch_7}} ml/L</li>
											<li>Etch Rate : {{bath_etch_8}} &micro;m</li>
											<br>
										</ul>
									</script>
									
									<div id="target_etch">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_etch"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper ( Cu ): &lt; 15 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 1% &plusmn; 0.2%</li>
										<li>Etch Rate : 1.0 - 1.5 &micro;m</li>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ec_microetch_new.html" target="_blank">
							<span class="pull-right">Micro Etch - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
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
					<div class="panel-title" align="center">10% H<sub>2</sub>SO<sub>4</sub></div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline23">&nbsp;</span>
								
									<script id="template_23" type="x-tmpl-mustache">
										<p>As On Date : {{bath3_5}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath3_1}} m<sup>2</sup></li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath3_2}} , Date : {{bath3_6}}</li>
											<li>Sulphuric Acid Addition ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath3_3}} L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath3_4}} ml/L</li>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											
										</ul>
									</script>
									
									<div id="target_23">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_23"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 500 m<sup>2</sup></li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 10% &plusmn; 2%</li>
										<br>
										<br>
										<br>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ec_10h2so4.html" target="_blank">
							<span class="pull-right">10% H<sub>2</sub>SO<sub>4</sub> - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Catalyst Predip - 404</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline24">&nbsp;</span>
								
									<script id="template_24" type="x-tmpl-mustache">
										<p>As On Date : {{bath4_3}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath4_1}} m<sup>2</sup></li>
											<li>Copper ( Cu ) : {{bath4_2}} ml/L , Date : {{bath4_4}}</li>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											
										</ul>
									</script>
									
									<div id="target_24">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_24"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 1000 m<sup>2</sup></li>
										<li>Basic Cleaner : &lt; 1 g/L</li>
										<br>
										<br>
										<br>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ec_catalystpredip404.html" target="_blank">
							<span class="pull-right">Catalyst Predip 404 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Catalyst - 44</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline25">&nbsp;</span>
								
									<script id="template_25" type="x-tmpl-mustache">
										<p>As On Date : {{bath5_12}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath5_1}} m<sup>2</sup></li>
											<li>Palladium Chloride ( PdCl<sub>2</sub> ) : {{bath5_2}} g/L</li>
											<li>Tin Chloride ( SnCl<sub>2</sub>L ) : {{bath5_3}} g/L , Date : {{bath5_14}}</li>
											<li>Specific Gravity ( SG ) : {{bath5_4}} , Date : {{bath5_14}} </li>
											<li>Bath Strength: {{bath5_5}}% , Date : {{bath5_14}}</li>
											<li>404 - Addition : {{bath5_6}} Kg</li>
											<li>44 - Addition : {{bath5_7}} L</li>
											<li>44 - Addition : {{bath5_8}} ( 7ml/m<sup>2</sup> )</li>
											<li>Tin Chloride ( SnCl<sub>2</sub>L ) : {{bath5_9}} g/L</li>
											<li>Specific Gravity ( SG ) : {{bath5_10}}</li>
											<li>Bath Strength: {{bath5_11}}%</li>
											<li>Temperature : {{bath5_13}} <sup>o</sup>C</li>
										</ul>
									</script>
									
									<div id="target_25">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_25"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 36,000 m<sup>2</sup></li>
										<li>Palladium Chloride ( PdCl<sub>2</sub> ) : ( 0.16 - 0.26 ) g/L</li>
										<li>Tin Chloride ( SnCl<sub>2</sub>L ) : ( 2 - 9 ) g/L</li>
										<li>Specific Gravity ( SG ) : ( 1.12 - 1.167 )</li>
										<li>Bath Strength : ( 70% - 100% )</li>
										<li>Temperature : 32 - 52 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ec_catalyst44.html" target="_blank">
							<span class="pull-right">Catalyst 44 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
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
					<div class="panel-title" align="center">Accelerator - 19</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline26">&nbsp;</span>
								
									<script id="template_26" type="x-tmpl-mustache">
										<p>As On Date : {{bath6_7}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath6_1}} m<sup>2</sup></li>
											<li>Copper ( Cu ) : {{bath6_2}} g/L , Date : {{bath6_8}}</li>
											<li>Acid Normality : {{bath6_3}} L , Date : {{bath6_8}}</li>
											<li>Accelerator - 19 Addition : {{bath6_4}} L</li>
											<li>Copper ( Cu ) : {{bath6_5}} g/L</li>
											<li>Acid Normality : {{bath6_6}} L</li>
											
										</ul>
									</script>
									
									<div id="target_26">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_26"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 300 &plusmn; 50 m<sup>2</sup></li>
										<li>Copper ( Cu ) : &lt; 0.6 g/L</li>
										<li>Acid Normality : ( 0.11 - 0.20 ) L</li>
										
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ec_accelerator19.html" target="_blank">
							<span class="pull-right">Accelerator 19 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Copper Bath</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    
								
									<script id="template_27" type="x-tmpl-mustache">
										<p>As On Date : {{bath7_6}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath7_1}} m<sup>2</sup></li>
											<li>Specific Gravity ( SG ) : {{bath7_2}}</li>
											<li>EDTA : {{bath7_3}} g/L</li>
											<li>250 - M Addition : {{bath7_4}} L</li>
											<li>EDTA : {{bath7_5}} g/L</li>
											<li>Temperature : {{bath7_7}} <sup>o</sup>C</li>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											
										</ul>
									</script>
									
									<div id="target_27">Loading...</div>
								
                                </div>
                        </div>
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id=""></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Specific Gravity ( SG ) : &lt; 1.135</li>
										<li>EDTA : ( 25 - 36 ) g/L</li>
										<li>Temperature : 38 - 52 <sup>o</sup>C</li>
										
								</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ec_copperbath.html" target="_blank">
							<span class="pull-right">Copper Bath - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">5% H<sub>2</sub>SO<sub>4</sub></div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline28">&nbsp;</span>
								
									<script id="template_28" type="x-tmpl-mustache">
										<p>As On Date : {{bath8_5}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath8_1}} m<sup>2</sup></li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath8_2}}, Date : {{bath8_6}} </li>
											<li>Sulphuric Acid Addition ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath8_3}} L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath8_4}} ml/L</li>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_28">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_28"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 500 m<sup>2</sup></li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 5% &plusmn; 2%</li>
										<br />
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ec_5h2so4.html" target="_blank">
							<span class="../pages/pull-right">5% H<sub>2</sub>SO<sub>4</sub> - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
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
					<div class="panel-title" align="center">Anti - Tarnish</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline29">&nbsp;</span>
								
									<script id="template_29" type="x-tmpl-mustache">
										<p>As On Date : {{bath9_2}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath9_1}} m<sup>2</sup></li>
											<li>Temperature : {{bath9_3}} <sup>o</sup>C</li>
											<br>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_29">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_29"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 180 m<sup>2</sup></li>
										<li>Room Temperature : 22 - 23 <sup>o</sup>C</li>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ec_antitarnish.html" target="_blank">
							<span class="pull-right">Anti - Tarnish - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
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