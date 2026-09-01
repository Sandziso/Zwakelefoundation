<?php include 'includes/header.php';
session_start();

// Get form type from URL
$type = isset($_GET['type']) ? $_GET['type'] : 'contact';
$formData = $_SESSION['form_data'] ?? [];
// Clear session after using
unset($_SESSION['form_data']);
?>

<div class="container-xxl py-5">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-white p-5 rounded shadow wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-icon mx-auto mb-4" style="width: 100px; height: 100px; background-color: var(--secondary-light-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-check-circle fa-3x" style="color: var(--primary-blue);"></i>
                    </div>
                    <h1 class="section-title">Thank You, <?= htmlspecialchars($formData['name'] ?? '') ?>!</h1>
                    <p class="fs-4 mb-4">Your <?= ucfirst($type) ?> message has been sent successfully.</p>
                    <p class="mb-4">We appreciate you reaching out. Our team will get back to you within 2 working days.</p>
                    <p class="mb-4">– <strong>Mlungisi & Bandzile</strong>, Co‑Founders</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="index.php" class="btn btn-primary">Return Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- EmailJS Script – sends email from client side -->
<?php if (!empty($formData)): ?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script>
    (function() {
        emailjs.init("<?= EMAILJS_PUBLIC_KEY ?>");
    })();

    window.onload = function() {
        var templateParams = {
            name: "<?= addslashes($formData['name'] ?? '') ?>",
            email: "<?= addslashes($formData['email'] ?? '') ?>",
            phone: "<?= addslashes($formData['phone'] ?? '') ?>",
            subject: "<?= addslashes($formData['subject'] ?? $type) ?>",
            message: "<?= addslashes($formData['message'] ?? '') ?>",
            form_type: "<?= addslashes($formData['form_type'] ?? $type) ?>",
            submitted_at: "<?= addslashes($formData['submitted_at'] ?? date('Y-m-d H:i:s')) ?>"
        };

        emailjs.send("<?= EMAILJS_SERVICE_ID ?>", "<?= EMAILJS_TEMPLATE_ID ?>", templateParams)
            .then(function(response) {
                console.log('Email sent!', response.status, response.text);
            }, function(error) {
                console.log('Email failed.', error);
            });
    };
</script>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>