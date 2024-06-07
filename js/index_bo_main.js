

	function current_data_bo_main(){

		var dataurl = "../php/current_data_bo.php";
	
		$.ajax({
			cache: false,
			url: dataurl,
			method: "GET",
			success:function(data) {
					
					for (var i=0, len=data.length; i < len; i++) {
					
						if ( i === 0) {
							var template = $('#template_1').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_1').html(rendered);
						} else if ( i === 1) {
							var template = $('#template_2').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_2').html(rendered);
						} else if ( i === 2) {
							var template = $('#template_3').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_3').html(rendered);
						} else if ( i === 3) {
							var template = $('#template_4').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_4').html(rendered);
						} else if ( i === 4) {
							var template = $('#template_5').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_5').html(rendered);
						} else if ( i === 5) {
							var template = $('#template_6').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_6').html(rendered);
						}
					}
				},
			dataType:'json'
		});
	
	}
	
//-------------------------------------------------------------------------------------------//
	
	
$(document).ready(function () {
	
	var chart = c3.generate({
		bindto: '#chart_1',
		data: {
			url: '../php/basic_cleaner5.php',
			mimeType: 'json',
			//columns: [
			//	['data', 350]
			//],
			type: 'gauge',
			names: {
				data1: 'Panel Area Processed'
			}
			//onclick: function (d, i) { console.log("onclick", d, i); },
			//onmouseover: function (d, i) { console.log("onmouseover", d, i); },
			//onmouseout: function (d, i) { console.log("onmouseout", d, i); }
		},
		gauge: {
			label: {
				//format: function(value, ratio) {
				//	return value;
				//},
				
				show: true // to turn off the min/max labels.
			},
		    min: 0, // 0 is default, //can handle negative min e.g. vacuum / voltage / current flow / rate of change
		    max: 1500, // 100 is default
		    //units: ' %',
			width: 30 // for adjusting arc thickness
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
			//            unit: 'value', // percentage is default
				//            max: 200, // 100 is default
					values: [300, 600, 900, 1200, 1500]
			}
		},
		size: {
			height: 100
		}
	});
	

	
	var chart = c3.generate({
		bindto: '#chart_2',
		data: {
			url: '../php/micro_etch5.php',
			mimeType: 'json',
			type: 'gauge',
			names: {
				data1: 'Copper Amount'
			}
		},
		gauge: {
			label: {
				show: true
			},
		    min: 0,
		    max: 15,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [3, 6, 9, 12, 15]
			}
		},
		size: {
			height: 100
		}
	});
	

	
	var chart = c3.generate({
		bindto: '#chart_3',
		data: {
			url: '../php/predip2.php',
			mimeType: 'json',
			type: 'gauge',
			names: {
				data1: 'Panel Area Processed'
			}
		},
		gauge: {
			label: {
				show: true
			},
		    min: 0,
		    max: 500,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [100, 200, 300, 400, 500]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	var chart = c3.generate({
		bindto: '#chart_4',
		data: {
			url: '../php/black_oxide6.php',
			mimeType: 'json',
			type: 'gauge',
			names: {
				data1: 'Panel Area Processed'
			}
		},
		gauge: {
			label: {
				show: true
			},
		    min: 0,
		    max: 4000,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [800, 1600, 2400, 3200, 4000]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	var chart = c3.generate({
		bindto: '#chart_5',
		data: {
			url: '../php/reducer_predip2.php',
			mimeType: 'json',
			type: 'gauge',
			names: {
				data1: 'Panel Area Processed'
			}
		},
		gauge: {
			label: {
				show: true
			},
		    min: 0,
		    max: 100,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [20, 40, 60, 80, 100]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	
	var chart = c3.generate({
		bindto: '#chart_6',
		data: {
			url: '../php/reducer_sr6.php',
			mimeType: 'json',
			type: 'gauge',
			names: {
				data1: 'Panel Area Processed'
			}
		},
		gauge: {
			label: {
				show: true
			},
		    min: 0,
		    max: 3000,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [600, 1200, 1800, 2400, 3000]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
});

//-------------------------------------------------------------------------------------------//
