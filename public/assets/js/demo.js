"use strict";

var ctx = document.getElementById('statisticsChart').getContext('2d');

var statisticsChart = new Chart(ctx, {
	type: 'line',
	data: {
		labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
		datasets: [ {
			label: "Subscribers",
			borderColor: '#f3545d',
			pointBackgroundColor: 'rgba(243, 84, 93, 0.2)',
			pointRadius: 0,
			backgroundColor: 'rgba(243, 84, 93, 0.1)',
			legendColor: '#f3545d',
			fill: true,
			borderWidth: 2,
			data: [154, 184, 175, 203, 210, 231, 240, 278, 252, 312, 320, 374]
		}, {
			label: "New Visitors",
			borderColor: '#fdaf4b',
			pointBackgroundColor: 'rgba(253, 175, 75, 0.2)',
			pointRadius: 0,
			backgroundColor: 'rgba(253, 175, 75, 0.1)',
			legendColor: '#fdaf4b',
			fill: true,
			borderWidth: 2,
			data: [256, 230, 245, 287, 240, 250, 230, 295, 331, 431, 456, 521]
		}, {
			label: "Active Users",
			borderColor: '#177dff',
			pointBackgroundColor: 'rgba(23, 125, 255, 0.2)',
			pointRadius: 0,
			backgroundColor: 'rgba(23, 125, 255, 0.1)',
			legendColor: '#177dff',
			fill: true,
			borderWidth: 2,
			data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900]
		}]
	},
	options : {
		responsive: true, 
		maintainAspectRatio: false,
		legend: {
			display: false
		},
		tooltips: {
			bodySpacing: 4,
			mode:"nearest",
			intersect: 0,
			position:"nearest",
			xPadding:10,
			yPadding:10,
			caretPadding:10
		},
		layout:{
			padding:{left:15,right:15,top:15,bottom:15}
		},
		scales: {
			yAxes: [{
				ticks: {
					fontColor: "rgba(0,0,0,0.5)",
					fontStyle: "500",
					beginAtZero: false,
					maxTicksLimit: 5,
					padding: 20
				},
				gridLines: {
					drawTicks: false,
					display: false
				}
			}],
			xAxes: [{
				gridLines: {
					zeroLineColor: "transparent"
				},
				ticks: {
					padding: 20,
					fontColor: "rgba(0,0,0,0.5)",
					fontStyle: "500"
				}
			}]
		}, 
		legendCallback: function(chart) { 
			var text = []; 
			text.push('<ul class="' + chart.id + '-legend html-legend">'); 
			for (var i = 0; i < chart.data.datasets.length; i++) { 
				text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>'); 
				if (chart.data.datasets[i].label) { 
					text.push(chart.data.datasets[i].label); 
				} 
				text.push('</li>'); 
			} 
			text.push('</ul>'); 
			return text.join(''); 
		}  
	}
});

var myLegendContainer = document.getElementById("myChartLegend");

// generate HTML legend
myLegendContainer.innerHTML = statisticsChart.generateLegend();

// bind onClick event to all LI-tags of the legend
var legendItems = myLegendContainer.getElementsByTagName('li');
for (var i = 0; i < legendItems.length; i += 1) {
	legendItems[i].addEventListener("click", legendClickCallback, false);
}