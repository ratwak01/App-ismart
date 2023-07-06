// setup 
const data = {
    labels: ['Mon', 'Tue'],
    datasets: [{
      label: 'Weekly Sales',
      data: [60, 9],
      backgroundColor: [
        'rgba(54, 162, 235, 0.2)',
        'rgba(0, 0, 0, 0.2)'
      ],
      borderColor: [          
        'rgba(54, 162, 235, 1)',
        'rgba(0, 0, 0, 1)'
      ],
      borderWidth: 1,
      circumference: 180,
      rotation:270,
      cutout:'80%'
    }]
  };
  const gaugeNeedle ={
      id: 'gaugeNeedle',

  }

  // config 
  const config = {
    type: 'doughnut',
    data,
    options: {
      aspectRatio: 1.6,
      plugins:{
          legend:{
              display: false
          }
      }
    },
    plugins:[gaugeNeedle]
  };

  // render init block
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

  // Instantly assign Chart.js version
  const chartVersion = document.getElementById('chartVersion');
  chartVersion.innerText = Chart.version;