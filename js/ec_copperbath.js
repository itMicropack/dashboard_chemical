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
		url: "../php/ec_copperbath_main.php",
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
			labels:  {
				format:{
					
					data1: function (data1) {
								var a = data1.toFixed(2);
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
		url: "../php/ec_copperbath_main.php",
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
				data1: 'Specific Gravity'
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
				label: {
					text: 'Specific Gravity',
					position: 'outer-middle'
				},
				min:1,
				max:1.135
			}
		},
		regions: [
			{axis: 'y', start: 1, end: 1.135, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 1, class: 'gridLimit', text: 'Min: 1'},
				        {value: 1.135, class: 'gridLimit', text: 'Max: 1.135'}
			
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
		url: "../php/ec_copperbath_main.php",
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
				data2: 'y2'//,
				//data3: 'y'
			},
			names: {
				data1: 'EDTA before Addition',
				data2: '250-M Addition'//,
				//data3: 'EDTA after Addition'
			},
			labels: true,
			types: {
				data2: 'bar'
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
					text: 'EDTA Analysis',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'g/L'; }
				},
				min:25,
				max:36,
			},
			y2: {
				show: true,
				label: {
					text: '250-M Addition',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'L'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 25, end: 36, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 36, class: 'gridLimit', text: 'USL: 36g/L'},
						{value: 33, class: 'gridLimit2', text: 'UCL: 33g/L'},
						{value: 30, class: 'gridLimit1', text: 'Otimum: 30g/L'},
						{value: 27, class: 'gridLimit3', text: 'LCL: 27g/L'},
						{value: 25, class: 'gridLimit', text: 'LSL: 25g/l'}]
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
				min: 38,
				max: 46,
				stepSize: 0.5,
				stepValue: 0.5,
			}
		},
		regions: [
			{axis: 'y', start: 38, end: 46, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 38, class: 'gridLimit',  text: 'LSL: 38°C'}, 
				        {value: 46, class: 'gridLimit',  text: 'USL: 46°C'}, 
				        {value: 44, class: 'gridLimit1', text: 'Optimum: 44°C'},
				        {value: 42, class: 'gridLimit2', text: 'LCL: 42°C'},
				        {value: 45, class: 'gridLimit3', text: 'UCL: 45°C'}
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
