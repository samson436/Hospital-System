<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Matuu Mission Hospital</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        #red{
            color: red;
            font-weight: 600;
            font-size: 20px;
        }
    </style>
</head>

<div>
    <!-- Topbar Start -->
    <div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body py-2 pe-3 border-end" href=""><small>FAQs</small></a>
                    <a class="text-body py-2 px-3 border-end" href=""><small>Support</small></a>
                    <a class="text-body py-2 px-3 border-end" href=""><small>Privacy</small></a>
                    <a class="text-body py-2 px-3 border-end" href=""><small>Policy</small></a>
                    <a class="text-body py-2 ps-3" href=""><small>Career</small></a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>wwww.matuumissionhospital.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>0712582935</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-uppercase text-primary"><i class="far fa-smile text-primary me-2"></i>submit your feedback</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <a href="#feed" class="nav-item nav-link active">Feedback</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Rate Us</h1>
                <a href="index.html">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="feed.html">Feedback</a>
                <p class="mb-0">Rate us.</p>
                <p class="mb-0">Tell us how we can improve our services.</p>
                <p class="mb-0">Let's grow together.</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-secondary px-0">
        <div class="row g-0" id="feed">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Your Review will be much appriciated</h1>
                <form action="includes/feed.inc.php" method="post">
                <?php
                    if (isset($_GET["error"])) {
                if ($_GET["error"] == "invalidInput") {
                    echo "<p id='red'>Please take note that only Alphabetical letters are allowed!!</p>";
                } if ($_GET["error"] == "invalidEmai") {
                    echo "<p id='red'>Please enter valid email address!!</p>";
                } if ($_GET['error'] == "stmtFailde") {
                    echo "<p id='red'>Whoops something went wrong!!</p>";
                } if ($_GET['error'] == "thankYou"){
                    echo "<p id='red'>Thank you for your feedback!!</p>";
                }
            }
                    ?>
                    <div class="row g-3">
                        <div class="col-6">
                            <h6 style="color: red;">*Optional</h6>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-1" name="fname" placeholder="Full Name">
                                <label for="form-floating-1">Full Name</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <h6 style="color: red;">*Optional</h6>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="form-floating-2" name="email" placeholder="Email address">
                                <label for="form-floating-2">Email address</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <h6 style="color: red;">*Required</h6>
                            <div class="form-floating">
                                <textarea class="form-control" name="messu" placeholder="Message" id="form-floating-4" style="height: 150px" required></textarea>
                                <label for="form-floating-4">Message</label>
                              </div>
                        </div>
                       <!-- <div class="col-12">
                            <div class="form-group-mb3">
                                <input type="datetime-local" name="revdate" class="form-control">
                            </div>
                        </div> -->
                        <div class="col-12">
                            <button style="font-size: 25px;" class="btn btn-primary w-100 py-3" type="submit" name="submit-feed">Submit Feedback</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                  <!--<iframe class="position-relative w-100 h-100"-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31912.19326183531!2d37.53012706714715!3d-1.1432020466313042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1825ec0179842605%3A0x3d9c24dc6f115706!2sMatuu!5e0!3m2!1sen!2ske!4v1672421576458!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary p-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="index.html"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-secondary mb-2" href="about.html"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-secondary mb-2" href="service.html"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                    <a class="text-secondary" href="#feed"><i class="bi bi-arrow-right text-primary me-2"></i>Feedback</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Popular Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="index.html"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-secondary mb-2" href="about.html"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-secondary mb-2" href="service.html"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                   <a class="text-secondary" href="#feed"><i class="bi bi-arrow-right text-primary me-2"></i>feedback</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Matuu Kenya</p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i><a style="list-style: none; color: white;" href="mailto:matuumission3@gmail.com">Emial Us</a></p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>0712582935</p>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="m-0">&copy; <a class="text-secondary border-bottom" href="https://eosstp.com">Matuu Mission Hospital</a>. All Rights Reserved. Designed by <a class="text-secondary border-bottom" href="https://freewebsitecode.com">Samson Maluki</a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>