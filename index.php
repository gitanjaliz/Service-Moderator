<?php
// Add any necessary PHP code for session management or user data.
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home - Genie</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<!-- Custom CSS -->
<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f8f9fa;
    }
    /* Hero Section */
    .hero {
        background: url('uploads/hm.png') no-repeat center center/cover; /* Background Image */
        color: white;
        padding: 120px 0; /* Adjusted padding */
        text-align: center;
        position: relative;
    }
    .hero h1 {
        font-size: 4rem;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Text Shadow */
    }
    .hero p {
        font-size: 1.5rem;
        margin-top: 20px;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); /* Text Shadow */
    }
    .hero .btn {
        background-color: #ff6f61;
        color: white;
        font-size: 1.2rem;
        padding: 12px 25px;
        border-radius: 50px;
        border: none;
        margin-top: 20px;
    }
    .hero .btn:hover {
        background-color: #e55d50;
        text-decoration: none;
    }

    /* Section Styles */
    .section {
        padding: 80px 0;
    }
    .section-title {
        font-size: 2.5rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 40px;
        color: #333;
    }
    .section p {
        font-size: 1.1rem;
        color: #666;
        text-align: center;
    }

    /* Card Styles */
    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }
    .card:hover {
        transform: translateY(-10px); /* Hover effect */
    }
    .card-body i {
        font-size: 3.5rem;
        color: #ff6f61;
    }
    .card-body h5 {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
    }
    .card-body p {
        font-size: 1.1rem;
        color: #666;
    }

    /* Footer */
    footer {
        background: #333;
        color: white;
        padding: 20px 0;
        text-align: center;
    }
    footer p {
        font-size: 1rem;
        margin: 0;
    }

    /* Links */
    .nav-link{
        font-size: 1.1rem;
        color: #333;
        font-weight: 600;
    }
    .nav-link:hover {
        color: #ff6f61;
    }
    

</style>
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="images/pictures/lg.png" alt="Genie Logo" height="40" background-color="black">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="loginDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="loginDropdown">
                        <li><a class="dropdown-item" href="kadmin/index.php">Admin Login</a></li>
                        <li><a class="dropdown-item" href="signin.html">User Login</a></li>
                        <li><a class="dropdown-item" href="servicer/login.php">Servicer Login</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero">
    <div class="container">
        <h1>Welcome to Genie</h1>
        <p>Your one-stop solution for home services. Book reliable and trusted professionals today!</p>
        <a href="#services" class="btn btn-lg mt-3">Explore Services</a>
    </div>
</div>

<!-- About Section -->
<div id="about" class="section">
    <div class="container">
        <h2 class="section-title">About Us</h2>
        <p>Genie is a platform connecting customers with experienced service providers. From plumbing to cleaning, we ensure top-notch service at your convenience.</p>
    </div>
</div>

<!-- Services Section -->
<div id="services" class="section bg-light">
    <div class="container">
        <h2 class="section-title">Our Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa fa-tools fa-3x"></i>
                        <h5 class="card-title mt-3">Plumbing</h5>
                        <p class="card-text">Reliable plumbers for all your needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa fa-broom fa-3x"></i>
                        <h5 class="card-title mt-3">Cleaning</h5>
                        <p class="card-text">Professional cleaning services for your home or office.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa fa-paint-roller fa-3x"></i>
                        <h5 class="card-title mt-3">Painting</h5>
                        <p class="card-text">Skilled painters for your walls and furniture.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div id="contact" class="section">
    <div class="container">
        <h2 class="section-title">Contact Us</h2>
        <p>If you have any questions or need assistance, feel free to reach out to us!</p>
        <div class="text-center">
            <a href="mailto:support@genie.com" class="btn btn-primary"><i class="fa fa-envelope"></i> Email Us</a>
            <a href="tel:+123456789" class="btn btn-secondary"><i class="fa fa-phone"></i> Call Us</a>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <p>&copy; 2024 Genie. All Rights Reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
