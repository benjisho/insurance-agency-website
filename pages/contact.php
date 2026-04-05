<?php
$page_title = "Contact Us";
include 'header.php';
?>

    <style>
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--primary-color);
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            font-family: inherit;
            font-size: 1rem;
        }
        .form-group textarea {
            height: 150px;
            resize: vertical;
        }
        .form-group input:focus, .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px rgba(0, 51, 102, 0.1);
        }
    </style>

    <main>
        <section class="hero hero-small" style="padding: 60px 0;">
            <div class="container">
                <h1 class="animate__animated animate__fadeInDown">Get in Touch</h1>
                <p class="animate__animated animate__fadeInUp">Speak with a licensed insurance expert today.</p>
            </div>
        </section>

        <section class="contact-section">
            <div class="container">
                <div class="grid" style="grid-template-columns: 2fr 1fr; gap: 60px;">
                    <div class="card" style="padding: 40px; box-shadow: 0 10px 40px rgba(0,0,0,0.05);">
                        <h2 style="margin-bottom: 30px; color: var(--primary-color);">Request a Quote or Ask a Question</h2>
                        <form action="../php/send_email.php" method="POST">
                            <div class="grid" style="grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" name="name" required placeholder="John Doe">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" required placeholder="john@example.com">
                                </div>
                            </div>
                            <div class="grid" style="grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" placeholder="(555) 000-0000">
                                </div>
                                <div class="form-group">
                                    <label for="service">Insurance Type</label>
                                    <select id="service" name="service">
                                        <option value="auto">Auto Insurance</option>
                                        <option value="home">Home Insurance</option>
                                        <option value="health">Health Insurance</option>
                                        <option value="travel">Travel Insurance</option>
                                        <option value="business">Business Insurance</option>
                                        <option value="life">Life Insurance</option>
                                        <option value="other">Other Inquiry</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" required placeholder="Tell us how we can help you..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%; font-size: 1.1rem;">Send Message</button>
                        </form>
                    </div>
                    <div>
                        <div class="contact-info" style="margin-bottom: 40px;">
                            <h3 style="color: var(--primary-color); margin-bottom: 20px;">Office Location</h3>
                            <p style="margin-bottom: 10px;"><strong>Address:</strong><br>123 Insurance Way<br>City, State 12345</p>
                            <p style="margin-bottom: 10px;"><strong>Phone:</strong><br>(555) 123-4567</p>
                            <p style="margin-bottom: 10px;"><strong>Email:</strong><br>info@prosure.com</p>
                        </div>
                        <div class="hours">
                            <h3 style="color: var(--primary-color); margin-bottom: 20px;">Business Hours</h3>
                            <p style="margin-bottom: 5px;">Monday - Friday: 9:00 AM - 6:00 PM</p>
                            <p style="margin-bottom: 5px;">Saturday: 10:00 AM - 2:00 PM</p>
                            <p style="margin-bottom: 5px;">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
