<?php

$con = mysqli_connect('localhost','root','','prakash');
// Use prepared statements with named parameters for more robust security
$stmt = $conn->prepare("INSERT INTO registration (name, number, password, confirmpassword)
                       VALUES (:name, :number, :password, :confirmpassword)");

// Bind parameters, ensuring data types are explicitly defined
$stmt->bind_param("sisi", $name, $number, $password, $confirmpassword);

// Execute the statement
$stmt->execute();

// Check for successful registration
if ($stmt->affected_rows === 1) {
    echo "Registration successful.";
} else {
    echo "Registration failed: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>