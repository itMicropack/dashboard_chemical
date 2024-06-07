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
		url: "../php/ec_catalyst44_main.php",
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
				max: 36000
			}
		},
		regions: [
			{axis: 'y2', start: 0, end: 36000, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0, class: 'gridLimit', text: 'Min: 0', axis: 'y2', position: 'start'}, {value: 36000, class: 'gridLimit', text: 'Max: 36,000', axis: 'y2', position: 'start'}]
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
	
	// Use Ajax to submit form data
	$.ajax({
		url: "../php/ec_catalyst44_main.php",
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
				data1: 'PdCl2'
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
				//	fit: false
				},
				label: {
					text: "Month : "+ monthNames[m.toString()]+" - "+n,
					position: 'outer-center'
				}
			},
			y: {
				label: {
					text: 'PdCl2 Analysis',
					position: 'outer-middle'
				},
				min: 0.16,
				max: 0.26


				// tick: {
				// 	//format: d3.format('$,')
				// 	format: function (d) { return d+ 'g/L'; }
				// }
			}
		},
		regions: [
			{axis: 'y', start: 0.16, end: 0.26, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0.16, class: 'gridLimit', text: 'LSL: 0.16' }, 
						{value: 0.26, class: 'gridLimit', text: 'USL: 0.26'},
						{value: 0.18, class: 'gridLimit2', text: 'LCL: 0.18'},
						{value: 0.20, class: 'gridLimit1', text: 'Optimum: 0.20'},
						{value: 0.24, class: 'gridLimit3', text: 'UCL: 0.24'}
				
				]
			}
		}

		// grid: {
		// 	y: {
		// 		lines: [{value: 0.16, class: 'gridLimit', text: 'Min: 0.16'}, {value: 0.26, class: 'gridLimit', text: 'Max: 0.26'}]
		// 	}
			
		// }
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
		url: "../php/ec_catalyst44_main.php",
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
				data1: 'Bath strength'
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
					text: 'Bath Strength',
					position: 'outer-middle'
				},
				//min: 0,
				//max: 60,
				tick: {
					//format: d3.format('$,')
					
					format: function (d) { return d+ '%'; }
				},
				min: 70,
				max: 100,
			}
		},
		regions: [
			{axis: 'y', start: 70, end: 100, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [ {value: 100, class: 'gridLimit',  text: 'USL: 100%'},
				         {value: 95, class: 'gridLimit3', text: 'UCL: 95%'},
						 {value: 90, class: 'gridLimit1', text: 'Optimum: 90%'},
						 {value: 80, class: 'gridLimit2', text: 'LCL: 80%'},
				         {value: 70, class: 'gridLimit',  text: 'LSL: 70%'}
				        
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
		url: "../php/ec_catalyst44_main.php",
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
				data1: 'Sncl2'
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
					text: 'Sncl2 g/L',
					position: 'outer-middle'
				},
				//min: 0,
				//max: 60,
				tick: {
					//format: d3.format('$,')
					
					format: function (d) { return d+ 'g/l'; }
				},
				min: 2,
				max: 9,
			}
		},
		regions: [
			{axis: 'y', start: 2, end: 9, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 9, class: 'gridLimit',  text: 'USL: 9g/L'},
				         {value: 7, class: 'gridLimit3', text: 'UCL: 7g/L'},
						 {value: 6, class: 'gridLimit1', text: 'Optimum: 6g/L'},
						 {value: 5, class: 'gridLimit2', text: 'LCL: 5g/L'},
				         {value: 2, class: 'gridLimit',  text: 'LSL: 2g/L'}
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
	
	// Use Ajax to submit form data
	$.ajax({
		url: "../php/ec_catalyst44_main.php",
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
				show: true,
				label: {
					text: 'Specific Gravity',
					position: 'outer-middle'
				},
				//min: 0,
				//max: 60,
				tick: {
					//format: d3.format('$,')
					
					format: function (d) { return d+ 'g/L'; }
				},
				min: 1.120,
				max: 1.167,
			}
		},
		regions: [
			{axis: 'y', start: 1.120, end: 1.167, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 1.167, class: 'gridLimit',  text: 'USL: 1.167'},
				         {value: 1.160, class: 'gridLimit3', text: 'UCL: 1.160'},
						 {value: 1.150, class: 'gridLimit1', text: 'Optimum: 1.150'},
						 {value: 1.145, class: 'gridLimit2', text: 'LCL: 1.145'},
				         {value: 1.120, class: 'gridLimit',  text: 'LSL: 1.120'}
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