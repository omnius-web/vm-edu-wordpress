
<link rel="stylesheet" type="text/css" href="dist/Chart.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="dist/Chart.js"></script>
<style media="screen">
  /* #myChart {
    width:500px!important;
    height: 500px!important;
  } */
  #myChart {
    background: url('5544.jpg') center center no-repeat;
  }
</style>
<canvas id="myChart" width="400px" height="400px"></canvas>
<script>





var ctx = document.getElementById('myChart').getContext('2d');







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
      // showAllTooltips: true,
      tooltips: {
        enabled: false,




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



        //
        // callbacks: {
				// 		// Use the footer callback to display the sum of the items showing in the tooltip
				// 		title: function(tooltipItems, data) {
        //       //console.log(tooltipItems);
        //       var om_index = tooltipItems.index;
        //       if(om_index == 3){
        //         //console.log(data.labels[3]);
        //       }
        //       //console.log(tooltipItems[0].label);
        //       return tooltipItems[0].label;
				// 		},
        //     label: function(){
        //       return;
        //     }
				// 	},

        // custom: customTooltips


        // custom: function(tooltipModel) {
        //   console.log(tooltipModel);
        //         // Tooltip Element
        //         var tooltipEl = document.getElementById('chartjs-tooltip');
        //
        //         // Create element on first render
        //         if (!tooltipEl) {
        //             tooltipEl = document.createElement('div');
        //             tooltipEl.id = 'chartjs-tooltip';
        //             tooltipEl.innerHTML = '<table></table>';
        //             document.body.appendChild(tooltipEl);
        //         }
        //         // Hide if no tooltip
        //         if (tooltipModel.opacity === 0) {
        //             tooltipEl.style.opacity = 0;
        //             return;
        //         }
        //
        //         // Set caret Position
        //         tooltipEl.classList.remove('above', 'below', 'no-transform');
        //         if (tooltipModel.yAlign) {
        //             tooltipEl.classList.add(tooltipModel.yAlign);
        //         } else {
        //             tooltipEl.classList.add('no-transform');
        //         }
        //
        //         function getBody(bodyItem) {
        //             return bodyItem.lines;
        //         }
        //
        //         // Set Text
        //         if (tooltipModel.body) {
        //             var titleLines = tooltipModel.title || [];
        //             var bodyLines = tooltipModel.body.map(getBody);
        //
        //             var innerHtml = '<thead>';
        //
        //             titleLines.forEach(function(title) {
        //                 innerHtml += '<tr><th>' + title + '</th></tr>';
        //             });
        //             innerHtml += '</thead><tbody>';
        //
        //             bodyLines.forEach(function(body, i) {
        //                 var colors = tooltipModel.labelColors[i];
        //                 var style = 'background:' + colors.backgroundColor;
        //                 style += '; border-color:' + colors.borderColor;
        //                 style += '; border-width: 2px';
        //                 var span = '<span style="' + style + '"></span>';
        //                 innerHtml += '<tr><td>' + span + body + '</td></tr>';
        //             });
        //             innerHtml += '</tbody>';
        //
        //             var tableRoot = tooltipEl.querySelector('table');
        //             tableRoot.innerHTML = innerHtml;
        //         }
        //
        //         // `this` will be the overall tooltip
        //         var position = this._chart.canvas.getBoundingClientRect();
        //
        //         // Display, position, and set styles for font
        //         tooltipEl.style.opacity = 1;
        //         tooltipEl.style.position = 'absolute';
        //         tooltipEl.style.left = position.left + window.pageXOffset + tooltipModel.caretX + 'px';
        //         tooltipEl.style.top = position.top + window.pageYOffset + tooltipModel.caretY + 'px';
        //         tooltipEl.style.fontFamily = tooltipModel._bodyFontFamily;
        //         tooltipEl.style.fontSize = tooltipModel.bodyFontSize + 'px';
        //         tooltipEl.style.fontStyle = tooltipModel._bodyFontStyle;
        //         tooltipEl.style.padding = tooltipModel.yPadding + 'px ' + tooltipModel.xPadding + 'px';
        //         tooltipEl.style.pointerEvents = 'none';
        //     }

      },
      hover: {
				animationDuration: 0
			},
			animation: {
				duration: 1,
				onComplete: function () {
					var chartInstance = this.chart,
						ctx = chartInstance.ctx;
            // ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
					ctx.font = Chart.helpers.fontString(20, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
					ctx.fillStyle = 'gray';
					ctx.textAlign = 'center';
					ctx.textBaseline = 'middle';

					this.data.datasets.forEach(function (dataset, i) {
						var meta = chartInstance.controller.getDatasetMeta(i);
						meta.data.forEach(function (bar, index) {
							var data = dataset.data[index];
              if(index==0){
                ctx.fillText(data, bar._model.x, bar._model.y - 20);
              }
              if(index==1){
                ctx.fillText(data, bar._model.x + 20, bar._model.y -5 );
              }
              if(index==2){
                ctx.fillText(data, bar._model.x + 20, bar._model.y);
              }
              if(index==3){
                ctx.fillText(data, bar._model.x + 20, bar._model.y + 10);
              }
              if(index==4){
                ctx.fillText(data, bar._model.x, bar._model.y + 20);
              }
              if(index==5){
                ctx.fillText(data, bar._model.x - 20, bar._model.y + 10);
              }
              if(index==6){
                ctx.fillText(data, bar._model.x - 20, bar._model.y);
              }
              if(index==7){
                ctx.fillText(data, bar._model.x -5, bar._model.y - 20);
              }
              // else{
              //   ctx.fillText(data, bar._model.x, bar._model.y - 5);
              // }
							// ctx.fillText(data, bar._model.x, bar._model.y - 5);
              // console.log(index);
						});
					});
				}
			},
    }
});
</script>
