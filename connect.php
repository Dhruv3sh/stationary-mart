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
    $name = $_POST['name'];
    $reason = $_POST['reason'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $locality = $_POST['locality'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    //For inserting the values to mysql database 
    $sql_query = "INSERT INTO register ( name , reason , email , phone, address , locality , city , state , zip) VALUES ('$name','$reason','$email','$phone','$address','$locality','$city','$state','$zip')";
    if (mysqli_query($conn, $sql_query)) {
        echo "";
    }
    else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>