<?php include 'includes/header.php'; ?>

<!-- Page Header Start -->
<div class="container-xxl py-5 page-header" style="background: linear-gradient(rgba(0, 86, 179, 0.8), rgba(0, 51, 102, 0.8)), url('images/hero/contact-hero.jpg') center/cover no-repeat;">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Info Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 700px;">
            <h1 class="section-title">Get in Touch</h1>
            <p class="fs-5 mb-5">We'd love to hear from you. Whether you're a family seeking support, a potential volunteer, or an organisation wanting to partner – reach out!</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-card text-center h-100">
                    <div class="service-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Visit Us</h4>
                    <p class="mb-2">P.O. Box 123</p>
                    <p>Mbabane, Eswatini</p>
                    <p class="small text-muted">(We are currently operating as a virtual association; physical meetings are held at various venues – please contact us for details.)</p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-card text-center h-100">
                    <div class="service-icon"><i class="fas fa-phone-alt"></i></div>
                    <h4>Call Us</h4>
                    <p class="mb-2"><a href="tel:+26876582660">+268 7658 2660</a></p>
                    <p class="small text-muted">(Nonhlanhla Matsebula, Founder)</p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-card text-center h-100">
                    <div class="service-icon"><i class="fas fa-envelope"></i></div>
                    <h4>Email Us</h4>
                    <p><a href="mailto:eswatinidownsyndrome@gmail.com">eswatinidownsyndrome@gmail.com</a></p>
                    <p class="small text-muted">We aim to reply within 2 working days.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Info End -->

<!-- Contact Form & Map Start -->
<div class="container-xxl py-5 bg-light-blue">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="section-title h1">Send a Message</h2>
                <p class="mb-4">Fill out the form below and we'll get back to you as soon as possible.</p>
                <div class="bg-white p-5 rounded shadow">
                    <form action="forms/contact-process.php" method="POST">
                        <div class="row g-3">
                            <!-- Name -->
                            <div class="col-md-6">
                                <label for="name" class="form-label">Your Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label">Your Email *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <!-- Phone (optional) -->
                            <div class="col-12">
                                <label for="phone" class="form-label">Phone Number (optional)</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="+268 ...">
                            </div>
                            <!-- Subject dropdown -->
                            <div class="col-12">
                                <label for="subject" class="form-label">Subject *</label>
                                <select class="form-select" id="subject" name="subject" required>
                                    <option value="" disabled selected>– Select one –</option>
                                    <option value="General Inquiry">General Inquiry</option>
                                    <option value="Volunteer">Volunteer</option>
                                    <option value="Donation">Donation</option>
                                    <option value="Partnership">Partnership</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <!-- Message -->
                            <div class="col-12">
                                <label for="message" class="form-label">Message *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <!-- Submit -->
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Google Map (Embed) -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="section-title h1">Find Us</h2>
                <p class="mb-4">We're based in Mbabane, but serve families across all regions of Eswatini.</p>
                <div class="rounded overflow-hidden shadow h-100" style="min-height: 400px;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114528.14628648895!2d31.133818500000004!3d-26.316817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee843f4b5f3b3f7%3A0x5b7b8f8a8f8a8f8a!2sMbabane%2C%20Eswatini!5e0!3m2!1sen!2sza!4v1620000000000!5m2!1sen!2sza" 
                        width="100%" 
                        height="100%" 
                        style="border:0; min-height: 400px;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Form & Map End -->

<!-- Social Media Section -->
<div class="container-xxl py-5">
    <div class="container text-center">
        <h2 class="section-title h1">Connect With Us</h2>
        <p class="fs-5 mb-4">Follow us on social media for updates, events, and stories.</p>
        <div class="d-flex justify-content-center gap-4">
            <a href="#" class="btn btn-outline-primary btn-lg rounded-circle" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-facebook-f fa-2x"></i></a>
            <a href="#" class="btn btn-outline-primary btn-lg rounded-circle" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="#" class="btn btn-outline-primary btn-lg rounded-circle" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="#" class="btn btn-outline-primary btn-lg rounded-circle" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-whatsapp fa-2x"></i></a>
        </div>
        <p class="mt-4"><a href="https://wa.me/26876582660" class="text-primary">Chat with us on WhatsApp</a></p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>