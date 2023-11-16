<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST["phone"]);
    $address = htmlspecialchars($_POST["address"]);
    $password = htmlspecialchars($_POST["password"]);
    $confirm_password = htmlspecialchars($_POST["confirm_password"]);

    // Perform additional validation for password
    if (strlen($password) < 8 || !preg_match('/[A-Z]{2}/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[_@$]/', $password)) {
        die("Password does not meet the requirements.");
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Store values in an associative array
    $user_data = array(
        "Name" => $name,
        "Email" => $email,
        "Phone" => $phone,
        "Address" => $address,
        "Password" => $password
    );

    // You can now use $user_data as needed, for example, storing in a database.

    // Print the stored data (for demonstration purposes)
    echo "<pre>";
    print_r($user_data);
    echo "</pre>";
}
?>
