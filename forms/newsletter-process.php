<?php
require_once '../includes/config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');

    // Validation
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../index.php?error=1');
        exit;
    }

    // Honeypot check
    if (!empty($_POST['website'])) {
        header('Location: ../index.php?error=spam');
        exit;
    }

    // Save to DB (name and phone not required, we set empty)
    $data = ['name' => 'Subscriber', 'email' => $email, 'phone' => '', 'message' => 'Newsletter subscription'];
    saveFormSubmission('newsletter', $data);

    // Store in session for EmailJS
    $_SESSION['form_data'] = [
        'name' => 'Subscriber',
        'email' => $email,
        'phone' => '',
        'subject' => 'Newsletter Subscription',
        'message' => 'New newsletter subscription from ' . $email,
        'form_type' => 'newsletter',
        'submitted_at' => date('Y-m-d H:i:s')
    ];

    header('Location: ../thank-you.php?type=newsletter');
    exit;
} else {
    header('Location: ../index.php');
    exit;
}
?>