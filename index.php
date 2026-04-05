<?php
$page_title = "Home";
include 'pages/header.php';
?>

    <main>
        <section class="hero">
            <div class="container">
                <h1 class="animate__animated animate__fadeInDown">Secure Your Future with Confidence</h1>
                <p class="animate__animated animate__fadeInUp">We provide tailored insurance solutions for individuals and businesses, backed by decades of expertise and a commitment to your peace of mind.</p>
                <div class="animate__animated animate__fadeInUp" style="display: flex; gap: 15px; justify-content: center;">
                    <a class="btn btn-primary" href="pages/contact.php">Get a Free Quote</a>
                    <a class="btn btn-outline" href="pages/services.php">Our Services</a>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <div class="section-title">
                    <h2>Why Choose ProSure?</h2>
                    <p>We're more than just an insurance agency; we're your partner in protection.</p>
                </div>
                <div class="grid">
                    <div class="card">
                        <h3>Decades of Expertise</h3>
                        <p>With over 20 years in the industry, we have the knowledge to guide you through any insurance challenge.</p>
                    </div>
                    <div class="card">
                        <h3>Tailored Solutions</h3>
                        <p>No two clients are the same. We customize every policy to fit your unique needs and budget.</p>
                    </div>
                    <div class="card">
                        <h3>Fast & Easy Claims</h3>
                        <p>When the unexpected happens, we're here to help you get back on your feet quickly with a streamlined claims process.</p>
                    </div>
                    <div class="card">
                        <h3>24/7 Dedicated Support</h3>
                        <p>Our team of insurance experts is always available to answer your questions and provide support whenever you need it.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials" style="background-color: var(--bg-light);">
            <div class="container">
                <div class="section-title">
                    <h2>What Our Clients Say</h2>
                    <p>Trust is earned through reliable service and claims handling.</p>
                </div>
                <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
                    <div class="card testimonial" style="background: white; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                        <p style="font-style: italic; margin-bottom: 20px;">"ProSure helped me find the perfect home insurance policy when other agencies couldn't. Their expertise is unmatched."</p>
                        <p><strong>- Sarah Johnson</strong><br><span style="font-size: 0.9rem; color: var(--text-muted);">Homeowner</span></p>
                    </div>
                    <div class="card testimonial" style="background: white; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                        <p style="font-style: italic; margin-bottom: 20px;">"When I had an accident, ProSure's claims process was seamless. I was back on the road in no time."</p>
                        <p><strong>- Michael Chen</strong><br><span style="font-size: 0.9rem; color: var(--text-muted);">Auto Insurance Client</span></p>
                    </div>
                    <div class="card testimonial" style="background: white; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                        <p style="font-style: italic; margin-bottom: 20px;">"Their business insurance solutions have given us the peace of mind we need to focus on growth. Highly recommended!"</p>
                        <p><strong>- Robert Wilson</strong><br><span style="font-size: 0.9rem; color: var(--text-muted);">Small Business Owner</span></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta" style="background-color: var(--primary-color); color: white; text-align: center;">
            <div class="container">
                <h2 style="font-size: 2.5rem; color: white; margin-bottom: 20px;">Ready to find the perfect plan?</h2>
                <p style="font-size: 1.2rem; color: rgba(255,255,255,0.9); margin-bottom: 40px;">Speak with one of our licensed agents today and get a personalized quote in minutes.</p>
                <a href="pages/contact.php" class="btn btn-primary" style="background-color: var(--secondary-color); padding: 15px 40px; font-size: 1.1rem;">Talk to an Expert</a>
            </div>
        </section>
    </main>

<?php include 'pages/footer.php'; ?>
