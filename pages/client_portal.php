<?php
$page_title = "Client Portal";
include 'header.php';
?>

    <style>
        .login-card {
            max-width: 450px;
            margin: 60px auto;
            padding: 40px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            font-size: 1rem;
        }
        .dashboard-content {
            display: none;
            text-align: center;
            padding: 60px 0;
        }
    </style>

    <main>
        <div class="container">
            <div id="loginSection" class="login-card animate__animated animate__fadeIn">
                <h2 style="text-align: center; color: var(--primary-color); margin-bottom: 30px;">Client Login</h2>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="Enter your username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password">
                </div>
                <button id="loginButton" class="btn btn-primary" style="width: 100%; margin-top: 10px;">Login to Portal</button>
                <p style="text-align: center; margin-top: 20px; font-size: 0.9rem; color: var(--text-muted);">
                    Don't have an account? <a href="contact.php" style="color: var(--primary-color); font-weight: 600;">Contact us</a> to get started.
                </p>
            </div>

            <div id="dashboardSection" class="dashboard-content animate__animated animate__fadeIn">
                <div class="card" style="max-width: 600px; margin: 0 auto; padding: 50px;">
                    <h2 id="welcomeMessage" style="color: var(--primary-color); margin-bottom: 20px;">Welcome Back!</h2>
                    <p style="margin-bottom: 30px;">You are now logged into your secure client portal. Here you can manage your policies, pay premiums, and file claims.</p>
                    <div class="grid" style="grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px;">
                        <div class="card" style="padding: 20px; background: var(--bg-light); border: none;">
                            <h4 style="margin-bottom: 10px;">My Policies</h4>
                            <p style="font-size: 0.9rem;">2 Active Policies</p>
                        </div>
                        <div class="card" style="padding: 20px; background: var(--bg-light); border: none;">
                            <h4 style="margin-bottom: 10px;">Next Payment</h4>
                            <p style="font-size: 0.9rem;">Due in 12 days</p>
                        </div>
                    </div>
                    <button id="logoutButton" class="btn btn-outline" style="color: var(--primary-color); border-color: var(--primary-color);">Logout</button>
                </div>
            </div>
        </div>
    </main>

    <script src="../assets/js/client_portal_auth.js"></script>
    <script>
        $(document).ready(function() {
            $('#loginButton').click(function() {
                var username = $('#username').val();
                var password = $('#password').val();

                if (window.clientPortalAuth && window.clientPortalAuth.validateCredentials(username, password)) {
                    $('#loginSection').hide();
                    $('#dashboardSection').show();
                    $('#welcomeMessage').text('Welcome Back, ' + username + '!');
                } else {
                    alert('Invalid credentials. Hint: use any username and "password123"');
                }
            });

            $('#logoutButton').click(function() {
                $('#loginSection').show();
                $('#dashboardSection').hide();
                $('#username').val('');
                $('#password').val('');
            });
        });
    </script>

<?php include 'footer.php'; ?>
