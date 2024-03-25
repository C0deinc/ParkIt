document.addEventListener("DOMContentLoaded", function() {
    // Get references to the motorcycles, tricycles, and cars divs
    var motorcyclesDiv = document.getElementById("motorcycles");
    var motorcyclesLotDiv = document.getElementById("motorcycles-lot");

    var tricyclesDiv = document.getElementById("tricycles");
    var tricyclesLotDiv = document.getElementById("tricycles-lot");

    var carsDiv = document.getElementById("cars");
    var carsLotDiv = document.getElementById("cars-lot");

    // Add click event listeners to the motorcycles, tricycles, and cars divs
    motorcyclesDiv.addEventListener("click", function() {
        toggleDisplay(motorcyclesLotDiv);
    });

    tricyclesDiv.addEventListener("click", function() {
        toggleDisplay(tricyclesLotDiv);
    });

    carsDiv.addEventListener("click", function() {
        toggleDisplay(carsLotDiv);
    });

    // Function to toggle the display property
    function toggleDisplay(element) {
        if (element.style.display === "none") {
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
    }
});
