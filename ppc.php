<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPC Advertising - Digital Marketing Agency</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #000;
            color: white;
        }

        h1, h2, h3 {
            color: #d4af37;
        }

        p {
            color: white;
        }

        .navbar {
            background-color: black;
        }

        .navbar-brand img {
            width: 200px;
        }

        .btn-outline-light {
            border-color: #d4af37;
            color: #d4af37;
        }

        .btn-outline-light:hover {
            background-color: #d4af37;
            color: white;
        }

        .service-hero {
            background-image: url('images/ppc-banner.jpg');
            background-size: cover;
            background-position: center;
            height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .service-hero h1 {
            font-size: 3rem;
            color: #d4af37;
        }

        .service-section {
            padding: 50px 0;
            background-color: #111;
        }

        .service-section h2 {
            margin-bottom: 30px;
            text-align: center;
        }

        .service-section .icon-box {
            background-color: #333;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 20px;
            height: 200px;
        }
        .whatsapp-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #25D366;
    color: white;
    border-radius: 50%;
    padding: 15px;
    font-size: 24px;
    z-index: 1000;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.whatsapp-button:hover {
    background-color: #128C7E;
}


        .icon-box:hover {
            background-color: #d4af37;
            transition: 0.3s;
        }

        .icon-box h3 {
            color: #d4af37;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .icon-box p {
            color: #f1f1f1;
        }

        .btn-cta {
            background-color: #d4af37;
            border: none;
            color: black;
        }

        .btn-cta:hover {
            background-color: #b59a2d;
        }

        /* Footer */
        footer {
            background-color: #222;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/chalogo.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="service-hero">
        <div class="container">
            <h1>Targeted PPC Advertising Services</h1>
            <p>Maximize your ROI with data-driven Pay-Per-Click advertising strategies</p>
        </div>
    </section>

    <!-- PPC Advertising Services Section -->
    <section class="service-section">
        <div class="container">
            <h2>Our PPC Advertising Services</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="icon-box">
                        <h3>Google Ads Management</h3>
                        <p>Optimize your Google Ads campaigns for higher visibility and conversions.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <h3>Facebook Ads Management</h3>
                        <p>Reach your target audience with engaging and relevant Facebook ads.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <h3>Remarketing</h3>
                        <p>Reconnect with potential customers with effective remarketing strategies.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <h3>Landing Page Design</h3>
                        <p>Create high-converting landing pages tailored to your PPC campaigns.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <h3>Conversion Tracking</h3>
                        <p>Monitor and optimize performance with detailed conversion tracking.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <h3>Budget Management</h3>
                        <p>Maximize your ad spend with careful PPC budget management and analysis.</p>
                    </div>
                </div>
            </div>
            <div class="text-center my-4">
                <a href="contact.php" class="btn btn-cta btn-lg">Start Your PPC Campaign</a>
            </div>
        </div>
    </section>
<!-- Fixed WhatsApp Button -->
<a href="https://wa.me/923241299269" target="_blank" class="whatsapp-button">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Font Awesome Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Digital Marketing Agency. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
