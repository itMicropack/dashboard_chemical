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
                            <a href="index.php">Black Oxide</a>
							
                        </li>
						
						<li>
                            <a href="index.php">Electroless Copper</a>
							
                        </li>
						
						<li>
                            <a href="index.php">Electro Plating</a>
							
                        </li>
						
						<li>
                            <a href="index.php">Desmear</a>
							
                        </li>
						
						<li>
                            <a href="index.php">ENIG Plating</a>
							
                        </li>
						
						<li>
                            <a href="index.php" >Etching</a>
							
                        </li>
						<li>
                            <a  href="#ep_main_line">Electro Plating line-2</a>
							
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

<!--------------------------------------------------------------------------------------------------------->

<!-----------------------------------------Electro Plating line-2-------------------------------------------->

<div class="tab-pane fade in active" id="ep_main_line">
	
		<h3 class="imgbor" align="center">Electro Plating line-2</h3>
		<div class="row" style="padding-top:10px;">
			<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Cleaner</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									<span class="pull-right">&nbsp;</span><br>
                                    <span class="pull-right" id="sparkline67">&nbsp;</span>
								
									<script id="template_67" type="x-tmpl-mustache">
										<p>As On Date : {{bath12_6}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath12_1}} m<sup>2</sup></li>
											<li>Cleaner : {{bath12_2}} ml/L</li>
											<li>Cleaner Addition : {{bath12_3}} L</li>
											<li>Cleaner : {{bath12_4}} ml/L</li>
											<li>Temperature : {{bath12_5}} <sup>o</sup>C</li>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_67">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_67"></div>
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
				
							<!--a href="ep_acidcleanerafr2.html" target="_blank"-->
							<a href="" >
							<span class="pull-right">Cleaner - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Circuposit-3330</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    
									<span class="pull-right" id="sparkline68">&nbsp;</span>
								
									<script id="template_68" type="x-tmpl-mustache">
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
									
									<div id="target_68">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
							
							<div class="col-xs-12">
								<div id="chart_68"></div>
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
				
							<!--a href="ep_microetch.html" target="_blank"-->
							<a href="" >
							<span class="pull-right">Circuposit-3330 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		
		
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">12% H<sub>2</sub>SO<sub>4</sub></div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
									<span class="pull-right">&nbsp;</span><br>
                                    <span class="pull-right" id="sparkline69">&nbsp;</span>
								
									<script id="template_69" type="x-tmpl-mustache">
										<p>As On Date : {{bath13_5}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath13_1}} m<sup>2</sup></li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath13_2}} , Date : {{bath13_6}} </li>
											<li>Sulphuric Acid Addition ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath13_3}} L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath13_4}} ml/L</li>
											<br>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_69">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_69"></div>
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
				
							<!--a href="ep_12h2so4.html" target="_blank"-->
							<a href="" >
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
					<div class="panel-title" align="center">Copper Bath 17</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline70">&nbsp;</span>
								
									<script id="template_70" type="x-tmpl-mustache">
										<p>As On Date : {{bath4k_12}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath4k_1}} m<sup>2</sup></li>
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
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_70">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_70"></div>
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
				
							<!--a href="ep_copperbath1819.html" target="_blank"-->
							<a href="" >
							<span class="pull-right">Copper Bath 17 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
			</div>
		
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Copper Bath 19/20</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline71">&nbsp;</span>
								
									<script id="template_71" type="x-tmpl-mustache">
										<p>As On Date : {{bath5f_12}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath5f_1}} m<sup>2</sup></li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath5f_2}} g/L , Date : {{bath5f_13}} </li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath5f_3}} g/L , Date : {{bath5f_13}}</li>
											<li>Chloride ( Cl ) : {{bath5f_4}} ppm , Date : {{bath5f_13}}</li>
											<li>Temperature : {{bath5f_5}} <sup>o</sup>C</li>
											<li>Addition of Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath5f_6}} Kg</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath5f_7}} L</li>
											<li>Addition of Hydrogen Chloride ( HCl ) : {{bath5f_8}} ml</li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath5f_9}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath5f_10}} g/L</li>
											<li>Chloride ( Cl ) : {{bath5f_11}} ppm</li>
											<br>
											<br>
											
										</ul>
									</script>
									
									<div id="target_71">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_71"></div>
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
				
							<!--a href="ep_copperbath2021.html" target="_blank"-->
							<a href="" >
							<span class="pull-right">Copper Bath 19/20 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
                            <div class="clearfix"></div>
							</a>
                </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title" align="center">Copper Bath 21</div>
				</div>  
				<div class="panel-body" style="background-color:#bbdefb">
					
						<div class="row">
                                <div class="col-xs-12">
                                    <span class="pull-right" id="sparkline72">&nbsp;</span>
								
									<script id="template_72" type="x-tmpl-mustache">
										<p>As On Date : {{bath6g_12}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath6g_1}} m<sup>2</sup></li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath6g_2}} g/L , Date : {{bath6g_13}}</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath6g_3}} g/L , Date : {{bath6g_13}}</li>
											<li>Chloride ( Cl ) : {{bath6g_4}} ppm , Date : {{bath6g_13}} </li>
											<li>Temperature : {{bath6g_5}} <sup>o</sup>C</li>
											<li>Addition of Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath6g_6}} Kg</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath6g_7}} L</li>
											<li>Addition of Hydrogen Chloride ( HCl ) : {{bath6g_8}} ml</li>
											<li>Copper Sulphate ( CuSO<sub>4</sub> ) : {{bath6g_9}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath6g_10}} g/L</li>
											<li>Chloride ( Cl ) : {{bath6g_11}} ppm</li>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_72">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_72"></div>
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
				
							<!--a href="ep_copperbath2223.html" target="_blank"-->
							<a href="" >
							<span class="pull-right">Copper Bath 21 - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
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
                                    <span class="pull-right" id="sparkline73">&nbsp;</span>
								
									<script id="template_73" type="x-tmpl-mustache">
										<p>As On Date : {{bath8h_5}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath8h_1}} m<sup>2</sup></li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath8h_2}} , Date : {{bath8h_6}} </li>
											<li>Sulphuric Acid Addition ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath8h_3}} L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath8h_4}} ml/L</li>
											<br>
											<br>
											<br>
											<br>
											<br>
										</ul>
									</script>
									
									<div id="target_73">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_73"></div>
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
				
							<!--a href="ep_copperbath2425.html" target="_blank"-->
							<a href="" >
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
                                    <span class="pull-right" id="sparkline74">&nbsp;</span>
								
									<script id="template_74" type="x-tmpl-mustache">
										<p>As On Date : {{bath9j_10}}</p>
										<hr />
										<ul>
											<li>Panel Area Processed : {{bath9j_1}} m<sup>2</sup></li>
											<li>Tin Sulphate ( SnSO<sub>4</sub> ) : {{bath9j_2}} g/L , Date : {{bath9_11}}</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath9_3}} ml/L , Date : {{bath9j_11}}</li>
											<li>Addition of Tin Sulphate ( SnSO<sub>4</sub> ) : {{bath9j_4}} kg</li>
											<li>Addition of Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath9j_5}} L</li>
											<li>Addition of Part A : {{bath9j_6}} ml</li>
											<li>Addition of Part B : {{bath9j_7}} ml</li>
											<li>Tin Sulphate ( SnSO<sub>4</sub> ) : {{bath9j_8}} g/L</li>
											<li>Sulphuric Acid ( H<sub>2</sub>SO<sub>4</sub> ) : {{bath9j_9}} ml/L</li>
											
										</ul>
									</script>
									
									<div id="target_74">Loading...</div>
								
                                </div>
                        </div><hr />
						<div class="row">
                        <div class="col-xs-12">
									<!-- Gauge Chart -->
									<div id="chart_74"></div>
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
				
							<!--a href="ep_tinbath.html" target="_blank"-->
							<a href="" >
							<span class="pull-right">Tin Bath - Process Details&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></span>
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

<!-- Electro Plating line-2 JavaScript-->
<script src="../js/index_ep_main_line.js"></script>

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
		
		
	
	
	
	
	//---------------------For Electro Plating line-2 Main----------------------//
	
		$(document).ready(function () {  
		
	$.ajax({
		method: "GET",
		url: "../php/epl_acidcleanerafr2_6.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline67").sparkline(data_1, {
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
		url: "../php/epl_circuposit3330_6.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline68").sparkline(data_1, {
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
		url: "../php/epl_12h2s04_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline69").sparkline(data_1, {
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
		url: "../php/epl_copperbath17_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline70").sparkline(data_1, {
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
		url: "../php/epl_copperbath19_20.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline71").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 30000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	

	
	

	$.ajax({
		method: "GET",
		url: "../php/epl_copperbath21_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline72").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 30000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Daily Panel Area Processed',
			tooltipSuffix:' m²'}
		);
	});
	
	$.ajax({
		method: "GET",
		url: "../php/epl_10h2so4_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline73").sparkline(data_1, {
			type: 'bar',
			barColor: '#007fff',
			chartRangeMin: 0,
			chartRangeMax: 3000,
			barWidth: 5,
			barSpacing: 2,
			zeroAxis: true,
			tooltipChartTitle: 'Copper Amount',
			tooltipSuffix:' g/L'}
		);
	});
	
	
	$.ajax({
		method: "GET",
		url: "../php/epl_12h2so4_5.php",
		cache: false
	}).done(function(data1) {
		var data_1 = [];
		data_1 = JSON.parse(data1);
 		$("#sparkline74").sparkline(data_1, {
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
	
	

		});
	
	//-------------------------For Etching Main-------------------------//
	
	

</script>


</body>
</html>