// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';


// Bar Chart Example
$(function () {
  $('#eventyear').change(function() {
    event_graph(this.value);
  });


  event_graph();
  function event_graph(year = 2018) {
    var months = ['January', 'Febraury', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var monthsData = [];
    var indexNo = 0; 

    var newObject = [];

    eventObject.forEach(function(element) {
      if (element[2] == year) {
        newObject.push(element);
        //console.log(element);
      }
    });

    newObject = newObject.reverse();
      
    months.forEach((month, index) => {
      if (newObject[indexNo] !== undefined) {
        if (newObject[indexNo][0] == month) {
          monthsData.push(newObject[indexNo][1]);
          indexNo += 1;
        }
        else {
          monthsData.push(0);
        }
      }
    });
    
    var ctx = document.getElementById("myBarChart");
    var myLineChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: months,
        datasets: [{
          label: "Count",
          backgroundColor: "rgba(2,117,216,1)",
          borderColor: "rgba(2,117,216,1)",
          data: monthsData,
        }],
      },
      options: {
        scales: {
          xAxes: [{
            time: {
              unit: 'month'
            },
            gridLines: {
              display: false
            },
            ticks: {
              maxTicksLimit: 12
            }
          }],
          yAxes: [{
            ticks: {
              min: 0,
              max: 200,
              maxTicksLimit: 20
            },
            gridLines: {
              display: true
            }
          }],
        },
        legend: {
          display: false
        }
      }
    });
  }
});