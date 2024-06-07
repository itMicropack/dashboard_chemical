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
		url: "../php/ept_copperbath21_main.php",
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
			//format: '%d',
		
			x: {
				type: 'timeseries',
				tick: {
				//	count: 2,
					format: '%d'
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
		url: "../php/ept_copperbath21_main.php",
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
				data1: 'Copper Sulfate Analysis',
				data2: 'Copper Sulfate Addition',
				data3: 'Copper Sulfate Analysis'
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
			//format: '%d',
		
			x: {
				type: 'timeseries',
				tick: {
				//	count: 2,
					format: '%d'
				},
				label: {
					text: "Month : "+ monthNames[m.toString()]+" - "+n,
					position: 'outer-center'
				}
			},
			y: {
				label: {
					text: 'Copper Sulfate (g/L)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' g/L'; }
				},
				min:55,
				max:85,
			},
			y2: {
				show: true,
				label: {
					text: 'Copper Sulfate Addition in Litre',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' L'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 55,  end: 85, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 55, class: 'gridLimit', text: 'LSL: 55 g/L'}, 
				        {value: 60, class: 'gridLimit3', text: 'LCL: 60 g/L'},
				        {value: 70, class: 'gridLimit1', text: 'Optimum: 70 g/L'},
				        {value: 80, class: 'gridLimit2', text: 'UCL: 80 g/L'},
				        {value: 85, class: 'gridLimit', text: 'USL: 85 g/L'}
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
	
	// Use Ajax to submit form data
	$.ajax({
		url: "../php/ept_copperbath21_main.php",
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
			//format: '%d',
		
			x: {
				type: 'timeseries',
				tick: {
				//	count: 2,
					format: '%d'
				},
				label: {
					text: "Month : "+ monthNames[m.toString()]+" - "+n,
					position: 'outer-center'
				}
			},
			y: {
				label: {
					text: 'Sulphuric Acid (g/L)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' g/L'; }
				},
				min:220,
				max: 260
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
			{axis: 'y', start: 220,  end: 260, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 220, class: 'gridLimit', text: 'LSL: 220 g/L'}, 
				        {value: 230, class: 'gridLimit3', text: 'LCL: 230 g/L'},
				        {value: 240, class: 'gridLimit1', text: 'Optimum: 240 g/L'},
				        {value: 225, class: 'gridLimit2', text: 'UCL: 255 g/L'},
				        {value: 260, class: 'gridLimit', text: 'USL: 260 g/L'}
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
		url: "../php/ept_copperbath21_main.php",
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
				data1: 'Chloride Analysis',
				data2: 'Hydrogen Chloride Addition',
				data3: 'Chloride Analysis'
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
			//format: '%d',
		
			x: {
				type: 'timeseries',
				tick: {
				//	count: 2,
					format: '%d'
				},
				label: {
					text: "Month : "+ monthNames[m.toString()]+" - "+n,
					position: 'outer-center'
				}
			},
			y: {
				label: {
					text: 'Chloride (ppm)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' ppm'; }
				},
				min:0,
				max: 85
			},
			y2: {
				show: true,
				label: {
					text: 'Hydrogen Chloride Addition in ml',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' ml'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 50,  end: 85, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 50, class: 'gridLimit', text: 'LSL: 50 ppm'}, 
				        {value: 55, class: 'gridLimit2', text: 'LCL: 55 ppm'},
				        {value: 65, class: 'gridLimit1', text: 'Optimum: 65 ppm'},
				        {value: 75, class: 'gridLimit3', text: 'UCL: 75 ppm'},
				        {value: 85, class: 'gridLimit', text: 'USL: 85 ppm'}
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
		url: "../php/ept_copperbath21_main.php",
		type: 'POST',
		data: {'data_info' : {Month: month, Year: year}, 'action' : 'graph_5'}, // $form.serialize(),
		dataType: 'json',
		cache: false,
		success: function(dataset1) {
			data5=dataset1.data1;
			length = data5.length;
		for(i=0;i<length;i++){
			if(data5[i] == 0){
				data5[i] =null;
			}
		}
		dataset1.data1 = [];
		dataset1.data1 = data5;

		
		data6=dataset1.data3;
		length = data6.length;
	for(i=0;i<length;i++){
		if(data6[i] == 0){
			data6[i] =null;
		}
	}
	dataset1.data3 = [];
	dataset1.data3 = data6;
	
		var chart = c3.generate({
		bindto: '#chart_5',
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
				data1: 'Har Additive Analysis',
				data2: 'Har Addition',
				data3: 'Har After Addition'
			},
			labels: true,
			types: {
				data2: 'bar'
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
			//format: '%d',
		
			x: {
				type: 'timeseries',
				tick: {
				//	count: 2,
					format: '%d'
				},
				label: {
					text: "Month : "+ monthNames[m.toString()]+" - "+n,
					position: 'outer-center'
				}
			},
			y: {
				label: {
					text: 'Har Additive Analysis (ml/L)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' ml/L'; }
				},
				min:0,
				max:6,
			},
			y2: {
				show: true,
				label: {
					text: 'Har Addition',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' L'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 0,  end: 6, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 2, class: 'gridLimit', text: 'LSL: 2 ml/L'}, 
				        {value: 2.5, class: 'gridLimit3', text: 'LCL: 2.5 ml/L'},
				        {value: 3, class: 'gridLimit1', text: 'Optimum: 3 ml/L'},
				        {value: 4, class: 'gridLimit2', text: 'UCL: 4 ml/L'},
				        {value: 6, class: 'gridLimit', text: 'USL: 6 ml/L'}
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
	
	// Use Ajax to submit form data
	$.ajax({
		url: "../php/ept_copperbath21_main.php",
		type: 'POST',
		data: {'data_info' : {Month: month, Year: year}, 'action' : 'graph_6'}, // $form.serialize(),
		dataType: 'json',
		cache: false,
		success: function(dataset1) {
			data5=dataset1.data1;
			length = data5.length;
		for(i=0;i<length;i++){
			if(data5[i] == 0){
				data5[i] =null;
			}
		}
		dataset1.data1 = [];
		dataset1.data1 = data5;

		data6=dataset1.data3;
		length = data6.length;
	for(i=0;i<length;i++){
		if(data6[i] == 0){
			data6[i] =null;
		}
	}
	dataset1.data3 = [];
	dataset1.data3 = data6;

	
		var chart = c3.generate({
		bindto: '#chart_6',
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
				data1: 'Har Leveller Analysis',
				data2: 'Har Addition',
				data3: 'Har After Addition'
			},
			labels: true,
			types: {
				data2: 'bar'
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
			//format: '%d',
		
			x: {
				type: 'timeseries',
				tick: {
				//	count: 2,
					format: '%d'
				},
				label: {
					text: "Month : "+ monthNames[m.toString()]+" - "+n,
					position: 'outer-center'
				}
			},
			y: {
				label: {
					text: 'Har Leveller Analysis (ml/L)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' ml/L'; }
				},
				min:0,
				max:8,
			},
			y2: {
				show: true,
				label: {
					text: 'Har Addition',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' L'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 0,  end: 8, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 2, class: 'gridLimit', text: 'LSL: 2 ml/L'}, 
				        {value: 3.5, class: 'gridLimit3', text: 'LCL: 3.5 ml/L'},
				        {value: 4.5, class: 'gridLimit1', text: 'Optimum: 4.5 ml/L'},
				        {value: 5, class: 'gridLimit2', text: 'UCL: 5 ml/L'},
				        {value: 8, class: 'gridLimit', text: 'USL: 8 ml/L'}
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



function getGraph_7(month,year) {
	
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
		url: "../php/ept_copperbath21_main.php",
		type: 'POST',
		data: {'data_info' : {Month: month, Year: year}, 'action' : 'graph_7'}, // $form.serialize(),
		dataType: 'json',
		cache: false,
		success: function(dataset1) {
			data5=dataset1.data1;
			length = data5.length;
		for(i=0;i<length;i++){
			if(data5[i] == 0){
				data5[i] =null;
			}
		}
		dataset1.data1 = [];
		dataset1.data1 = data5;

		data6=dataset1.data3;
		length = data6.length;
	for(i=0;i<length;i++){
		if(data6[i] == 0){
			data6[i] =null;
		}
	}
	dataset1.data3 = [];
	dataset1.data3 = data6;

	
		var chart = c3.generate({
		bindto: '#chart_7',
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
				data1: 'Har Carrier Analysis',
				data2: 'Har Addition',
				data3: 'Har After Addition'
			},
			labels: true,
			types: {
				data2: 'bar'
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
			//format: '%d',
		
			x: {
				type: 'timeseries',
				tick: {
				//	count: 2,
					format: '%d'
				},
				label: {
					text: "Month : "+ monthNames[m.toString()]+" - "+n,
					position: 'outer-center'
				}
			},
			y: {
				label: {
					text: 'Har Carrier Analysis (ml/L)',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' ml/L'; }
				},
				min:10,
				max:70,
			},
			y2: {
				show: true,
				label: {
					text: 'Har Addition',
					position: 'outer-middle'
				},
				tick: {
					//format: d3.format('$,')
					format: function (d) { return d+ ' L'; }
				}
			}
		},
		regions: [
			{axis: 'y', start: 010,  end: 70, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 20, class: 'gridLimit', text: 'LSL: 20 ml/L'}, 
				        {value: 25, class: 'gridLimit3', text: 'LCL: 25 ml/L'},
				        {value: 30, class: 'gridLimit1', text: 'Optimum: 30 ml/L'},
				        {value: 40, class: 'gridLimit2', text: 'UCL: 40 ml/L'},
				        {value: 60, class: 'gridLimit', text: 'USL: 60 ml/L'}
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

