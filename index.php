<?php include 'includes/header.php'; 
require_once 'includes/functions.php';
$latest_posts = getPosts(2);
$upcoming_events = getEvents('upcoming', 2);
?>

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center position-relative overflow-hidden" style="min-height: 100vh;">
    <!-- Gradient overlay (CSS does the image) -->
    <div class="hero-overlay"></div>
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white">
                <span class="badge bg-warning text-dark px-4 py-2 mb-3 rounded-pill" style="font-size: 0.9rem; letter-spacing: 2px;">Empowering Ability</span>
                <h1 class="display-2 fw-bold mb-4 wow fadeInUp" data-wow-delay="0.2s" style="letter-spacing: -2px;">
                    Creating Opportunity<br>
                    <span style="color: #F1C40F;">Opening Doors</span>
                </h1>
                <p class="lead mb-5 wow fadeInUp" data-wow-delay="0.4s" style="font-size: 1.4rem; opacity: 0.9;">
                    Skills • Employment • Enterprise • Inclusion for young people with disabilities in Eswatini.
                </p>
                <div class="d-flex flex-wrap justify-content-center gap-3 wow fadeInUp" data-wow-delay="0.6s">
                    <a href="get-involved.php" class="btn btn-warning btn-lg px-5 py-3 rounded-pill" style="font-weight: 600; background: #F1C40F; border: none; color: #1A5276; box-shadow: 0 8px 30px rgba(241, 196, 15, 0.4);">Get Involved</a>
                    <a href="donate.php" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill" style="font-weight: 600; border-width: 2px;">Donate</a>
                    <a href="about.php" class="btn btn-light btn-lg px-5 py-3 rounded-pill" style="font-weight: 600; background: rgba(255,255,255,0.1); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.2); color: white;">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- SVG wave -->
    <div class="position-absolute bottom-0 start-0 w-100 overflow-hidden" style="height: 120px; z-index: 0;">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="width: 100%; height: 100%;">
            <path d="M0,0 C300,120 900,0 1200,80 L1200,120 L0,120 Z" fill="white" opacity="0.8"></path>
        </svg>
    </div>
</section>

<!-- Mission & Welcome (unchanged) -->
<section class="container-xxl py-5 mission-section">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 mb-3 rounded-pill">Our Story</span>
                <h1 class="section-title">Welcome to Zwakele Foundation</h1>
                <p class="mission-text fs-5">We are a youth-led disability inclusion initiative in Eswatini, founded in honour of our elder brother, a young adult with Down syndrome. Our mission is to open pathways to skills, employment, entrepreneurship, and economic participation for young people with disabilities. We believe in ability, not limitation.</p>
                <a href="about.php" class="btn btn-primary btn-lg rounded-pill px-5">Read Our Story <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="mission-image rounded-4 overflow-hidden shadow-lg">
                    <!-- Updated image path to assets/images/ -->
                    <img class="img-fluid" src="assets/images/about/team.jpg" alt="Zwakele Foundation team" style="transition: transform 0.5s; width: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats (unchanged) -->
<section class="container-xxl py-5 bg-light-blue">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="stat-item">
                    <h2 class="display-4 fw-bold text-primary" data-toggle="counter-up">0</h2>
                    <p class="text-muted">Beneficiaries Supported</p>
                    <small class="text-muted">Launching 2026</small>
                </div>
            </div>
            <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="stat-item">
                    <h2 class="display-4 fw-bold text-primary" data-toggle="counter-up">3</h2>
                    <p class="text-muted">Hectares Secured</p>
                    <small class="text-muted">For our Centre</small>
                </div>
            </div>
            <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="stat-item">
                    <h2 class="display-4 fw-bold text-primary" data-toggle="counter-up">5</h2>
                    <p class="text-muted">Community Events</p>
                    <small class="text-muted">To date</small>
                </div>
            </div>
            <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="stat-item">
                    <h2 class="display-4 fw-bold text-primary" data-toggle="counter-up">10</h2>
                    <p class="text-muted">Partner Organisations</p>
                    <small class="text-muted">Growing</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How You Can Help (unchanged) -->
<section class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width:600px;">
            <span class="badge bg-warning text-dark px-3 py-2 mb-3 rounded-pill">Get Involved</span>
            <h1 class="section-title">How You Can Help</h1>
            <p class="mb-5 text-muted">Your support makes a lasting difference in the lives of young people with disabilities.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-card text-center h-100 p-4 border-0 shadow-sm hover-lift">
                    <div class="service-icon mx-auto mb-4" style="width: 70px; height: 70px; background: #eaf2f8; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: #1A5276;">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Volunteer</h3>
                    <p class="text-muted">Share your time and skills at our events, workshops, or behind the scenes.</p>
                    <a href="get-involved.php" class="btn-link fw-bold">Learn more <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-card text-center h-100 p-4 border-0 shadow-sm hover-lift">
                    <div class="service-icon mx-auto mb-4" style="width: 70px; height: 70px; background: #fef9e7; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: #F1C40F;">
                        <i class="fas fa-donate"></i>
                    </div>
                    <h3>Donate</h3>
                    <p class="text-muted">Your financial contribution helps us run programmes and support families.</p>
                    <a href="donate.php" class="btn-link fw-bold">Donate now <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-card text-center h-100 p-4 border-0 shadow-sm hover-lift">
                    <div class="service-icon mx-auto mb-4" style="width: 70px; height: 70px; background: #eaf2f8; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: #1A5276;">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Partner</h3>
                    <p class="text-muted">Corporate and NGO partnerships amplify our reach and impact.</p>
                    <a href="partnerships.php" class="btn-link fw-bold">Become a partner <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-card text-center h-100 p-4 border-0 shadow-sm hover-lift">
                    <div class="service-icon mx-auto mb-4" style="width: 70px; height: 70px; background: #eaf2f8; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: #1A5276;">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <h3>Learn</h3>
                    <p class="text-muted">Explore our programmes and understand the power of inclusion.</p>
                    <a href="what-we-do.php" class="btn-link fw-bold">Read more <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events Preview (unchanged) -->
<section class="container-xxl py-5 bg-light-blue">
    <div class="container">
        <div class="text-center mx-auto" style="max-width:600px;">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 mb-3 rounded-pill">Events</span>
            <h1 class="section-title">Upcoming Events</h1>
            <p class="mb-5 text-muted">Join us and be part of the community.</p>
        </div>
        <div class="row g-4">
            <?php if ($upcoming_events): ?>
                <?php foreach ($upcoming_events as $event): ?>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-card h-100 border-0 shadow-sm overflow-hidden rounded-4">
                        <div class="blog-image" style="height: 240px; overflow: hidden;">
                            <!-- Updated fallback image path to assets/images/ -->
                            <img src="<?= htmlspecialchars($event['image'] ?: 'assets/images/events/default.jpg') ?>" alt="<?= htmlspecialchars($event['title']) ?>" class="w-100 h-100 object-fit-cover" style="transition: transform 0.5s;">
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-date text-muted mb-2"><i class="far fa-calendar-alt me-2"></i><?= date('d F Y | H:i', strtotime($event['event_date'])) ?></div>
                            <h3 class="blog-title fs-4 fw-bold"><?= htmlspecialchars($event['title']) ?></h3>
                            <p class="blog-excerpt text-muted"><?= htmlspecialchars(substr($event['description'], 0, 120)) ?>...</p>
                            <a href="/events/<?= $event['id'] ?>" class="blog-read-more fw-bold">Learn more <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p class="text-muted fs-5">No upcoming events at the moment. Check back soon!</p>
                </div>
            <?php endif; ?>
        </div>
        <div class="text-center mt-5">
            <a href="events.php" class="btn btn-outline-primary btn-lg rounded-pill px-5">View All Events</a>
        </div>
    </div>
</section>

<!-- Latest News Preview (unchanged) -->
<section class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width:600px;">
            <span class="badge bg-warning text-dark px-3 py-2 mb-3 rounded-pill">News</span>
            <h1 class="section-title">Latest News</h1>
            <p class="mb-5 text-muted">Stay updated with our work and impact.</p>
        </div>
        <div class="row g-4">
            <?php if ($latest_posts): ?>
                <?php foreach ($latest_posts as $post): ?>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <?php if ($post['featured_image']): ?>
                        <div class="blog-image" style="height: 200px; overflow: hidden;">
                            <img src="<?= htmlspecialchars($post['featured_image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="w-100 h-100 object-fit-cover">
                        </div>
                        <?php else: ?>
                        <div class="blog-image" style="height: 200px; overflow: hidden; background: #eaf2f8; display: flex; align-items: center; justify-content: center; color: #1A5276;">
                            <i class="fas fa-newspaper fa-3x"></i>
                        </div>
                        <?php endif; ?>
                        <div class="blog-content p-4">
                            <h3 class="blog-title fs-4 fw-bold"><?= htmlspecialchars($post['title']) ?></h3>
                            <p class="blog-excerpt text-muted"><?= htmlspecialchars(substr(strip_tags($post['content']), 0, 150)) ?>...</p>
                            <a href="/news/<?= htmlspecialchars($post['slug']) ?>" class="blog-read-more fw-bold">Read more <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p class="text-muted fs-5">No news posts yet. Check back later.</p>
                </div>
            <?php endif; ?>
        </div>
        <div class="text-center mt-5">
            <a href="news.php" class="btn btn-outline-primary btn-lg rounded-pill px-5">View All News</a>
        </div>
    </div>
</section>

<!-- Call to Action (with overlay) -->
<section class="container-fluid cta-section py-5 wow fadeIn" style="position: relative;">
    <!-- Gradient overlay -->
    <div class="cta-overlay"></div>
    <div class="container py-5 position-relative z-1">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">
                <h1 class="cta-title display-4 fw-bold">Help us create a more inclusive Eswatini</h1>
                <p class="cta-text fs-5 mb-4 opacity-75">Every contribution – whether time, funds, or voice – brings us closer to a society where every young person with disabilities is valued.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="donate.php" class="btn btn-warning btn-lg px-5 py-3 rounded-pill" style="background: #F1C40F; border: none; color: #1A5276; font-weight: 600; box-shadow: 0 8px 30px rgba(241, 196, 15, 0.4);">Donate Now</a>
                    <a href="get-involved.php" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill" style="border-width: 2px;">Volunteer</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>