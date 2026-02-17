# Repository Review and Gap Analysis

## PR Aim
The changes in this branch are intended to make the repository safer and more maintainable without changing the product scope:
1. isolate contact-form business logic so it can be tested,
2. harden server-side form handling,
3. add behavior-level tests for future refactors,
4. document what is complete vs. still pending.

## What Was Done in This Branch
- Added reusable contact-form business logic (`normalize_contact_input`, `validate_contact_input`, `build_contact_email_payload`) in `php/contact_form_handler.php`.
- Hardened `php/send_email.php` with:
  - POST-only enforcement,
  - explicit text responses for API-style failures,
  - input validation checks,
  - configurable destination/sender mailboxes through environment variables,
  - 303 redirect after success.
- Extracted client portal credential logic into `assets/js/client_portal_auth.js` and consumed it from `pages/client_portal.html`.
- Added tests for business behavior:
  - `tests/php/contact_form_handler_test.php`
  - `tests/js/client_portal_auth.test.js`
- Added test command docs to `README.md`.

## Done vs. Still Needed (Fit-to-Repo Mapping)

### ✅ Done
- Server-side validation exists for name/email/message requiredness and invalid email formats.
- Mail header injection risk is reduced by stripping CR/LF in Reply-To.
- Critical form logic is now testable outside web-server runtime.
- Basic JS behavior tests for client portal credential rules are in place.

### ⚠️ Still Needed
1. **Real Authentication for Client Portal**
   - Current client portal remains a UI demo with client-side static credentials.
   - To fit production expectations, move auth to a backend with session management.
2. **CSRF Protection**
   - Contact endpoint should implement CSRF token verification once form state/session handling is introduced.
3. **Rate Limiting / Abuse Controls**
   - Add server-level rate limits or CAPTCHA for contact endpoint abuse prevention.
4. **User-Friendly Error UX**
   - Replace plain-text server errors with a dedicated error page or contact form re-render including validation messages.
5. **Delivery Reliability**
   - For production, prefer SMTP/API mail providers with retries/queueing over bare `mail()`.

## Best-Practice Verification (Online)
These updates align with common recommendations from official references:
- OWASP Input Validation Cheat Sheet and secure handling guidance.
- PHP docs for `filter_var` email validation and HTTP header behavior.
- HTTP 303 pattern after successful POST to prevent re-submission on refresh.

References:
- https://cheatsheetseries.owasp.org/cheatsheets/Input_Validation_Cheat_Sheet.html
- https://www.php.net/manual/en/function.filter-var.php
- https://www.php.net/manual/en/function.header.php
- https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/303
