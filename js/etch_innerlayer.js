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
		url: "../php/etch_innerlayer_main.php",
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
					format: function (d) { return d+ ' m²'; }
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
					format: function (d) { return d+ ' m²'; }
				}
				
			}
		},
		regions: [
			{axis: 'y2', start: 0, end: 1000, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0, class: 'gridLimit', text: 'Min : 0', axis: 'y2', position: 'start'}, {value: 1000, class: 'gridLimit', text: 'Max : 1000 m²', axis: 'y2', position: 'start'}]
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
		url: "../php/etch_innerlayer_main.php",
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
				data1: 'Temperature'
			},
			labels: true
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
					text: 'Temperature in Degree Celcius',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' °C'; }
				}
			},
		},
		regions: [
			{axis: 'y', start: 45, end: 55, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 45, class: 'gridLimit', text: 'Min : 45 °C'}, {value: 55, class: 'gridLimit', text: 'Max : 55°C'}]
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
		url: "../php/etch_innerlayer_main.php",
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
				data1: 'y'
			},
			names: {
				data1: 'Density'
			},
			labels: true
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
					text: 'Density in Baume',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' Baume'; }
				}
			},
		},
		regions: [
			{axis: 'y', start: 28, end: 34, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 28, class: 'gridLimit', text: 'Min : 28 Baume'}, {value: 34, class: 'gridLimit', text: 'Max : 34 Baume'}]
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
		url: "../php/etch_innerlayer_main.php",
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
				data1: 'Chambers Spray Pressure - Top'
			},
			labels: true
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
					text: 'Chambers Spray Pressure (psi)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' psi'; }
				}
			},
		},
		regions: [
			{axis: 'y', start: 25, end: 35, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 25, class: 'gridLimit', text: 'Min : 25 psi'}, {value: 35, class: 'gridLimit', text: 'Max : 35 psi'}]
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
		url: "../php/etch_innerlayer_main.php",
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
				data1: 'Chambers Spray Pressure - Bottom'
			},
			labels: true
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
					text: 'Chambers Spray Pressure (psi)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' psi'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 10, end: 20, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 10, class: 'gridLimit', text: 'Min : 10 psi'}, {value: 20, class: 'gridLimit', text: 'Max : 20 psi'}]
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

function getGraph_6(month,year) {
	
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
		url: "../php/etch_innerlayer_main.php",
		type: 'POST',
		data: {'data_info' : {Month: month, Year: year}, 'action' : 'graph_6'}, // $form.serialize(),
		dataType: 'json',
		cache: false,
		success: function(dataset1) {
	
		var chart = c3.generate({
		bindto: '#chart_6',
        data: {
			x: 'x',
            json: dataset1,
			mimeType: 'json',
			
			axes: {
				data1: 'y',
				data2: 'y2',
				data3: 'y2',
				data4: 'y'
			},
			names: {
				data1: 'ORP - Analysis',
				data2: 'Addition - HCl',
				data3: 'Addition - CE - 48',
				data4: 'ORP - Analysis'
			},
			labels: true,
			colors: {
				data3: '#FF00FF',
				data4: '#DC143C'
			},
			types: {
				data2: 'bar',
				data3: 'bar'
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
					text: 'ORP Analysis (mv)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' mv'; }
				}
			},
			y2: {
				label: {
					text: 'Additions (L)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' L'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 460, end: 560, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 460, class: 'gridLimit', text: 'Min : 460 mv'}, {value: 560, class: 'gridLimit', text: 'Max : 560 mv'}]
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
