// Wait for the DOM content to load
document.addEventListener('DOMContentLoaded', function() {
    // Get the checkbox element
    const switchCheckbox = document.getElementById('flexSwitchCheckChecked');

    // Get the amount input field container
    const amountInput = document.getElementById('amountInput');

    // Hide the amount input field initially
    amountInput.style.display = 'none';

    // Add event listener to the checkbox
    switchCheckbox.addEventListener('change', function() {
        // If the checkbox is checked (activated)
        if (switchCheckbox.checked) {
            // Display the amount input field
            amountInput.style.display = 'block';
        } else {
            // Hide the amount input field
            amountInput.style.display = 'none';
        }
    });
});