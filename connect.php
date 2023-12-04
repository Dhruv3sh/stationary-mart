<?php

$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "databse";

$conn = mysqli_connect($server_name, $username, $password, $database_name);
//now check the connection
if (!$conn) {
    die("Connection Failed:" . mysqli_connect_error());
}

if (isset($_POST['save'])) {
    $name = htmlspecialchars($_POST['name']);
    $reason = htmlspecialchars($_POST['reason']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $locality = htmlspecialchars($_POST['locality']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $zip = htmlspecialchars($_POST['zip']);

    // Use prepared statements to prevent SQL injection
    $sql_query = "INSERT INTO register (name, reason, email, phone, address, locality, city, state, zip) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $sql_query);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssssss", $name, $reason, $email, $phone, $address, $locality, $city, $state, $zip);

        if (mysqli_stmt_execute($stmt)) {
            echo "Record inserted successfully";
        } else {
            echo "Error executing statement: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
