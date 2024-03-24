
<script>
function updateTimer() {
    var timerElement = document.getElementById("timer");
    var seconds = 0;
    var minutes = 0;
    var hours = 0;

    setInterval(function() {
        seconds++;
        if (seconds >= 60) {
            seconds = 0;
            minutes++;
            if (minutes >= 60) {
                minutes = 0;
                hours++;
            }
        }
        // Format the timer value as HH:MM:SS
        var formattedTime = (hours < 10 ? "0" + hours : hours) + ":" +
                            (minutes < 10 ? "0" + minutes : minutes) + ":" +
                            (seconds < 10 ? "0" + seconds : seconds);
        timerElement.textContent = formattedTime;
    }, 1000); // Update the timer every second
}

// Call the function to start the timer
updateTimer();
</script>