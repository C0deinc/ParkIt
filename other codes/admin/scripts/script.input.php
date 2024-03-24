<script>
    // JavaScript to toggle visibility of additional content for the first card
    document.getElementById("see-more-1").addEventListener("click", function() {
        var additionalContent = document.getElementById("additional-content-1");
        if (additionalContent.style.display === "none") {
            additionalContent.style.display = "block";
            document.getElementById("see-more-1").innerText = "See less";
        } else {
            additionalContent.style.display = "none";
            document.getElementById("see-more-1").innerText = "See more";
        }
    });

    // JavaScript to toggle visibility of additional content for the second card
    document.getElementById("see-more-2").addEventListener("click", function() {
        var additionalContent = document.getElementById("additional-content-2");
        if (additionalContent.style.display === "none") {
            additionalContent.style.display = "block";
            document.getElementById("see-more-2").innerText = "See less";
        } else {
            additionalContent.style.display = "none";
            document.getElementById("see-more-2").innerText = "See more";
        }
    });
</script>
