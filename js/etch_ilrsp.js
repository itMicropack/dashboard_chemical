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
		url: "../php/etch_ilrsp_main.php",
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
			{axis: 'y2', start: 0, end: 250, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0, class: 'gridLimit', text: 'Min : 0 m²', axis: 'y2', position: 'start'}, {value: 250, class: 'gridLimit', text: 'Max : 250 m²', axis: 'y2', position: 'start'}]
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
		url: "../php/etch_ilrsp_main.php",
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
			{axis: 'y', start: 46, end: 57, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 46, class: 'gridLimit', text: 'Min : 46 °C'}, {value: 57, class: 'gridLimit', text: 'Max : 57°C'}]
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
		url: "../php/etch_ilrsp_main.php",
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
					
					axes: {
						data1: 'y'
					},
					names: {
						data1: 'Resist Stripper Addition'
					},
					labels: true,
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
							text: 'Resist Stripper Addition (L)',
							position: 'outer-middle'
						},
						tick: {
							//format: d3.format('$,')
							format: function (d) { return d+ ' L'; }
						}
					},
				}
			});
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			//$.loader('close');
			alert('Server Error - Data Loading.');
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
		url: "../php/etch_ilrsp_main.php",
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
					
					axes: {
						data1: 'y'
					},
					names: {
						data1: 'pH Analysis'
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
							text: 'pH Analysis',
							position: 'outer-middle'
						},
						tick: {
							//format: d3.format('$,')
							format: function (d) { return d+ ' pH'; }
						}
					},
				},
				regions: [
					{axis: 'y', start: 8, end: 12, class: 'regionY'}
				],
				grid: {
					y: {
						lines: [{value: 8, class: 'gridLimit', text: 'Min: 8 pH'}, {value: 12, class: 'gridLimit', text: 'Max: 12 pH'}]
					}
				}
			});
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			//$.loader('close');
			alert('Server Error - Data Loading.');
		}
	});
}

function getGraph_5a(month,year) {
	
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
		url: "../php/etch_ilrsp_main.php",
		type: 'POST',
		data: {'data_info' : {Month: month, Year: year}, 'action' : 'graph_5a'}, // $form.serialize(),
		dataType: 'json',
		cache: false,
		success: function(dataset1) {
	
			var chart = c3.generate({
				bindto: '#chart_5a',
				data: {
					x: 'x',
					json: dataset1,
					
					axes: {
						data1: 'y'
					},
					names: {
						data1: 'Chambers Spray - Top'
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
							text: 'Chambers Spray Pressure - Top',
							position: 'outer-middle'
						},
						tick: {
							//format: d3.format('$,')
							format: function (d) { return d+ ' bar'; }
						}
					},
				},
				regions: [
					{axis: 'y', start: 2, end: 3, class: 'regionY'}
				],
				grid: {
					y: {
						lines: [{value: 2, class: 'gridLimit', text: 'Min : 2 bar'}, {value: 3, class: 'gridLimit', text: 'Max : 3 bar'}]
					}
				}
			});
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			//$.loader('close');
			alert('Server Error - Data Loading.');
		}
	});

}

function getGraph_5b(month,year) {
	
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
		url: "../php/etch_ilrsp_main.php",
		type: 'POST',
		data: {'data_info' : {Month: month, Year: year}, 'action' : 'graph_5b'}, // $form.serialize(),
		dataType: 'json',
		cache: false,
		success: function(dataset1) {
	
			var chart = c3.generate({
				bindto: '#chart_5b',
				data: {
					x: 'x',
					json: dataset1,
					
					axes: {
						data1: 'y'
					},
					names: {
						data1: 'Chambers Spray - Bottom'
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
							text: 'Chambers Spray Pressure - Bottom',
							position: 'outer-middle'
						},
						tick: {
							//format: d3.format('$,')
							format: function (d) { return d+ ' bar'; }
						}
					},
				},
				regions: [
					{axis: 'y', start: 2, end: 3, class: 'regionY'}
				],
				grid: {
					y: {
						lines: [{value: 2, class: 'gridLimit', text: 'Min : 2 bar'}, {value: 3, class: 'gridLimit', text: 'Max : 3 bar'}]
					}
				}
			});
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			//$.loader('close');
			alert('Server Error - Data Loading.');
		}
	});

}
