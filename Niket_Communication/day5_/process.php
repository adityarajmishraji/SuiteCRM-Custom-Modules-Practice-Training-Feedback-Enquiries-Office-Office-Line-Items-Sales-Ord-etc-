<?php
// Start the session to store user data (Task 4)
session_start();

// Define a PHP array of skills (Task 3)
$skills = [
    "HTML/CSS",
    "JavaScript",
    "jQuery",
    "PHP",
    "MySQL",
    "MongoDB",
    "ReactJS",
    "Node.js",
    "Express.js",
    "Python",
    "jenkins"
];

// Initialize error and message arrays
$errors = [];
$messages = [];

// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form inputs (Task 1: if/else)
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Validate name
    if (empty($name)) {
        $errors[] = "Name is required.";
    } else {
        $messages[] = "Name provided: " . htmlspecialchars($name);
    }

    // Validate email
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email address is required.";
    } else {
        // Task 1: switch statement to handle email domains
        $email_domain = strtolower(substr(strrchr($email, "@"), 1));
        switch ($email_domain) {
            case 'gmail.com':
                $messages[] = "Using a Gmail account.";
                break;
            case 'yahoo.com':
                $messages[] = "Using a Yahoo account.";
                break;
            case 'outlook.com':
                $messages[] = "Using an Outlook account.";
                break;
            default:
                $messages[] = "Using a custom email domain.";
                break;
        }
    }

    // Validate message and categorize by length (Task 1: if/else)
    if (empty($message)) {
        $errors[] = "Message is required.";
    } else {
        $message_length = strlen($message);
        if ($message_length <= 50) {
            $messages[] = "Short message received (50 characters or less).";
        } elseif ($message_length <= 200) {
            $messages[] = "Medium message received (51–200 characters).";
        } else {
            $messages[] = "Long message received (over 200 characters).";
        }
    }

    // If no errors, store username and form data in session
    if (empty($errors)) {
        // Store username in session (Task 4)
        $_SESSION['username'] = $name;
        // Store form data and messages for thankyou.html
        $_SESSION['form_data'] = [
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'skills' => $skills, // Store skills array (Task 3)
            'messages' => $messages // Store additional messages from input handling
        ];
        // Redirect to thankyou.html
        header("Location: thankyou.html");
        exit();
    } else {
        // Store errors in session
        $_SESSION['errors'] = $errors;
        $_SESSION['messages'] = $messages;
        header("Location: thankyou.html");
        exit();
    }
} else {
    // If not a POST request, redirect back to index.html
    header("Location: index.html");
    exit();
}
?>