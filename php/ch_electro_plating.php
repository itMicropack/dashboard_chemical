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
		<meta name="author" content="Nandan C K">
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
                            <a  href="">Electro Plating</a>
							
                        </li>
						
						
												
    </ul>
	
	<ul class="nav navbar-nav" style="font-size: 18px;">
						
		<li>
			<a style="color: #f12b6b;">DOC.NO&nbsp;&nbsp;-&nbsp;&nbsp;MP-FM-CMR-ELPT2-01&nbsp;,&nbsp;V-1.0&nbsp;,&nbsp;&nbsp;17/08/2020 &nbsp;</a>
			
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



<!-----------------------------------------Electro Plating Main-------------------------------------------->

<div class="tab-pane fade in active" id="ep_main">
	
		<h3 class="imgbor" align="center">Electro Plating Line 1</h3>
		<div class="row" style="padding-top:10px;">
			<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">EVP 221C</div>
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
										<li>Panel Area Processed : &lt; 3000 &plusmn; 100 m<sup>2</sup></li>
										<li>Cleaner : 1.7-2.1 N</li>
										<li>Temperature : 35-45 <sup>o</sup>C</li>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ep_acidcleanerafr2.html" target="_blank">
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
										<li>Copper ( Cu ) : &lt; 15 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 2% &plusmn; 0.5%</li>
										<li>Etch Rate : 0.13 - 0.37 &micro;m</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ep_microetch.html" target="_blank">
							<span class="pull-right">Micro Etch - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		
		
		
		
		<!-------------MICROETCH START---------------->
		
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Microectch NEW</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    
									<span class="pull-right" id="sparkline32anew">&nbsp;</span>
								
									<script id="template_32_micro" type="x-tmpl-mustache">
										<p>As On Date : {{bath2c_9}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath2c_1}} m<sup>2</sup></li>
											<li>Copper ( Cu ) : {{bath2c_2}} g/L </li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath2c_3}} ml/L </li>
											<li>Etch Rate : {{bath2c_4}} &micro;m</li>
											<li>Sulphuric Acid Addition ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath2c_5}} L</li>
											<li>Chemical Addition : {{bath2c_6}} g</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath2c_7}} ml/L</li>
											<li>Etch Rate : {{bath2c_8}} &micro;m</li>
											<br>
										</ul>
									</script>
									
									<div id="target_32_micro">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
							
							<div class="col-xs-12">
								<div id="chart_32a_micro"></div>
							</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Panel Area Processed : &lt; 3000 m<sup>2</sup></li>
										<li>Copper ( Cu ) : &lt; 15 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 2% &plusmn; 0.5%</li>
										<li>Etch Rate : 0.13 - 0.37 &micro;m</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<!--a href="ep_microetch.html" target="_blank"-->
							<a href="../pages/ep_microetch_update.html" >
							<span class="pull-right">Microetch NEW- Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		</div>
		
		<!------------MICROETCH NEW END---------------->
		
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
		<div class="row" style="padding-top:10px;">
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
				
							<a href="../pages/ep_12h2so4.html" target="_blank">
							<span class="pull-right">12% H<sub>2</sub>SO<sub>4</sub> - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
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
										<li>Copper Sulphate ( CuSO<sub>4</sub> ) : 65 - 85 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 220 - 260 g/L</li>
										<li>Chloride ( Cl ) : 60 - 80 ppm</li>
										<li>Temperature : 20 - 30 <sup>o</sup>C</li>
										<br>
										<br>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ep_copperbath1819.html" target="_blank">
							<span class="pull-right">Copper Bath 18/19 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
			</div>
			
			
			<!--- code for copper bath 18/19 new start ---------------->
			<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Copper Bath 18/19 NEW</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline18_up">&nbsp;</span>
								
									<script id="template18_up" type="x-tmpl-mustache">
										<p>As On Date : {{bath4k_12}}</p>
										<hr />
										<ul>
											<li>Ampear Hour Processed : {{bath4k_1}} m<sup>2</sup></li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath4k_2}} g/L , Date : {{bath4k_13}} </li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4k_3}} g/L , Date : {{bath4k_13}}</li>
											<li>Chloride ( Cl ) : {{bath4k_4}} ppm , Date : {{bath4b_13}}</li>
											<li>Temperature : {{bath4k_5}} <sup>o</sup>C</li>
											<li>Addition of Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath4k_6}} Kg</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4k_7}} L</li>
											<li>Addition of Hydrogen Chloride ( HCl ) : {{bath4k_8}} ml</li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath4k_9}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4k_10}} g/L</li>
											<li>Chloride ( Cl ) : {{bath4k_11}} ppm</li>
											
										</ul>
									</script>
									
									<div id="target18_up">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart18_up"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper Sulphate ( CuSO<sub>4</sub> ) : 65 - 85 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 220 - 260 g/L</li>
										<li>Chloride ( Cl ) : 60 - 80 ppm</li>
										<li>Temperature : 20 - 30 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<!--a href="ep_copperbath1819.html" target="_blank"-->
							<a href="../pages/ep_copperbath1819_update.html" >
							<span class="pull-right">Copper Bath 18/19 NEW - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
			</div>
		</div>
			
			
			<!--- code for copper bath 18/19 new end ---------------->
			
			
			
			
			
			<!--- code for copper bath 20/21 new start ---------------->
			<div class="row" style="padding-top:10px;">
			
			
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
											<br>
											<br>
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
										<li>Copper Sulphate ( CuSO<sub>4</sub> ) : 65 - 85 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 220 - 260 g/L</li>
										<li>Chloride ( Cl ) : 60 - 80 ppm</li>
										<li>Temperature : 20 - 30 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ep_copperbath2021.html" target="_blank">
							<span class="pull-right">Copper Bath 20/21 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		
			<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Copper Bath 20/21 NEW</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline20_up">&nbsp;</span>
								
									<script id="template20_up" type="x-tmpl-mustache">
										<p>As On Date : {{bath4k_12}}</p>
										<hr />
										<ul>
											<li>Ampear Hour Processed : {{bath4k_1}} m<sup>2</sup></li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath4k_2}} g/L , Date : {{bath4k_13}} </li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4k_3}} g/L , Date : {{bath4k_13}}</li>
											<li>Chloride ( Cl ) : {{bath4k_4}} ppm , Date : {{bath4b_13}}</li>
											<li>Temperature : {{bath4k_5}} <sup>o</sup>C</li>
											<li>Addition of Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath4k_6}} Kg</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4k_7}} L</li>
											<li>Addition of Hydrogen Chloride ( HCl ) : {{bath4k_8}} ml</li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath4k_9}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4k_10}} g/L</li>
											<li>Chloride ( Cl ) : {{bath4k_11}} ppm</li>
										</ul>
									</script>
									
									<div id="target20_up">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart20_up"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper Sulphate ( CuSO<sub>4</sub> ) : 65 - 85 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 220 - 260 g/L</li>
										<li>Chloride ( Cl ) : 60 - 80 ppm</li>
										<li>Temperature : 20 - 30 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<!--a href="ep_copperbath1819.html" target="_blank"-->
							<a href="../pages/ep_copperbath2021_update.html" >
							<span class="pull-right">Copper Bath 20/21 NEW - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
			</div>
			
			
			<!--- code for copper bath 20/21 new end ---------------->
			
			
			
			<!--- code for copper bath 22/23 new start ---------------->
			
			
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
											<br>
											<br>
											<br>
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
										<li>Copper Sulphate ( CuSO<sub>4</sub> ) : 65 - 85 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 220 - 260 g/L</li>
										<li>Chloride ( Cl ) : 60 - 80 ppm</li>
										<li>Temperature : 20 - 30 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ep_copperbath2223.html" target="_blank">
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
					<div class="panel-title" align="center">Copper Bath 22/23 NEW</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline22_up">&nbsp;</span>
								
									<script id="template22_up" type="x-tmpl-mustache">
										<p>As On Date : {{bath4k_12}}</p>
										<hr />
										<ul>
											<li>Ampear Hour Processed : {{bath4k_1}} m<sup>2</sup></li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath4k_2}} g/L , Date : {{bath4k_13}} </li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4k_3}} g/L , Date : {{bath4k_13}}</li>
											<li>Chloride ( Cl ) : {{bath4k_4}} ppm , Date : {{bath4b_13}}</li>
											<li>Temperature : {{bath4k_5}} <sup>o</sup>C</li>
											<li>Addition of Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath4k_6}} Kg</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4k_7}} L</li>
											<li>Addition of Hydrogen Chloride ( HCl ) : {{bath4k_8}} ml</li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath4k_9}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4k_10}} g/L</li>
											<li>Chloride ( Cl ) : {{bath4k_11}} ppm</li>
										</ul>
									</script>
									
									<div id="target22_up">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart22_up"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper Sulphate ( CuSO<sub>4</sub> ) : 65 - 85 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 220 - 260 g/L</li>
										<li>Chloride ( Cl ) : 60 - 80 ppm</li>
										<li>Temperature : 20 - 30 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<!--a href="ep_copperbath1819.html" target="_blank"-->
							<a href="../pages/ep_copperbath2223_update.html" >
							<span class="pull-right">Copper Bath 22/23 NEW - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
			</div>
			
			
			<!--- code for copper bath 22/23 new end ---------------->
			
			
			
			
			<!--- code for copper bath 24/25 new start ---------------->
			
			
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
											<br>
											<br>
											<br>
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
										<li>Copper Sulphate ( CuSO<sub>4</sub> ) : 65 - 85 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 220 - 260 g/L</li>
										<li>Chloride ( Cl ) : 60 - 80 ppm</li>
										<li>Temperature : 20 - 30 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<a href="../pages/ep_copperbath2425.html" target="_blank">
							<span class="pull-right">Copper Bath 24/25 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
			</div>
			
			
			<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Copper Bath 24/25 NEW</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline24_up">&nbsp;</span>
								
									<script id="template24_up" type="x-tmpl-mustache">
										<p>As On Date : {{bath4k_12}}</p>
										<hr />
										<ul>
											<li>Ampear Hour Processed : {{bath4k_1}} m<sup>2</sup></li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath4k_2}} g/L , Date : {{bath4k_13}} </li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4k_3}} g/L , Date : {{bath4k_13}}</li>
											<li>Chloride ( Cl ) : {{bath4k_4}} ppm , Date : {{bath4b_13}}</li>
											<li>Temperature : {{bath4k_5}} <sup>o</sup>C</li>
											<li>Addition of Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath4k_6}} Kg</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4k_7}} L</li>
											<li>Addition of Hydrogen Chloride ( HCl ) : {{bath4k_8}} ml</li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath4k_9}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath4k_10}} g/L</li>
											<li>Chloride ( Cl ) : {{bath4k_11}} ppm</li>
										</ul>
									</script>
									
									<div id="target24_up">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart24_up"></div>
						</div>
						</div><hr />
						<div class="row">
								<div class="col-xs-12">
									<span class="">Limits : </span>
									<br >
									<ul>
										<li>Copper Sulphate ( CuSO<sub>4</sub> ) : 65 - 85 g/L</li>
										<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : 220 - 260 g/L</li>
										<li>Chloride ( Cl ) : 60 - 80 ppm</li>
										<li>Temperature : 20 - 30 <sup>o</sup>C</li>
									</ul>
								</div>
						</div>
						
						
					
				</div>
				<div class="panel-footer">
				
							<!--a href="ep_copperbath1819.html" target="_blank"-->
							<a href="../pages/ep_copperbath2425_update.html" >
							<span class="pull-right">Copper Bath 24/25 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
			</div>
			
			
			<!--- code for copper bath 24/25 new end ---------------->
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
				
							<a href="../pages/ep_10h2so4.html" target="_blank">
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
				
							<a href="../pages/ep_tinbath.html" target="_blank">
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
		url: "../php/ep_microetch_8_new.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline32anew").sparkline(data_1, {
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
	
	
	$.ajax({
		method: "GET",
		url: "../php/ep_copp1819_up.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline18_up").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 1000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Copper Amount',
			tooltipSuffix:' g/L'}
		);
	});
	
	
	$.ajax({
		method: "GET",
		url: "../php/ep_copp2021_up.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline20_up").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 1000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Copper Amount',
			tooltipSuffix:' g/L'}
		);
	});
	
	
	$.ajax({
		method: "GET",
		url: "../php/ep_copp2223_up.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline22_up").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 1000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Copper Amount',
			tooltipSuffix:' g/L'}
		);
	});
	
	$.ajax({
		method: "GET",
		url: "../php/ep_copp2425_up.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline24_up").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 1000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Copper Amount',
			tooltipSuffix:' g/L'}
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