<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Clients - Digital Marketing Agency</title>

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
            background-color: white;
        }

        footer {
            background-color: #222;
            padding: 20px;
            text-align: center;
        }

        .client-card {
            background-color: #111;
            border: 1px solid #d4af37;
            margin-bottom: 30px;
            transition: transform 0.3s;
        }

        .client-card:hover {
            transform: scale(1.05);
        }

        .client-card img {
            width: 100%;
            height: auto;
        }

        .client-testimonial {
            padding: 15px;
            text-align: center;
        }

        .client-testimonial h5 {
            color: #d4af37;
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
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- Clients Section -->
    <section class="clients-section my-5">
        <div class="container">
            <h2>Our Valued Clients</h2>
            <p>
Matrycs is a top-notch Marketing agency in town. It has been honored of working with highly ranked countries of the world efficiently and successfully. We handle such success with care and do not take such esteem lightly. Our strategy is to work diligently and selflessly for the promotion and growth of our clientele. For us, the reputation of our client is as important as reputation of ourselves. We are capable and willing to put our reputation on line to ensure that they take out best from getting alliance with us.

</p>
            <div class="row">
                <!-- Client 1 -->
                <div class="col-md-4">
                    <div class="client-card">
                        <img src="images/client1.jpg" alt="Client 1">
                        <div class="client-testimonial">
                            <h5>Client Name 1</h5>
                            <p>“Brief testimonial or project description for Client 1 goes here.”</p>
                        </div>
                    </div>
                </div>
                <!-- Client 2 -->
                <div class="col-md-4">
                    <div class="client-card">
                        <img src="images/client2.jpg" alt="Client 2">
                        <div class="client-testimonial">
                            <h5>Client Name 2</h5>
                            <p>“Brief testimonial or project description for Client 2 goes here.”</p>
                        </div>
                    </div>
                </div>
                <!-- Client 3 -->
                <div class="col-md-4">
                    <div class="client-card">
                        <img src="images/client3.jpg" alt="Client 3">
                        <div class="client-testimonial">
                            <h5>Client Name 3</h5>
                            <p>“Brief testimonial or project description for Client 3 goes here.”</p>
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
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Digital Marketing Agency. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
