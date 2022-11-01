// Data retrieved from https://www.ssb.no/statbank/table/10467/
$(document).ready(function() {
Highcharts.chart('chartcon', {

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
});

$(document).ready(function() {
Highcharts.chart('topSelling', {
    chart: {
      type: 'column',
      height:'300'
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
      categories: ['Prod1', 'Prod2', 'Prod3', 'Prod4', 'Prod5'],
      labels: {
        x: -10,
        rotation:0,
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
      data: [38, 51, 34, 38, 51],
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
      data: [31, 26, 27, 31, 26],
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
          pointWidth: 25,
          pointPadding: 10,
          groupPadding: 0.09,
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
});

$(document).ready(function() {
  Highcharts.chart('offerProduct', {
      chart: {
        type: 'column',
        height:'300'
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
        categories: ['Prod1', 'Prod2', 'Prod3', 'Prod4', 'Prod5'],
        labels: {
          x: -10,
          rotation:0,
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
        data: [38, 51, 34, 38, 51],
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
        data: [31, 26, 27, 31, 26],
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
            pointWidth: 25,
            pointPadding: 10,
            groupPadding: 0.09,
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
  });
  