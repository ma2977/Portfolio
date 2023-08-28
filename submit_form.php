<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Here, you can perform further processing with the form data
    // For demonstration purposes, we'll simply return a success message
    echo 'Form submitted successfully!';
} else {
    echo 'Invalid request';
}
?>
