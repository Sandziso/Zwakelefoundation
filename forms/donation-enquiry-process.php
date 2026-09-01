<?php
require_once '../includes/config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $donation_type = trim($_POST['donation_type'] ?? '');
    $amount = trim($_POST['amount'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation
    if (empty($name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($donation_type) || empty($message)) {
        header('Location: ../donate.php?error=1');
        exit;
    }

    // Honeypot check
    if (!empty($_POST['website'])) {
        header('Location: ../donate.php?error=spam');
        exit;
    }

    // Build full message
    $fullMessage = "Donation Type: $donation_type\nAmount: $amount\nMessage: $message";
    $data = ['name' => $name, 'email' => $email, 'phone' => $phone, 'message' => $fullMessage];
    saveFormSubmission('donation', $data);

    // Store in session for EmailJS
    $_SESSION['form_data'] = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'subject' => 'Donation Enquiry',
        'message' => $fullMessage,
        'form_type' => 'donation',
        'submitted_at' => date('Y-m-d H:i:s')
    ];

    header('Location: ../thank-you.php?type=donation');
    exit;
} else {
    header('Location: ../donate.php');
    exit;
}
?>