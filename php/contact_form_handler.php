<?php

declare(strict_types=1);

const CONTACT_NAME_MAX_LENGTH = 120;
const CONTACT_EMAIL_MAX_LENGTH = 254;
const CONTACT_MESSAGE_MAX_LENGTH = 5000;

function normalize_contact_input(array $input): array
{
    return [
        'name' => trim((string) ($input['name'] ?? '')),
        'email' => trim((string) ($input['email'] ?? '')),
        'message' => trim((string) ($input['message'] ?? '')),
    ];
}

function validate_contact_input(array $contact): array
{
    $errors = [];

    if ($contact['name'] === '') {
        $errors[] = 'Name is required.';
    } elseif (strlen($contact['name']) > CONTACT_NAME_MAX_LENGTH) {
        $errors[] = 'Name is too long.';
    }

    if ($contact['email'] === '' || filter_var($contact['email'], FILTER_VALIDATE_EMAIL) === false) {
        $errors[] = 'A valid email address is required.';
    } elseif (strlen($contact['email']) > CONTACT_EMAIL_MAX_LENGTH) {
        $errors[] = 'Email address is too long.';
    }

    if ($contact['message'] === '') {
        $errors[] = 'Message is required.';
    } elseif (strlen($contact['message']) > CONTACT_MESSAGE_MAX_LENGTH) {
        $errors[] = 'Message is too long.';
    }

    return $errors;
}

function escape_header_value(string $value): string
{
    return str_replace(["\r", "\n"], '', $value);
}

function build_contact_email_payload(array $contact): array
{
    $subject = 'New Contact Form Submission';
    $safeReplyTo = escape_header_value($contact['email']);

    $body = "Name: {$contact['name']}\n"
        . "Email: {$contact['email']}\n"
        . "Message: {$contact['message']}\n";

    return [
        'subject' => $subject,
        'body' => $body,
        'reply_to' => $safeReplyTo,
    ];
}
