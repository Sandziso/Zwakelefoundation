<?php include 'includes/header.php'; ?>
<?php require_once 'includes/functions.php'; ?>

<!-- Page Header -->
<section class="page-header bg-primary text-white py-5" style="background: linear-gradient(135deg, #1A5276 0%, #154360 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-3 fw-bold wow fadeInUp" data-wow-delay="0.1s">Gallery</h1>
                <p class="lead wow fadeInUp" data-wow-delay="0.3s">Moments of inclusion, learning, and community</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width:700px;">
            <span class="badge bg-warning text-dark px-3 py-2 mb-3 rounded-pill">Our Visual Stories</span>
            <h2 class="section-title">Photo Gallery</h2>
            <p class="text-muted mb-5">Browse through our events, activities, and the people who make our work possible.</p>
        </div>

        <?php
        // Fetch gallery images from database
        $images = getGalleryImages(); // returns array with album, image_path, title, caption, etc.
        // If no images, use a few sample placeholders
        if (empty($images)) {
            // Fallback sample images (you can replace with your own or keep as is)
            $images = [
                [
                    'image_path' => 'images/gallery/sample1.jpg',
                    'title' => 'Workshop on Digital Skills',
                    'caption' => 'Young people learning computer basics.',
                    'album' => 'Training'
                ],
                [
                    'image_path' => 'images/gallery/sample2.jpg',
                    'title' => 'Community Event',
                    'caption' => 'Celebrating inclusion with families.',
                    'album' => 'Events'
                ],
                [
                    'image_path' => 'images/gallery/sample3.jpg',
                    'title' => 'Graduation Ceremony',
                    'caption' => 'Celebrating our first cohort of graduates.',
                    'album' => 'Graduation'
                ]
            ];
        }
        ?>

        <!-- Albums Filter (if multiple albums exist) -->
        <?php
        $albums = array_unique(array_column($images, 'album'));
        if (count($albums) > 1):
        ?>
        <div class="album-filter text-center mb-4">
            <button class="btn btn-outline-primary btn-sm active-filter" data-filter="all">All</button>
            <?php foreach ($albums as $album): ?>
            <button class="btn btn-outline-primary btn-sm" data-filter="<?= htmlspecialchars($album) ?>"><?= htmlspecialchars($album) ?></button>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="row g-4 gallery-grid">
            <?php foreach ($images as $index => $image): ?>
            <div class="col-lg-4 col-md-6 gallery-item" data-album="<?= htmlspecialchars($image['album'] ?? 'Uncategorized') ?>">
                <div class="gallery-card position-relative overflow-hidden rounded-4 shadow-sm h-100">
                    <div class="gallery-thumb" style="height: 280px; overflow: hidden; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="<?= htmlspecialchars($image['image_path']) ?>" data-title="<?= htmlspecialchars($image['title'] ?? 'Untitled') ?>" data-caption="<?= htmlspecialchars($image['caption'] ?? '') ?>">
                        <img src="<?= htmlspecialchars($image['image_path'] ?: 'images/gallery/placeholder.jpg') ?>" alt="<?= htmlspecialchars($image['title'] ?? 'Gallery image') ?>" class="w-100 h-100 object-fit-cover" style="transition: transform 0.5s;">
                    </div>
                    <div class="gallery-overlay position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(transparent, rgba(0,0,0,0.6));">
                        <h5 class="text-white mb-1"><?= htmlspecialchars($image['title'] ?? 'Untitled') ?></h5>
                        <?php if (!empty($image['album'])): ?>
                        <span class="badge bg-warning text-dark"><?= htmlspecialchars($image['album']) ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if (empty($images)): ?>
        <div class="text-center py-5">
            <p class="text-muted fs-5">No gallery images yet. Check back soon!</p>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close" style="z-index: 1050;"></button>
                <div class="lightbox-container text-center">
                    <img id="lightboxImage" src="" alt="Lightbox" class="img-fluid rounded-4 shadow-lg" style="max-height: 80vh; width: auto; margin: 0 auto;">
                    <div class="lightbox-caption bg-dark bg-opacity-75 text-white p-3 mt-3 rounded-4">
                        <h5 id="lightboxTitle" class="mb-1"></h5>
                        <p id="lightboxCaption" class="mb-0 text-white-50"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Gallery -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gallery item click – populate modal
    const galleryItems = document.querySelectorAll('.gallery-thumb');
    const modalImage = document.getElementById('lightboxImage');
    const modalTitle = document.getElementById('lightboxTitle');
    const modalCaption = document.getElementById('lightboxCaption');

    galleryItems.forEach(item => {
        item.addEventListener('click', function() {
            const image = this.dataset.image;
            const title = this.dataset.title;
            const caption = this.dataset.caption;
            modalImage.src = image;
            modalTitle.textContent = title;
            modalCaption.textContent = caption || '';
        });
    });

    // Album filter (if buttons exist)
    const filterButtons = document.querySelectorAll('.album-filter .btn');
    const galleryGrid = document.querySelector('.gallery-grid');
    if (filterButtons.length) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                filterButtons.forEach(b => b.classList.remove('active-filter'));
                this.classList.add('active-filter');
                const filter = this.dataset.filter;
                const items = galleryGrid.querySelectorAll('.gallery-item');
                items.forEach(item => {
                    if (filter === 'all' || item.dataset.album === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
        // Set default "All" active
        document.querySelector('.album-filter .active-filter')?.classList.remove('active-filter');
        document.querySelector('.album-filter [data-filter="all"]')?.classList.add('active-filter');
    }
});
</script>

<!-- Additional CSS for gallery -->
<style>
.gallery-card:hover .gallery-thumb img {
    transform: scale(1.05);
}
.gallery-overlay {
    pointer-events: none;
}
.gallery-item {
    transition: all 0.3s;
}
.album-filter .btn.active-filter {
    background: #1A5276;
    color: white;
    border-color: #1A5276;
}
.lightbox-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.btn-close-white {
    filter: invert(1);
}
</style>

<!-- Call to Action -->
<section class="container-fluid py-5 wow fadeIn" style="background: linear-gradient(135deg, #1A5276 0%, #154360 100%);">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">
                <h2 class="display-5 fw-bold">See More of Our Work</h2>
                <p class="fs-5 opacity-75">Follow us on social media for the latest updates and behind‑the‑scenes moments.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                    <a href="https://facebook.com" target="_blank" class="btn btn-light btn-lg px-5 py-3 rounded-pill"><i class="fab fa-facebook-f me-2"></i> Facebook</a>
                    <a href="https://instagram.com" target="_blank" class="btn btn-light btn-lg px-5 py-3 rounded-pill"><i class="fab fa-instagram me-2"></i> Instagram</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>