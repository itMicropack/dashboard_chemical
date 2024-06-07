// 
function current_data_enig_main(){

	var dataurl = "../php/current_data_enig.php";
	
	$.ajax({
		cache: false,
		url: dataurl,
		method: "GET",
		success:function(data) {
					
					for (var i=0, len=data.length; i < len; i++) {
					
						if ( i === 0) {
							var template = $('#template_51').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_51').html(rendered);
						}  else if ( i === 1) {
							var template = $('#template_52').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_52').html(rendered);
						}  else if ( i === 2) {
							var template = $('#template_53').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_53').html(rendered);
						}  else if ( i === 3) {
							var template = $('#template_54').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_54').html(rendered);
						}  else if ( i === 4) {
							var template = $('#template_55').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_55').html(rendered);
						} else if ( i === 5) {
							var template = $('#template_56').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_56').html(rendered);
						}  else if ( i === 6) {
							var template = $('#template_57').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_57').html(rendered);
						}  else if ( i === 7) {
							var template = $('#template_58').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_58').html(rendered);
						} 
					}
				},
		dataType:'json'
	});
	
}

	
	
$(document).ready(function () {
	
	var chart = c3.generate({
		bindto: '#chart_51',
		data: {
			url: '../php/enig_acidcleaner_4.php',
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
		    max: 750, // 100 is default
		    //units: ' %',
			width: 30 // for adjusting arc thickness
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
			//            unit: 'value', // percentage is default
				//            max: 200, // 100 is default
					values: [150, 300, 450, 600, 750]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	/*
	var chart = c3.generate({
		bindto: '#chart_2',
		data: {
			url: '../php/enig_microetch_6.php',
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
		    max: 200,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [40, 80, 120, 160, 200]
			}
		},
		size: {
			height: 100
		}
	});
	
	*/
	
	var chart = c3.generate({
		bindto: '#chart_52',
		data: {
			url: '../php/enig_microetch_6.php',
			mimeType: 'json',
			//columns: [
			//	['data', 350]
			//],
			type: 'gauge',
			names: {
				data1: 'Copper Area'
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
		    max: 10, // 100 is default
		    //units: ' %',
			width: 30 // for adjusting arc thickness
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
			//            unit: 'value', // percentage is default
				//            max: 200, // 100 is default
					values: [2, 4, 6, 8, 10]
			}
		},
		size: {
			height: 100
		}
	});
	
		
	var chart = c3.generate({
		bindto: '#chart_53',
		data: {
			url: '../php/enig_aurodip_3.php',
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
		    max: 60,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [12, 24, 36, 48, 60]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	
	var chart = c3.generate({
		bindto: '#chart_54',
		data: {
			url: '../php/enig_predip_2.php',
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
		    max: 60,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [12, 24, 36, 48, 60]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	
	var chart = c3.generate({
		bindto: '#chart_55',
		data: {
			url: '../php/enig_activator_2.php',
			mimeType: 'json',
			type: 'gauge',
			names: {
				data1: 'Panel Area Processed - MTO'
			}
		},
		gauge: {
			label: {
				show: true
			},
		    min: 0,
		    max: 5,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [1, 2, 3, 4, 5]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
		
	var chart = c3.generate({
		bindto: '#chart_56',
		data: {
			url: '../php/enig_postdip_2.php',
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
		    max: 60,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [12, 24, 36, 48, 60]
			}
		},
		size: {
			height: 100
		}
	});
	
	
		
	var chart = c3.generate({
		bindto: '#chart_57',
		data: {
			url: '../php/enig_nickelbath_5.php',
			mimeType: 'json',
			type: 'gauge',
			names: {
				data1: 'Panel Area Processed - MTO'
			}
		},
		gauge: {
			label: {
				show: true
			},
		    min: 0,
		    max: 6.0,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [1.2, 2.4, 3.6, 4.8, 6.0]
			}
		},
		size: {
			height: 100
		}
	});
	
	
		
	var chart = c3.generate({
		bindto: '#chart_58',
		data: {
			url: '../php/enig_goldbath_5.php',
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
		    max: 1970,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [394, 788, 1182, 1576, 1970]
			}
		},
		size: {
			height: 100
		}
	});
	
	
		
	var chart = c3.generate({
		bindto: '#chart_59',
		data: {
			url: '../php/enig_goldbath_6.php',
			mimeType: 'json',
			type: 'gauge',
			names: {
				data1: 'Panel Area Processed - MTO'
			}
		},
		gauge: {
			label: {
				show: true
			},
		    min: 0,
		    max: 11,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [2.2, 4.4, 6.6, 8.8, 11]
			}
		},
		size: {
			height: 100
		}
	});
	
	
		
	
	
});
