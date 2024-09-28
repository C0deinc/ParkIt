document.getElementById('nextButton').addEventListener('click', function() {
    // Check which radio button is selected
    if (document.getElementById('btnradio1').checked) {
        // Redirect to signuppersonal.php if "Personal" is selected
        window.location.href = 'signuppersonal.php';
    } else if (document.getElementById('btnradio2').checked) {
        // Redirect to signupcompany.php if "Company" is selected
        window.location.href = 'signupcompany.php';
    }
});