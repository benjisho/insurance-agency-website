$(document).ready(function() {
    var $loginForm = $('#loginForm');
    var $usernameInput = $('#username');
    var $passwordInput = $('#password');
    var $userDashboard = $('#userDashboard');

    $loginForm.submit(function(e) {
        e.preventDefault();
        
        // This is a simple check. In a real-world situation, you'd want to verify credentials server-side.
        if ($usernameInput.val() === 'client' && $passwordInput.val() === 'password') {
            // Hide the login form and show the user dashboard
            $loginForm.hide();
            $userDashboard.html('<h3>Welcome, ' + $usernameInput.val() + '!</h3><button id="logoutButton">Logout</button>').show();
        } else {
            alert('Invalid username or password. Please try again.');
        }
    });

    $userDashboard.on('click', '#logoutButton', function() {
        // Hide the user dashboard and show the login form
        $userDashboard.hide();
        $loginForm.show();
        
        // Clear the form fields
        $usernameInput.val('');
        $passwordInput.val('');
    });
});
