
  var chartdb = Highcharts.chart('chartcondb', {

    chart: {
      type: 'column',
      height : 350
    },
  
    title: {
      text: ''
    },
  
    subtitle: {
      text: ''
    },
  
    legend: {
      align: 'center',
      verticalAlign: 'bottom',
      layout: 'horizontal'
    },
  
    xAxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      labels: {
        x: -10,
        rotation: 0,
      }
    },
  
    yAxis: {
      allowDecimals: false,
      title: {
        text: 'Sales Value'
      }
    },
  
    series: [{
      name: '2021',
      colorByPoint: false,
      data: [38000, 51000, 34000, 38000, 51000, 38000, 51000, 38000, 51000, 38000, 80000, 38000],
      dataLabels: {
        enabled: true,
        rotation: -90,
        color: '#FFFFFF',
        align: 'right',
        //format: '{point.y:.1f}', // one decimal
        y: 10, // 10 pixels down from the top
        style: {
          fontSize: '13px',
          fontFamily: 'Verdana, sans-serif'
        }
      },
      color : '#63719C',
    }, {
      name: '2022',
      colorByPoint: false,
      data: [31000, 26000, 27000, 31000, 26000, 31000, 26000, 31000, 27000, 31000, 26000, 31000],
      dataLabels: {
        enabled: true,
        rotation: -90,
        color: '#FFFFFF',
        align: 'right',
        //format: '{point.y:.1f}', // one decimal
        y: 10, // 10 pixels down from the top
        style: {
          fontSize: '13px',
          fontFamily: 'Verdana, sans-serif'
        }
      },
      color : '#FC8B2A',
    }],
    plotOptions: {
        column: {
         colorByPoint: true,

        },
        series: {
            pointWidth: 20,
            pointPadding: 20,
            groupPadding: 0.09,
        },
      },
      
  
    responsive: {
      rules: [{
       
        chartOptions: {
          legend: {
            align: 'center',
            verticalAlign: 'bottom',
            layout: 'horizontal',
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
  });
  
//   document.getElementById('small').addEventListener('click', function () {
//     chart.setSize(400);
//   });
  
//   document.getElementById('large').addEventListener('click', function () {
//     chart.setSize(600);
//   });
  
//   document.getElementById('auto').addEventListener('click', function () {
//     chart.setSize(null);
//   });