<?php include 'includes/header.php';
require_once 'includes/functions.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id <= 0) {
    header('Location: events.php');
    exit;
}

// Fetch single event by ID
$db = Database::getInstance()->getConnection();
$stmt = $db->prepare("SELECT * FROM events WHERE id = :id");
$stmt->execute(['id' => $id]);
$event = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$event) {
    header('Location: events.php');
    exit;
}
?>

<!-- Page Header -->
<section class="page-header bg-primary text-white py-5" style="background: linear-gradient(135deg, #1A5276 0%, #154360 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-3 fw-bold wow fadeInUp" data-wow-delay="0.1s"><?= htmlspecialchars($event['title']) ?></h1>
                <p class="lead wow fadeInUp" data-wow-delay="0.3s">
                    <i class="far fa-calendar-alt me-2"></i><?= date('d F Y | H:i', strtotime($event['event_date'])) ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Event Details -->
<section class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <?php if ($event['image']): ?>
                    <div class="event-image mb-4 rounded-4 overflow-hidden shadow">
                        <img src="<?= htmlspecialchars($event['image']) ?>" alt="<?= htmlspecialchars($event['title']) ?>" class="w-100" style="max-height: 500px; object-fit: cover;">
                    </div>
                <?php endif; ?>
                <div class="event-meta mb-4">
                    <span class="badge bg-<?= ($event['status'] === 'upcoming') ? 'success' : 'secondary' ?> fs-6">
                        <?= ucfirst($event['status']) ?>
                    </span>
                    <span class="ms-3"><i class="fas fa-map-marker-alt me-2"></i><?= htmlspecialchars($event['location'] ?: 'Location TBD') ?></span>
                </div>
                <div class="event-content fs-5">
                    <?= nl2br(htmlspecialchars($event['description'])) ?>
                </div>
                <div class="mt-5">
                    <a href="events.php" class="btn btn-outline-primary rounded-pill"><i class="fas fa-arrow-left me-2"></i>Back to Events</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>