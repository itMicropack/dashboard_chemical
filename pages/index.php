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
	<ul class="nav navbar-nav">
						
                        <li>
                            <a data-toggle="tab" href="#bo_main">Black Oxide</a>
							
                        </li>
						
						<li>
                            <a data-toggle="tab" href="#ec_main">Electroless Copper</a>
							
                        </li>
						
						<li>
                            <a data-toggle="tab" href="#ep_main">Electro Plating</a>
							
                        </li>
						
						<li>
                            <a data-toggle="tab" href="#desmear_main">Desmear</a>
							
                        </li>
						
						<li>
                            <a data-toggle="tab" href="#enig_main">ENIG Plating</a>
							
                        </li>
						
						<li>
                            <a data-toggle="tab" href="#etching_main">Etching</a>
							
                        </li>
						<li>
                            <a  href="index1.php"  >Electro Plating line-2</a>
							
                        </li>
						
						<!--li>
                            <a data-toggle="tab" href="#metch_main">Mec - Etch Process</a>
							
                        </li>
						<li>
                            <a data-toggle="tab" href="#smd_main">Solder - Mask Development</a>
							
                        </li>
						<li>
                            <a data-toggle="tab" href="#ilspl_main">Surface Preparation line</a>
							
                        </li>
						<li>
                            <a data-toggle="tab" href="#ild_main">Inner Layer Development</a>
							
                        </li>
						<li>
                            <a data-toggle="tab" href="#old_main">Outer Layer Development</a>
							
                        </li-->
												
    </ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="../index.html"><i class="fa fa-home"></i> &nbsp;Home</a></li>
		<li><a style="color:black"><i class="fa fa-calendar"></i> &nbsp;<?php echo date("l d/m/20y"); ?></a></li>
	</ul>
    </div>        
  </div>  
</nav>

<!--------------------------------------------------------------------------------------------------------->

<div class="main_page tab-content">

<!--------------------------------------------Black Oxide Main--------------------------------------------->

<div class="tab-pane fade in active" id="bo_main">
	
		<h3 class="imgbor" align="center">Black Oxide</h3>
		<div class="row" style="padding-top:10px;">
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Basic Cleaner</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					<div class="row">
								<div class="col-xs-12">
									<span class="pull-right" id="sparkline1">&nbsp;</span>
									<div id="target_1">Loading...</div>
									<script id="template_1" type="x-tmpl-mustache">
										<p>As On Date : {{bc_6}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bc_1}} m<sup>2</sup></li>
											<li>Basic Cleaner : {{bc_2}} ml/L , Date : {{bc_7}}</li>
											<li>Addition : {{bc_3}} L</li>
											<li>Basic Cleaner : {{bc_4}} ml/L</li>
											<li>Temperature : {{bc_5}} <sup>o</sup>C</li>
										</ul>
									</script>
									
								</div>
					</div><hr />
					<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_1"></div>
						</div>
					</div><hr />
							
					<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 1500 m<sup>2</sup></li>
										<li>Basic Cleaner : 50 - 70 ml/L</li>
										<li>Temperature : 55 - 65 <sup>o</sup>C</li>
									</ul>
								</div>
					</div>
						
						
						
						
					
				</div>
				
							<div class="panel-footer">
								<a href="bo_basic_cleaner.html" target="_blank">
									<span class="pull-right">Basic Cleaner - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
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
                                    <span class="pull-right" id="sparkline2">&nbsp; </span>
									<div id="target_2">Loading...</div>
									<script id="template_2" type="x-tmpl-mustache">
										<p>As On Date : {{me_6}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{me_1}} m<sup>2</sup></li>
											<li>Copper ( Cu ) : {{me_2}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{me_3}} ml/L</li>
											<li>Etch Rate : {{me_4}} &micro;m</li>
											<li>Etch Rate : {{me_5}} &micro;m</li>
										</ul>
									</script>
									
									
								</div>
								
                            
						
						
						
					
						</div> <hr />
				<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_2"></div>
						</div>
				</div><hr />
				<div class="row">
					<div class="col-xs-12">
						<span class="pull-left">Limits : </span>
                            <br >
                            <ul>
								<li>Copper ( Cu ) : &lt; 15 g/L</li>
								<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 30 - 40 ml/L</li>
								<li>Etch Rate : 1.0 - 1.5 &micro;m</li>
							</ul>
					</div>
				</div>
				</div>
				<div class="panel-footer">
			
							
                            
							<a href="bo_micro_etch.html" target="_blank">
							<span class="pull-right">Micro Etch - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Predip</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
						
						<div class="row">
                                <div class="col-xs-12">
									<span class="pull-right" id="sparkline3">&nbsp;</span>
									<div id="target_3">Loading...</div>
									<script id="template_3" type="x-tmpl-mustache">
										<p>As On Date : {{pd_2}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{pd_1}} m<sup>2</sup></li>
											<br>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									
                                </div>
                        </div><hr/>
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_3"></div>
						</div>
						</div><hr />
						<div class="row">
                        <div class="col-xs-12">
							<span>Limits : </span>
							<br >
                            <ul>
								<li>Panel Area Processed: &lt; 500 m<sup>2</sup></li>
								<br>
								<br>
							</ul>
						</div>
						</div>
						
					
				</div>
				<div class="panel-footer">
						
							
						
                            
							<a href="bo_predip.html" target="_blank">
							<span class="pull-right">Predip - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		</div>
		<div class="row">
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Black Oxide</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
						
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline4">&nbsp;</span>
									<script id="template_4" type="x-tmpl-mustache">
										<p>As On Date: {{bo_11}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bo_1}} m<sup>2</sup></li>
											<li>Part A : {{bo_2}} ml/L</li> 
											<li>Part A Addition : {{bo_3}} L</li>
											<li>Part B : {{bo_4}} ml/L</li>
											<li>Part B Addition : {{bo_5}} L</li>
											<li>Weight Gain : {{bo_6}} mg/cm<sup>2</sup></li>
											<li>Part A : {{bo_7}} ml/L</li>
											<li>Part B : {{bo_8}} ml/L</li>
											<li>Weight Gain : {{bo_9}} mg/cm<sup>2</sup></li>
											<li>Temperature : {{bo_10}} <sup>o</sup>C</li>
										</ul>
									</script>
									
									<div id="target_4">Loading...</div>
                                </div>
						</div><hr />
								<div class="row">
								<div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_4"></div>
								</div>
								</div><hr />
							<div class="row">
							<div class="col-xs-12">
							<span>Limits : </span>
							<br >
                            <ul>
								<li>Panel Area Processed : &lt; 4000 m<sup>2</sup></li>
								<li>Part A : 300 - 450 ml/L</li>
								<li>Part B : 100 - 220 ml/L</li>
								<li>Weight Gain : 0.25 - 0.35 mg/cm<sup>2</sup></li>
								<li>Temperature : 65 - 70 <sup>o</sup>C</li>
							</ul>
							</div>
							</div>
                           
						
						
						
					
				</div>
				<div class="panel-footer">
					
					<a href="bo_black_oxide.html" target="_blank"><span class="pull-right">Black Oxide - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
					<div class="clearfix"></div></a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Reducer Predip</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									<span class="pull-right" id="sparkline5">&nbsp;</span>
                                    
									<script id="template_5" type="x-tmpl-mustache">
										<p>As On Date : {{rp_2}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{rp_1}} m<sup>2</sup></li>
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
									
									<div id="target_5">Loading...</div>
                                </div>
                        </div> <hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_5"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 100 m<sup>2</sup></li>
										<br>
										<br>
										<br>
										<br>
										
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
						
							
								
						
							<a href="bo_reducer_predip.html" target="_blank"><span class="pull-right">Reducer Predip - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
							<div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Reducer SR</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline6">&nbsp;</span>
								
									<script id="template_6" type="x-tmpl-mustache">
										<p>As On Date : {{rs_10}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{rs_1}} m<sup>2</sup></li>
											<li>Multi-Bond SR : {{rs_2}} ml/L</li>
											<li>Addition Multi-Bond SR : {{rs_3}} L</li>
											<li>pH : {{rs_4}}</li>
											<li>Addition NaOH : {{rs_5}} gm</li>
											<li>Acid Resistance : {{rs_6}} min</li>
											<li>Peel Strength : {{rs_7}} Kg/cm</li>
											<li>Multi-Bond SR : {{rs_8}} ml/L</li>
											<li>pH : {{rs_9}}</li>
											<br>
										</ul>
									</script>
									
									<div id="target_6">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_6"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 3000 m<sup>2</sup></li>
										<li>Multi-Bond SR : 40 - 60 ml/L</li>
										<li>pH : 12 - 13</li>
										<li>Acid Resistance : &gt; 3 min</li>
										<li>Peel Strength : &gt; 0.9 Kg/cm</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="bo_reducer_sr.html" target="_blank">
							<span class="pull-right">Reducer SR - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		</div>

</div>
<!--------------------------------------------------------------------------------------------------------->

<!---------------------------------------Electroless Copper Main------------------------------------------->

<div class="tab-pane fade in active" id="ec_main">
	
		<h3 class="imgbor" align="center">Electroless Copper</h3>
		<div class="row" style="padding-top:10px;">
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Cleaner</div>
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
										<li>Panel Area Processed : &lt; 1000 m<sup>2</sup></li>
										<li>Cleaner : 10% - 20%</li>
										<li>Temperature : 40 - 49 <sup>o</sup>C</li>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ec_cleaner_afr2.html" target="_blank">
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
				
							<a href="ec_cleaner233.html" target="_blank">
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
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 2% &plusmn; 0.5%</li>
										<li>Etch Rate : 1.0 - 1.5 &micro;m</li>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ec_microetch_new.html" target="_blank">
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
				
							<a href="ec_10h2so4.html" target="_blank">
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
										<li>Panel Area Processed : &lt; 500 m<sup>2</sup></li>
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
				
							<a href="ec_catalystpredip404.html" target="_blank">
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
										<li>Palladium Chloride ( PdCl<sub>2</sub> ) : ( 0.24 - 0.30 ) g/L</li>
										<li>Tin Chloride ( SnCl<sub>2</sub>L ) : ( 2 - 9 ) g/L</li>
										<li>Specific Gravity ( SG ) : ( 1.12 - 1.167 )</li>
										<li>Bath Strength : ( 70% - 100% )</li>
										<li>Temperature : 32 - 52 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ec_catalyst44.html" target="_blank">
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
										<li>Panel Area Processed : &lt; 720 m<sup>2</sup></li>
										<li>Copper ( Cu ) : &lt; 0.6 g/L</li>
										<li>Acid Normality : ( 0.14 - 0.23 ) L</li>
										
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ec_accelerator19.html" target="_blank">
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
				
							<a href="ec_copperbath.html" target="_blank">
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
										<p>As On Date : {{bath6_7}}</p>
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
				
							<a href="ec_5h2so4.html" target="_blank">
							<span class="pull-right">5% H<sub>2</sub>SO<sub>4</sub> - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
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
										<li>Temperature : 35 - 40 <sup>o</sup>C</li>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ec_antitarnish.html" target="_blank">
							<span class="pull-right">Anti - Tarnish - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		</div>
	
</div>
<!--------------------------------------------------------------------------------------------------------->

<!-----------------------------------------Electro Plating Main-------------------------------------------->

<div class="tab-pane fade in active" id="ep_main">
	
		<h3 class="imgbor" align="center">Electro Plating</h3>
		<div class="row" style="padding-top:10px;">
			<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Acid Cleaner</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									<span class="pull-right">&nbsp;</span><br>
                                    <span class="pull-right" id="sparkline31">&nbsp;</span>
								
									<script id="template_31" type="x-tmpl-mustache">
										<p>As On Date : {{bath1_6}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath1_1}} m<sup>2</sup></li>
											<li>Cleaner : {{bath1_2}} ml/L</li>
											<li>Cleaner Addition : {{bath1_3}} L</li>
											<li>Cleaner : {{bath1_4}} ml/L</li>
											<li>Temperature : {{bath1_5}} <sup>o</sup>C</li>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_31">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_31"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 3000 m<sup>2</sup></li>
										<li>Cleaner : 10%-20%</li>
										<li>Temperature : 40-45 <sup>o</sup>C</li>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ep_acidcleanerafr2.html" target="_blank">
							<span class="pull-right">Acid Cleaner - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<!--div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Acid Cleaner HCP - 208</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									<span class="pull-right">&nbsp;</span><br>
                                    <span class="pull-right" id="sparkline_hcp">&nbsp;</span>
								
									<script id="template_hcp" type="x-tmpl-mustache">
										<p>As On Date : {{bath_hcp_6}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath_hcp_1}} m<sup>2</sup></li>
											<li>HCP - 208 : {{bath_hcp_2}} ml/L</li>
											<li>HCP - 208 Addition : {{bath_hcp_3}} L</li>
											<li>HCP - 208 : {{bath_hcp_4}} ml/L</li>
											<li>Temperature : {{bath_hcp_5}} <sup>o</sup>C</li>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_hcp">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									
									<div id="chart_hcp"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 3000 m<sup>2</sup></li>
										<li>HCP - 208 : 7%-13%</li>
										<li>Temperature : 40-49 <sup>o</sup>C</li>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ep_acidcleaner_hcp.html" target="_blank">
							<span class="pull-right">Acid Cleaner HCP 208 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
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
                                    <span class="pull-right" id="sparkline32a">&nbsp;</span><br>
									<span class="pull-right" id="sparkline32b">&nbsp;</span>
								
									<script id="template_32" type="x-tmpl-mustache">
										<p>As On Date : {{bath2_9}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath2_1}} m<sup>2</sup></li>
											<li>Copper ( Cu ) : {{bath2_2}} g/L , Date: {{bath2_10}} </li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath2_3}} ml/L , Date: {{bath2_10}}</li>
											<li>Etch Rate : {{bath2_4}} &micro;m</li>
											<li>Sulphuric Acid Addition ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath2_5}} L</li>
											<li>Chemical Addition : {{bath2_6}} g</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath2_7}} ml/L</li>
											<li>Etch Rate : {{bath2_8}} &micro;m</li>
										</ul>
									</script>
									
									<div id="target_32">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
							<div class="col-xs-6">
								<!-- Gauge Chart -->
								<div id="chart_32a"></div>
							</div>
							<div class="col-xs-6">
								<div id="chart_32b"></div>
							</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 3000 m<sup>2</sup></li>
										<li>Copper ( Cu ) : &lt; 40 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 1% &plusmn; 0.5%</li>
										<li>Etch Rate : 0.13 - 0.37 &micro;m</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ep_microetch.html" target="_blank">
							<span class="pull-right">Micro Etch - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		<!--div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Etch Salt 3330</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline_etch_ep">&nbsp;</span><br>
									<span class="pull-right" id="sparkline_etch_ep_2">&nbsp;</span>
								
									<script id="template_etch_ep" type="x-tmpl-mustache">
										<p>As On Date : {{bath_etch_ep_9}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath_etch_ep_1}} m<sup>2</sup></li>
											<li>Copper ( Cu ) : {{bath_etch_ep_2}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath_etch_ep_3}} ml/L</li>
											<li>Etch Rate : {{bath_etch_ep_4}} &micro;m</li>
											<li>Sulphuric Acid Addition ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath_etch_ep_5}} L</li>
											<li>Salt Etch 3330 Addition : {{bath_etch_ep_6}} Kg</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath_etch_ep_7}} ml/L</li>
											<li>Etch Rate : {{bath_etch_ep_8}} &micro;m</li>
											<br>
										</ul>
									</script>
									
									<div id="target_etch_ep">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
							<div class="col-xs-6">
								
								<div id="chart_etch_ep"></div>
							</div>
							<div class="col-xs-6">
								<div id="chart_etch_ep_2"></div>
							</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper ( Cu ): &lt; 15 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 2% &plusmn; 0.5%</li>
										<li>Etch Rate : 1.0 - 1.5 &micro;m</li>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ep_microetch_new.html" target="_blank">
							<span class="pull-right">Etch Salt 3330 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div-->
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">12% H<sub>2</sub>SO<sub>4</sub></div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									<span class="pull-right">&nbsp;</span><br>
                                    <span class="pull-right" id="sparkline33">&nbsp;</span>
								
									<script id="template_33" type="x-tmpl-mustache">
										<p>As On Date : {{bath3_5}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath3_1}} m<sup>2</sup></li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath3_2}} , Date : {{bath3_6}} </li>
											<li>Sulphuric Acid Addition ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath3_3}} L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath3_4}} ml/L</li>
											<br>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_33">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_33"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 1000 m<sup>2</sup></li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 12% &plusmn; 2%</li>
										<br>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ep_12h2so4.html" target="_blank">
							<span class="pull-right">12% H<sub>2</sub>SO<sub>4</sub> - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
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
					<div class="panel-title" align="center">Copper Bath 18/19</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline34">&nbsp;</span>
								
									<script id="template_34" type="x-tmpl-mustache">
										<p>As On Date : {{bath4_14}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath4_1}} m<sup>2</sup></li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath4_2}} g/L , Date : {{bath4_15}} </li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4_3}} g/L , Date : {{bath4_15}}</li>
											<li>Chloride ( Cl ) : {{bath4_4}} ppm , Date : {{bath4_15}}</li>
											<li>Temperature : {{bath4_5}} <sup>o</sup>C</li>
											<li>Addition of Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath4_6}} Kg</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4_7}} L</li>
											<li>Addition of Hydrogen Chloride ( HCl ) : {{bath4_8}} ml</li>
											<li>Brightener B-2 : {{bath4_9}} ml</li>
											<li>Leveller C-2 : {{bath4_10}} ml</li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath4_11}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4_12}} g/L</li>
											<li>Chloride ( Cl ) : {{bath4_13}} ppm</li>
										</ul>
									</script>
									
									<div id="target_34">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_34"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper Sulphate ( CuSO<sub>4</sub> ) : 50 - 90 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 100 - 250 g/L</li>
										<li>Chloride ( Cl ) : 40 - 70 ppm</li>
										<li>Temperature : 20 - 29 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ep_copperbath1819.html" target="_blank">
							<span class="pull-right">Copper Bath 18/19 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
			</div>
		
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Copper Bath 20/21</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline35">&nbsp;</span>
								
									<script id="template_35" type="x-tmpl-mustache">
										<p>As On Date : {{bath5_14}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath5_1}} m<sup>2</sup></li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath5_2}} g/L , Date : {{bath5_15}} </li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath5_3}} g/L , Date : {{bath5_15}}</li>
											<li>Chloride ( Cl ) : {{bath5_4}} ppm , Date : {{bath5_15}}</li>
											<li>Temperature : {{bath5_5}} <sup>o</sup>C</li>
											<li>Addition of Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath5_6}} Kg</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath5_7}} L</li>
											<li>Addition of Hydrogen Chloride ( HCl ) : {{bath5_8}} ml</li>
											<li>Brightener B-2 : {{bath5_9}} ml</li>
											<li>Leveller C-2 : {{bath5_10}} ml</li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath5_11}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath5_12}} g/L</li>
											<li>Chloride ( Cl ) : {{bath5_13}} ppm</li>
										</ul>
									</script>
									
									<div id="target_35">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_35"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper Sulphate ( CuSO<sub>4</sub> ) : 50 - 90 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 100 - 250 g/L</li>
										<li>Chloride ( Cl ) : 40 - 70 ppm</li>
										<li>Temperature : 20 - 29 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ep_copperbath2021.html" target="_blank">
							<span class="pull-right">Copper Bath 20/21 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Copper Bath 22/23</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline36">&nbsp;</span>
								
									<script id="template_36" type="x-tmpl-mustache">
										<p>As On Date : {{bath6_14}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath6_1}} m<sup>2</sup></li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath6_2}} g/L , Date : {{bath6_15}}</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath6_3}} g/L , Date : {{bath6_15}}</li>
											<li>Chloride ( Cl ) : {{bath6_4}} ppm , Date : {{bath6_15}} </li>
											<li>Temperature : {{bath6_5}} <sup>o</sup>C</li>
											<li>Addition of Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath6_6}} Kg</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath6_7}} L</li>
											<li>Addition of Hydrogen Chloride ( HCl ) : {{bath6_8}} ml</li>
											<li>Brightener B-2 : {{bath6_9}} ml</li>
											<li>Leveller C-2 : {{bath6_10}} ml</li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath6_11}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath6_12}} g/L</li>
											<li>Chloride ( Cl ) : {{bath6_13}} ppm</li>
										</ul>
									</script>
									
									<div id="target_36">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_36"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper Sulphate ( CuSO<sub>4</sub> ) : 50 - 90 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 100 - 250 g/L</li>
										<li>Chloride ( Cl ) : 40 - 70 ppm</li>
										<li>Temperature : 20 - 29 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ep_copperbath2223.html" target="_blank">
							<span class="pull-right">Copper Bath 22/23 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
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
					<div class="panel-title" align="center">Copper Bath 24/25</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline37">&nbsp;</span>
								
									<script id="template_37" type="x-tmpl-mustache">
										<p>As On Date : {{bath7_14}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath7_1}} m<sup>2</sup></li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath7_2}} g/L , Date : {{bath7_15}}</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath7_3}} g/L , Date : {{bath7_15}}</li>
											<li>Chloride ( Cl ) : {{bath7_4}} ppm , Date : {{bath7_15}} </li>
											<li>Temperature : {{bath7_5}} <sup>o</sup>C</li>
											<li>Addition of Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath7_6}} Kg</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath7_7}} L</li>
											<li>Addition of Hydrogen Chloride ( HCl ) : {{bath7_8}} ml</li>
											<li>Brightener B-2 : {{bath7_9}} ml</li>
											<li>Leveller C-2 : {{bath7_10}} ml</li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath7_11}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath7_12}} g/L</li>
											<li>Chloride ( Cl ) : {{bath7_13}} ppm</li>
										</ul>
									</script>
									
									<div id="target_37">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_37"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper Sulphate ( CuSO<sub>4</sub> ) : 50 - 90 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 100 - 250 g/L</li>
										<li>Chloride ( Cl ) : 40 - 70 ppm</li>
										<li>Temperature : 20 - 29 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ep_copperbath2425.html" target="_blank">
							<span class="pull-right">Copper Bath 24/25 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
			</div>
		
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">10% H<sub>2</sub>SO<sub>4</sub></div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline38">&nbsp;</span>
								
									<script id="template_38" type="x-tmpl-mustache">
										<p>As On Date : {{bath8_5}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath8_1}} m<sup>2</sup></li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath8_2}} , Date : {{bath8_6}} </li>
											<li>Sulphuric Acid Addition ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath8_3}} L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath8_4}} ml/L</li>
											<br>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_38">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_38"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 1000 m<sup>2</sup></li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 10% &plusmn; 2%</li>
										<br>
										<br>
										
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ep_10h2so4.html" target="_blank">
							<span class="pull-right">10% H<sub>2</sub>SO<sub>4</sub> - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Tin Bath</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline29">&nbsp;</span>
								
									<script id="template_39" type="x-tmpl-mustache">
										<p>As On Date : {{bath9_10}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath9_1}} m<sup>2</sup></li>
											<li>Tin Sulphate ( SnSO<sub>4</sub> ) : {{bath9_2}} g/L , Date : {{bath9_11}}</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath9_3}} ml/L , Date : {{bath9_11}}</li>
											<li>Addition of Tin Sulphate ( SnSO<sub>4</sub> ) : {{bath9_4}} kg</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath9_5}} L</li>
											<li>Addition of Part A : {{bath9_6}} ml</li>
											<li>Addition of Part B : {{bath9_7}} ml</li>
											<li>Tin Sulphate ( SnSO<sub>4</sub> ) : {{bath9_8}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath9_9}} ml/L</li>
											<br>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_39">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_39"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Tin Sulphate ( SnSO<sub>4</sub> ) : 30 - 45 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 90 - 110 ml/L</li>
										<br>
										<br>
										
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ep_tinbath.html" target="_blank">
							<span class="pull-right">Tin Bath - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		</div>
		
		<!--div class="row" style="padding-top:10px;">
			
			
			<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Manual Copper Bath</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline310">&nbsp;</span>
								
									<script id="template_310" type="x-tmpl-mustache">
										<p>As On Date : {{bath10_12}}</p>
										<hr />
										<ul>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath10_1}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath10_2}} g/L</li>
											<li>Chloride ( Cl ) : {{bath10_3}} ppm</li>
											<li>Addition of Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath10_4}} Kg</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath10_5}} L</li>
											<li>Addition of Hydrogen Chloride ( HCl ) : {{bath10_6}} ml</li>
											<li>Breakner S-3 : {{bath10_7}} ml</li>
											<li>Leveller XP-7 : {{bath10_8}} ml</li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath10_9}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath10_10}} g/L</li>
											<li>Chloride ( Cl ) : {{bath10_11}} ppm</li>
											<br>
										</ul>
									</script>
									
									<div id="target_310">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									
									<div id="chart_310"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper Sulphate ( CuSO<sub>4</sub> ) : 60 - 90 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 200 - 300 g/L</li>
										<li>Chloride ( Cl ) : 45 - 85 ppm</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ep_manualcopperbath.html" target="_blank">
							<span class="pull-right">Manual Copper Bath - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Manual Copper Bath - New</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline10_new">&nbsp;</span>
								
									<script id="template_10_new" type="x-tmpl-mustache">
										<p>As On Date : {{bath10_new_12}}</p>
										<hr />
										<ul>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ): {{bath10_new_1}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ): {{bath10_new_2}} g/L</li>
											<li>Chloride ( Cl ): {{bath10_new_3}} ppm</li>
											<li>Addition of Copper Sulphate ( CuSO<sub>4</sub> ): {{bath10_new_4}} Kg</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ): {{bath10_new_5}} L</li>
											<li>Addition of Hydrogen Chloride ( HCl ): {{bath10_new_6}} ml</li>
											<li>HAR Additive : {{bath10_new_7}} ml/L</li>
											<li>HAR Leveller : {{bath10_new_8}} ml/L</li>
											<li>HAR Carrier : {{bath10_new_13}} ml/L</li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ): {{bath10_new_9}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ): {{bath10_new_10}} g/L</li>
											<li>Chloride ( Cl ): {{bath10_new_11}} ppm</li>
										</ul>
									</script>
									
									<div id="target_10_new">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									
									<div id="chart_10_new"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper Sulphate ( CuSO<sub>4</sub> ) : 45 - 65 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 240 - 270 g/L</li>
										<li>Chloride ( Cl ) : 50 - 85 ppm</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ep_manualcopperbath_new.html" target="_blank">
							<span class="pull-right">Manual Copper Bath New - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Tin Lead Bath</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline29">&nbsp;</span>
								
									<script id="template_311" type="x-tmpl-mustache">
										<p>As On Date : {{bath11_10}}</p>
										<hr />
										<ul>
											<li>Tin (Sn) : {{bath11_1}} g/L</li>
											<li>Lead (Pb) : {{bath11_2}} g/L</li>
											<li>Acid : {{bath11_3}} g/L</li>
											<li>Addition of Tin (Sn) : {{bath11_4}} L</li>
											<li>Addition of Lead (Pb) : {{bath11_5}} L</li>
											<li>Addition of Acid : {{bath11_6}} L</li>
											<li>Tin (Sn) : {{bath11_7}} g/L</li>
											<li>Lead (Pb) : {{bath11_8}} g/L</li>
											<li>Acid : {{bath11_9}} g/L</li>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_311">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									
									<div id="chart_311"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Tin (Sn) : 16-24 g/L</li>
										<li>Lead (Pb) : 7-13 g/L</li>
										<li>Acid : 175-225 g/L</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ep_tinleadbath.html" target="_blank">
							<span class="pull-right">Tin Lead Bath - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		</div-->
</div>
<!--------------------------------------------------------------------------------------------------------->

<!---------------------------------------------Desmear Main------------------------------------------------>

<div class="tab-pane fade in active" id="desmear_main">
	
		<h3 class="imgbor" align="center">Desmear</h3>
		<div class="row" style="padding-top:10px;">
			<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<!--div class="panel-title" align="center">Hole Conditioner - 211</div-->
					<div class="panel-title" align="center">Hole Prep 4126</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline41">&nbsp;</span>
								
									<script id="template_41" type="x-tmpl-mustache">
										<p>As On Date : {{bath1_9}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath1_1}} m<sup>2</sup></li>
											<li>Temperature : {{bath1_4}} <sup>o</sup>C</li>
											<!--li>Alkaline Normality : {{bath1_2}} N, Date: {{bath1_10}}</li>
											<li>Bath Strength : {{bath1_3}}% , Date : {{bath1_10}}</li>
											<li>Addition of Cuposit-2 : {{bath1_5}} L</li>
											<li>Addition of 211 : {{bath1_6}} L</li>
											<li>Alkaline Normality : {{bath1_7}} N</li>
											<li>Bath Strength : {{bath1_8}}</li-->
											<li>UV Sample Value : {{bath1_11}} </li>
											<li>Chemical Percentage : {{bath1_12}} </li>
											<li>Addition : {{bath1_13}} </li>
											<br>
											<br>
											<br>
											
										</ul>
									</script>
									
									<div id="target_41">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_41"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 3000 m<sup>2</sup></li>
										<!--li>Alkaline Normality : 0.7 - 0.85 N</li>
										<li>Bath Strength : 85% - 110%</li-->
										<br>
										<br>
										<br>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ds_holeconditioner211.html" target="_blank">
							<span class="pull-right">Hole Prep 4126 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Promoter Bath</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline42">&nbsp;</span>
								
									<script id="template_42" type="x-tmpl-mustache">
										<p>As On Date : {{bath2_11}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath2_1}} m<sup>2</sup></li>
											<li>Alkaline Normality : {{bath2_2}} N , Date: {{bath2_12}} </li>
											<li>Sodium Permanganate : {{bath2_3}} g/L</li>
											<li>Sodium Manganate : {{bath2_4}} g/L</li>
											<li>Manganate : {{bath2_5}}</li>
											<li>Temperature : {{bath2_6}} <sup>o</sup>C</li>
											<li>Addition of 213-B : {{bath2_7}} L</li>
											<li>Addition of 213-A : {{bath2_8}} L</li>
											<li>Etch Rate : {{bath2_9}} mg</li>
											<li>Alkaline Normality : {{bath2_10}} N</li>
											<br>
										</ul>
									</script>
									
									<div id="target_42">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_42"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 20000 m<sup>2</sup></li>
										<li>Alkaline Normality : 1.1 - 1.3 N</li>
										<li>Sodium Permanganate : 45 - 65 g/L</li>
										<li>Sodium Manganate : &lt; 15 g/L</li>
										<li>Manganate : 8% - 12%</li>
										<li>Etch Rate : 20 - 40 mg</li>
										<li>Temperature : 66 - 82 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ds_promoterbath.html" target="_blank">
							<span class="pull-right">Promoter Bath - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Neutralizer - 3316</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline43">&nbsp;</span>
								
									<script id="template_46" type="x-tmpl-mustache">
										<p>As On Date : {{bath6_12}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath6_1}} m<sup>2</sup></li>
											<li>Copper ( Cu ) : {{bath6_2}} g/L , Date : {{bath6_13}}</li>
											<li>Neutralizer - 3316 : {{bath6_3}} % , Date : {{bath6_13}}</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath6_4}}% , Date : {{bath6_13}}</li>
											<li>Hydrogen Peroxide ( H<sub>2</sub>O<sub>2</sub> ) : {{bath6_5}}% , Date : {{bath6_13}}</li>
											<li>Addition of 3316 : {{bath6_6}} L</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath6_7}} L</li>
											<li>Addition of Hydrogen - Peroxide ( H<sub>2</sub>O<sub>2</sub> ) : {{bath6_8}} L</li>
											<li>Neutralizer - 3316 : {{bath6_9}} %</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath6_10}}%</li>
											<li>Hydrogen Peroxide ( H<sub>2</sub>O<sub>2</sub> ) : {{bath6_11}}%</li>
										</ul>
									</script>
									
									<div id="target_46">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_46"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper ( Cu ) : &lt; 10 g/L</li>
										<li>Neutralizer - 3316 : 4% - 5%</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 2% - 4%</li>
										<li>Hydrogen Peroxide ( H<sub>2</sub>O<sub>2</sub> ) : 1.5% - 2.5%</li>
										<br>
										<br>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ds_neutralizer3316.html" target="_blank">
							<span class="pull-right">Neutralizer - 3316 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
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
					<div class="panel-title" align="center">M - Glass Etch</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline44a">&nbsp;</span><br>
                                    <span class="pull-right" id="sparkline44b">&nbsp;</span>
								
									<script id="template_44" type="x-tmpl-mustache">
										<p>As On Date : {{bath4_10}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath4_1}} m<sup>2</sup></li>
											<li>Copper ( Cu ) : {{bath4_3}} ppm , Date: {{bath4_11}}</li>
											<li>M-Glass Etch : {{bath4_4}} g/L , Date: {{bath4_11}}</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4_5}}% , Date : {{bath4_11}}</li>
											<li>Addition of M - Glass Etch : {{bath4_6}} Kg</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4_7}} L</li>
											<li>M-Glass Etch : {{bath4_8}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4_9}}%</li>
											<li>Temperature : {{bath4_2}} <sup>o</sup>C</li>
										</ul>
									</script>
									
									<div id="target_44">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-6">
									<!-- Gauge Chart -->
									<div id="chart_44a"></div>
						</div>
						<div class="col-xs-6">
									<div id="chart_44b"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 2700 m<sup>2</sup></li>
										<li>Copper ( Cu ) : &lt; 1500 ppm</li>
										<li>M-Glass Etch : 55 - 65 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 6.5% - 8.5%</li>
										<li>Temperature : 38 - 43 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ds_mglassetch.html" target="_blank">
							<span class="pull-right">M Glass Etch - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">10% H<sub>2</sub>SO<sub>4</sub></div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									<span class="pull-right">&nbsp;</span><br>
                                    <span class="pull-right" id="sparkline45">&nbsp;</span>
								
									<script id="template_45" type="x-tmpl-mustache">
										<p>As On Date : {{bath5_5}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath5_1}} m<sup>2</sup></li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath5_2}}% , Date : {{bath5_6}}</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath5_3}} L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath5_4}}%</li>
											<br>
											<br>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_45">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_45"></div>
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
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ds_10h2so4.html" target="_blank">
							<span class="pull-right">10% H<sub>2</sub>SO<sub>4</sub> - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Neutralizer - 3314&nbsp; Updated To&nbsp; Neutralizer - 3316</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									<span class="pull-right">&nbsp;</span><br>
                                    <span class="pull-right" id="sparkline43">&nbsp;</span>
								
									<script id="template_43" type="x-tmpl-mustache">
										<p>As On Date : {{bath3_9}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath3_1}} m<sup>2</sup></li>
											<li>Copper ( Cu ) : {{bath3_2}} g/L , Date : {{bath3_10}}</li>
											<li>Alkaline Normality : {{bath3_3}} N , Date : {{bath3_10}}</li>
											<li>Bath Strength : {{bath3_4}}% , Date : {{bath3_10}}</li>
											<li>Addition of 3314 : {{bath3_5}} L</li>
											<li>Addition of Hydrogen - Peroxide ( H<sub>2</sub>O<sub>2</sub> ) : {{bath3_6}} L</li>
											<li>Alkaline Normality : {{bath3_7}} N</li>
											<li>Bath Strength : {{bath3_8}}</li>
											<br>
										</ul>
									</script>
									
									<div id="target_43">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_43"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper( Cu ) : &lt; 20 g/L</li>
										<li>Alkaline Normality : 1.6 - 1.85 N</li>
										<li>Bath Strength : 70% - 100%</li>
										<br>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="ds_neutralizer3314.html" target="_blank">
							<span class="pull-right">Neutralizer - 3314 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		
		</div>
	
</div>
<!--------------------------------------------------------------------------------------------------------->

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
				
							<a href="enig_acidcleaner.html" target="_blank">
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
				
							<a href="enig_microetch.html" target="_blank">
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
				
							<a href="enig_aurodip.html" target="_blank">
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
				
							<a href="enig_predip.html" target="_blank">
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
				
							<a href="enig_activator.html" target="_blank">
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
				
							<a href="enig_postdip.html" target="_blank">
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
				
							<a href="enig_nickelbath.html" target="_blank">
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
				
							<a href="enig_goldbath.html" target="_blank">
							<span class="pull-right">Gold Bath - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		
		
		</div>
</div>
<!--------------------------------------------------------------------------------------------------------->

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
				
							<a href="etch_innerlayer.html" target="_blank">
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
				
							<a href="etch_ilrsp.html" target="_blank">
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
				
							<a href="etch_outerlayer.html" target="_blank">
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
				
							<a href="etch_tinstrip.html"  target="_blank">
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
				
							<a href="etch_olrstp.html" target="_blank">
							<span class="pull-right">Outer Layer Resist Stripping - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		</div>
</div>
<!--------------------------------------------------------------------------------------------------------->

<!--------------------------------------------Mec Etch Main------------------------------------------------>

<!--div class="tab-pane fade" id="metch_main">
	
		<h3 class="imgbor" align="center">Mec Etch</h3>
		<div class="row" style="padding-top:10px;">
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Acid Cleaner</div>
				</div>  
				<div class="panel-body" style="background-color:##bbdefb">
					
						<div style="margin-bottom:35px; margin-top:10px">
								                                        
						</div>
						
						
						
					
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Micro Etch</div>
				</div>  
				<div class="panel-body" style="background-color:##bbdefb">
					
						<div style="margin-bottom:35px; margin-top:10px">
								                                        
						</div>
						
						
						
					
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Hydrochloric Acid</div>
				</div>  
				<div class="panel-body" style="background-color:##bbdefb">
					
						<div style="margin-bottom:35px; margin-top:10px">
								                                        
						</div>
						
						
						
					
				</div>
			</div>
		</div>
		</div>
</div-->
<!--------------------------------------------------------------------------------------------------------->

<!-------------------------------------Solder Mask Development Main---------------------------------------->

<!--div class="tab-pane fade" id="smd_main">
	
		<h3 class="imgbor" align="center">Solder Mask Development</h3>
		<div class="row" style="padding-top:10px;">
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Solder Mask Development</div>
				</div>  
				<div class="panel-body" style="background-color:##bbdefb">
					
						<div style="margin-bottom:35px; margin-top:10px">
								                                        
						</div>
						
						
						
					
				</div>
			</div>
		</div>
		
		
		</div>
</div-->
<!--------------------------------------------------------------------------------------------------------->

<!-------------------------------Inner Layer Surface Preparation Line Main--------------------------------->

<!--div class="tab-pane fade" id="ilspl_main">
	
		<h3 class="imgbor" align="center">Inner Layer Surface Preparation Line</h3>
		<div class="row" style="padding-top:10px;">
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Layer Cleaner</div>
				</div>  
				<div class="panel-body" style="background-color:##bbdefb">
					
						<div style="margin-bottom:35px; margin-top:10px">
								                                        
						</div>
						
						
						
					
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Micro Etch</div>
				</div>  
				<div class="panel-body" style="background-color:##bbdefb">
					
						<div style="margin-bottom:35px; margin-top:10px">
								                                        
						</div>
						
						
						
					
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Acid Cleaner</div>
				</div>  
				<div class="panel-body" style="background-color:##bbdefb">
					
						<div style="margin-bottom:35px; margin-top:10px">
								                                        
						</div>
						
						
						
					
				</div>
			</div>
		</div>
		</div>
</div-->
<!--------------------------------------------------------------------------------------------------------->

<!------------------------------------Inner Layer Development Main----------------------------------------->

<!--div class="tab-pane fade" id="ild_main">
	
		<h3 class="imgbor" align="center">Inner Layer Development</h3>
		<div class="row" style="padding-top:10px;">
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Inner Layer Development</div>
				</div>  
				<div class="panel-body" style="background-color:##bbdefb">
					
						<div style="margin-bottom:35px; margin-top:10px">
								                                        
						</div>
						
						
						
					
				</div>
			</div>
		</div>
		
		
		</div>
</div-->
<!--------------------------------------------------------------------------------------------------------->

<!-------------------------------------Outer Layer Development Main---------------------------------------->

<!--div class="tab-pane fade" id="old_main">
	
		<h3 class="imgbor" align="center">Outer Layer Development</h3>
		<div class="row" style="padding-top:10px;">
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Outer Layer Development</div>
				</div>  
				<div class="panel-body" style="background-color:##bbdefb">
					
						<div style="margin-bottom:35px; margin-top:10px">
								                                        
						</div>
						
						
						
					
				</div>
			</div>
		</div>
		
		
		</div>
	
</div-->
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