<?php

// Include the MongoDB PHP library
require 'vendor/autoload.php';

use MongoDB\Client;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to MongoDB
    $password = "databasepassword";
    $encodedPassword = urlencode($password);
    $client = new Client("mongodb+srv://gdmananya:".$encodedPassword."@guvi.mfklf5s.mongodb.net/?retryWrites=true&w=majority");
    $db = $client->selectDatabase('guvidatabase');
    $collection = $db->selectCollection('users');

    $user = $collection->findOne(['username' => $username]);

    if ($user && password_verify($password, $user['password'])) {
        // Valid login, generate a token (you may use a more secure token generation method)
        $token = bin2hex(random_bytes(32));

        // Save the token in Redis with a TTL (time-to-live)
        // $redis = new Redis();
        // $redis->connect('127.0.0.1', 6379); // Update with your Redis server details
        // $redis->setex($token, 3600, $username); // Set a TTL of 1 hour

        // Send a response to the client with the token
        echo json_encode(['success' => true, 'token' => $token, 'username' => $username]);
    } else {
        // Debugging information
        echo json_encode(['success' => false, 'message' => 'Invalid username or password']);
    }
} else {
    // Debugging information
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
