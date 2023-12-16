<?php
// profile_handler.php
use MongoDB\Client;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve updated user details from the form
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];
    
    // Update user details in the database (modify based on your database structure)
    session_start();
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        
        require 'vendor/autoload.php';
        
        $client = new Client("mongodb+srv://gdmananya:" . urlencode("Anan@123") . "@guvi.mfklf5s.mongodb.net/?retryWrites=true&w=majority");
        $db = $client->selectDatabase('guvidatabase');
        $collection = $db->selectCollection('users');
        
        $result = $collection->updateOne(
            ['username' => $username],
            ['$set' => ['age' => $age, 'dob' => $dob, 'contact' => $contact]]
        );
        
        if ($result->getModifiedCount() > 0) {
            echo json_encode(['success' => true, 'message' => 'Profile updated successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error updating profile']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'User not logged in']);
    }
} else {
    header("Location: profile.php");
    exit();
}
?>
