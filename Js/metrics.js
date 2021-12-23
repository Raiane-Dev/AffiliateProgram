
      
        var options = {
          series: [{
          name: 'Team A',
          type: 'area',
          data: [44, 55, 31, 47, 31, 43, 26, 41, 31, 47, 33]
        }, {
          name: 'Team B',
          type: 'line',
          data: [55, 69, 45, 61, 43, 54, 37, 52, 44, 61, 43]
        }],
          chart: {
              toolbar:{
                  show:false
              },
          height: 350,
          type: 'line',
          foreColor: '#fff',
          fontFamily: 'Poppins, sans-serif'
        },
        legend: {
            show: false,
        },
        stroke: {
          curve: 'smooth',
          colors: ['#ffffff'],
          width: 1
        },
        grid: {
            show: true,
            borderColor: '#5c5e5d',
        },
        dataLabels: {
            enabled: false,
            style: {
                fontSize: '12px',
                colors: ["#333"]
              }
        },
        tooltip: {
            enabled: true,
        },
        fill: {
          type:'solid',
          opacity: [0.35, 1],
          opacity: 0.9,
          type: 'gradient',
          colors: ['#474747'],
          gradient: {
            shade: 'dark',
            type: "vertical",
            shadeIntensity: 0.5,
            gradientToColors: [ '#5dd793','#ffffff'],
            inverseColors: true,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100, 100],
            colorStops: []
          }
        },
        labels: ['Dec 01', 'Dec 02','Dec 03','Dec 04','Dec 05','Dec 06','Dec 07','Dec 08','Dec 09 ','Dec 10','Dec 11'],
        markers: {
          size: 0
        },
        yaxis: [
          {
            labels: {
                show: true,
            },
          },
          {
            opposite: true,
          },
        ],
        tooltip: {
          shared: true,
          intersect: false,
          y: {
            formatter: function (y) {
              if(typeof y !== "undefined") {
                return  y.toFixed(0) + " points";
              }
              return y;
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
      
      
    /////////////////////////////////////////////////////////////////////////////////
    
      
    var options = {
      series: [{
      data: data.slice()
    }],
      chart: {
      id: 'realtime',
      height: 350,
      type: 'line',
      animations: {
        enabled: true,
        easing: 'linear',
        dynamicAnimation: {
          speed: 1000
        }
      },
      toolbar: {
        show: false
      },
      zoom: {
        enabled: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth'
    },
    title: {
      text: 'Dynamic Updating Chart',
      align: 'left'
    },
    markers: {
      size: 0
    },
    xaxis: {
      type: 'datetime',
      range: XAXISRANGE,
    },
    yaxis: {
      max: 100
    },
    legend: {
      show: false
    },
    };

    var chart = new ApexCharts(document.querySelector("#chart-line"), options);
    chart.render();
  
  
    window.setInterval(function () {
    getNewSeries(lastDate, {
      min: 10,
      max: 90
    })
  
    chart.updateSeries([{
      data: data
    }])
  }, 1000)
  