<!-- Chart.js Script -->
<script>
        document.addEventListener("DOMContentLoaded", function () {
            // Commission Bar Chart
            var barCtx = document.getElementById("spaceChart").getContext("2d");
            var barData = {
                labels: ["San Roque", "Sta. Maria", "Upper Calarian", "Ayala", "Pasonanca"],
                datasets: [{
                    label: "Top 5 Barangay",
                    data: [10, 5, 15, 3, 10],
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
                            text: 'Barangay'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Number of Posted Spaces'
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