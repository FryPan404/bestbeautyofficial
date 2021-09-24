  var plant_chart_option = {
    series: [44, 55, 13],
    colors:['rgb(0, 227, 150)', 'rgb(254, 176, 25)', 'rgb(255, 69, 96)'],
    chart: {
    type: 'pie',
  },
  labels: ['Done', 'On Progress', 'Not Yet'],
  legend: {
  	show: true,
  	position: 'bottom'
  },
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 300
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var chart = new ApexCharts(document.querySelector("#plant_chart"), plant_chart_option);
  chart.render();

  var area_chart_option = {
    series: [44, 55, 13],
    colors:['rgb(0, 227, 150)', 'rgb(254, 176, 25)', 'rgb(255, 69, 96)'],
    chart: {
    width: 300,
    type: 'pie',
  },
  labels: ['Done', 'On Progress', 'Not Yet'],
  dataLabels: {
    enabled: false,
},
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 260
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var crusher_chart = new ApexCharts(document.querySelector("#crusher_chart"), area_chart_option);
  crusher_chart.render();

  var raw_mill_1_chart = new ApexCharts(document.querySelector("#raw_mill_1_chart"), area_chart_option);
  raw_mill_1_chart.render();

  var raw_mill_2_chart = new ApexCharts(document.querySelector("#raw_mill_2_chart"), area_chart_option);
  raw_mill_2_chart.render();

  var coal_mill_1_chart = new ApexCharts(document.querySelector("#coal_mill_1_chart"), area_chart_option);
  coal_mill_1_chart.render();

  var coal_mill_2_chart = new ApexCharts(document.querySelector("#coal_mill_2_chart"), area_chart_option);
  coal_mill_2_chart.render();

  var kiln_1_chart = new ApexCharts(document.querySelector("#kiln_1_chart"), area_chart_option);
  kiln_1_chart.render();

  var kiln_2_chart = new ApexCharts(document.querySelector("#kiln_2_chart"), area_chart_option);
  kiln_2_chart.render();

  var finish_mill_1_chart = new ApexCharts(document.querySelector("#finish_mill_1_chart"), area_chart_option);
  finish_mill_1_chart.render();

  var finish_mill_2_chart = new ApexCharts(document.querySelector("#finish_mill_2_chart"), area_chart_option);
  finish_mill_2_chart.render();

  var packer_palletizer = new ApexCharts(document.querySelector("#packer_palletizer"), area_chart_option);
  packer_palletizer.render();