<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Projects - Digital Marketing Agency</title>

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

        footer {
            background-color: #222;
            padding: 20px;
            text-align: center;
        }

        .project-card {
            background-color: #111;
            border: 1px solid #d4af37;
            margin-bottom: 30px;
            transition: transform 0.3s;
        }

        .project-card:hover {
            transform: scale(1.05);
        }

        .project-card img {
            width: 100%;
            height: auto;
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

    <!-- Projects Section -->
    <section class="projects-section my-5">
        <div class="container">
            <h2>Our Projects</h2>
            <div class="row">
                <!-- Project 1 -->
                <div class="col-md-4">
                    <div class="project-card">
                        <img src="images/pj1.png" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">Red Stream </h5>
                            <p class="card-text">Red Stream is a full stack website project based on online blood donation. This is a responsive and userfriendly website for making the process of blood donation easy.</p>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="col-md-4">
                    <div class="project-card">
                        <img src="images/pj2.png" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title">Taaza</h5>
                            <p class="card-text">Taaza is a full website project. It is a responsive restaurant website which provides online services related to a restaurant</p>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="col-md-4">
                    <div class="project-card">
                        <img src="images/pj3.png" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title">Modern Portfolio</h5>
                            <p class="card-text">Next.Js Website Tutorial: Create a Stunning Portfolio Website with Nextjs, Tailwind CSS and Framer-motion</p>
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
