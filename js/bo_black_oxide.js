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
	
	// Use Ajax to submit form data
	$.ajax({
		url: "../php/black_oxide_main.php",
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
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'm²'; }
				},
				min: 0,
				max: 4000
			}
		},
		regions: [
			{axis: 'y2', start: 0, end: 4000, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0, class: 'gridLimit', text: 'Min: 0', axis: 'y2', position: 'start'}, {value: 4000, class: 'gridLimit', text: 'Max: 4000', axis: 'y2', position: 'start'}]
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
		url: "../php/black_oxide_main.php",
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
				data2: 'y2'
			},
			names: {
				data1: 'Part-A Analysis',
				data2: 'Part-A Addition Amount',
				data3: 'Part-A Analysis',
			},
			types: {
				data2: 'bar'
			},
			labels:  {
				format:{
					data1: function (data1) {
								var a = data1.toFixed(2);
								return a;
						
					},
					data2: function (data2) {
								var a = data2.toFixed(2);
								return a;
						
					}
				}
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
				},
				label: {
					text: "Month : "+ monthNames[m.toString()]+" - "+n,
					position: 'outer-center'
				}
			},
			y: {
				label: {
					text: 'Part-A Analysis (ml/L)',
					position: 'outer-middle'
				},
				//min: 0,
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'ml/L'; }
				},
				min:300,
				max:460,
			},
			y2: {
				show: true,
				label: {
					text: 'Part-A Addition (L)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'L'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 300, end: 450, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 300, class: 'gridLimit2', text: 'LSL: 300'},
				        {value: 375, class: 'gridLimit', text: 'LCL: 375'},
				        {value: 380, class: 'gridLimit1', text: 'Optimum: 380'},
				        {value: 400, class: 'gridLimit', text: 'UCL: 400'},
				        {value: 450, class: 'gridLimit3', text: 'USL: 450'}
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
		url: "../php/black_oxide_main.php",
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
				data2: 'y2'
			},
			names: {
				data1: 'Part-B Analysis',
				data2: 'Part-B Addition Amount',
				data3: 'Part-B Analysis',
			},
			types: {
				data2: 'bar'
			},
			labels:  {
				format:{
					data1: function (data1) {
								var a = data1.toFixed(2);
								return a;
						
					},
					data2: function (data2) {
								var a = data2.toFixed(2);
								return a;
						
					}
				}
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
				},
				label: {
					text: "Month : "+ monthNames[m.toString()]+" - "+n,
					position: 'outer-center'
				}
			},
			y: {
				label: {
					text: 'Part-B Analysis (ml/L)',
					position: 'outer-middle'
				},
				//min: 0,
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'ml/L'; }
				},
				min:0,
				max:220,
			},
			y2: {
				show: true,
				label: {
					text: 'Part-B Addition (L)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'L'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 100, end: 220, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 100, class: 'gridLimit2', text: 'LSL: 100'}, 
				        {value: 140, class: 'gridLimit', text: 'LCL: 140'},
				        {value: 160, class: 'gridLimit1', text: 'Optimum: 160'},
				        {value: 180, class: 'gridLimit', text: 'UCL: 180'},
				        {value: 220, class: 'gridLimit3', text: 'USL: 220'}
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
	
	$.ajax({
		url: "../php/black_oxide_main.php",
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
				data1: 'Weight Gain Before Addition',
				data2: 'Weight Gain After Addition'
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
					text: 'Weight Gain',
					position: 'outer-middle'
				},
				//min: 0,
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'mg/cm²'; }
				},
				min:0.2,
				max:0.35,
			}
		},
		regions: [
			{axis: 'y', start: 0.25, end: 0.35, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0.25, class: 'gridLimit2', text: 'LSL: 0.25'}, 
				        {value: 0.28, class: 'gridLimit', text: 'LCL: 0.28'},
				        {value: 0.30, class: 'gridLimit1', text: 'Optimum: 0.30'},
				        {value: 0.33, class: 'gridLimit', text: 'UCL: 0.33'},
				        {value: 0.35, class: 'gridLimit3', text: 'USL: 0.35'}
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


function getGraph_5(month,year) {
	
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
		url: "../php/black_oxide_main.php",
		type: 'POST',
		data: {'data_info' : {Month: month, Year: year}, 'action' : 'graph_5'}, // $form.serialize(),
		dataType: 'json',
		cache: false,
		success: function(dataset1) {
		var chart = c3.generate({
		bindto: '#chart_5',
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
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ '°C'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 65, end: 70, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 65, class: 'gridLimit', text: 'Min: 65'}, {value: 70, class: 'gridLimit', text: 'Max: 70'}]
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
