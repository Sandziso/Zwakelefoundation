<?php include 'includes/header.php'; ?>
<?php require_once 'includes/functions.php'; ?>

<?php
// Fetch all published posts, ordered by published_at descending
$posts = getPosts(null, 'published'); // no limit
?>

<!-- Page Header -->
<section class="page-header bg-primary text-white py-5" style="background: linear-gradient(135deg, #1A5276 0%, #154360 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-3 fw-bold wow fadeInUp" data-wow-delay="0.1s">News & Updates</h1>
                <p class="lead wow fadeInUp" data-wow-delay="0.3s">Stories, announcements, and impact from the Foundation</p>
            </div>
        </div>
    </div>
</section>

<!-- News Grid -->
<section class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <?php if (!empty($posts)): ?>
                <?php foreach ($posts as $post): ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="news-card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <?php if (!empty($post['featured_image'])): ?>
                                <div class="news-image" style="height: 220px; overflow: hidden;">
                                    <img src="<?= htmlspecialchars($post['featured_image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="w-100 h-100 object-fit-cover" style="object-fit: cover; transition: transform 0.5s;">
                                </div>
                            <?php else: ?>
                                <div class="news-image bg-light d-flex align-items-center justify-content-center" style="height: 220px;">
                                    <i class="fas fa-newspaper" style="font-size: 3rem; color: #ccc;"></i>
                                </div>
                            <?php endif; ?>
                            <div class="news-content p-4">
                                <div class="news-meta text-muted small mb-2">
                                    <i class="far fa-calendar-alt me-1"></i>
                                    <?= date('d F Y', strtotime($post['published_at'])) ?>
                                </div>
                                <h3 class="news-title fs-4 fw-bold"><?= htmlspecialchars($post['title']) ?></h3>
                                <p class="news-excerpt text-muted">
                                    <?= htmlspecialchars(substr(strip_tags($post['content']), 0, 150)) ?>...
                                </p>
                                <a href="news-detail.php?slug=<?= urlencode($post['slug']) ?>" class="btn btn-outline-primary btn-sm rounded-pill">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <p class="text-muted fs-5">No news posts yet. Check back soon for updates!</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="container-fluid py-5 wow fadeIn" style="background: linear-gradient(135deg, #1A5276 0%, #154360 100%);">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">
                <h2 class="display-5 fw-bold">Stay Connected</h2>
                <p class="fs-5 opacity-75">Subscribe to our newsletter to receive the latest news and impact stories directly in your inbox.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                    <a href="get-involved.php" class="btn btn-warning btn-lg px-5 py-3 rounded-pill" style="background: #F1C40F; border: none; color: #1A5276; font-weight: 600;">Subscribe</a>
                    <a href="contact.php" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill" style="border-width: 2px;">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional CSS -->
<style>
.news-card {
    transition: transform 0.3s, box-shadow 0.3s;
}
.news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
}
.news-card:hover .news-image img {
    transform: scale(1.03);
}
.news-image {
    background: #f8f9fa;
}
</style>

<?php include 'includes/footer.php'; ?>