<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Lien d'importation librairie Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <!-- lien symbolique vers ma feuille de style -->
    <link rel="stylesheet" href="styles/styles.css" type="text/css">

    <!-- lien symbolique vers la typographie GoogleFont -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet">

    <!-- Lien Font Awesome Icon -->
    <script src="https://kit.fontawesome.com/abd58e4b6e.js" crossorigin="anonymous"></script>

     <title><?='Booking.com - ' . $title ?></title>
</head>
<body>
    <!-- Header -->
    <header class="main-header">
        <!-- NavBar Bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand text-dark" href="#">
                    <img src="images/anchor-grey.png" alt="logo-my-portfolio" id="logo">
                </a>
                <div class="title">Booking.com</div>

                <!-- Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarItems" aria-controls="navbarItems" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- NavBar Navigation -->
                <class class="collapse navbar-collapse" id="navbarItems">
                    <ul class="navbar-nav ml-auto">

                    <!-- <?php if ($u_role == 1): ?> -->
                    <!-- <?php endif; ?> -->
                        <li class="nav-item">
                            <a class="nav-link items" href="booking.php">Mes annonces</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link items" href="#!">Destinations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link items" href="#!">Meilleurs offres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link items" href="account.php">Mon compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link items" href="#!">Contact</a>
                        </li>
                    </ul>
                </class>
            </div>
        </nav>
        <!-- End NavBar -->
    </header>

    <div>
        <?= $content ?>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark mt-5">
        <!-- Grid -->
        <div class="footer-bkg" style="background-color: whitesmoke;">
            <div class="container">

                <!-- Background -->
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 contact">Get connected with us on social networks!</h6>
                    </div>
                    <!-- Icons -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!-- Facebook -->
                        <a class="fb-ic" href="https://www.facebook.com/emilie.vllr/" target="_blank"><i class="fab fa-facebook-f mr-4 icons"></i></a>
                        <!-- Twitter -->
                        <a class="tw-ic" href="https://emilievilliere.portfoliobox.net/?fbclid=IwAR07QNXQFRQHiOp8xQZGFrl9R-RBQhUyYYzgJ42R0lIZvK7HT9hY48HnXCk" target="_blank"><i class="fab fa-behance icons"></i></a>
                        <!-- Google +-->
                        <a class="gplus-ic" href="mailto:emilie.vllr@gmail.com" target="_blank"><i class="fab fa-google-plus-g mr-4 icons"></i></a>
                        <!--Linkedin -->
                        <a class="li-ic" href="https://www.linkedin.com/in/emilie-villiere-91567913a/" target="_blank"><i class="fab fa-linkedin-in mr-4 icons"></i></a>
                        <!--Instagram-->
                        <a class="ins-ic" href="https://www.instagram.com/waterlilied/?hl=fr" target="_blank"><i class="fab fa-instagram icons"></i></a>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">
            <div class="row mt-3">
                <div class="col-md-5 mx-2 mb-4">
    
                <!-- Menu -->
                <h6 class="text-uppercase font-weight-bold">Products</h6>
                <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!" class="footer-link">MDBootstrap</a>
                    </p>
                    <p>
                        <a href="#!" class="footer-link">MDWordPress</a>
                    </p>
                    <p>
                        <a href="#!" class="footer-link">BrandFlow</a>
                    </p>
            </div>

            <!-- Contact  -->
            <div class="col-md-5 mx-2 mb-4">
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                <p>
                    <i class="fas fa-home mr-3"></i> Lille, NORD 59000, FR</p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> emilie.vllr@gmail.com</p>
                <p>
                    <i class="fas fa-phone mr-3"></i> +33 06 50 50 50 50 </p>
    
            </div>   
        </div>

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">Made with
            <i class="fas fa-heart mr-3"></i>
            <a href="mailto:emilie.vllr@gmail.com" class="made">by Me</a>
        </div>
    
    </footer>

    <!-- Liens d'importation Javascript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>