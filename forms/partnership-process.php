<?php
require_once '../includes/config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $org_name = trim($_POST['org_name'] ?? '');
    $contact_name = trim($_POST['contact_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $partnership_type = trim($_POST['partnership_type'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation
    if (empty($org_name) || empty($contact_name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($partnership_type) || empty($message)) {
        header('Location: ../partnerships.php?error=1');
        exit;
    }

    // Honeypot check
    if (!empty($_POST['website'])) {
        header('Location: ../partnerships.php?error=spam');
        exit;
    }

    // Build full message
    $fullMessage = "Organisation: $org_name\nPartnership Type: $partnership_type\nMessage: $message";
    $data = ['name' => $contact_name, 'email' => $email, 'phone' => $phone, 'message' => $fullMessage];
    saveFormSubmission('partnership', $data);

    // Store in session for EmailJS
    $_SESSION['form_data'] = [
        'name' => $contact_name,
        'email' => $email,
        'phone' => $phone,
        'subject' => 'Partnership Enquiry',
        'message' => $fullMessage,
        'form_type' => 'partnership',
        'submitted_at' => date('Y-m-d H:i:s')
    ];

    header('Location: ../thank-you.php?type=partnership');
    exit;
} else {
    header('Location: ../partnerships.php');
    exit;
}
?>