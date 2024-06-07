function getGraph_1(month,year) {
	
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
		url: "../php/ec_cleaner233_main.php",
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
				data1: 'y',
				data2: 'y2'
			},
			names: {
				data1: 'Daily Area',
				data2: 'Cumulative Area'
			},
			labels: {
				format:{
					data1: function (data1) {
								var a = data1.toFixed(1);
								return a;
						
					}
				}
			},
			types: {
				data1: 'bar'
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
					text: 'Area in meter square',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'm²'; }
				}
			},
			y2: {
				show: true,
				label: {
					text: 'Area in meter square',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'm²'; }
				},
				min: 0
			}
		},
		regions: [
			{axis: 'y2', start: 0, end: 1800, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0, class: 'gridLimit', text: 'Min: 0', axis: 'y2', position: 'start'},{value: 1800, class: 'gridLimit', text: 'Max: 1800', axis: 'y2', position: 'start'}]
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
		url: "../php/ec_cleaner233_main.php",
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
				data1: 'y',
				data2: 'y2',
				data3: 'y'
			},
			names: {
				data1: 'pH before Addition',
				data2: 'Cleaner-233 Addition',
				data3: 'pH after Addition'
			},
			labels:  {
				format:{
					data1: function (data1) {
								var a = data1.toFixed(1);
								return a;
						
					},
					data2: function (data2) {
								var a = parseFloat(data2);
								if (a>0.0)
								{
									var b = a.toFixed(2);
									return b;
								}
						
					}
				}
			},
			types: {
				data2: 'bar'
			},
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
					//fit: false
				},
				label: {
					text: "Month : "+ monthNames[m.toString()]+" - "+n,
					position: 'outer-center'
				}
			},
			y: {
				label: {
					text: 'pH Analysis',
					position: 'outer-middle'
				},
				min: 9,
				max: 11
				/*,
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'm²'; }
				}
				*/
			},
			y2: {
				show: true,
				label: {
					text: 'Cleaner-233 Addition',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					//format: function (d) { return d+ 'L'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 9.5, end: 11.0, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 9.5, class: 'gridLimit', text: 'Min: 9.5'}, {value: 11.0, class: 'gridLimit', text: 'Max: 11.0'}]
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
	
	$.ajax({
		url: "../php/ec_cleaner233_main.php",
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
				data2: 'y2',
				data3: 'y'
			},
			names: {
				data1: 'Alkaline Normality before Addition',
				data2: 'Cleaner-233 Addition',
				data3: 'Alkaline Normality after Addition'
			},
			labels: true,
			types: {
				data2: 'bar'
			},
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
					format: '%Y-%m-%d'
				//	fit: false
				},
				label: {
					text: "Month : "+ monthNames[m.toString()]+" - "+n,
					position: 'outer-center'
				}
			},
			y: {
				label: {
					text: 'Alkaline Normality',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'N'; }
				},
				min:0.06,
				max:0.12,
			},
			y2: {
				show: true,
				label: {
					text: 'Cleaner-233 Addition',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'L'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 0.07, end: 0.11, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0.07, class: 'gridLimit', text: 'LSL: 0.07' }, 
						{value: 0.11, class: 'gridLimit', text: 'USL: 0.11'},
						{value: 0.08, class: 'gridLimit2', text: 'LCL: 0.08'},
						{value: 0.09, class: 'gridLimit1', text: 'Optimum: 0.09'},
						{value: 0.10, class: 'gridLimit3', text: 'UCL: 0.10'}
				
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
		url: "../php/ec_cleaner233_main.php",
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
				//max: 60,
				tick: {
					//format: d3.format('$,')
					
					format: function (d) { return d+ '°C'; }
				},
				min: 40,
				max: 50,
				stepSize: 0.5,
				stepValue: 0.5,
			}
		},
		regions: [
			{axis: 'y', start: 40, end: 50, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 40, class: 'gridLimit',  text: 'LSL: 40°C'}, 
				        {value: 50, class: 'gridLimit',  text: 'USL: 50°C'}, 
				        {value: 45, class: 'gridLimit1', text: 'Optimum: 45°C'},
				        {value: 42, class: 'gridLimit2', text: 'LCL: 42°C'},
				        {value: 47, class: 'gridLimit3', text: 'UCL: 47°C'}
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
	
