<?php include 'includes/header.php'; ?>
<?php require_once 'includes/functions.php'; ?>

<?php
// Get status filter from URL (default: upcoming)
$status_filter = isset($_GET['status']) ? $_GET['status'] : 'upcoming';
$valid_statuses = ['upcoming', 'past', 'all'];
if (!in_array($status_filter, $valid_statuses)) {
    $status_filter = 'upcoming';
}

// Fetch events based on filter
if ($status_filter === 'all') {
    // Get both upcoming and past (but not cancelled)
    $upcoming_events = getEvents('upcoming');
    $past_events = getEvents('past');
    $events = array_merge($upcoming_events, $past_events);
    // Sort by event_date (most recent first for past, nearest first for upcoming)
    usort($events, function($a, $b) {
        return strtotime($a['event_date']) - strtotime($b['event_date']);
    });
    // For 'all', we could also separate by sections, but we'll show a combined list
} else {
    $events = getEvents($status_filter);
}
?>

<!-- Page Header -->
<section class="page-header bg-primary text-white py-5" style="background: linear-gradient(135deg, #1A5276 0%, #154360 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-3 fw-bold wow fadeInUp" data-wow-delay="0.1s">Events</h1>
                <p class="lead wow fadeInUp" data-wow-delay="0.3s">Join us in building a more inclusive community</p>
            </div>
        </div>
    </div>
</section>

<!-- Filter Tabs -->
<section class="container-xxl py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <ul class="nav nav-pills justify-content-center gap-2" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="?status=upcoming" class="nav-link <?= ($status_filter === 'upcoming') ? 'active' : '' ?>">Upcoming</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="?status=past" class="nav-link <?= ($status_filter === 'past') ? 'active' : '' ?>">Past Events</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="?status=all" class="nav-link <?= ($status_filter === 'all') ? 'active' : '' ?>">All Events</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Events List -->
<section class="container-xxl py-4">
    <div class="container">
        <div class="row g-4">
            <?php if (!empty($events)): ?>
                <?php foreach ($events as $event): ?>
                    <?php
                    // Determine if the event is upcoming or past based on date (optional additional check)
                    $now = new DateTime();
                    $event_date = new DateTime($event['event_date']);
                    $is_upcoming = ($event_date >= $now);
                    // But we rely on the status column from DB
                    $status_class = ($event['status'] === 'upcoming') ? 'upcoming' : 'past';
                    ?>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-card h-100 border-0 shadow-sm overflow-hidden rounded-4">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="event-image" style="height: 100%; min-height: 200px; overflow: hidden;">
                                        <img src="<?= htmlspecialchars($event['image'] ?: 'images/events/default.jpg') ?>" alt="<?= htmlspecialchars($event['title']) ?>" class="w-100 h-100 object-fit-cover" style="object-fit: cover; width: 100%; height: 100%;">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="event-content p-4">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge <?= ($status_class === 'upcoming') ? 'bg-success' : 'bg-secondary' ?> me-2">
                                                <?= ucfirst($event['status']) ?>
                                            </span>
                                            <span class="text-muted small">
                                                <i class="far fa-calendar-alt me-1"></i>
                                                <?= date('d F Y', strtotime($event['event_date'])) ?>
                                            </span>
                                        </div>
                                        <h3 class="event-title fs-4 fw-bold"><?= htmlspecialchars($event['title']) ?></h3>
                                        <p class="event-description text-muted">
                                            <?= htmlspecialchars(substr($event['description'], 0, 120)) ?>...
                                        </p>
                                        <div class="event-meta text-muted small mb-2">
                                            <i class="fas fa-map-marker-alt me-1"></i>
                                            <?= htmlspecialchars($event['location'] ?: 'Location TBD') ?>
                                        </div>
                                        <a href="event-detail.php?id=<?= $event['id'] ?>" class="btn btn-sm btn-outline-primary rounded-pill">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <p class="text-muted fs-5">
                        <?php if ($status_filter === 'upcoming'): ?>
                            No upcoming events at the moment. Check back soon!
                        <?php elseif ($status_filter === 'past'): ?>
                            No past events to display yet.
                        <?php else: ?>
                            No events found.
                        <?php endif; ?>
                    </p>
                    <a href="?status=upcoming" class="btn btn-primary rounded-pill">View Upcoming Events</a>
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
                <h2 class="display-5 fw-bold">Host an Event with Us</h2>
                <p class="fs-5 opacity-75">Interested in collaborating on an event? Reach out to our team and let's create something meaningful together.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                    <a href="contact.php" class="btn btn-warning btn-lg px-5 py-3 rounded-pill" style="background: #F1C40F; border: none; color: #1A5276; font-weight: 600;">Contact Us</a>
                    <a href="get-involved.php" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill" style="border-width: 2px;">Get Involved</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional CSS for events -->
<style>
.event-card {
    transition: transform 0.3s, box-shadow 0.3s;
}
.event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
}
.event-image img {
    transition: transform 0.5s;
}
.event-card:hover .event-image img {
    transform: scale(1.03);
}
.nav-pills .nav-link.active {
    background: #1A5276;
}
.nav-pills .nav-link {
    color: #2C3E50;
    border-radius: 50px;
    padding: 0.5rem 1.5rem;
}
.nav-pills .nav-link:hover {
    background: rgba(26, 82, 118, 0.1);
}
</style>

<?php include 'includes/footer.php'; ?>