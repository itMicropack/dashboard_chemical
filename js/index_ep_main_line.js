// 
function current_data_ep_main(){

	var dataurl = "../php/current_data_epl.php";
	
	$.ajax({
		cache: false,
		url: dataurl,
		method: "GET",
		success:function(data) {
					
					for (var i=0, len=data.length; i < len; i++) {
					
						if ( i === 0) {
							var template = $('#template_67').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_67').html(rendered);
						}  else if ( i === 1) {
							var template = $('#template_68').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_68').html(rendered);
						} else if ( i === 2) {
							var template = $('#template_69').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_69').html(rendered);
						} else if ( i === 3) {
							var template = $('#template_70').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_70').html(rendered);
						} else if ( i === 4) {
							var template = $('#template_71').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_71').html(rendered);
						} else if ( i === 5) {
							var template = $('#template_72').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_72').html(rendered);
						} else if ( i === 6) {
							var template = $('#template_73').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_73').html(rendered);
						} else if ( i === 7) {
							var template = $('#template_74').html();
							Mustache.parse(template);   // optional, speeds up future uses
							var rendered = Mustache.render(template, data[i]);
							$('#target_74').html(rendered);
						}
					}
				},
		dataType:'json'
	});
	
}





	
$(document).ready(function () {
	
	var chart = c3.generate({
		bindto: '#chart_67',
		data: {
			url: '../php/epl_afr2_1.php',
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
		bindto: '#chart_68',
		data: {
			url: '../php/ep_circu_po.php',
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
		bindto: '#chart_69',
		data: {
			url: '../php/epl_12h2so4_1.php',
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
		    max: 1000,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [200, 400, 600, 800, 1000]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	
	var chart = c3.generate({
		bindto: '#chart_70',
		data: {
			url: '../php/epl_copper_bath17_1.php',
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
		    max: 1000,
			width: 30
		},
		color: {
			pattern: ['#008000', '#32CD32', '#FFD700', '#FFA500', '#FF0000'], // the three color levels for the percentage values.
						// green, lime-green, gold, orange, red
			threshold: {
					values: [200, 400, 600, 800, 1000]
			}
		},
		size: {
			height: 100
		}
	});
	
	
	
	
	
	var chart = c3.generate({
		bindto: '#chart_71',
		data: {
			url: '../php/epl_copper_bath1920_1.php',
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
		    max: 30000, // 100 is default
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
		bindto: '#chart_72',
		data: {
			url: '../php/epl_copper_bath21_1.php',
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
		    max: 30000, // 100 is default
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
		bindto: '#chart_73',
		data: {
			url: '../php/epl_10h2so4_1.php',
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
		bindto: '#chart_74',
		data: {
			url: '../php/epl_tinbath_1.php',
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
	

});

