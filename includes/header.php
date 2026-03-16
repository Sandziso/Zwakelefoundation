<?php
// Get the current filename (e.g., "index.php", "about.php")
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Eswatini Down Syndrome Association</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Down Syndrome Eswatini support families donation volunteer" name="keywords" />
    <meta content="Official website of the Eswatini Down Syndrome Association – supporting individuals with Down syndrome and their families." name="description" />

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet" />

    <!-- Icon Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Spinner (hidden by CSS, kept for structure) -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>

    <!-- Topbar -->
    <div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>+268 7658 2660</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>eswatinidownsyndrome@gmail.com</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-clock me-2"></small>
                    <small>Mon - Fri : 09 AM - 05 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="text-white-50 ms-4" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-white-50 ms-4" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="text-white-50 ms-4" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="text-white-50 ms-4" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 header">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0" style="color: var(--primary-blue);">
                <span style="color: var(--primary-yellow);">E</span>DSA
            </h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
                <a href="index.php" class="nav-item nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>">Home</a>
                <a href="about.php" class="nav-item nav-link <?= ($current_page == 'about.php') ? 'active' : '' ?>">About Us</a>
                <a href="what-is-down-syndrome.php" class="nav-item nav-link <?= ($current_page == 'what-is-down-syndrome.php') ? 'active' : '' ?>">What is DS?</a>
                <a href="get-involved.php" class="nav-item nav-link <?= ($current_page == 'get-involved.php') ? 'active' : '' ?>">Get Involved</a>
                <a href="events.php" class="nav-item nav-link <?= ($current_page == 'events.php') ? 'active' : '' ?>">Events</a>
                <a href="gallery.php" class="nav-item nav-link <?= ($current_page == 'gallery.php') ? 'active' : '' ?>">Gallery</a>
                <a href="partnerships.php" class="nav-item nav-link <?= ($current_page == 'partnerships.php') ? 'active' : '' ?>">Partnerships</a>
                <a href="donate.php" class="nav-item nav-link <?= ($current_page == 'donate.php') ? 'active' : '' ?>">Donate</a>
                <a href="contact.php" class="nav-item nav-link <?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact</a>
            </div>
        </div>
        <a href="donate.php" class="btn btn-primary px-3 d-none d-lg-block" style="background-color: var(--primary-yellow); border-color: var(--primary-yellow); color: var(--text-dark);">Donate Now</a>
    </nav>