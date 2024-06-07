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
		url: "../php/ds_mglassetch_main.php",
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
					data1: function(data1){
						var a = data1;
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
					text: 'Daily Area in meter square',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' m²'; }
				}
			},
			y2: {
				show: true,
				label: {
					text: 'Cumulative Area in meter square',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' m²'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 0, end: 2700, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0, class: 'gridLimit', text: 'Min: 0 m²', axis: 'y2', position: 'start'}, {value: 2700, class: 'gridLimit', text: 'Max: 2700 m²', axis: 'y2', position: 'start'}]
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
		url: "../php/ds_mglassetch_main.php",
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
				data1: 'Copper (Cu)'
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
					text: 'Copper Amount',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' ppm'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 0, end: 1500, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0, class: 'gridLimit', text: 'Min: 0 ppm'}, {value: 1500, class: 'gridLimit', text: 'Max: 1500 ppm'}]
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
		url: "../php/ds_mglassetch_main.php",
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
				data1: 'M-Glass Etch',
				data2: 'M-Glass Etch Addition',
				data3: 'M-Glass Etch'
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
					text: 'M-Glass Etch',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' g/L'; }
				},
				min:55,
				max:65,
			},
			y2: {
				show: true,
				label: {
					text: 'M-Glass Etch Addition',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' kg'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 55, end: 65, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 55, class: 'gridLimit', text: 'LSL: 55 g/L'}, 
				        {value: 57, class: 'gridLimit', text: 'LCL: 57 g/L'},
				        {value: 58, class: 'gridLimit', text: 'Optimum: 58 g/L'},
				        {value: 62.5, class: 'gridLimit', text: 'Max: 62.5 g/L'},
				        {value: 65, class: 'gridLimit', text: 'Max: 65 g/L'}
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
		url: "../php/ds_mglassetch_main.php",
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
				data1: 'y',
				data2: 'y2',
				data3: 'y'
			},
			names: {
				data1: 'Sulphuric-Acid before Addition',
				data2: 'Sulphuric-Acid Addition',
				data3: 'Sulphuric-Acid after Addition'
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
				//	count: 2,
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
					text: 'Sulphuric Acid Analysis',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ '%'; }
				},
				min:6.5,
				max:8.5,
			},
			y2: {
				show: true,
				label: {
					text: 'Sulphuric Acid Addition',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'L'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 6.5, end: 8.5, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 6.5, class: 'gridLimit', text: 'LSL: 6.5'},
						{value: 7.5, class: 'gridLimit', text: 'Optimum: 7.5'},
						{value: 8.5, class: 'gridLimit', text: 'USL: 8.5'},
						{value: 7.0, class: 'gridLimit', text: 'LCL: 7.0'},
						{value: 8.0, class: 'gridLimit', text: 'UCL: 8.0'}
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
		url: "../php/ds_mglassetch_main.php",
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
				label: {
					text: 'Temperature',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ '°C'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 38, end: 43, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 38, class: 'gridLimit', text: 'Min: 38°C'}, {value: 43, class: 'gridLimit', text: 'Max: 43°C'}]
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
