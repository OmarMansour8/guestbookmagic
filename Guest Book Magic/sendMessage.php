<?php
// Database connection parameters
$servername = "sql302.infinityfree.com";
$username = "if0_36245223";
$password = "Az123com";
$dbname = "if0_36245223_SalmaOmar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the message is sent via POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the message from the POST data
    $message = $_POST["message"];

    // Prepare SQL statement to insert the message into the database
    $sql = "INSERT INTO messages (message) VALUES (?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("s", $message);
    if ($stmt->execute()) {
        // Message inserted successfully
        echo "Message sent successfully.";
    } else {
        // Error occurred while inserting the message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
