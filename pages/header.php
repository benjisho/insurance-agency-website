<?php
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$is_subpage = strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false;
$path_prefix = $is_subpage ? '../' : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' | ProSure Insurance' : 'ProSure Insurance | Premium Protection'; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $path_prefix; ?>assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <header>
        <div class="container">
            <a href="<?php echo $path_prefix; ?>index.php" class="logo">ProSure Insurance</a>
            <nav>
                <ul>
                    <li><a href="<?php echo $path_prefix; ?>index.php">Home</a></li>
                    <li><a href="<?php echo $path_prefix; ?>pages/about.php">About</a></li>
                    <li><a href="<?php echo $path_prefix; ?>pages/services.php">Services</a></li>
                    <li><a href="<?php echo $path_prefix; ?>pages/faqs.php">FAQs</a></li>
                    <li><a href="<?php echo $path_prefix; ?>pages/contact.php">Contact</a></li>
                    <li><a href="<?php echo $path_prefix; ?>pages/client_portal.php" class="btn-portal">Client Portal</a></li>
                </ul>
            </nav>
        </div>
    </header>
