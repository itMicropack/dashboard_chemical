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
		url: "../php/reducer_sr_main.php",
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
				min: 0,
				max: 3000
			}
		},
		regions: [
			{axis: 'y2', start: 0, end: 3000, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0, class: 'gridLimit', text: 'Min: 0', axis: 'y2', position: 'start'}, {value: 3000, class: 'gridLimit', text: 'Max: 3000', axis: 'y2', position: 'start'}]
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
		url: "../php/reducer_sr_main.php",
		type: 'POST',
		data: {'data_info' : {Month: month, Year: year}, 'action' : 'graph_2'}, // $form.serialize(),
		dataType: 'json',
		cache: false,
		success: function(dataset1) {
		

			data4 = dataset1.data3;
			length = data4.length;
			for (i = 0; i < length; i++) {
				if (data4[i] == 0) {
					data4[i] = null;
				}
			}
			dataset1.data3 = [];
			dataset1.data3 = data4;
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
				data1: 'MBSR Analysis',
				data2: 'MBSR Addition Amount',
				data3: 'MBSR Analysis',
			},
			types: {
				data2: 'bar'
			},
			labels: {
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
		line: {
			connectNull: true
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
					text: 'MBSR Analysis (ml/L)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'ml/L'; }
				},
				min: 0,
				max: 60,
			},
			y2: {
				show: true,
				label: {
					text: 'MBSR Addition (L)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'L'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 40, end: 60, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 40, class: 'gridLimit2', text: 'LSL: 40'}, 
				        {value: 60, class: 'gridLimit3', text: 'USL: 60%'}, 
						{value: 50, class: 'gridLimit1', text: 'Optimum: 50'},
						{value: 45, class: 'gridLimit', text: 'LCL: 45'},
						{value: 55, class: 'gridLimit', text: 'UCL: 55'}
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
		url: "../php/reducer_sr_main.php",
		type: 'POST',
		data: {'data_info' : {Month: month, Year: year}, 'action' : 'graph_3'}, // $form.serialize(),
		dataType: 'json',
		cache: false,
		success: function(dataset1) {
	
			data4 = dataset1.data3;
			length = data4.length;
			for (i = 0; i < length; i++) {
				if (data4[i] == 0) {
					data4[i] = null;
				}
			}
			dataset1.data3 = [];
			dataset1.data3 = data4;
			
	
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
				data1: 'pH',
				data2: 'NaOH Addition Amount',
				data3: 'pH',
			},
			types: {
				data2: 'bar'
			},
			labels: {
				format:{
					data1: function (data1) {
								var a = data1.toFixed(2);
								return a;
						
					},
					data2: function (data2) {
								var a = data2.toFixed(0);
								return a;
						
					}
				}
			},
			colors: {
				data3: '#FF00FF'
			}
        },
		line: {
			connectNull: true
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
					text: 'pH',
					position: 'outer-middle'
				}//,
				//min: 0
			},
			y2: {
				show: true,
				label: {
					text: 'NaOH Addition (gm)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'gm'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 12, end: 13, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 12, class: 'gridLimit', text: 'Min: 12'}, {value: 13, class: 'gridLimit', text: 'Max: 13'}]
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
		url: "../php/reducer_sr_main.php",
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
				data1: 'Acid Resistance'
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
					text: 'Acid Resistance',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' min'; }
				}//,
				//min: 0
			}
		},
		regions: [
			{axis: 'y', start: 3, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 3, class: 'gridLimit', text: 'Min: 3'}]
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
		url: "../php/reducer_sr_main.php",
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
				data1: 'Peel Strength'
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
					text: 'Peel Strength',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'kg/cm'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 0.9, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0.9, class: 'gridLimit', text: 'Min: 0.9'}]
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
	
