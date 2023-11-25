<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "restorent";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$content = $_POST['content'];

// SQL to insert data into the feedback table
$sql = "INSERT INTO feedback (name, email, phone, content) VALUES ('$name', '$email', '$phone', '$content')";

if ($conn->query($sql) === TRUE) {
    // Feedback data inserted successfully
    echo "Feedback submitted successfully!";
} else {
    // Error in inserting data
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
