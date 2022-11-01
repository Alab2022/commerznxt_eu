$(document).ready(function() {
Highcharts.chart('semiDonut', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false,
        height: '100%',
        margin: 0
    },
    title: {
        text: '',
        align: 'center',
        verticalAlign: 'middle',
        y: 60
    },
    legend: {
          itemWidth: 150,
        itemStyle: {
          fontSize: '12px',
          textOverflow: "allow"
        }
      },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: true,
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '80%'],
            size: '140%',
               showInLegend: true
        }
    },
    series: [{
        type: 'pie',
        name: 'Browser share',
        innerSize: '50%',
        data: [
            ['Total Order Value', 73.86],
            ['Payments Made', 11.97],

        ],
        colors:['#63719C','#FC8B2A']
    }],
    responsive: {
        rules: [{
          condition: {
            maxWidth: 360,
            
          },
          chartOptions: {
            legend: {
              align: 'center',
              verticalAlign: 'bottom',
              layout: 'horizontal'
            },
            yAxis: {
              labels: {
                align: 'left',
                x: 0,
                y: 0
              },
              title: {
                text: null
              }
            },
            subtitle: {
              text: null
            },
            credits: {
              enabled: false
            }
          }
        }]
      }
},
function(){
    this.setSize(this.plotSizeX, this.plotSizeX - 100)
});

Highcharts.chart('geography', {
    chart: {
      type: 'bar',
      height : 330
    },
    title: {
      text: ''
    },
    subtitle: {
      text: ''
    },
    xAxis: {
      categories: ['Darlington', 'Blackpool', 'Bristol', 'Europe', 'Oceania'],
      title: {
        text: null
      }
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Population (millions)',
        align: 'high'
      },
      labels: {
        overflow: 'justify'
      }
    },
    tooltip: {
      valueSuffix: ' millions'
    },
    plotOptions: {
      bar: {
        dataLabels: {
          enabled: true
        }
      },
      series: {
        pointWidth: 30,
        pointPadding:-4,
        groupPadding: 0,
    }
    },
    legend: {
      layout: 'vertical',
      align: 'right',
      verticalAlign: 'top',
      x: -40,
      y: 80,
      floating: true,
      borderWidth: 1,
      backgroundColor:
        Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
      shadow: true
    },
    credits: {
      enabled: false
    },
    series: [{
      name: 'Year 1990',
      colorByPoint: true,
      data: [6031, 7027, 3202, 7021, 2666],
      colors:['#63719C','#97CDCD','#98B694','#698473', '#98B694']
    }]
  });



});

