<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name']; // Retrieve the value of the 'name' field from the form
    $email = $_POST['email']; // Retrieve the value of the 'email' field from the form
    $message = $_POST['message']; // Retrieve the value of the 'message' field from the form

    // Set up the email parameters
    $to = "bennyshohat@example.com"; // Update with your email address
    $subject = "New Contact Form Submission"; // Subject of the email
    $body = "Name: " . $name . "\n"; // Body of the email, includes the name
    $body .= "Email: " . $email . "\n"; // Append the email to the body
    $body .= "Message: " . $message . "\n"; // Append the message to the body

    // Send the email
    $headers = "From: " . $email . "\r\n" . "Reply-To: " . $email . "\r\n";
    mail($to, $subject, $body, $headers); // Send the email with the specified parameters

    // Redirect the user to a thank you page
    header("Location: ../pages/thank_you.html"); // Update the path to the thank_you.html file
    exit();
}
?>
