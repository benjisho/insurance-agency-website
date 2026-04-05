<?php
$is_subpage = strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false;
$path_prefix = $is_subpage ? '../' : '';
?>
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>ProSure Insurance</h4>
                    <p style="color: #ccc; font-size: 0.9rem;">Providing premium insurance solutions since 20XX. Your trust is our foundation.</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="<?php echo $path_prefix; ?>index.php">Home</a></li>
                        <li><a href="<?php echo $path_prefix; ?>pages/about.php">About Us</a></li>
                        <li><a href="<?php echo $path_prefix; ?>pages/services.php">Services</a></li>
                        <li><a href="<?php echo $path_prefix; ?>pages/contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="<?php echo $path_prefix; ?>pages/services.php">Auto Insurance</a></li>
                        <li><a href="<?php echo $path_prefix; ?>pages/services.php">Home Insurance</a></li>
                        <li><a href="<?php echo $path_prefix; ?>pages/services.php">Business Insurance</a></li>
                        <li><a href="<?php echo $path_prefix; ?>pages/services.php">Life Insurance</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Us</h4>
                    <p style="color: #ccc; font-size: 0.9rem;">
                        123 Insurance Way<br>
                        City, State 12345<br>
                        (555) 123-4567<br>
                        info@prosure.com
                    </p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2024 ProSure Insurance Agency. All rights reserved. | <a href="#" style="color: #888;">Privacy Policy</a></p>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
