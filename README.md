`README.md` mein purana text replace karke ye complete content paste karo:

````markdown
# QuickPOS SPM Landing Page

QuickPOS SPM Landing Page is a PHP-based responsive landing page project for a Point of Sale system. This project was developed as part of the Software Project Management course with proper Jira tracking, GitHub workflow, Pull Requests, automated testing, and GitHub Actions CI/CD pipeline.

## Project Objective

The objective of this project is to create a professional, responsive, and modern landing page for a POS system while following proper software project management practices.

The project focuses on:

- Product quality through modern UI design
- Process rigor through Jira, GitHub, Pull Requests, and CI/CD
- Automated testing for form validation and project reliability

## Features

- Responsive Header with navigation links
- Hero section with CTA button
- Features section with POS feature cards
- Pricing section with Basic, Pro, and Enterprise plans
- Contact form with PHP validation
- Thank-you page after successful form submission
- Automated contact form validation tests
- GitHub Actions CI/CD pipeline
- Jira issue tracking and sprint management

## Technologies Used

- PHP
- HTML5
- CSS3
- Git
- GitHub
- GitHub Actions
- Jira
- Slack
- XAMPP

## Project Structure

```text
quickpos-spm-landing-page/
│
├── index.php
├── process-contact.php
├── thank-you.php
├── README.md
│
├── assets/
│   └── css/
│       └── style.css
│
├── tests/
│   └── ContactFormTest.php
│
└── .github/
    └── workflows/
        └── ci.yml
````

## Website Sections

### 1. Header

The header contains the QuickPOS logo, navigation links, and a sign-up button.

### 2. Hero Section

The hero section introduces the QuickPOS system and includes a call-to-action button.

### 3. Features Section

The features section includes 4 main POS features:

* Fast Billing
* Inventory Control
* Sales Reports
* Customer Records

### 4. Pricing Section

The pricing section includes three pricing plans:

* Basic
* Pro
* Enterprise

### 5. Contact Form

The contact form includes:

* Name field
* Email field
* Message field

PHP validation is applied for:

* Empty name field
* Empty email field
* Invalid email format
* Empty message field
* Successful form submission

### 6. Thank You Page

After successful form submission, the user is redirected to the thank-you page.

## Automated Testing

Automated tests are written inside the `tests` folder.

Test file:

```text
tests/ContactFormTest.php
```

Test cases included:

1. Empty name field validation
2. Empty email field validation
3. Invalid email format validation
4. Empty message field validation
5. Valid form submission
6. Multiple empty fields validation

## Run Tests Locally

Use this command if PHP is added to system PATH:

```bash
php tests/ContactFormTest.php
```

If using XAMPP on Windows, use:

```bash
C:\xampp\php\php.exe tests/ContactFormTest.php
```

Expected result:

```text
[PASS] Empty name field validation
[PASS] Empty email field validation
[PASS] Invalid email format validation
[PASS] Empty message field validation
[PASS] Valid form submission
[PASS] Multiple empty fields validation

Total Passed: 6
Total Failed: 0
```

## GitHub Actions CI/CD Pipeline

The project includes a GitHub Actions workflow file:

```text
.github/workflows/ci.yml
```

The CI/CD pipeline runs automatically on:

* Pull requests to main
* Pushes to feature branches
* Pushes to bugfix branches

Pipeline stages:

1. Checkout code
2. Setup PHP
3. PHP syntax check
4. Jira ID validation
5. Automated contact form tests
6. Artifact upload

The pipeline fails if:

* PHP syntax check fails
* Automated tests fail
* Jira ticket ID is missing from commit message or PR title

## GitHub Workflow

Branching strategy used:

```text
feature/SPMS-1-sprint-1-ui
feature/SPMS-2-sprint-2-form-testing
```

Commit message format:

```text
[SPMS-1] Add sprint 1 landing page UI
[SPMS-2] Add pricing contact form and validation
[SPMS-2] Add automated tests and CI pipeline
```

Pull Requests were created and merged after successful review and CI checks.

## Jira Process

Jira was used as the single source of truth for project management.

Jira project details:

```text
Project Name: QuickPOS SPM Landing Page
Project Key: SPMS
```

Main Epics:

1. Header
2. Hero Section
3. Features Section
4. Pricing Section
5. Contact Form
6. Footer
7. Testing Automation

Two sprints were used:

```text
Sprint 1 - UI Landing Page
Sprint 2 - Pricing Contact Form and Testing
```

## Slack Integration

Slack was used as the communication hub for the project. Jira and GitHub notifications were integrated with the project Slack channel for issue updates, commits, pull requests, and pipeline activity.

## How to Run Project

Place the project folder inside XAMPP `htdocs`:

```text
C:\xampp\htdocs\quickpos-spm-landing-page
```

Start Apache from XAMPP Control Panel.

Open browser and visit:

```text
http://localhost/quickpos-spm-landing-page
```

## Final Deliverables

The final submission includes:

* Complete PHP source code
* Jira screenshots
* Sprint screenshots
* GitHub repository screenshots
* Pull Request screenshots
* Successful CI pipeline screenshot
* Failed CI pipeline screenshot
* Slack notification screenshots
* Website UI screenshots
* Contact form validation screenshots

## Author

Developed by:

```text
Nawab Ikram
```

## Course

Software Project Management

````
## Authors

Developed by:

- Nawab Ikram
- Ali Naqi
