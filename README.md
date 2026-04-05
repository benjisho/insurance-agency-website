# ProSure Insurance Agency Website

Welcome to the repository for the ProSure Insurance Agency website. This is a modern, premium, production-ready website built with PHP, HTML5, CSS3, and JavaScript.

## Tech Stack

- **Frontend**: HTML5, CSS3 (Custom variables, Flexbox/Grid), JavaScript (jQuery), Animate.css
- **Backend**: PHP 7.4 (Used for page templating and form handling)
- **Containerization**: Docker & Docker Compose
- **Orchestration**: Kubernetes

## Key Improvements

- **Modern UI/UX**: Professional color palette, typography (Inter font), and responsive layout.
- **Maintainability**: Used PHP `include` for shared components like `header.php` and `footer.php`.
- **Premium Design**: Improved spacing, shadows, and hover effects for a high-end feel.
- **Industry Aligned**: Content and features tailored to the insurance industry standards.

## File Structure

- **index.php**: The main landing page.
- **assets/**:
  - **css/main.css**: The central stylesheet with modern design tokens.
  - **js/**: Includes `client_portal_auth.js` for portal functionality.
- **pages/**:
  - **header.php / footer.php**: Shared components.
  - **about.php**: Our story and values.
  - **services.php**: Overview of insurance offerings.
  - **service1.php to service6.php**: Detailed insurance type pages.
  - **faqs.php**: Common questions and answers.
  - **contact.php**: Contact form and office info.
  - **client_portal.php**: Secure client access (Demo).
  - **thank_you.php**: Post-submission confirmation.
- **php/**:
  - **contact.php**: Handles contact form submissions.
- **docker/**: Dockerfile and Docker Compose configuration.
- **kubernetes/**: Deployment and Service manifests.

## Getting Started

### Prerequisites

- Docker and Docker Compose

### Running the Project

1. Navigate to the `docker` directory:
   ```bash
   cd docker
   ```

2. Start the containerized website:
   ```bash
   docker compose up -d --build
   ```

3. Access the website at `http://localhost:8080`.

## Testing

Run business-logic and behavior tests with:

- **JavaScript**: `npm run test:js`
- **PHP**: `php tests/php/contact_form_handler_test.php`

## License

This project is licensed under the [MIT License](LICENSE).
