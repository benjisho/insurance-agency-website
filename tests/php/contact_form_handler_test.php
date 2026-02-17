<?php

declare(strict_types=1);

require_once __DIR__ . '/../../php/contact_form_handler.php';

function assert_true(bool $condition, string $message): void
{
    if (!$condition) {
        fwrite(STDERR, "Assertion failed: {$message}\n");
        exit(1);
    }
}

$normalized = normalize_contact_input([
    'name' => '  Jane  ',
    'email' => " jane@example.com\n",
    'message' => '  Need a quote  ',
]);

assert_true($normalized['name'] === 'Jane', 'normalize_contact_input trims name');
assert_true($normalized['email'] === 'jane@example.com', 'normalize_contact_input trims email');
assert_true($normalized['message'] === 'Need a quote', 'normalize_contact_input trims message');

$errors = validate_contact_input([
    'name' => '',
    'email' => 'bad-email',
    'message' => '',
]);
assert_true(count($errors) === 3, 'validate_contact_input returns expected required errors');

$longErrors = validate_contact_input([
    'name' => str_repeat('A', CONTACT_NAME_MAX_LENGTH + 1),
    'email' => str_repeat('a', CONTACT_EMAIL_MAX_LENGTH - 11) . '@mail.test',
    'message' => str_repeat('b', CONTACT_MESSAGE_MAX_LENGTH + 1),
]);
assert_true(in_array('Name is too long.', $longErrors, true), 'name length limit is enforced');
assert_true(in_array('Message is too long.', $longErrors, true), 'message length limit is enforced');

$payload = build_contact_email_payload([
    'name' => 'Jane',
    'email' => "jane@example.com\r\nBcc:attacker@example.com",
    'message' => 'hello',
]);

assert_true($payload['subject'] === 'New Contact Form Submission', 'subject matches expected value');
assert_true(strpos($payload['reply_to'], "\n") === false, 'reply_to strips newline chars');
assert_true(strpos($payload['reply_to'], "\r") === false, 'reply_to strips carriage returns');

fwrite(STDOUT, "All contact form handler tests passed.\n");
