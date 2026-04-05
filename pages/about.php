<?php
$page_title = "About Us";
include 'header.php';
?>

    <main>
        <section class="hero hero-small" style="padding: 60px 0;">
            <div class="container">
                <h1 class="animate__animated animate__fadeInDown">About ProSure</h1>
                <p class="animate__animated animate__fadeInUp">Built on trust, expertise, and a commitment to protecting what matters most.</p>
            </div>
        </section>

        <section class="about-content">
            <div class="container">
                <div class="grid" style="grid-template-columns: 1fr 1fr; align-items: center; gap: 60px;">
                    <div>
                        <h2 style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;">Our Story</h2>
                        <p style="margin-bottom: 20px;">Founded over two decades ago, ProSure Insurance Agency began with a simple mission: to provide personalized, high-quality insurance coverage that truly protects people and their livelihoods.</p>
                        <p style="margin-bottom: 20px;">We've grown from a small local agency into a trusted regional leader, yet we've never lost sight of the personal touch that defines our service. Our team of dedicated agents works tirelessly to understand your unique needs and find the perfect solutions for you.</p>
                    </div>
                    <div style="background-color: var(--bg-light); border-radius: 10px; padding: 40px;">
                        <h3 style="margin-bottom: 15px; color: var(--primary-color);">Our Vision</h3>
                        <p style="font-style: italic; font-size: 1.1rem;">"To be the most trusted and reliable insurance partner, empowering our clients to live and work with confidence and peace of mind."</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="values" style="background-color: var(--bg-light);">
            <div class="container">
                <div class="section-title">
                    <h2>Our Core Values</h2>
                    <p>The principles that guide everything we do.</p>
                </div>
                <div class="grid" style="grid-template-columns: repeat(3, 1fr);">
                    <div class="card" style="text-align: center; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                        <h3 style="color: var(--secondary-color);">Integrity</h3>
                        <p>We operate with the highest ethical standards, ensuring honesty and transparency in every interaction.</p>
                    </div>
                    <div class="card" style="text-align: center; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                        <h3 style="color: var(--secondary-color);">Expertise</h3>
                        <p>Our team stays ahead of industry trends to provide the most knowledgeable advice and solutions.</p>
                    </div>
                    <div class="card" style="text-align: center; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                        <h3 style="color: var(--secondary-color);">Service</h3>
                        <p>We are dedicated to providing exceptional support and being there for our clients whenever they need us.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
