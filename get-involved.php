<?php include 'includes/header.php'; ?>

<!-- Page Header Start -->
<div class="container-xxl py-5 page-header" style="background: linear-gradient(rgba(0, 86, 179, 0.8), rgba(0, 51, 102, 0.8)), url('images/hero/get-involved-hero.jpg') center/cover no-repeat;">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Get Involved</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Get Involved</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Intro Section -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 800px;">
            <h1 class="section-title">Make a Difference in Eswatini</h1>
            <p class="fs-5 mb-4">Whether you have a few hours a month or are looking for a long‑term commitment, your time and skills can help us build a more inclusive nation for individuals with Down syndrome and their families.</p>
            <p class="text-primary fw-bold">Together, we can create ripples of change in Mbabane, Manzini, and all the communities of Eswatini.</p>
        </div>
    </div>
</div>

<!-- Ways to Volunteer Start -->
<div class="container-xxl py-5 bg-light-blue">
    <div class="container">
        <h2 class="section-title text-center h1">Volunteer With Us</h2>
        <p class="text-center mb-5">We have opportunities to match every interest and skill. Join our growing family of supporters!</p>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-card h-100">
                    <div class="service-icon"><i class="fas fa-calendar-alt"></i></div>
                    <h4>Event Volunteers</h4>
                    <p>Help organise and run our family picnics, awareness walks, and fundraising events in Mbabane and Manzini. From registration to games – your energy makes it happen.</p>
                    <p class="text-primary small"><i class="fas fa-map-marker-alt me-1"></i> Mbabane, Manzini, and surrounding areas</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-card h-100">
                    <div class="service-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    <h4>Workshop Facilitators</h4>
                    <p>Share your expertise – parenting workshops, early intervention talks, or craft activities for children. If you’re a teacher, nurse, or therapist, we’d love to hear from you.</p>
                    <p class="text-primary small"><i class="fas fa-language me-1"></i> siSwati and English speakers welcome</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-card h-100">
                    <div class="service-icon"><i class="fas fa-bullhorn"></i></div>
                    <h4>Outreach & Advocacy</h4>
                    <p>Help us spread the word! Distribute informational materials at clinics, schools, and community centres. Talk to local leaders and help us build partnerships across the country.</p>
                    <p class="text-primary small"><i class="fas fa-users me-1"></i> All regions of Eswatini</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-card h-100">
                    <div class="service-icon"><i class="fas fa-paint-brush"></i></div>
                    <h4>Creative & Media</h4>
                    <p>Photograph our events, design flyers, or help us run our social media. If you have skills in graphic design, writing, or photography, we need you!</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.9s">
                <div class="service-card h-100">
                    <div class="service-icon"><i class="fas fa-hand-holding-heart"></i></div>
                    <h4>Family Support</h4>
                    <p>Become a mentor to a new parent, offer respite care, or simply be a listening ear. Our families value connection with someone who understands their journey.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="1.1s">
                <div class="service-card h-100">
                    <div class="service-icon"><i class="fas fa-briefcase"></i></div>
                    <h4>Corporate Volunteering</h4>
                    <p>Bring your team for a day of service – paint a classroom, sponsor an event, or run a workshop. Corporate partnerships amplify our impact.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ways to Volunteer End -->

<!-- Volunteer Form Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="section-title h1">Volunteer Sign‑Up</h2>
                <p class="mb-4">Ready to join us? Fill out the form and we’ll get back to you within a few days. All fields marked with * are required.</p>
                <div class="bg-light-blue p-4 rounded">
                    <h5 class="mb-3"><i class="fas fa-info-circle text-primary me-2"></i>What happens next?</h5>
                    <p>After you submit, a member of our volunteer team will contact you to discuss your interests, current opportunities, and any training you might need. We welcome both siSwati and English speakers – let us know your preference!</p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-white p-5 rounded shadow">
                    <form action="forms/volunteer-process.php" method="POST" class="row g-3">
                        <!-- Full name -->
                        <div class="col-12">
                            <label for="fullname" class="form-label">Full Name *</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" required>
                        </div>
                        <!-- Email -->
                        <div class="col-12">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <!-- Phone -->
                        <div class="col-12">
                            <label for="phone" class="form-label">Phone Number *</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                            <div class="form-text">Eswatini mobile number, e.g. +268 76XX XXXX</div>
                        </div>
                        <!-- Area of interest (dropdown) -->
                        <div class="col-12">
                            <label for="interest" class="form-label">Area of Interest *</label>
                            <select class="form-select" id="interest" name="interest" required>
                                <option value="" disabled selected>– Select one –</option>
                                <option value="events">Event Volunteer</option>
                                <option value="workshops">Workshop Facilitator</option>
                                <option value="outreach">Outreach & Advocacy</option>
                                <option value="creative">Creative & Media</option>
                                <option value="familysupport">Family Support</option>
                                <option value="corporate">Corporate Volunteering</option>
                                <option value="other">Other (specify below)</option>
                            </select>
                        </div>
                        <!-- Skills / experience -->
                        <div class="col-12">
                            <label for="skills" class="form-label">Skills or Experience</label>
                            <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="e.g., teaching, first aid, photography, counselling..."></textarea>
                        </div>
                        <!-- Availability (dropdown) -->
                        <div class="col-12">
                            <label for="availability" class="form-label">Availability *</label>
                            <select class="form-select" id="availability" name="availability" required>
                                <option value="" disabled selected>– Select one –</option>
                                <option value="weekdays">Weekdays (daytime)</option>
                                <option value="weekends">Weekends</option>
                                <option value="evenings">Evenings after 5pm</option>
                                <option value="flexible">Flexible / any time</option>
                                <option value="oneoff">One‑off events only</option>
                            </select>
                        </div>
                        <!-- Preferred region (local touch) -->
                        <div class="col-12">
                            <label for="region" class="form-label">Preferred region to volunteer *</label>
                            <select class="form-select" id="region" name="region" required>
                                <option value="" disabled selected>– Select one –</option>
                                <option value="hhohho">Hhohho (Mbabane area)</option>
                                <option value="manzini">Manzini</option>
                                <option value="lubombo">Lubombo</option>
                                <option value="shiselweni">Shiselweni</option>
                                <option value="any">Any region / mobile</option>
                            </select>
                        </div>
                        <!-- Message (optional) -->
                        <div class="col-12">
                            <label for="message" class="form-label">Message (optional)</label>
                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us anything else you'd like us to know..."></textarea>
                        </div>
                        <!-- Submit -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100 py-3">Send Application</button>
                        </div>
                        <div class="col-12">
                            <small class="text-muted">We respect your privacy. Your details will only be used for volunteer coordination.</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Volunteer Form End -->

<!-- Other Ways to Support Start -->
<div class="container-xxl py-5 bg-light-blue">
    <div class="container">
        <h2 class="section-title text-center h1">Other Ways to Support</h2>
        <div class="row g-4 mt-4">
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-card text-center h-100">
                    <div class="service-icon"><i class="fas fa-donate"></i></div>
                    <h4>Donate</h4>
                    <p>Financial contributions – big or small – help us run programmes, provide resources to families, and organise events. Every emalangeni counts.</p>
                    <a href="donate.php" class="btn btn-outline-primary">Learn how to donate</a>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-card text-center h-100">
                    <div class="service-icon"><i class="fas fa-handshake"></i></div>
                    <h4>Become a Partner</h4>
                    <p>If your organisation, business, or government department wants to collaborate, we’d love to explore partnership opportunities.</p>
                    <a href="partnerships.php" class="btn btn-outline-primary">Partnership info</a>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-card text-center h-100">
                    <div class="service-icon"><i class="fas fa-share-alt"></i></div>
                    <h4>Spread the Word</h4>
                    <p>Follow us on social media, share our posts, and talk about Down syndrome awareness in your community. Word of mouth is powerful in Eswatini.</p>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <a href="#" class="text-primary fs-4"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-primary fs-4"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-primary fs-4"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Other Ways to Support End -->

<!-- Local Testimonials / Stories (optional) -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 700px;">
            <h2 class="section-title h1">Volunteer Voices</h2>
            <p class="mb-5">Hear from people already making a difference in Eswatini.</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle mx-auto mb-4" src="images/volunteer1.jpg" alt="" style="width: 100px; height: 100px; object-fit: cover;">
                <p class="fs-6">"Volunteering with EDSA has opened my eyes to the strength of these families. Helping at the Mbabane picnic was pure joy!"</p>
                <h5 class="mb-1">Nomsa Dlamini</h5>
                <span class="text-primary">Event Volunteer, Mbabane</span>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle mx-auto mb-4" src="images/volunteer2.jpg" alt="" style="width: 100px; height: 100px; object-fit: cover;">
                <p class="fs-6">"I translated workshop materials into siSwati – it’s a small thing, but parents appreciate information in their own language."</p>
                <h5 class="mb-1">Sipho Nkosi</h5>
                <span class="text-primary">Translation Volunteer, Manzini</span>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle mx-auto mb-4" src="images/volunteer3.jpg" alt="" style="width: 100px; height: 100px; object-fit: cover;">
                <p class="fs-6">"Our company sponsored the awareness walk – it was wonderful to see our team connect with the community."</p>
                <h5 class="mb-1">Thabo Mamba</h5>
                <span class="text-primary">Corporate Partner, Eswatini Mobile</span>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials End -->

<!-- FAQ / Contact CTA -->
<div class="container-xxl py-5 bg-light-blue">
    <div class="container text-center">
        <h2 class="section-title h1">Still have questions?</h2>
        <p class="fs-5 mb-4">Our volunteer coordinator is happy to chat with you about how you can help.</p>
        <a href="contact.php" class="btn btn-primary btn-lg me-3">Contact Us</a>
        <a href="tel:+26876582660" class="btn btn-outline-primary btn-lg"><i class="fas fa-phone-alt me-2"></i>Call +268 7658 2660</a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>