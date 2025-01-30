<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Agency - Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #000;
            color: white;
        }

        h2 {
            color: #d4af37;
        }

        .navbar {
            background-color: black;
        }

        .navbar-brand img {
            width: 150px;
        }

        .btn-outline-light {
            border-color: #d4af37;
            color: #d4af37;
        }

        .btn-outline-light:hover {
            background-color: #d4af37;
            color: white;
        }

        /* Startup Animation */
        #startup {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
            height: 100vh;
            position: relative;
            animation: fadeOut 2s forwards;
            animation-delay: 3s;
        }

        @keyframes fadeOut {
            to {
                opacity: 0;
                visibility: hidden;
            }
        }

        #startup h1 {
            font-size: 3rem;
            color: #d4af37;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Flip Card Container */
        .flip-card {
            background-color: transparent;
            width: 100%;
            height: 450px;
            perspective: 1000px;
            margin-bottom: 30px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
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

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .flip-card-front {
            background-color: black;
            color: #fff;
            border: 1px solid #d4af37;
            text-align: center;
        }

        .flip-card-back {
            background-color: #d4af37;
            color: black;
            text-align: center;
            transform: rotateY(180deg);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card h5 {
            margin-top: 10px;
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/chalogo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container my-5">
            <h2 class="text-center">Our Services</h2>
            <div class="row justify-content-center">
                <!-- Loop through your flip cards here -->
                <div class="col-md-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/seo.png" class="card-img-top" alt="SEO Services">
                                <div class="card-body">
                                    <h5 class="card-title">SEO Services</h5>
                                    <p class="card-text">Improve your search engine ranking.</p>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h5>SEO Services</h5>
                                <p>Boost your visibility and traffic with expert SEO services.</p>
                                <a href="Seo.php" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more cards as needed -->
                <div class="col-md-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/webb.png" class="card-img-top" alt="SEO Services">
                                <div class="card-body">
                                    <h5 class="card-title">Web Development</h5>
                                    <p class="card-text">Improve your search engine ranking.</p>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h5>Web Development</h5>
                                <p>Boost your visibility and traffic with expert SEO services.</p>
                                <a href="web.php" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/ppc.png" class="card-img-top" alt="SEO Services">
                                <div class="card-body">
                                    <h5 class="card-title">PPC Campaign</h5>
                                    <p class="card-text">Improve your search engine ranking.</p>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h5>PPC Campaign</h5>
                                <p>Boost your visibility and traffic with expert SEO services.</p>
                                <a href="ppc.php" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/cw.png" class="card-img-top" alt="SEO Services">
                                <div class="card-body">
                                    <h5 class="card-title">copy writing</h5>
                                    <p class="card-text">Improve your search engine ranking.</p>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h5>copy writing</h5>
                                <p>Boost your visibility and traffic with expert SEO services.</p>
                                <a href="cpw.php" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/gd.png" class="card-img-top" alt="SEO Services">
                                <div class="card-body">
                                    <h5 class="card-title">Graphic Design</h5>
                                    <p class="card-text">Improve your search engine ranking.</p>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h5>Graphic DEsign</h5>
                                <p>Boost your visibility and traffic with expert SEO services.</p>
                                <a href="gd.php" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/app.png" class="card-img-top" alt="SEO Services">
                                <div class="card-body">
                                    <h5 class="card-title">App Development</h5>
                                    <p class="card-text">Improve your search engine ranking.</p>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h5>App Development</h5>
                                <p>Boost your visibility and traffic with expert SEO services.</p>
                                <a href="app.php" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/vm.png" class="card-img-top" alt="SEO Services">
                                <div class="card-body">
                                    <h5 class="card-title">Video Marketing</h5>
                                    <p class="card-text">Improve your search engine ranking.</p>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h5>Video Marketing</h5>
                                <p>Boost your visibility and traffic with expert SEO services.</p>
                                <a href="vm.php" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/ld.png" class="card-img-top" alt="SEO Services">
                                <div class="card-body">
                                    <h5 class="card-title">Logo Design</h5>
                                    <p class="card-text">Improve your search engine ranking.</p>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h5>Logo Design</h5>
                                <p>Boost your visibility and traffic with expert SEO services.</p>
                                <a href="logo.php" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
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
    <footer class="text-center py-3">
        <p>&copy; <?php echo date("Y"); ?> Digital Marketing Agency. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
