<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "idriss2005";
$database = "porsche";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert data into database
$sql = "INSERT INTO users (nom, prenom, adresse, telephone, email, password) VALUES ('$nom', '$prenom', '$adresse', '$telephone', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
