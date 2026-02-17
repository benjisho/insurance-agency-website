<?php

declare(strict_types=1);

require_once __DIR__ . '/contact_form_handler.php';

function text_response(string $message, int $status): void
{
    http_response_code($status);
    header('Content-Type: text/plain; charset=UTF-8');
    echo $message;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    text_response('Method Not Allowed', 405);
    exit();
}

$contact = normalize_contact_input($_POST);
$errors = validate_contact_input($contact);

if (!empty($errors)) {
    text_response(implode(' ', $errors), 422);
    exit();
}

$payload = build_contact_email_payload($contact);
$to = getenv('CONTACT_TO_EMAIL') ?: 'bennyshohat@example.com';

if (filter_var($to, FILTER_VALIDATE_EMAIL) === false) {
    text_response('Server email configuration is invalid.', 500);
    exit();
}

$from = getenv('CONTACT_FROM_EMAIL') ?: 'noreply@example.com';
if (filter_var($from, FILTER_VALIDATE_EMAIL) === false) {
    $from = 'noreply@example.com';
}

$headers = 'From: ' . $from . "\r\n"
    . 'Reply-To: ' . $payload['reply_to'] . "\r\n";

if (!mail($to, $payload['subject'], $payload['body'], $headers)) {
    text_response('Unable to send message right now. Please try again later.', 500);
    exit();
}

header('Location: ../pages/thank_you.html', true, 303);
exit();
