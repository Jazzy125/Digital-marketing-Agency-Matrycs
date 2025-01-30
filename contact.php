<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Digital Marketing Agency</title>

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

        footer {
            background-color: #222;
            padding: 20px;
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
<a href="https://wa.me/923241299269" target="_blank" class="whatsapp-button">
    <i class="fab fa-whatsapp"></i>
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
