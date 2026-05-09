<?php

function validateContactForm($name, $email, $message)
{
    $errors = [];

    if (trim($name) === '') {
        $errors[] = "Name is required.";
    }

    if (trim($email) === '') {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (trim($message) === '') {
        $errors[] = "Message is required.";
    }

    return $errors;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"] ?? '';
    $email = $_POST["email"] ?? '';
    $message = $_POST["message"] ?? '';

    $errors = validateContactForm($name, $email, $message);

    if (!empty($errors)) {
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<title>Form Error</title>";
        echo "<link rel='stylesheet' href='assets/css/style.css'>";
        echo "</head>";
        echo "<body>";
        echo "<div class='error-page'>";
        echo "<h1>Form Submission Error</h1>";
        echo "<ul>";

        foreach ($errors as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }

        echo "</ul>";
        echo "<a href='index.php#contact' class='cta-btn'>Go Back</a>";
        echo "</div>";
        echo "</body>";
        echo "</html>";
        exit;
    }

    header("Location: thank-you.php");
    exit;
}