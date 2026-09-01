<?php include 'includes/header.php'; ?>
<?php require_once 'includes/functions.php'; ?>

<!-- Page Header -->
<section class="page-header bg-primary text-white py-5" style="background: linear-gradient(135deg, #1A5276 0%, #154360 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-3 fw-bold wow fadeInUp" data-wow-delay="0.1s">Contact Us</h1>
                <p class="lead wow fadeInUp" data-wow-delay="0.3s">We'd love to hear from you – get in touch with any questions, ideas, or partnership opportunities.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info & Form -->
<section class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Details -->
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="section-title">Get in Touch</h2>
                <p class="text-muted">Reach out to us using any of the channels below, or fill in the form and we'll get back to you within 2 working days.</p>
                <div class="contact-details mt-4">
                    <div class="d-flex mb-3">
                        <div class="contact-icon me-3" style="width: 50px; height: 50px; background: #eaf2f8; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #1A5276;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">Address</h6>
                            <p class="text-muted"><?= ORGANISATION_ADDRESS ?></p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="contact-icon me-3" style="width: 50px; height: 50px; background: #fef9e7; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #F1C40F;">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">Phone</h6>
                            <p class="text-muted">
                                <?= ADMIN_PHONE ?> (Mlungisi)<br>
                                <?= ALTERNATIVE_PHONE ?> (Bandzile)
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="contact-icon me-3" style="width: 50px; height: 50px; background: #eaf2f8; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #1A5276;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">Email</h6>
                            <p class="text-muted"><?= ADMIN_EMAIL ?></p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="contact-icon me-3" style="width: 50px; height: 50px; background: #fef9e7; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #F1C40F;">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">Office Hours</h6>
                            <p class="text-muted">Mon – Fri: 09:00 – 17:00</p>
                        </div>
                    </div>
                </div>
                <!-- Social Links -->
                <div class="social-links mt-4">
                    <h6 class="fw-bold">Follow Us</h6>
                    <a href="#" class="btn btn-outline-primary btn-sm rounded-circle me-2" style="width: 40px; height: 40px;"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-outline-primary btn-sm rounded-circle me-2" style="width: 40px; height: 40px;"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-outline-primary btn-sm rounded-circle me-2" style="width: 40px; height: 40px;"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="btn btn-outline-primary btn-sm rounded-circle me-2" style="width: 40px; height: 40px;"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card border-0 shadow-sm p-4">
                    <h3 class="mb-4">Send Us a Message</h3>
                    <form action="forms/contact-process.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Full Name *</label>
                                <input type="text" class="form-control form-control-lg" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Email Address *</label>
                                <input type="email" class="form-control form-control-lg" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Phone Number</label>
                                <input type="tel" class="form-control form-control-lg" name="phone">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Subject</label>
                                <input type="text" class="form-control form-control-lg" name="subject" placeholder="e.g. Partnership enquiry">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold">Message *</label>
                                <textarea class="form-control form-control-lg" name="message" rows="5" required></textarea>
                            </div>
                            <!-- Honeypot spam protection -->
                            <div class="col-12" style="display:none;">
                                <label for="website">Website</label>
                                <input type="text" id="website" name="website" value="">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <p class="text-muted small text-center mt-3">We respect your privacy. Your details will not be shared with third parties.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section (Placeholder) -->
<section class="container-fluid py-5 bg-light-blue">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h3 class="text-center mb-4">Find Us</h3>
                <div class="map-placeholder rounded-4 overflow-hidden shadow-lg" style="background: #e9ecef; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <div class="text-center text-muted">
                        <i class="fas fa-map-marked-alt" style="font-size: 3rem; color: #1A5276;"></i>
                        <p class="mt-2">Map coming soon – we are located in <?= ORGANISATION_ADDRESS ?>.</p>
                        <p class="small">You can also <a href="https://maps.google.com" target="_blank">open in Google Maps</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="container-fluid py-5 wow fadeIn" style="background: linear-gradient(135deg, #1A5276 0%, #154360 100%);">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">
                <h2 class="display-5 fw-bold">We're Here to Help</h2>
                <p class="fs-5 opacity-75">Whether you have a question, want to volunteer, or wish to partner with us – we're just a message away.</p>
                <a href="#contact-form" class="btn btn-warning btn-lg px-5 py-3 rounded-pill" style="background: #F1C40F; border: none; color: #1A5276; font-weight: 600;">Send a Message</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>