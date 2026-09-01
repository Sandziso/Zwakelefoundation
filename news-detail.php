<?php include 'includes/header.php';
require_once 'includes/functions.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
if (empty($slug)) {
    header('Location: news.php');
    exit;
}

// Fetch single post by slug
$db = Database::getInstance()->getConnection();
$stmt = $db->prepare("SELECT * FROM posts WHERE slug = :slug AND status = 'published'");
$stmt->execute(['slug' => $slug]);
$post = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$post) {
    header('Location: news.php');
    exit;
}
?>

<!-- Page Header -->
<section class="page-header bg-primary text-white py-5" style="background: linear-gradient(135deg, #1A5276 0%, #154360 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-3 fw-bold wow fadeInUp" data-wow-delay="0.1s"><?= htmlspecialchars($post['title']) ?></h1>
                <p class="lead wow fadeInUp" data-wow-delay="0.3s">
                    <i class="far fa-calendar-alt me-2"></i><?= date('d F Y', strtotime($post['published_at'])) ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Post Content -->
<section class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <?php if ($post['featured_image']): ?>
                    <div class="post-image mb-4 rounded-4 overflow-hidden shadow">
                        <img src="<?= htmlspecialchars($post['featured_image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="w-100" style="max-height: 500px; object-fit: cover;">
                    </div>
                <?php endif; ?>
                <div class="post-content fs-5">
                    <?= nl2br(htmlspecialchars($post['content'])) ?>
                </div>
                <div class="mt-5">
                    <a href="news.php" class="btn btn-outline-primary rounded-pill"><i class="fas fa-arrow-left me-2"></i>Back to News</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>