<?php
include 'header.php';
?>

    <main>
        <section class="hero hero-small" style="padding: 60px 0;">
            <div class="container">
                <h1 class="animate__animated animate__fadeInDown"><?php echo $service_name; ?></h1>
                <p class="animate__animated animate__fadeInUp"><?php echo $service_tagline; ?></p>
            </div>
        </section>

        <section class="service-details">
            <div class="container">
                <div class="grid" style="grid-template-columns: 2fr 1fr; gap: 60px;">
                    <div>
                        <h2 style="color: var(--primary-color); margin-bottom: 20px;">Overview</h2>
                        <p style="margin-bottom: 20px;"><?php echo $service_description; ?></p>
                        
                        <h3 style="color: var(--primary-color); margin-bottom: 15px;">Key Features</h3>
                        <ul style="margin-bottom: 30px; padding-left: 20px;">
                            <?php foreach ($service_features as $feature): ?>
                                <li style="margin-bottom: 10px;"><?php echo $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        
                        <h3 style="color: var(--primary-color); margin-bottom: 15px;">Why You Need It</h3>
                        <p><?php echo $service_why_needed; ?></p>
                    </div>
                    <div class="sidebar">
                        <div class="card" style="background-color: var(--bg-light); border: none; padding: 30px;">
                            <h3 style="color: var(--primary-color); margin-bottom: 20px;">Get Started</h3>
                            <p style="margin-bottom: 20px;">Ready to protect what matters most? Contact us for a personalized quote.</p>
                            <a href="contact.php" class="btn btn-primary" style="width: 100%; text-align: center;">Get a Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
