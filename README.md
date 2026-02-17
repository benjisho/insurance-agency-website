# insurance-agency-website

Welcome to the repository for the Your Insurance Agency website. This repository contains the source code and assets for the website, allowing you to manage and update the content easily.

## File Structure

- **index.html**: The main landing page of the website.
- **assets/**: Directory for all the website's assets.
  - **css/**: Contains the CSS stylesheets for different pages.
  - **img/**: Holds the images used in the website.
  - **js/**: Includes JavaScript files for interactive functionality.
- **pages/**: Directory for additional pages of the website.
  - **about.html**: About page providing information about the company.
  - **services.html**: Page showcasing the services offered by the agency.
  - **service1.html**: Detailed page for Auto Insurance.
  - **service2.html**: Detailed page for Home Insurance.
  - **service3.html**: Detailed page for Health Insurance.
  - **service4.html**: Detailed page for Travel Insurance.
  - **service5.html**: Detailed page for Business Insurance.
  - **service6.html**: Detailed page for Life Insurance.
  - **faqs.html**: Frequently Asked Questions page.
  - **contact.php**: Contact page with a PHP form for sending messages.
  - **client_portal.html**: Client portal page for accessing user accounts.
  - **thank_you.html**: Thank you page displayed after submitting the contact form.
- **php/**: Directory for PHP files related to the website.
  - **send_email.php**: PHP script for sending contact form submissions via email.
- **README.md**: This file providing an overview of the repository and its contents.
- **docker/**: Directory for Docker-related files.
  - **Dockerfile**: Dockerfile for building a containerized version of the website.
  - **docker-compose.yml**: Docker Compose configuration for running the containers.
- **kubernetes/**: Directory for Kubernetes-related files.
  - **deployment.yaml**: Kubernetes deployment configuration for the website.
  - **service.yaml**: Kubernetes service configuration for the website.

## Getting Started

To get started with the website, follow these steps:

1. Clone the repository to your local machine:
`git clone https://github.com/benjisho/insurance-agency-website.git`

2. Open the files in your preferred code editor.
3. Make changes to the HTML, CSS, or JavaScript files as needed.
4. Update the relative paths in the HTML files if you modify the file structure.
5. Test your changes locally to ensure everything works as expected.
6. Commit your changes and push them to the repository:
```
git add .
git commit -m "Add your commit message here"
git push
```
7. Deploy your changes to your web server or hosting platform.


## Testing

Run business-logic and behavior tests with:

- JavaScript: `npm run test:js`
- PHP: `php tests/php/contact_form_handler_test.php`

## Running with Docker

### Docker

To run the website using Docker, follow these steps:

1. Install Docker on your machine (https://www.docker.com/get-started).

2. Build the Docker image:
`docker build -t insurance-agency-website -f docker/Dockerfile .`
3. Run the Docker container:
`docker run -d -p 8080:80 --name insurance-website-container insurance-agency-website`
4. Access the website in your browser at `http://localhost:8080`.

### Docker Compose

To run the website using Docker Compose, follow these steps:

1. Install Docker Compose on your machine (https://docs.docker.com/compose/install/).

2. Navigate to the project directory containing the `docker-compose.yml` file.

3. Run the Docker Compose command to start the containers:
`docker-compose -f docker/docker-compose.yml up -d`

4. Access the website in your browser at `http://localhost:8080`.

## Running with Kubernetes

To run the website using Kubernetes, follow these steps:

1. Install and set up Kubernetes on your machine or use a Kubernetes cluster provider.

2. Navigate to the project directory containing the Kubernetes files.

3. Deploy the website using the Kubernetes deployment and service files:
```
kubectl apply -f kubernetes/deployment.yaml
kubectl apply -f kubernetes/service.yaml
```
4. Access the website through the Kubernetes service using the assigned external IP or domain.

## License

This project is licensed under the [MIT License](LICENSE).

Feel free to customize and adapt this website to meet your specific needs. If you have any questions or need assistance, please contact our support team.

---

Thank you for using Your Insurance Agency Website! If you have any feedback or suggestions, please let us know.

