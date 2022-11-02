// var data = {
//     datasets: [{
//         data: [
//             11,
//             16,
//             7,
//             3,
//             14
//         ],
//         backgroundColor: [
//             "#FF6384",
//             "#4BC0C0",
//             "#FFCE56",
//             "#E7E9ED",
//             "#36A2EB"
//         ],
//         label: 'My dataset' // for legend
//     }],
//     labels: [
//         "Red",
//         "Green",
//         "Yellow",
//         "Grey",
//         "Blue"
//     ]
// };

// var pieOptions = {
//   doughnutlabel: {
//     labels: [{
//       text: '550',
//       font: {
//         size: 20,
//         weight: 'bold'
//       }
//     }, {
//       text: 'total'
//     }]
//   },
//   events: false,
//   animation: {
//     duration: 500,
//     easing: "easeOutQuart",
//     onComplete: function () {
//       var ctx = this.chart.ctx;
//       ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
//       ctx.textAlign = 'center';
//       ctx.textBaseline = 'bottom';

//       this.data.datasets.forEach(function (dataset) {

//         for (var i = 0; i < dataset.data.length; i++) {
//           var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
//               total = dataset._meta[Object.keys(dataset._meta)[0]].total,
//               mid_radius = model.innerRadius + (model.outerRadius - model.innerRadius)/2,
//               start_angle = model.startAngle,
//               end_angle = model.endAngle,
//               mid_angle = start_angle + (end_angle - start_angle)/2;

//           var x = mid_radius * Math.cos(mid_angle);
//           var y = mid_radius * Math.sin(mid_angle);

//           ctx.font = "30px Arial";
//           ctx.fillStyle = '#fff';
//           if (i == 3){ // Darker text color for lighter background
//             ctx.fillStyle = '#444';
//           }
//           var percent = String(Math.round(dataset.data[i]/total*100)) + "%";
//           // var count = dataset.data[i];
//           ctx.fillText(dataset.data[i], model.x + x, model.y + y);
//           // Display percent in another line, line break doesn't work for fillText
//           ctx.fillText(percent, model.x + x, model.y + y + 15);
//         }
//       });               
//     }
//   }
// };

// var pieChartCanvas = $("#pieChart");
// var pieChart = new Chart(pieChartCanvas, {
//   type: 'doughnut', // or doughnut
//   data: data,
//   options: pieOptions
// });
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
FusionCharts.ready(function(){
  var chartObj = new FusionCharts({
type: 'doughnut2d',
renderAt: 'chart-container-eu',
width: '200',
height: '160',
dataFormat: 'json',
dataSource: {
    "chart": {
      "baseFont": "mulish",
    "baseFontSize": "15",
    "baseFontColor": "#ffffff",
    "outCnvBaseFontColor": "#fff",
        "numberPrefix": "",
        "labelFontBold": "1",
        "chartLeftMargin": "-60",
    "chartTopMargin": "-20",
    "chartRightMargin": "0",
    "chartBottomMargin": "0",
        // "bgColor": "#ffffff",
        "startingAngle": "310",
        "showLegend": "",
        "legendPosition": "right",
        "showLegendValue": "0",
        // "defaultCenterLabel": "Total Customers: 100",
        "centerLabel": "Customers $label: $value",
        "centerLabelBold": "1",
        "showTooltip": "0",
        "decimals": "0",
        "theme": "fusion",
        "valuePosition":"inside",
        "labelPosition":"inside",
        "showlabels": "0",
        "palettecolors": "#FC8B2A,#63719C"
    },
    "data": [
      {
        "label": "Payments Made",
        "value": "70"
    },
      {
        "label": "Pending",
        "value": "30"
    } ]
}
}
);
  chartObj.render();
});

FusionCharts.ready(function(){
  var chartObj = new FusionCharts({
type: 'doughnut2d',
renderAt: 'salesTracker',
width: '360',
height: '380',
dataFormat: 'json',
dataSource: {
    "chart": {
      "baseFont": "Verdana",
    "baseFontSize": "15",
    "baseFontColor": "#ffffff",
    "labelFontColor": "#ffffff",
    "labelFontSize": "20",
    "outCnvBaseFontColor": "#fff",
        "numberPrefix": "",
        "labelFontBold": "1",
        "bgColor": "#ffffff",
        "startingAngle": "310",
        "showLegend": "0",
        "defaultCenterLabel": "Total Sales : 100%",
        "centerLabel": "Sales $label: $value%",
        "centerLabelBold": "1",
        "showTooltip": "0",
        "decimals": "0",
        "theme": "fusion",
        "valuePosition":"inside",
        "labelPosition":"inside",
        "showlabels": "0",
        "palettecolors": "98B694,63719C"
    },
    "data": [{
        "label": "Last Month",
        "value": "30"
    }, {
        "label": "This Month",
        "value": "70"
    }]
}
}
);
  chartObj.render();
});

FusionCharts.ready(function(){
  var chartObj = new FusionCharts({
type: 'doughnut2d',
renderAt: 'CategoryOnOffer',
width: '380',
height:'250',
dataFormat: 'json',
dataSource: {
    "chart": {
      "showPercentageValues":"0" ,
      "showPercentInToolTip":"1",
      "chartLeftMargin": "0",
    "chartTopMargin": "-20",
    "chartRightMargin": "0",
    "chartBottomMargin": "-20",
      "startingAngle": "310",
      "baseFont": "Verdana",
    "baseFontSize": "15",
    "baseFontColor": "#ffffff",
    "labelFontColor": "#ffffff",
    "labelFontSize": "15",
    "outCnvBaseFontColor": "#fff",
        "numberPrefix": "",
        "labelFontBold": "1",
        "bgColor": "#ffffff",
        "startingAngle": "310",
        "showLegend": "1",
        "showLegendValue": "0",
        "legendPosition": "right",
        "defaultCenterLabel": "Total Categories : 100",
        "centerLabel": "Sales $label: $value%",
        "centerLabelBold": "1",
        "showTooltip": "0",
        "decimals": "0",
        "theme": "fusion",
        "valuePosition":"inside",
        "labelPosition":"inside",
        "showlabels": "0",
        "palettecolors": "B57700,E89900,F7AD19,A6A6A6,808080",
        "showplotBorder": "1",
    "plotHighlightEffect": "fadeout|alpha=60, valueBgColor=#ff0000, valueBorderColor=#3a4660, valueFontColor=#000000"

    },
    "data": [{
        "label": "Abrasives",
        "value": "30"
    }, {
        "label": "Fasteners",
        "value": "10"
    }, {
      "label": "Fleet Maintenance",
      "value": "20"
  }, {
    "label": "Hand Tools",
    "value": "40"
}, {
  "label": "Fasteners",
  "value": "70"
}]
}
}
);
  chartObj.render();
});

FusionCharts.ready(function(){
  var chartObj = new FusionCharts({
type: 'doughnut2d',
renderAt: 'TopSellingCategories',
width: '380',
height:'250',
dataFormat: 'json',
dataSource: {
    "chart": {
      "showPercentageValues":"0" ,
      "showPercentInToolTip":"1",
      "chartLeftMargin": "0",
    "chartTopMargin": "-20",
    "chartRightMargin": "0",
    "chartBottomMargin": "-20",
      "startingAngle": "310",
      "baseFont": "Verdana",
    "baseFontSize": "15",
    "baseFontColor": "#ffffff",
    "labelFontColor": "#ffffff",
    "labelFontSize": "15",
    "outCnvBaseFontColor": "#fff",
        "numberPrefix": "",
        "labelFontBold": "1",
        "bgColor": "#ffffff",
        "startingAngle": "310",
        "showLegend": "1",
        "showLegendValue": "0",
        "legendPosition": "right",
        "defaultCenterLabel": "Total Categories : 100",
        "centerLabel": "Sales $label: $value%",
        "centerLabelBold": "1",
        "showTooltip": "0",
        "decimals": "0",
        "theme": "fusion",
        "valuePosition":"inside",
        "labelPosition":"inside",
        "showlabels": "0",
        "palettecolors": "B57700,E89900,F7AD19,A6A6A6,808080",
        "showplotBorder": "1",
    "plotHighlightEffect": "fadeout|alpha=60, valueBgColor=#ff0000, valueBorderColor=#3a4660, valueFontColor=#000000"

    },
    "data": [{
        "label": "Abrasives",
        "value": "30"
    }, {
        "label": "Fasteners",
        "value": "10"
    }, {
      "label": "Fleet Maintenance",
      "value": "20"
  }, {
    "label": "Hand Tools",
    "value": "40"
}, {
  "label": "Fasteners",
  "value": "70"
}]
}
}
);
  chartObj.render();
});

FusionCharts.ready(function(){
  var chartObj = new FusionCharts({
type: 'doughnut2d',
renderAt: 'CurrentDeals',
width: '380',
height:'250',
dataFormat: 'json',
dataSource: {
    "chart": {
      "showPercentageValues":"0" ,
      "showPercentInToolTip":"1",
      "chartLeftMargin": "0",
    "chartTopMargin": "-20",
    "chartRightMargin": "0",
    "chartBottomMargin": "-20",
      "startingAngle": "310",
      "baseFont": "Verdana",
    "baseFontSize": "15",
    "baseFontColor": "#ffffff",
    "labelFontColor": "#ffffff",
    "labelFontSize": "15",
    "outCnvBaseFontColor": "#fff",
        "numberPrefix": "",
        "labelFontBold": "1",
        "bgColor": "#ffffff",
        "startingAngle": "310",
        "showLegend": "1",
        "showLegendValue": "0",
        "legendPosition": "right",
        "defaultCenterLabel": "Total Categories : 100",
        "centerLabel": "Sales $label: $value%",
        "centerLabelBold": "1",
        "showTooltip": "0",
        "decimals": "0",
        "theme": "fusion",
        "valuePosition":"inside",
        "labelPosition":"inside",
        "showlabels": "0",
        "palettecolors": "B57700,E89900,F7AD19,A6A6A6,808080",
        "showplotBorder": "1",
    "plotHighlightEffect": "fadeout|alpha=60, valueBgColor=#ff0000, valueBorderColor=#3a4660, valueFontColor=#000000"

    },
    "data": [{
        "label": "Abrasives",
        "value": "30"
    }, {
        "label": "Fasteners",
        "value": "10"
    }, {
      "label": "Fleet Maintenance",
      "value": "20"
  }, {
    "label": "Hand Tools",
    "value": "40"
}, {
  "label": "Fasteners",
  "value": "70"
}]
}
}
);
  chartObj.render();
});

FusionCharts.ready(function(){
  var chartObj = new FusionCharts({
type: 'doughnut2d',
renderAt: 'TopSaleProducts',
width: '380',
height:'250',
dataFormat: 'json',
dataSource: {
    "chart": {
      "showPercentageValues":"0" ,
      "showPercentInToolTip":"1",
      "chartLeftMargin": "0",
    "chartTopMargin": "-20",
    "chartRightMargin": "0",
    "chartBottomMargin": "-20",
      "startingAngle": "310",
      "baseFont": "Verdana",
    "baseFontSize": "15",
    "baseFontColor": "#ffffff",
    "labelFontColor": "#ffffff",
    "labelFontSize": "15",
    "outCnvBaseFontColor": "#fff",
        "numberPrefix": "",
        "labelFontBold": "1",
        "bgColor": "#ffffff",
        "startingAngle": "310",
        "showLegend": "1",
        "showLegendValue": "0",
        "legendPosition": "right",
        "defaultCenterLabel": "Total Categories : 100",
        "centerLabel": "Sales $label: $value%",
        "centerLabelBold": "1",
        "showTooltip": "0",
        "decimals": "0",
        "theme": "fusion",
        "valuePosition":"inside",
        "labelPosition":"inside",
        "showlabels": "0",
        "palettecolors": "B57700,E89900,F7AD19,A6A6A6,808080",
        "showplotBorder": "1",
    "plotHighlightEffect": "fadeout|alpha=60, valueBgColor=#ff0000, valueBorderColor=#3a4660, valueFontColor=#000000"

    },
    "data": [{
        "label": "Abrasives",
        "value": "30"
    }, {
        "label": "Fasteners",
        "value": "10"
    }, {
      "label": "Fleet Maintenance",
      "value": "20"
  }, {
    "label": "Hand Tools",
    "value": "40"
}, {
  "label": "Fasteners",
  "value": "70"
}]
}
}
);
  chartObj.render();
});
