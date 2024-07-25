const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
      event.preventDefault();
      if (validateForm()) {
        // Perform form submission
        // form.submit();
      }
    });

    function validateForm() {
      const name = document.getElementById('name').value.trim();
      const gender = document.getElementById('gender').value;
      const email = document.getElementById('email').value.trim();
      const tel = document.getElementById('tel').value.trim();
      const address = document.getElementById('address').value.trim();
      const currentPassword = document.getElementById('current-password').value.trim();
      const newPassword = document.getElementById('new-password').value.trim();
      const confirmPassword = document.getElementById('confirm-password').value.trim();

      // Perform validation for each input field
      if (name === '') {
        alert('Please enter your name.');
        return false;
      }

      if (email === '') {
        alert('Please enter your email.');
        return false;
      }

      // Additional validation criteria can be added as per your requirements

      return true; // Return true if all fields pass validation
    }