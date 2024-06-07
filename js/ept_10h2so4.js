function getGraph_1(month,year) {
	
	$.ajax({
		url: "../php/ept_10h2so4_main.php",
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
					text: 'Date',
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
				},
				min: 0
			}
		},
		regions: [
			{axis: 'y2', start: 0,  end: 1000, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0, class: 'gridLimit', text: 'Min: 0', axis: 'y2', position: 'start'}, {value: 1000, class: 'gridLimit', text: 'Max: 1000', axis: 'y2', position: 'start'}]
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
	
	$.ajax({
		url: "../php/ept_10h2so4_main.php",
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
				data1: 'Sulphuric Acid Analysis',
				data2: 'Sulphuric Acid Addition',
				data3: 'Sulphuric Acid Analysis'
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
					text: 'Date',
					position: 'outer-center'
				}
			},
			y: {
				label: {
					text: 'Sulphuric Acid (%)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' % '; }
				},
				min: 8,
				max: 12
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
			{axis: 'y', start: 8,  end: 12, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 8, class: 'gridLimit', text: 'LSL: 8%'}, 
						{value: 9, class: 'gridLimit2', text: 'LCL: 9%'}, 
						{value: 10, class: 'gridLimit1', text: 'Optimum: 10%'},
						{value: 11, class: 'gridLimit3', text: 'UCL: 11%'},
						{value: 12, class: 'gridLimit', text: 'USL: 12%'}
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
