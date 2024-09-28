// Get checkboxes
const hourlyCheckbox = document.getElementById('hourlyCheckbox');
const dailyCheckbox = document.getElementById('dailyCheckbox');
const weeklyCheckbox = document.getElementById('weeklyCheckbox');
const monthlyCheckbox = document.getElementById('monthlyCheckbox');
const yearlyCheckbox = document.getElementById('yearlyCheckbox');

// Get amount and allowance containers
const amountAndAllowanceHourly = document.getElementById('amountAndAllowanceHourly');
const amountAndAllowanceDaily = document.getElementById('amountAndAllowanceDaily');
const amountWeekly = document.getElementById('amountWeekly');
const amountMonthly = document.getElementById('amountMonthly');
const amountYearly = document.getElementById('amountYearly');

// Add event listeners to checkboxes
hourlyCheckbox.addEventListener('change', toggleAmountAndAllowance);
dailyCheckbox.addEventListener('change', toggleAmountAndAllowance);
weeklyCheckbox.addEventListener('change', toggleAmountAndAllowance);
monthlyCheckbox.addEventListener('change', toggleAmountAndAllowance);
yearlyCheckbox.addEventListener('change', toggleAmountAndAllowance);

// Function to toggle visibility of amount and allowance based on checkboxes
function toggleAmountAndAllowance() {
    if (hourlyCheckbox.checked) {
        amountAndAllowanceHourly.style.display = 'block';
    } else {
        amountAndAllowanceHourly.style.display = 'none';
    }

    if (dailyCheckbox.checked) {
        amountAndAllowanceDaily.style.display = 'block';
    } else {
        amountAndAllowanceDaily.style.display = 'none';
    }

    if (weeklyCheckbox.checked) {
        amountWeekly.style.display = 'block';
    } else {
        amountWeekly.style.display = 'none';
    }

    if (monthlyCheckbox.checked) {
        amountMonthly.style.display = 'block';
    } else {
        amountMonthly.style.display = 'none';
    }

    if (yearlyCheckbox.checked) {
        amountYearly.style.display = 'block';
    } else {
        amountYearly.style.display = 'none';
    }
}