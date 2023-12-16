<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="js/login.js"></script>
    <title>User Profile</title>
    <!-- Add any additional CSS or external libraries if needed -->
</head>
<body>
    <div class="card mt-5">
        <h2>User Profile</h2>
        <div class="mt-3 p-5">
            <div class="">
                <form id="profile-form">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <span id="localStorageUsername" style="max-width:200px" type="text" class="form-control" required>
</span>

                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input style="max-width:200px" type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input style="max-width:200px" type="number" class="form-control" id="age" name="age" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input style="max-width:200px" type="number" class="form-control" id="contact" name="contact" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Get username from localStorage and display it
        var localStorageUsername = localStorage.getItem('username');
        if (localStorageUsername) {
            document.getElementById('localStorageUsername').innerText = localStorageUsername;
        }
    </script>

    <!-- Add any additional HTML or JavaScript as needed -->
</body>
</html>
