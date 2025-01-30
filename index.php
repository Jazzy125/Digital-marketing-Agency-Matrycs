<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Agency</title>

    <!-- Bootstrap CSS -->
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
            height: 420px;
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

        /* Partners Section */
        .partners {
            background-color: #333;
            padding: 50px 0;
        }

        .partner-logos {
            display: flex;
            overflow: hidden;
            align-items: center;
        }

        .partner-logos img {
            width: 100px;
            margin: 0 20px;
            filter: grayscale(100%);
            transition: transform 0.3s, filter 0.3s;
        }

        .partner-logos img:hover {
            filter: grayscale(0);
            transform: scale(1.1);
        }

        @keyframes slide {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        .scrolling-logos {
            display: flex;
            animation: slide 20s linear infinite;
        }

        /* Clients & Projects Section */
        .clients-projects {
            background-color: #111;
            padding: 50px 0;
            text-align: center;
        }

        .clients-projects img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        /* Footer */
        footer {
            background-color: #222;
            padding: 20px;
        }
        .contact-form {
            background-color: #111;
            border: 1px solid #d4af37;
            padding: 30px;
            border-radius: 10px;
        }

        .form-control {
            background-color: #222;
            border: 1px solid #d4af37;
            color: white;
        }

        .form-control:focus {
            border-color: #d4af37;
            box-shadow: none;
        }

        .btn-submit {
            background-color: #d4af37;
            border: none;
            color: black;
        }

        .btn-submit:hover {
            background-color: #b59a2d;
        }
        /* WhatsApp Button Styling */
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

    </style>
</head>

<body>

    <!-- Startup Animation -->
    <div id="startup">
        <h1>We Innovate
        Design & Build</h1>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" href="#"> <img src="images/chalogo.png" alt="Logo" ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
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
    <section id="services" class="text-center my-5">
        <div class="container">
            <h2>Our Premium Services</h2>
            <p>Discover how we can elevate your digital presence</p>
            <div class="row">
    
            <!-- Service Card 1 -->
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="images/seo.png" class="card-img-top img-fluid" alt="SEO Services">
                            <h5 class="card-title">SEO Optimization</h5>
                        </div>
                        <div class="flip-card-back">
                            <h5 class="card-title">SEO Optimization</h5>
                            <p>Enhance your search engine ranking and visibility with our top-notch SEO services.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Card 2 -->
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="images/webb.png" class="card-img-top img-fluid" alt="Web Development">
                            <h5 class="card-title">Web Development</h5>
                        </div>
                        <div class="flip-card-back">
                            <h5 class="card-title">Web Development</h5>
                            <p>Boost your social presence and engage your audience effectively.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Card 3 -->
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="images/ppc.png" class="card-img-top img-fluid" alt="PPC Advertising">
                            <h5 class="card-title">PPC Campaigns</h5>
                        </div>
                        <div class="flip-card-back">
                            <h5 class="card-title">PPC Campaigns</h5>
                            <p>Targeted ads to drive traffic and increase your ROI efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center my-4">
    <a href="services.php" class="btn btn-outline-light btn-lg">View All Services</a>
</div>
</section>

    <!-- Clients & Projects Section -->
    <section id="clients" class="clients-projects">
        <div class="container">
            <h2>Our Projects</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="images/pj1.png" alt="Project 1">
                    <p>Red Stream</p>
                </div>
                <div class="col-md-4">
                    <img src="images/pj2.png" alt="Project 2">
                    <p>Taaza</p>
                </div>
                <div class="col-md-4">
                    <img src="images/pj3.png" alt="Project 3">
                    <p>Modern Portfolio</p>
                </div>
            </div>

        </div>
        <div class="text-center my-4">
    <a href="projects.php" class="btn btn-outline-light btn-lg">View All Projects</a>
</div>
    </section>

    <!-- Partners Section -->
    <section class="partners">
        <div class="container">
            <h2 class="text-center">Our Partners</h2>
            <div class="partner-logos">
                <div class="scrolling-logos">
                <img src="images/pt1.png" alt="Partner 1">
                <img src="images/pt22.png" alt="Partner 2">
                <img src="images/pt33.png" alt="Partner 3">
                <img src="images/pt44.png" alt="Partner 4">
                <img src="images/pt55.png" alt="Partner 5">
                </div>
            </div>
        </div>
        <div class="text-center my-4">
    <a href="Partner.php" class="btn btn-outline-light btn-lg">More Details</a>
</div>
    </section>

    
    <!-- Contact Section -->
    <section class="my-5">
        <div class="container">
            <h2 class="text-center">Contact Us</h2>
            <p class="text-center">We'd love to hear from you!</p>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form class="contact-form">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<!-- Fixed WhatsApp Button -->
<a href="https://wa.me/yourphonenumber" class="whatsapp-button" target="_blank">
    <i class="fa fa-whatsapp"></i>
</a>


<!-- Font Awesome Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- Footer -->
    <footer class="text-center">
        <p>&copy; <?php echo date("Y"); ?> Digital Marketing Agency. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
