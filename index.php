<?php
$pageTitle = "QuickPOS SPM Landing Page";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Header Section -->
    <header class="header">
        <div class="container nav-container">
            <div class="logo">
                Quick<span>POS</span>
            </div>

            <nav class="nav-links">
                <a href="#home">Home</a>
                <a href="#features">Features</a>
                <a href="#pricing">Pricing</a>
                <a href="#contact">Contact</a>
            </nav>

            <a href="#contact" class="signup-btn">Sign Up</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container hero-container">
            <div class="hero-content">
                <p class="badge">Smart POS Solution</p>
                <h1>Manage Your Business Faster with QuickPOS</h1>
                <p class="hero-text">
                    QuickPOS helps shops, restaurants, and small businesses manage sales,
                    inventory, billing, and customer records with a simple and powerful POS system.
                </p>
                <a href="#features" class="cta-btn">Explore Features</a>
            </div>

            <div class="hero-card">
                <h3>Today’s Sales</h3>
                <h2>Rs. 45,800</h2>
                <p>Orders Completed: 128</p>

                <div class="mini-stats">
                    <div>
                        <strong>320</strong>
                        <span>Products</span>
                    </div>
                    <div>
                        <strong>98%</strong>
                        <span>Accuracy</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-heading">
                <p class="badge">Features</p>
                <h2>Everything You Need for Daily Sales</h2>
                <p>
                    QuickPOS provides modern tools to make business management simple,
                    fast, and reliable.
                </p>
            </div>

            <div class="feature-grid">
                <div class="feature-card">
                    <div class="icon">🧾</div>
                    <h3>Fast Billing</h3>
                    <p>Create invoices quickly and reduce customer waiting time.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">📦</div>
                    <h3>Inventory Control</h3>
                    <p>Track stock levels and get alerts when products are low.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">📊</div>
                    <h3>Sales Reports</h3>
                    <p>View daily, weekly, and monthly business performance reports.</p>
                </div>

                <div class="feature-card">
                    <div class="icon">👥</div>
                    <h3>Customer Records</h3>
                    <p>Save customer details and manage repeat buyers easily.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container footer-container">
            <div>
                <h3>QuickPOS</h3>
                <p>A smart POS landing page project for SPM.</p>
            </div>

            <div class="footer-links">
                <a href="#home">Home</a>
                <a href="#features">Features</a>
                <a href="#pricing">Pricing</a>
                <a href="#contact">Contact</a>
            </div>

            <p class="copyright">
                © 2026 QuickPOS. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>