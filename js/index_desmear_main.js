
	function current_data_desmear_main(){

		var dataurl = "../php/current_data_desmear.php";
	
		$.ajax({
			cache: false,
			url: dataurl,
			method: "GET",
			success:function(data) {
					
					for (var i=0, len=data.length; i < len; i++) {
					
						if ( i === 0) {
							var template = $('#template_41').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_41').html(rendered);
						} else if ( i === 1) {
							var template = $('#template_42').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_42').html(rendered);
						} else if ( i === 2) {
							var template = $('#template_43').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_43').html(rendered);
						} else if ( i === 3) {
							var template = $('#template_44').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_44').html(rendered);
						} else if ( i === 4) {
							var template = $('#template_45').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_45').html(rendered);
						} else if ( i === 5) {
							var template = $('#template_46').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_46').html(rendered);
						} 
					}
				},
			dataType:'json'
		});
	
	}
	
	
	
$(document).ready(function () {
	
	var chart = c3.generate({
		bindto: '#chart_41',
		data: {
			url: '../php/ds_holeconditioner211_5.php',
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
		    max: 3000, // 100 is default
		    //units: ' %',
			width: 30 // for adjusting arc thickness
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
			//            unit: 'value', // percentage is default
				//            max: 200, // 100 is default
					values: [600, 1200, 1800, 2400, 3000]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	var chart = c3.generate({
		bindto: '#chart_42',
		data: {
			url: '../php/ds_promoterbath_8.php',
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
		    max: 20000,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [4000, 8000, 12000, 16000, 20000]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	var chart = c3.generate({
		bindto: '#chart_43',
		data: {
			url: '../php/ds_neutralizer3314_5.php',
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
		    max: 20,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [4, 8, 12, 16, 20]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	var chart = c3.generate({
		bindto: '#chart_44a',
		data: {
			url: '../php/ds_mglassetch_6.php',
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
		    max: 2700,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [600, 1200, 1800, 2400, 2700]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	var chart = c3.generate({
		bindto: '#chart_44b',
		data: {
			url: '../php/ds_mglassetch_7.php',
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
		    max: 1500,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [300, 600, 900, 1200, 1500]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	
	var chart = c3.generate({
		bindto: '#chart_45',
		data: {
			url: '../php/ds_10h2so4_3.php',
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
		bindto: '#chart_46',
		data: {
			url: '../php/ds_neutralizer3316_1.php',
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
		    max: 10,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [2, 4, 6, 8, 10]
			}
		},
		size: {
			height: 100
		}
	});
	
	

	
});





