<!-- Chart.js Script -->
<script>
        // Unchanged Chart.js Script for Commission Bar Chart
        document.addEventListener("DOMContentLoaded", function() {
            var barCtx = document.getElementById("transactionChart").getContext("2d");
            var barData = {
                labels: ["2020", "2021", "2022", "2023", "2024"],
                datasets: [{
                    label: "TRANSACTION",
                    data: [50, 23, 42, 32, 20],
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
                            text: 'NUMBER OF TRANSACTION'
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