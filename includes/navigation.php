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