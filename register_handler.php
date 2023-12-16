<?php

require 'vendor/autoload.php'; // Include the Composer autoloader

use MongoDB\Client;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user data from the POST request
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to MongoDB
    $password = "databasepassword";
    $encodedPassword = urlencode($password);
    
    // Now use $encodedPassword in your MongoDB connection string
    $client = new Client("mongodb+srv://gdmananya:".$encodedPassword."@guvi.mfklf5s.mongodb.net/?retryWrites=true&w=majority");
    
    // Select the database and collection
    $db = $client->selectDatabase('guvidatabase');
    $collection = $db->selectCollection('users');

    // Check if the username already exists
    $existingUser = $collection->findOne(['username' => $username]);

    if ($existingUser) {
        echo "<p>Username already exists. Choose a different username.</p>";
    } else {
        // Hash the password (you should use a secure password hashing algorithm)
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Insert the user data into MongoDB
        $result = $collection->insertOne([
            'username' => $username,
            'password' => $hashedPassword,
            // Add any other user-related data here
        ]);

        if ($result->getInsertedCount() > 0) {
            // Registration successful
            echo "<p>Registration successful! Redirecting to login page...</p>";
           
            echo "<script>setTimeout(function() { window.location.href = 'login.html'; }, 2000);</script>";
        } else {
            echo "<p>Error during registration. Please try again.</p>";
        }
    }
}
?>
