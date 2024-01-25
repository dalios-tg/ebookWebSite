<?php
include("login/php/userData.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About ZipBooks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="assets/icon.png">
    <style>
    a {
        text-decoration: none;
        color: black
    }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg  bg-white fixed-top " id="navbar" aria-label="Offcanvas navbar large">
        <div class="container-fluid">
            <a href="home.php">
                <img src="assets/logo.png" alt="logo de site web " class="mainNavLogo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2"
                aria-controls="offcanvasNavbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-white" tabindex="-1" id="offcanvasNavbar2"
                aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <img src="assets/logo.png" alt="logo de site web" class="logo"></a>

                    <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="home.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>

                        <li class="nav-item">

                            <div class="btn-group test">
                                <button type="button" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-person-lines-fill"></i>
                                    <?php
                                echo $userName;
                                ?>
                                    <!-- Display the user's name with an icon -->
                                </button>
                                <div class="test">
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item nav-link" href="profil.php"><i
                                                class="bi bi-person-fill"></i>
                                            Profile</a>
                                        <a class="dropdown-item nav-link" href="settings.php"><i
                                                class="bi bi-gear-fill"></i>
                                            Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item nav-link" href="login/login.php"><i
                                                class="bi bi-box-arrow-right"></i>
                                            Logout</a>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content - About Page -->
    <section class="container" style="margin-top:150px">
        <div class="row">
            <div class="col-lg-8">
                <h1>About ZipBooks</h1>
                <p>Welcome to ZipBooks, your go-to platform for downloading a wide range of books in various genres.
                    Whether you're an avid reader, a student, or someone looking to explore new worlds through
                    literature, ZipBooks has something for everyone.</p>

                <p>At ZipBooks, we believe in the power of knowledge and the joy of reading. Our platform is designed
                    to provide easy access to a diverse collection of books, covering topics from fiction to
                    non-fiction, educational to entertainment.</p>

                <p>Key Features:</p>
                <ul>
                    <li>Extensive Library: Explore a vast collection of books from different genres.</li>
                    <li>User-Friendly Interface: Enjoy a seamless browsing and downloading experience.</li>
                    <li>Accessibility: Access your favorite books anytime, anywhere.</li>

                </ul>

                <p>ZipBooks is committed to promoting literacy and fostering a love for reading. Join our community
                    today and embark on a journey of knowledge, imagination, and discovery!</p>
            </div>

            <!-- Sidebar (Optional) -->
            <div class="col-lg-4">
                <h2>Contact Us</h2>
                <p>If you have any questions, feedback, or suggestions, feel free to reach out to us:</p>
                <div class="d-flex align-items-center">

                    <p class="mr-2"><a href="mailto:mohamedbourchda123@gmail.com"><i class="bi bi-envelope-at"
                                style="font-size: 30px;margin-right:30px"></i></a></p>
                    <p><a href="tel:58690686"><i class="bi bi-telephone-outbound" style="font-size: 30px;"></i></a></p>
                </div>
            </div>
    </section>


    <!-- footer -->
    <footer class="bg-white text-center py-3 site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved <span
                            style="color:#FF6F03;text-decoration:underline">Mohamed
                            Ali
                            Bourchada</span>
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="https://www.facebook.com/mohamed.bourchada.7/"
                                target="_blank"><img src="assets/facebook.png" alt="facebook Icon" /></a>
                        </li>
                        <li><a class="twitter" href="https://twitter.com/MohamedBrrr" target="_blank"><img
                                    src="assets/twitter.png" alt="twitter Icon" /></a>
                        </li>
                        <li><a class="instagram" href="https://www.instagram.com/mohamed_bourchada/"
                                target="_blank"><img src="assets/instagram.png" alt="instagram Icon" /></a>
                        </li>
                        <li><a class="github" href="https://github.com/dalios-tg" target="_blank"><img
                                    src="assets/github.png" alt="github Icon" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>