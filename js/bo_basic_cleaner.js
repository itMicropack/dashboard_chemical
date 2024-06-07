function getGraph_1(month,year) {
	
	var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

	if( month == ""){
		var d =  new Date();
		var m = d.getMonth();
	} else {
		var m = month - 1; 
	}
	
	var n = 0 ;
	if(year == ''){
		var d = new Date();
		n = d.getFullYear();
	} else {
		n = year;
	}
	
	// Use Ajax to submit form data
	$.ajax({
		url: "../php/basic_cleaner_main.php",
		type: 'POST',
		data: {'data_info' : {Month: month, Year: year}, 'action' : 'graph_1'}, // $form.serialize(),
		dataType: 'json',
		cache: false,
		success: function(dataset1) {
	
			var chart = c3.generate({
			bindto: '#chart_1',
			data: {
				x: 'x',
				json: dataset1,
				
				mimeType: 'json',
				
				axes: {
					data1: 'y'
				},
				types: {
					data1: 'bar'
				},
				names: {
					data1: 'Daily Processed Area'
				},
				labels: true
			},
			axis: {
				// type: 'timeseries',
				// format: '%Y-%m-%d %H:%M:%S',
			
				x: {
					type: 'timeseries',
					//localtime: false,
					tick: {
					//	count: 2,
						format: '%Y-%m-%d'
					},
					label: {
						text: "Month : "+ monthNames[m.toString()]+" - "+n,
						position: 'outer-center'
					}
				},
				y: {
					label: {
						text: 'Area in meter square',
						position: 'outer-middle'
					},
					tick: {
						//format: d3.format('$,')
						format: function (d) { return d+ ' m²'; }
					}
				}
			}
			});
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			//$.loader('close');
			alert('Server Error');
		}
	});
	
}	

	

	
function getGraph_2(month,year) {
	
	var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

	if( month == ""){
		var d =  new Date();
		var m = d.getMonth();
	}else {	
		var m = month - 1; 
	}
	
	var n = 0 ;
	if(year == ''){
		var d = new Date();
		n = d.getFullYear();
	} else {
		n = year;
	}
	
	$.ajax({
		url: "../php/basic_cleaner_main.php",
		type: 'POST',
		data: {'data_info' : {Month: month, Year: year}, 'action' : 'graph_2'}, // $form.serialize(),
		dataType: 'json',
		cache: false,
		success: function(dataset1) {
	
			var chart = c3.generate({
				bindto: '#chart_2',
				data: {
					x: 'x',
					
					json: dataset1,
					
					mimeType: 'json',
					
					axes: {
						data1: 'y'
					},
					
					names: {
						data1: 'Cumulative Area'
					},
					labels: {
						format:{
							data1: function (data1) {
										var a = data1.toFixed(0);
										return a;
								
							}
						}
					}
				},
				axis: {
					
				
					x: {
						type: 'timeseries',
						tick: {
						//	count: 2,
							format: '%Y-%m-%d'
						},
						label: {
							text: "Month : "+ monthNames[m.toString()]+" - "+n,
							position: 'outer-center'
						}
					},
					y: {
						label: {
							text: 'Area in meter square',
							position: 'outer-middle'
						},
						tick: {
							//format: d3.format('$,')
							format: function (d) { return d+ 'm²'; }
						}
					}
				},
				regions: [
					{axis: 'y', start: 0, end: 1500, class: 'regionY'}
				],
				grid: {
					y: {
						lines: [{value: 0, class: 'gridLimit', text: 'Min: 0'}, {value: 1500, class: 'gridLimit', text: 'Max: 1500'}]
					}
				}
				
			});
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			//$.loader('close');
			alert('Server Error');
		}
	});
}
	
	

function getGraph_3(month,year) {
	
	var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

	if( month == ""){
		var d =  new Date();
		var m = d.getMonth();
	}else {	
		var m = month - 1; 
	}
	
	var n = 0 ;
	if(year == ''){
		var d = new Date();
		n = d.getFullYear();
	} else {
		n = year;
	}
	
	
	
	// Use Ajax to submit form data
	$.ajax({
		url: "../php/basic_cleaner_main.php",
		type: 'POST',
		data: {'data_info' : {Month: month, Year: year}, 'action' : 'graph_3'}, // $form.serialize(),
		dataType: 'json',
		cache: false,
		success: function(dataset1) {

				var chart = c3.generate({
					bindto: '#chart_3',
					data: {
						x: 'x',
						json: dataset1,
						
						mimeType: 'json',
						
						axes: {
							data1: 'y',
							data2: 'y2'
						},
						names: {
							data1: 'Analysis Before Addition',
							data2: 'Addition Amount',
							data3: 'Analysis After Addition'
						},
						types: {
							data2: 'bar'
						},
						labels: true,
						colors: {
							data3: '#FF00FF'
						}
					},
					axis: {
						//type: 'timeseries',
						//format: '%Y-%m-%d',
					
						x: {
							type: 'timeseries',
							tick: {
							//	count: 2,
								format: '%Y-%m-%d'
							},
							label: {
								text: "Month : "+ monthNames[m.toString()]+" - "+n,
								position: 'outer-center'
							}
						},
						y: {
							label: {
								text: 'Analysis in ml/L',
								position: 'outer-middle'
							},
							max: 90,
							tick: {
								//format: d3.format('$,')
								format: function (d) { return d+ 'ml/L'; }
							},
							min:50,
							max:70,
						},
						y2: {
							show: true,
							label: {
								text: 'Addition in Litres',
								position: 'outer-middle'
							},
							tick: {
								//format: d3.format('$,')
								format: function (d) { return d+ 'L'; }
							}
						}
					},
					regions: [
						{axis: 'y', start: 50, end: 70, class: 'regionY'}
					],
					grid: {
						y: {
							lines: [{value: 50, class: 'gridLimit2', text: 'LSL: 50'}, 
							        {value: 70, class: 'gridLimit3', text: 'USL: 70'},
							        {value: 65, class: 'gridLimit', text: 'UCL: 65'},
							        {value: 60, class: 'gridLimit1', text: 'Optimum: 60'},
							        {value: 55, class: 'gridLimit', text: 'LCL: 55'}
									]
						}
					}
					
				});
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			//$.loader('close');
			alert('Server Error');
		}
	});
}
	

	
function getGraph_4(month,year) {
	
	var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

	if( month == ""){
		var d =  new Date();
		var m = d.getMonth();
	}else {	
		var m = month - 1; 
	}
	
	var n = 0 ;
	if(year == ''){
		var d = new Date();
		n = d.getFullYear();
	} else {
		n = year;
	}
	
	// Use Ajax to submit form data
	$.ajax({
		url: "../php/basic_cleaner_main.php",
		type: 'POST',
		data: {'data_info' : {Month: month, Year: year}, 'action' : 'graph_4'}, // $form.serialize(),
		dataType: 'json',
		cache: false,
		success: function(dataset1) {
	
			var chart = c3.generate({
				bindto: '#chart_4',
				data: {
					x: 'x',
					json: dataset1,
					
					mimeType: 'json',
					
					axes: {
						data1: 'y'
					},
					names: {
						data1: 'Temperature'
					},
					labels: true
				},
				axis: {
					//type: 'timeseries',
					//format: '%Y-%m-%d',
				
					x: {
						type: 'timeseries',
						tick: {
						//	count: 2,
							format: '%Y-%m-%d'
						},
						label: {
							text: "Month : "+ monthNames[m.toString()]+" - "+n,
							position: 'outer-center'
						}
					},
					y: {
						show: true,
						label: {
							text: 'Temperature in Degree Celcius',
							position: 'outer-middle'
						},
						//min: 0,
						//max: 70,
						tick: {
							//format: d3.format('$,')
							format: function (d) { return d+ '°C'; }
						}
					}
				},
				regions: [
					{axis: 'y', start: 60, end: 65, class: 'regionY'}
				],
				grid: {
					y: {
						lines: [{value: 60, class: 'gridLimit', text: 'Min: 60'}, {value: 65, class: 'gridLimit', text: 'Max: 65'}]
					}
				}
			});
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			//$.loader('close');
			alert('Server Error');
		}
	});
}
	
