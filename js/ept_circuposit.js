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
		url: "../php/ept_cicuposit_main.php",
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
			labels:   {
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
				max: 3000
			}
		},
		regions: [
			{axis: 'y2', start: 0,  end: 3000, class: 'regionY'}
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
		url: "../php/ept_cicuposit_main.php",
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
					text: 'Copper (Cu)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ 'g/L'; }
				}//,
				//min: 0,
				//max: 40
			}
		},
		regions: [
			{axis: 'y', start: 0, end: 40.0, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0, class: 'gridLimit', text: 'Min: 0'},{value: 40.0, class: 'gridLimit', text: 'Max: 40.0'}]
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
		url: "../php/ept_cicuposit_main.php",
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
				data1: 'Sulphuric Acid Analysis',
				data2: 'Sulphuric Acid Addition',
				data3: 'Sulphuric Acid Analysis',
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
					text: 'Sulphuric Acid Analysis in ml/L',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' ml/L'; }
				}//,
				//min: 0,
				//max: 2.0
			},
			y2: {
				show: true,
				label: {
					text: 'Sulphuric Acid Addition in Litre',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' L'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 0.5,  end: 1.5, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0.5, class: 'gridLimit', text: 'Min: 0.5%'}, {value: 1.5, class: 'gridLimit', text: 'Max: 1.5%'}, {value: 1.0, class: 'gridLimit', text: 'Optimum: 1.0%'}]
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
		url: "../php/ept_cicuposit_main.php",
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
				data1: 'Etch-Rate before Addition',
				data2: 'Chemical Addition',
				data3: 'Etch-Rate after Addition'
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
					text: 'Etch-Rate',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' µm'; }
				},
				min: 0,
				max: 0.37,
			},
			y2: {
				show: true,
				label: {
					text: 'Chemical Addition',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' g'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 0.13, end: 0.37, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0.13, class: 'gridLimit', text: 'LSL: 0.13'}, 
				        {value: 0.20, class: 'gridLimit2', text: 'LCL: 0.20'},
				        {value: 0.25, class: 'gridLimit1', text: 'Optimum: 0.25'},
				        {value: 0.30, class: 'gridLimit3', text: 'UCL: 0.30'},
				        {value: 0.37, class: 'gridLimit', text: 'USL: 0.37'}
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
