<!-- Chart.js Script -->
<script>
      document.addEventListener("DOMContentLoaded", function() {
            // Line Chart
            var lineCtx = document.getElementById("incident").getContext("2d");
            var lineData = {
                labels: ["Jan", "Feb", "Mar", "Apr", "May"],
                datasets: [{
                    label: "INCIDENTS",
                    data: [3, 10, 8, 0, 15],
                    fill: false
                }]
            };
            var lineOptions = {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'MONTHS'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'NO. OF INCIDENT'
                        }
                    }
                }
            };
            new Chart(lineCtx, {
                type: 'line',
                data: lineData,
                options: lineOptions
            });

            // Bar Chart (TRANSACTION)
            var barCtx = document.getElementById("transaction").getContext("2d");
            var barData = {
                labels: ["2021", "2022", "2023", "2024", "2025"],
                datasets: [{
                    label: "TRANSACTION",
                    data: [500, 1000, 800, 400, 900],
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
                            text: 'AREA'
                        }
                    }
                }
            };
            new Chart(barCtx, {
                type: 'bar',
                data: barData,
                options: barOptions
            });

            // Another Bar Chart
            var barCtx = document.getElementById("areaScalingChart").getContext("2d");
            var barData = {
                labels: ["San Roque", "Pasonanca", "Calarian", "Ayala"],
                datasets: [{
                    label: "AREA SCALING",
                    data: [25, 15, 10, 5],
                    backgroundColor: ["#FF6384", "#FF5733", "#45B39D", "#AAB7B8"],
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
                            text: 'AREA'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'NO. OF'
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