$(document).ready(function () {
    $('#register-form').validate({
      rules: {
        username: {
          required: true,
          minlength: 3,
          // Add any other validation rules for the username
        },
        password: {
          required: true,
          minlength: 6,
          // Add any other validation rules for the password
        }
      },
      messages: {
        // Define custom error messages if needed
      },
      submitHandler: function (form) {
        // Serialize form data
        var formData = $(form).serialize();
  
        // Perform AJAX register request
        $.ajax({
          type: 'POST',
          url: 'register_handler.php', // Adjust the URL based on your file structure
          data: formData,
          success: function (response) {
            // Update content with the response
            // $('#content').html(response);
  
            // Optionally, you can redirect the user to the login page after registration
            alert('Registration Successfull');
            setTimeout(function () {
              window.location.href = 'login.html';
            }, 2000);
          },
          error: function () {
            alert('Error during registration.');
          }
        });
      }
    });
  
    // Add any additional logic or event listeners as needed
  });
  