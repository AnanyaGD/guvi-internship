// Define the login function in the global scope
function login() {
    $('#profile-form').submit(); // Trigger the form submission
}

$(document).ready(function () {
    $('#profile-form').validate({
        rules: {
            username: {
                required: true,
                minlength: 3,
            },
            password: {
                required: true,
                minlength: 6,
            }
        },
        messages: {
            // Define custom error messages if needed
        },
        submitHandler: function (form) {
            // Prevent default form submission
            event.preventDefault();

            // Serialize form data
            var formData = $(form).serialize();

            // Perform AJAX login request
            $.ajax({
                type: 'POST',
                url: 'profile_handler.php',
                data: formData,
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        // Save user information in localStorage
                        localStorage.setItem('username', response.username);
                        localStorage.setItem('token', response.token);

                      //  Redirect to a welcome page or perform other actions
                        window.location.href = 'profile.php';
                    } else {
                        alert("Login failed: " + response.message);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error: ' + status + ' - ' + error);
                    alert('Error during login. Please check the console for more details.');
                }
            });
        }
    });

    // Add any additional logic or event listeners as needed
});
