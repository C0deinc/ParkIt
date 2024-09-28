const checkboxes = document.querySelectorAll('input[type="checkbox"]');

  checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', (event) => {
      const parkingLotId = event.target.value + '-lot';
      const parkingLotElement = document.getElementById(parkingLotId);

      if (event.target.checked) {
        parkingLotElement.style.display = 'block';
      } else {
        parkingLotElement.style.display = 'none';
      }
    });
  });

