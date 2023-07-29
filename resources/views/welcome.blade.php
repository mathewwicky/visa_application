<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WARE Visa Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Create a separate CSS file for custom styles -->
    <style>
        /* styles.css */

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 100px 0;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .hero img {
            max-width: 100%;
            height: auto;
        }

        /* Features Section */
        .features {
            padding: 50px 0;
        }

        .features h2 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .features img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .features h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .features p {
            font-size: 18px;
        }

        /* Testimonials Section */
        .testimonials {
            padding: 50px 0;
        }

        .testimonials h2 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .testimonial {
            text-align: center;
            margin-bottom: 30px;
        }

        .testimonial img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .testimonial blockquote {
            font-size: 20px;
            font-style: italic;
            margin-bottom: 10px;
        }

        .testimonial cite {
            font-size: 18px;
        }

        /* Call to Action Section */
        .call-to-action {
            text-align: center;
            padding: 50px 0;
        }

        .call-to-action h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .call-to-action p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        /* Footer */
        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }

        .footer p {
            font-size: 16px;
            margin: 0;
        }
    </style>
</head>
<body>
<img src="images/flag.png" width="100%" height="9px">


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">WARE Visa Application</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Apply Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>WARE Visa Application</h1>
                <p>Get your visa hassle-free with our WARE Visa Application. Apply now!</p>
                <a href="{{ route('login') }}" class="btn btn-primary">Apply Now</a>
            </div>
            <div class="col-md-6">
                <img src="images/visa1.jpg" alt="Visa Image 1">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features" id="features">
    <div class="container">
        <h2>Key Features</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="images/visa2.jpg" alt="Visa Image 2">
                <h3>Easy Application</h3>
                <p>Our visa application process is simple and user-friendly.</p>
            </div>
            <div class="col-md-4">
                <img src="images/visa1.jpg" alt="Visa Image 1">
                <h3>Fast Processing</h3>
                <p>Get your visa processed quickly with our efficient system.</p>
            </div>
            <div class="col-md-4">
                <img src="images/visa2.jpg" alt="Visa Image 2">
                <h3>Secure and Reliable</h3>
                <p>Your data is safe with our secure and reliable application.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials" id="testimonials">
    <div class="container">
        <h2>What Our Users Say</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial">
                    <img src="images/user1.jpg" alt="User 1">
                    <blockquote>"The WARE Visa Application made the visa process a breeze. Highly recommended!"</blockquote>
                    <cite>- John Doe</cite>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <img src="images/user2.jpg" alt="User 2">
                    <blockquote>"I got my visa within a few days. Thanks to WARE Visa Application!"</blockquote>
                    <cite>- Jane Smith</cite>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <img src="images/user3.jpg" alt="User 3">
                    <blockquote>"The best visa application platform I've used so far."</blockquote>
                    <cite>- Michael Johnson</cite>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="call-to-action">
    <div class="container">
        <h2>Apply for Your Visa Today</h2>
        <p>Get started with the WARE Visa Application now and experience a hassle-free visa process.</p>
        <a href="{{ route('login') }}" class="btn btn-primary">Apply Now</a>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container text-center">
        <p>&copy; <?php echo date('Y'); ?> WARE Visa Application. All rights reserved.</p>
    </div>
</footer>

<!-- JavaScript and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
