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
      type: 'bar'
    },
    title: {
      text: 'Historic World Population by Region'
    },
    subtitle: {
      text: 'Source: <a ' +
        'href="https://en.wikipedia.org/wiki/List_of_continents_and_continental_subregions_by_population"' +
        'target="_blank">Wikipedia.org</a>'
    },
    xAxis: {
      categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
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
      data: [631, 727, 3202, 721, 26]
    }, {
      name: 'Year 2000',
      data: [814, 841, 3714, 726, 31]
    }, {
      name: 'Year 2010',
      data: [1044, 944, 4170, 735, 40]
    }, {
      name: 'Year 2018',
      data: [1276, 1007, 4561, 746, 42]
    }]
  });

  var chart2 = Highcharts.chart('chartcon', {

    chart: {
      type: 'column'
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
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      labels: {
        x: -10,
        rotation: -45,
      }
    },
  
    yAxis: {
      allowDecimals: false,
      title: {
        text: 'Amount'
      }
    },
  
    series: [{
      name: '2021',
      colorByPoint: false,
      data: [38, 51, 34, 38, 51, 38],
      dataLabels: {
        enabled: true,
        rotation: -90,
        color: '#FFFFFF',
        align: 'right',
        format: '{point.y:.1f}', // one decimal
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
      data: [31, 26, 27, 31, 26, 31],
      dataLabels: {
        enabled: true,
        rotation: -90,
        color: '#FFFFFF',
        align: 'right',
        format: '{point.y:.1f}', // one decimal
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
          groupPadding: 0.1,
      },
      },
      
  
    responsive: {
      rules: [{
        condition: {
          maxWidth: 360
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
  });

  var chartdb = Highcharts.chart('chartcondb', {

    chart: {
      type: 'column'
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


});

