# Create directories
New-Item -ItemType Directory -Path .\insurance-agency-website\assets\images
New-Item -ItemType Directory -Path .\insurance-agency-website\assets\js
New-Item -ItemType Directory -Path .\insurance-agency-website\assets\css
New-Item -ItemType Directory -Path .\insurance-agency-website\pages

# Create HTML files
New-Item -ItemType File -Path .\insurance-agency-website\index.html
New-Item -ItemType File -Path .\insurance-agency-website\pages\about.html
New-Item -ItemType File -Path .\insurance-agency-website\pages\services.html
New-Item -ItemType File -Path .\insurance-agency-website\pages\faqs.html
New-Item -ItemType File -Path .\insurance-agency-website\pages\contact.html

# Create CSS and JS files
New-Item -ItemType File -Path .\insurance-agency-website\assets\css\styles.css
New-Item -ItemType File -Path .\insurance-agency-website\assets\js\script.js
