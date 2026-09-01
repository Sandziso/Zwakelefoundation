<?php
$current_page = basename($_SERVER['PHP_SELF']);
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Zwakele Foundation – Empowering Ability</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zwakele Foundation – Skills, Employment, Enterprise & Inclusion for young people with disabilities in Eswatini.">
    <link rel="icon" href="images/logo/favicon.ico">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome & Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- Libraries (assets/lib/) -->
    <link rel="stylesheet" href="assets/lib/animate/animate.min.css">
    <link rel="stylesheet" href="assets/lib/owlcarousel/assets/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <style>
        :root {
            --primary-yellow: #FFD700;
            --primary-blue: #1A5276;
            --secondary-gold: #F1C40F;
            --secondary-dark-blue: #003366;
            --text-dark: #2C3E50;
            --text-light: #6C757D;
            --white: #FFFFFF;
            --light-grey: #F8F9FA;
            --border-color: #DEE2E6;
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
        }

        /* ===== Dark Navbar ===== */
        .navbar-dark-custom {
            background: var(--secondary-dark-blue); /* #003366 */
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: var(--transition);
            z-index: 1030;
        }
        .navbar-dark-custom.scrolled {
            background: #002244; /* slightly darker on scroll */
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }

        /* Brand */
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        .navbar-brand h1 {
            color: var(--white);
            font-weight: 800;
            letter-spacing: -0.5px;
            font-size: clamp(1.5rem, 4vw, 2.2rem);
            margin: 0;
        }
        .navbar-brand h1 span {
            color: var(--secondary-gold);
        }

        /* Nav links */
        .navbar-nav .nav-link {
            font-weight: 500;
            color: rgba(255,255,255,0.85);
            padding: 0.7rem 1rem;
            position: relative;
            transition: color 0.3s;
        }
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--secondary-gold);
        }
        .navbar-nav .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
            height: 3px;
            background: var(--secondary-gold);
            border-radius: 2px;
        }

        /* Dropdown menu – white background, dark text (clearly visible) */
        .dropdown-menu {
            border: none;
            background: var(--white);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            padding: 0.5rem 0;
            margin-top: 0.5rem;
            min-width: 220px;
            z-index: 1050;
        }
        .dropdown-item {
            padding: 0.8rem 1.5rem;
            font-weight: 500;
            color: var(--text-dark);
            transition: all 0.2s;
        }
        .dropdown-item:hover {
            background: var(--light-grey);
            color: var(--primary-blue);
            padding-left: 1.8rem;
        }
        .dropdown-item i {
            margin-right: 0.5rem;
            color: var(--primary-blue);
            width: 1.2rem;
            text-align: center;
        }

        /* Desktop hover dropdown */
        @media (min-width: 992px) {
            .dropdown .dropdown-menu {
                display: block;
                opacity: 0;
                visibility: hidden;
                transition: opacity 0.25s ease, visibility 0.25s ease, transform 0.25s ease;
                transform: translateY(10px);
                pointer-events: none;
            }
            .dropdown:hover .dropdown-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
                pointer-events: auto;
            }
            .dropdown:hover .dropdown-toggle::after {
                transform: rotate(180deg);
                transition: transform 0.3s;
            }
        }

        /* Mobile: click to open, no hover */
        @media (max-width: 991.98px) {
            .navbar-dark-custom {
                background: var(--secondary-dark-blue);
            }
            .dropdown:hover .dropdown-menu {
                display: none;
            }
            .dropdown.show:hover .dropdown-menu {
                display: block;
            }
            .dropdown-menu {
                background: var(--white) !important;
                border: 1px solid var(--border-color);
            }
        }

        /* Donate button – gold, top right */
        .btn-donate-nav {
            background: var(--secondary-gold);
            border: none;
            color: var(--text-dark);
            font-weight: 600;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            transition: all 0.3s;
        }
        .btn-donate-nav:hover {
            background: #d4ac0d;
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(241, 196, 15, 0.4);
            color: var(--secondary-dark-blue);
        }

        /* Toggler */
        .navbar-toggler {
            border: none;
            padding: 0.5rem;
            font-size: 1.5rem;
            color: rgba(255,255,255,0.8);
        }
        .navbar-toggler:focus {
            box-shadow: none;
        }

        /* Topbar – dark, matches footer */
        .topbar {
            font-size: 0.85rem;
            background: #002244;
        }
        .topbar .h-100 {
            flex-wrap: wrap;
        }

        /* Skip link */
        .skip-link {
            position: absolute;
            top: -40px;
            left: 6px;
            background: var(--secondary-gold);
            color: var(--secondary-dark-blue);
            padding: 8px;
            z-index: 1100;
            text-decoration: none;
            border-radius: 0 0 4px 4px;
        }
        .skip-link:focus {
            top: 0;
        }

        /* Spinner hidden */
        #spinner {
            display: none !important;
        }
    </style>
</head>
<body>

<!-- Skip Link for Keyboard Users -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<!-- Spinner (hidden) -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center" style="z-index:9999;">
    <div class="spinner-grow text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<!-- Topbar -->
<div class="container-fluid text-white-50 py-2 px-0 d-none d-lg-block topbar">
    <div class="row gx-0 align-items-center">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-phone-alt me-2"></small><small><?= ADMIN_PHONE ?></small>
            </div>
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="far fa-envelope-open me-2"></small><small><?= ADMIN_EMAIL ?></small>
            </div>
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="far fa-clock me-2"></small><small>Mon - Fri : 09 AM - 05 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center">
                <a class="text-white-50 ms-4" href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-4" href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-4" href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-4" href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Navbar (Dark) -->
<nav class="navbar navbar-expand-lg navbar-dark-custom sticky-top px-4 px-lg-5 py-3" id="mainNav" aria-label="Main navigation">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand">
            <h1><span>Z</span>wakele</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link <?= ($current_page == 'about.php') ? 'active' : '' ?>">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= (in_array($current_page, ['what-we-do.php', 'impact.php'])) ? 'active' : '' ?>" href="#" id="whatWeDoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        What We Do
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="whatWeDoDropdown">
                        <li><a class="dropdown-item" href="what-we-do.php"><i class="fas fa-tools"></i> Our Departments</a></li>
                        <li><a class="dropdown-item" href="impact.php"><i class="fas fa-chart-line"></i> Our Impact</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="gallery.php"><i class="fas fa-images"></i> Gallery</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= (in_array($current_page, ['get-involved.php', 'volunteer.php', 'partnerships.php', 'donate.php'])) ? 'active' : '' ?>" href="#" id="getInvolvedDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Get Involved
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="getInvolvedDropdown">
                        <li><a class="dropdown-item" href="get-involved.php"><i class="fas fa-hands-helping"></i> Volunteer</a></li>
                        <li><a class="dropdown-item" href="partnerships.php"><i class="fas fa-handshake"></i> Partner</a></li>
                        <li><a class="dropdown-item" href="donate.php"><i class="fas fa-donate"></i> Donate</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="events.php" class="nav-link <?= ($current_page == 'events.php') ? 'active' : '' ?>">Events</a>
                </li>
                <li class="nav-item">
                    <a href="news.php" class="nav-link <?= ($current_page == 'news.php') ? 'active' : '' ?>">News</a>
                </li>
                <li class="nav-item">
                    <a href="resources.php" class="nav-link <?= ($current_page == 'resources.php') ? 'active' : '' ?>">Resources</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link <?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact</a>
                </li>
            </ul>
            <a href="donate.php" class="btn btn-donate-nav d-none d-lg-inline-block">Donate Now</a>
        </div>
    </div>
</nav>

<!-- Main content anchor for skip link -->
<main id="main-content">

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Hide spinner
        var spinner = document.getElementById('spinner');
        if (spinner) {
            setTimeout(function() {
                spinner.classList.remove('show');
                spinner.style.display = 'none';
            }, 500);
        }

        // Navbar scroll effect
        var navbar = document.getElementById('mainNav');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Enable hover dropdown on desktop (no touch)
        if (window.innerWidth >= 992 && !('ontouchstart' in window)) {
            var dropdowns = document.querySelectorAll('#mainNav .dropdown');
            dropdowns.forEach(function(dropdown) {
                var toggle = dropdown.querySelector('.dropdown-toggle');
                var menu = dropdown.querySelector('.dropdown-menu');
                if (!toggle || !menu) return;

                dropdown.addEventListener('mouseenter', function() {
                    if (typeof bootstrap !== 'undefined' && bootstrap.Dropdown) {
                        var bsDropdown = bootstrap.Dropdown.getInstance(toggle);
                        if (bsDropdown) bsDropdown.show();
                        else {
                            menu.classList.add('show');
                            toggle.setAttribute('aria-expanded', 'true');
                        }
                    } else {
                        menu.classList.add('show');
                        toggle.setAttribute('aria-expanded', 'true');
                    }
                });

                dropdown.addEventListener('mouseleave', function() {
                    if (typeof bootstrap !== 'undefined' && bootstrap.Dropdown) {
                        var bsDropdown = bootstrap.Dropdown.getInstance(toggle);
                        if (bsDropdown) bsDropdown.hide();
                        else {
                            menu.classList.remove('show');
                            toggle.setAttribute('aria-expanded', 'false');
                        }
                    } else {
                        menu.classList.remove('show');
                        toggle.setAttribute('aria-expanded', 'false');
                    }
                });

                toggle.addEventListener('click', function(e) {
                    if (window.innerWidth >= 992 && !('ontouchstart' in window)) {
                        e.preventDefault();
                    }
                });
            });
        }
    });
</script>