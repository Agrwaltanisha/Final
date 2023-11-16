<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted name
    $name = htmlspecialchars($_POST["name"]);

    // Simulate checking if a user with the same name exists (replace this with your database query)
    // For demonstration purposes, we assume a user with the name "John Doe" already exists.
    if ($name === "John Doe") {
        // Return details if the user exists
        echo "User with the name '$name' already exists. Here are the details: Name: John Doe, Email: john@example.com, Phone: 1234567890, Class: Gold";
    } else {
        // Return a message indicating that the user does not exist
        echo "User with the name '$name' does not exist.";
    }
}
?>
