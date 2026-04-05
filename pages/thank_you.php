<?php
$page_title = "Thank You";
include 'header.php';
?>

    <main>
        <section class="thank-you-section" style="padding: 100px 0; text-align: center;">
            <div class="container">
                <h1 class="animate__animated animate__fadeInDown" style="color: var(--primary-color); margin-bottom: 20px;">Thank You!</h1>
                <p class="animate__animated animate__fadeInUp" style="font-size: 1.25rem; color: var(--text-muted); margin-bottom: 40px;">Your message has been received. One of our licensed insurance experts will contact you shortly.</p>
                <a href="<?php echo $path_prefix; ?>index.php" class="btn btn-primary">Return to Home</a>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
