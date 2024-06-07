//$(document).ready(function () {

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
	
	var jsonurl = '../php/reducer_predip.php?Month='+month+'&Year='+year;
	
	/*
	if (typeof month != 'undefined')
		jsonurl += '?month=' + encodeURIComponent(month);
	*/
	
    var chart = c3.generate({
		bindto: '#chart_1',
        data: {
			x: 'x',
            url: jsonurl,
			//url: '../php/reducer_predip.php',
			mimeType: 'json',
			
			axes: {
				data1: 'y'//,
				//data2: 'y2'
			},
			names: {
				data1: 'Daily Area',
				data2: 'Cumulative Area'
			},
			labels: true,
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
			}//,
			//y2: {
			//	show: true,
			//	label: {
			//		text: 'Area in meter square',
			//		position: 'outer-middle'
			//	}
			//}
		},
		regions: [
			{axis: 'y', start: 0, end: 100, class: 'regionY'}
		],
		grid: {
			y: {
				lines: [{value: 0, class: 'gridLimit', text: 'Min: 0'}, {value: 100, class: 'gridLimit', text: 'Max: 100'}]
			}
		}
		/*grid: {
			x: {
				show: true
			},
			y: {
				show: true
			}
		}*/
    });
}
	////////////////////////////////////////

//});
