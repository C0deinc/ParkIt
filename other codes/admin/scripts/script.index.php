<script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the context of the canvas element
            var ctx = document.getElementById("myPieChart").getContext("2d");
    
            // Data for the donut chart
            var data = {
                labels: ["Total Spaces", "Verified Spaces", "Unverified Spaces"],
                datasets: [{
                    data: [35, 35, 10],
                    backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"],
                    borderWidth: 1 // Add border width for the donut effect
                }]
            };
    
            // Configuration options
            var options = {
                responsive: true,
                maintainAspectRatio: false,
                cutoutPercentage: 50 // Adjust the cutoutPercentage for the donut effect (50 for a classic donut)
            };
    
            // Create the donut chart
            var myDonutChart = new Chart(ctx, {
                type: 'doughnut', // Specify the chart type as doughnut
                data: data,
                options: options
            });
        });
    </script>