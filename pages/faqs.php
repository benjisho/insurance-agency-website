<?php
$page_title = "Frequently Asked Questions";
include 'header.php';
?>

    <style>
        .faq-item {
            margin-bottom: 20px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            overflow: hidden;
            background: white;
        }
        .faq-question {
            padding: 20px;
            cursor: pointer;
            font-weight: 600;
            color: var(--primary-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            user-select: none;
        }
        .faq-answer {
            padding: 0 20px 20px;
            color: var(--text-muted);
            display: none;
        }
        .faq-item.active .faq-answer {
            display: block;
        }
        .faq-question::after {
            content: '+';
            font-size: 1.5rem;
            transition: var(--transition);
        }
        .faq-item.active .faq-question::after {
            transform: rotate(45deg);
        }
    </style>

    <main>
        <section class="hero hero-small" style="padding: 60px 0;">
            <div class="container">
                <h1 class="animate__animated animate__fadeInDown">How Can We Help?</h1>
                <p class="animate__animated animate__fadeInUp">Find answers to the most common questions about insurance and our services.</p>
            </div>
        </section>

        <section class="faq-content">
            <div class="container">
                <div style="max-width: 800px; margin: 0 auto;">
                    <div class="faq-item">
                        <div class="faq-question">What factors influence my auto insurance premium?</div>
                        <div class="faq-answer">Several factors can affect your premium, including your driving record, age, the make and model of your vehicle, where you live, and the coverage options you choose.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">How often should I review my insurance policies?</div>
                        <div class="faq-answer">We recommend reviewing your insurance coverage at least once a year or whenever you experience a major life event, such as buying a new home, getting married, or starting a business.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">What is a deductible?</div>
                        <div class="faq-answer">A deductible is the amount you pay out of pocket before your insurance coverage kicks in. Choosing a higher deductible can lower your premium, but you'll have more to pay if you file a claim.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Does my homeowners insurance cover floods?</div>
                        <div class="faq-answer">Standard homeowners insurance policies typically do not cover flood damage. You may need a separate flood insurance policy to protect your home from this specific peril.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">How do I file a claim?</div>
                        <div class="faq-answer">You can file a claim through our client portal, by calling our 24/7 claims hotline at (555) 999-0000, or by contacting your dedicated agent directly.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Why do I need life insurance?</div>
                        <div class="faq-answer">Life insurance provides financial security for your loved ones in the event of your passing. It can help cover funeral costs, pay off debts, and provide ongoing income for your family.</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-cta" style="text-align: center; margin-top: 40px; margin-bottom: 60px;">
            <div class="container">
                <h3 style="color: var(--primary-color); margin-bottom: 20px;">Still have questions?</h3>
                <p style="margin-bottom: 30px;">Our insurance experts are here to help you understand your coverage options.</p>
                <a href="contact.php" class="btn btn-primary">Contact Us Today</a>
            </div>
        </section>
    </main>

    <script>
        $(document).ready(function() {
            $('.faq-question').click(function() {
                $(this).parent('.faq-item').toggleClass('active');
            });
        });
    </script>

<?php include 'footer.php'; ?>
