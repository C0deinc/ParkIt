<!-- Chart.js Script -->
<script>
        document.addEventListener("DOMContentLoaded", function() {
  
              // Commission Bar Chart
              var barCtx = document.getElementById("userChart").getContext("2d");
              var barData = {
                  labels: ["2020", "2021", "2022", "2023", "2024"],
                  datasets: [{
                      label: "Number of User per Year",
                      data: [20, 40, 25, 10, 50],
                      backgroundColor: ["#FF6384", "#FF5733", "#45B39D", "#AAB7B8", "#9966FF"],
                      borderWidth: 1
                  }]
              };
              var barOptions = {
                  responsive: true,
                  scales: {
                      x: {
                          display: true,
                          title: {
                              display: true,
                              text: 'YEAR'
                          }
                      },
                      y: {
                          display: true,
                          title: {
                              display: true,
                              text: 'ACCOUNT'
                          }
                      }
                  }
              };
              new Chart(barCtx, {
                  type: 'bar',
                  data: barData,
                  options: barOptions
              });
          });
      </script>