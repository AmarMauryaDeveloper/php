<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="Design/css/bootstrap.min.css">
    <!-- You don't need to include Bootstrap CSS twice. Just one is enough. -->
    <link rel="stylesheet" href="Design/css/styles.css"> <!-- Replace with your custom CSS file -->
    <style>
        .footer-link {
            padding: 15px 0 8px;
            background-color: gray;
        }

        .tt {
            text-align: center;
        }

        @media (min-width: 300px) and (max-width: 991px) {
            .agi {
                font-size: 10px;
            }
        }
    </style>
</head>

<body>
    <header class="navbar navbar-expand-md navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="photo/logo.png" alt="logo" style="width: 250px; height: auto;">
            </a>
            <div class="agi ml-auto">
                <h5 style="color: #1a8cff"><i>Tomorrow's Future<br>
                        <center> Is Here</center>
                    </i></h5>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand" href="en">Homes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT THE COLLEGE</a>
                        <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <a class="dropdown-item" href="#">Item 1</a>
                            <a class="dropdown-item" href="#">Item 2</a>
                            <a class="dropdown-item" href="#">Item 3</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="departmentDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DEPARTMENT</a>
                        <div class="dropdown-menu" aria-labelledby="departmentDropdown">
                            <a class="dropdown-item" href="#">Item 1</a>
                            <a class="dropdown-item" href="#">Item 2</a>
                            <a class="dropdown-item" href="#">Item 3</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CONTACT</a>
                        <div class="dropdown-menu" aria-labelledby="contactDropdown">
                            <a class="dropdown-item" href="#">Item 1</a>
                            <a class="dropdown-item" href="#">Item 2</a>
                            <a class="dropdown-item" href="#">Item 3</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="udrcDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UDRC LOGIN</a>
                        <div class="dropdown-menu" aria-labelledby="udrcDropdown">
                            <a class="dropdown-item" href="#">Item 1</a>
                            <a class="dropdown-item" href="#">Item 2</a>
                            <a class="dropdown-item" href="#">Item 3</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- start slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block " src="photo/admin.jpeg" alt="First slide" width="100%" height="750px">
            </div>
            <div class="carousel-item">
                <img class="d-block " src="photo/teacher.jpeg" alt="Second slide" width="100%" height="750px">
            </div>
            <div class="carousel-item">
                <img class="d-block " src="photo/agi2.jpg" alt="Third slide" width="100%" height="750px">
            </div>
            <div class="carousel-item">
                <img class="d-block " src="photo/agi.jpg" alt="forth slide" width="100%" height="750px">
            </div>
            <div class="carousel-item">
                <img class="d-block " src="photo/agi4.jpg" alt="fivth slide" width="100%" height="750px">
            </div>
            <div class="carousel-item">
                <img class="d-block " src="photo/agi5.jpg" alt="sixth slide" width="100%" height="750px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- end slider -->

        <!-- start footer -->
        <footer class="footer bg-dark text-light">
            <div class="container">
                <div class="row ms-5">
                    <div class="col-md-4 mt-5">
                        <ul class="list" style="list-style-type:none;">
                            <li class="list-head">
                                <h6>About Us</h6>
                                <hr style="background-color:white">
                            <li class="list-body">
                                <a href="" class="logo">
                                    <img src="photo/logo.png" alt="collage img" style="width: 250px; height: auto;">
                                </a>

                            </li>
                            <li>
                                <!-- <li>more list about US</li> -->
                            </li>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mt-5">
                        <h5>Useful Link</h5>
                        <hr style="background-color:white;">
                        <ul class="list-unstyled">
                            <li><a href="">Home</a></li>
                            <li><a href="">service</a></li>
                            <li><a href="">contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mt-5">
                        <h5>Contact Info</h5>
                        <hr style="background-color:white">
                        <ul class="list-unstyled">
                            <li><a href="">+919919497477</a></li>
                            <li><a href="">agi2008@gamil.com</a></li>
                            <li><a href="">katavara BKT Lucknow utterpradesh</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
</body>
<!-- Include Bootstrap 5 JavaScript and jQuery -->
<script src="Design/jquery/code.jquery.com_jquery-3.7.1.slim.min.js"></script>
<script src="Design/js/bootstrap.min.js"></script>

</html>