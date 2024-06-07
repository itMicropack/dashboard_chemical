
function current_data_ec_main(){

	var dataurl = "../php/current_data_ec.php";
	
	$.ajax({
		cache: false,
		url: dataurl,
		method: "GET",
		success:function(data) {
					
					for (var i=0, len=data.length; i < len; i++) {
						
						if ( i === 0) {
							var template = $('#template_afr2').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_afr2').html(rendered);
						} else if ( i === 1) {
							var template = $('#template_21').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_21').html(rendered);
						} else if ( i === 2) {
							var template = $('#template_22').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_22').html(rendered);
						} else if ( i === 3) {
							var template = $('#template_etch').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_etch').html(rendered);
						} else if ( i === 4) {
							var template = $('#template_23').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_23').html(rendered);
						} else if ( i === 5) {
							var template = $('#template_24').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_24').html(rendered);
						} else if ( i === 6) {
							var template = $('#template_25').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_25').html(rendered);
						} else if ( i === 7) {
							var template = $('#template_26').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_26').html(rendered);
						} else if ( i === 8) {
							var template = $('#template_27').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_27').html(rendered);
						} else if ( i === 9) {
							var template = $('#template_28').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_28').html(rendered);
						} else if ( i === 10) {
							var template = $('#template_29').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_29').html(rendered);
						}
						
					}
				},
		dataType:'json'
		
	});
	
}



//-------------------------------------------------------------------------------------------//
	
	
$(document).ready(function () {
	
	var chart = c3.generate({
		bindto: '#chart_afr2',
		data: {
			url: '../php/ec_afr2_1.php',
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
		    max: 1000, // 100 is default
		    //units: ' %',
			width: 30 // for adjusting arc thickness
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
			//            unit: 'value', // percentage is default
				//            max: 200, // 100 is default
					values: [200, 400, 600, 800, 1000]
			}
		},
		size: {
			height: 100
		}
	});
	
	var chart = c3.generate({
		bindto: '#chart_21',
		data: {
			url: '../php/ec_cleaner233_4.php',
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
		    max: 1800, // 100 is default
		    //units: ' %',
			width: 30 // for adjusting arc thickness
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
			//            unit: 'value', // percentage is default
				//            max: 200, // 100 is default
					values: [400, 800, 1200, 1600, 1800]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	
	var chart = c3.generate({
		bindto: '#chart_22',
		data: {
			url: '../php/ec_microetch_5.php',
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
		bindto: '#chart_etch',
		data: {
			url: '../php/ec_microetch_new_5.php',
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
		bindto: '#chart_23',
		data: {
			url: '../php/ec_10h2so4_3.php',
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
		bindto: '#chart_24',
		data: {
			url: '../php/ec_catalystpredip404_3.php',
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
		bindto: '#chart_25',
		data: {
			url: '../php/ec_catalyst44_3.php',
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
		    max: 36000,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [8000, 16000, 24000, 32000, 36000]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	
	
	var chart = c3.generate({
		bindto: '#chart_26',
		data: {
			url: '../php/ec_accelerator19_4.php',
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
		    max: 720,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [144, 288, 432, 576, 720]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	
	var chart = c3.generate({
		bindto: '#chart_28',
		data: {
			url: '../php/ec_5h2so4_3.php',
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
		bindto: '#chart_29',
		data: {
			url: '../php/ec_antitarnish_2.php',
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
		    max: 180,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [40, 80, 120, 160, 180]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	
	
	
});
//-------------------------------------------------------------------------------------------//