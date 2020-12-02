
<link rel="stylesheet" type="text/css" href="dist/Chart.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="dist/Chart.js"></script>
<style media="screen">
  /* #myChart {
    width:500px!important;
    height: 500px!important;
  } */
</style>
<canvas id="myChart" width="400px" height="400px"></canvas>
<script>



var customTooltips = function(tooltip) {
			$(this._chart.canvas).css('cursor', 'pointer');

			var positionY = this._chart.canvas.offsetTop;
			var positionX = this._chart.canvas.offsetLeft;

			$('.chartjs-tooltip').css({
				opacity: 0,
			});

			// if (!tooltip || !tooltip.opacity) {
			// 	return;
			// }

			// if (tooltip.dataPoints.length > 0) {
				tooltip.dataPoints.forEach(function(dataPoint) {
					var content = [dataPoint.xLabel, dataPoint.yLabel].join(': ');
					var $tooltip = $('#tooltip-' + dataPoint.datasetIndex);

					$tooltip.html(content);
					$tooltip.css({
						opacity: 1,
            // top: positionY + dataPoint.y + 'px',
						top: '300px',
						left: positionX + dataPoint.x + 'px',
					});
				});
			// }
		};



var ctx = document.getElementById('myChart').getContext('2d');
Chart.defaults.global.defaultFontColor = 'red';
Chart.pluginService.register({
  beforeRender: function (chart) {
    if (chart.config.options.showAllTooltips) {
        // create an array of tooltips
        // we can't use the chart tooltip because there is only one tooltip per chart
        chart.pluginTooltips = [];
        chart.config.data.datasets.forEach(function (dataset, i) {
            chart.getDatasetMeta(i).data.forEach(function (sector, j) {
                chart.pluginTooltips.push(new Chart.Tooltip({
                    _chart: chart.chart,
                    _chartInstance: chart,
                    _data: chart.data,
                    _options: chart.options.tooltips,
                    _active: [sector]
                }, chart));
            });
        });

        // turn off normal tooltips
        chart.options.tooltips.enabled = false;
    }
},
  afterDraw: function (chart, easing) {
    if (chart.config.options.showAllTooltips) {
        // we don't want the permanent tooltips to animate, so don't do anything till the animation runs atleast once
        if (!chart.allTooltipsOnce) {
            if (easing !== 1)
                return;
            chart.allTooltipsOnce = true;
        }

        // turn on tooltips
        chart.options.tooltips.enabled = true;
        Chart.helpers.each(chart.pluginTooltips, function (tooltip) {
            tooltip.initialize();
            tooltip.update();
            // we don't actually need this since we are not animating tooltips
            tooltip.pivot();
            tooltip.transition(easing).draw();
        });
        chart.options.tooltips.enabled = false;
    }
  }
});





// Chart.Tooltip.positioners.custom = function(elements, position) {
//     if (!elements.length) {
//       return false;
//     }
//     var offset = 0;
//     //adjust the offset left or right depending on the event position
//     if (elements[0]._chart.width / 2 > position.x) {
//       offset = 20;
//     } else {
//       offset = -20;
//     }
//     return {
//       x: position.x + offset,
//       y: position.y
//     }
//   }


var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['소화흡수', '근육,뼈,관절', '환경조건', '뇌,호르몬', '독소 관리 기능', '면역', '에너지,영양', '심혈관 순환계'],
        datasets: [{
            label: '# of Votes',
            data: [20, 30, 18, 18, 26, 26, 42, 16],
            backgroundColor: [
                'rgba(255,112,150,0.3)'

            ],
            borderColor: [
                'rgba(0,0,0,0)',
                // 'rgba(54, 162, 235, 1)',
                // 'rgba(255, 206, 86, 1)',
                // 'red',
                // 'blue',
                // 'yellow',
                // 'black',
                // 'gray'

            ],
            borderWidth: 0,
            pointRadius:0

        }]
    },
    options: {
      responsive: true,
      scale: {
        angleLines: {
            display: false,
            color: 'yellow',

        },
        ticks: {
          // 수치번호
            suggestedMin: 0,
            suggestedMax: 50,
            display: false,
            fontSize:10,
            showLabelBackdrop: true
        },
        pointLabels: {
          // 데이터 라벨들
          display: true,
          fontColor: 'rgba(255,80,130,1)',
          fontSize: 20,

        }
      },
      legend: {
        display: false
      },
      showAllTooltips: true,
      tooltips: {
        enabled: true,
        



        // intersect: false,
        // position: 'custom',
        // callbacks: {
        //   label: function(tooltipItem, data) {
        //     return data['datasets'][0]['data'][tooltipItem['index']];
        //     // return 'teast';
        //   }
        // },




        // displayColors: false,
        // backgroundColor: 'rgba(255,255,255,0)',
        // titleFontColor: 'gray',
        // titleFontSize:20,
        // titleFontStyle: '100',
        // bodyFontSize: 0,
        // yAlign: 'bottom',
        // xAlign: 'center',







        // filter: function(tooltipItems, data) {
        //   var om_index = tooltipItems.index;
        //   if(om_index == 3){
        //     console.log(data.labels[3]);
        //   }
        // },




        callbacks: {
						// Use the footer callback to display the sum of the items showing in the tooltip
						title: function(tooltipItems, data) {
              //console.log(tooltipItems);
              var om_index = tooltipItems.index;
              if(om_index == 3){
                //console.log(data.labels[3]);
              }
              //console.log(tooltipItems[0].label);
              return tooltipItems[0].label;
						},
            label: function(){
              return;
            }
					},

        // custom: customTooltips

      }
    }
});
</script>
