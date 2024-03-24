<!-- Chart.js Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {

            // FEEDBACK Bar Chart
            var barCtx = document.getElementById("feedback").getContext("2d");
            var barData = {
                labels: ["JAUHARI", "JANICE", "MARK", "CHARL'S", "KATHLEEN"],
                datasets: [{
                    label: "SPACE OWNER FEEDBACK",
                    data: [40, 15, 25, 13, 22],
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
                            text: 'SPACE OWNER'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'NUMBER OF FEEDBACK'
                        }
                    }
                }
            };
            new Chart(barCtx, {
                type: 'bar',
                data: barData,
                options: barOptions
            });

            // 5 STAR Bar Chart
            var barCtx = document.getElementById("star").getContext("2d");
            var barData = {
                labels: ["2020", "2021", "2022", "2023", "2024"],
                datasets: [{
                    label: "COMMISSION",
                    data: [1000, 800, 580, 500, 200],
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
                            text: 'COMMISSION AMOUNT'
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