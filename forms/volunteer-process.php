<?php
require_once '../includes/config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $interest = trim($_POST['interest'] ?? '');
    $skills = trim($_POST['skills'] ?? '');
    $availability = trim($_POST['availability'] ?? '');
    $region = trim($_POST['region'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation
    if (empty($fullname) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($phone) || empty($interest) || empty($availability) || empty($region)) {
        header('Location: ../get-involved.php?error=1');
        exit;
    }

    // Honeypot check
    if (!empty($_POST['website'])) {
        header('Location: ../get-involved.php?error=spam');
        exit;
    }

    // Build full message for DB
    $fullMessage = "Interest: $interest\nSkills: $skills\nAvailability: $availability\nRegion: $region\nMessage: $message";
    $data = ['name' => $fullname, 'email' => $email, 'phone' => $phone, 'message' => $fullMessage];
    saveFormSubmission('volunteer', $data);

    // Store in session for EmailJS
    $_SESSION['form_data'] = [
        'name' => $fullname,
        'email' => $email,
        'phone' => $phone,
        'subject' => 'Volunteer Application',
        'message' => $fullMessage,
        'form_type' => 'volunteer',
        'submitted_at' => date('Y-m-d H:i:s')
    ];

    header('Location: ../thank-you.php?type=volunteer');
    exit;
} else {
    header('Location: ../get-involved.php');
    exit;
}
?>