<?php
// Load Composer's autoloader (this gives us Dotenv)
require_once __DIR__ . '/../vendor/autoload.php';

// Create a new Dotenv instance and load the .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Now all variables from .env are available in $_ENV and getenv()

// Database – now read from environment
define('DB_HOST', $_ENV['DB_HOST'] ?? 'localhost');
define('DB_NAME', $_ENV['DB_NAME'] ?? 'zwakelefound');
define('DB_USER', $_ENV['DB_USER'] ?? 'root');
define('DB_PASS', $_ENV['DB_PASS'] ?? '');
define('SITE_URL', $_ENV['SITE_URL'] ?? 'http://localhost/zwakelefoundation/');

// EmailJS
define('EMAILJS_PUBLIC_KEY', $_ENV['EMAILJS_PUBLIC_KEY'] ?? '');
define('EMAILJS_SERVICE_ID', $_ENV['EMAILJS_SERVICE_ID'] ?? '');
define('EMAILJS_TEMPLATE_ID', $_ENV['EMAILJS_TEMPLATE_ID'] ?? '');

// Admin
define('ADMIN_NAME', $_ENV['ADMIN_NAME'] ?? 'Mlungisi Sandziso Mamba');
define('ADMIN_EMAIL', $_ENV['ADMIN_EMAIL'] ?? 'info@zwakelefoundation.org');
define('ADMIN_PHONE', $_ENV['ADMIN_PHONE'] ?? '+268 7854 5189');
define('ALTERNATIVE_PHONE', $_ENV['ALTERNATIVE_PHONE'] ?? '+268 7695 8586');
define('ZWAKELES_PHONE', $_ENV['ZWAKELES_PHONE'] ?? '+268 7658 2660');
define('ORGANISATION_ADDRESS', $_ENV['ORGANISATION_ADDRESS'] ?? 'P.O. Box 123, Hawane, Eswatini');
define('ORGANISATION_WEBSITE', $_ENV['ORGANISATION_WEBSITE'] ?? 'https://zwakelefoundation.org');

// Environment-specific settings (optional)
if (($_ENV['APP_ENV'] ?? 'development') === 'production') {
    ini_set('display_errors', '0');
    error_reporting(0);
} else {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
}

// Set timezone if defined
if (!empty($_ENV['APP_TIMEZONE'])) {
    date_default_timezone_set($_ENV['APP_TIMEZONE']);
}

// Session start (if not already started) – unchanged
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}