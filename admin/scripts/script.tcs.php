<!-- Chart.js Script -->
<script>
        document.addEventListener("DOMContentLoaded", function() {
            var barCtx = document.getElementById("commissionChart").getContext("2d");
            var barData = {
                labels: ["2020", "2021", "2022", "2023", "2024"],
                datasets: [{
                    label: "COMMISSION",
                    data: [1000, 800, 590, 500, 200],
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
                            text: 'COMMISSION ACCOUNT'
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