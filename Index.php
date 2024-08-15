<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI Beginner's Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <nav class="container navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Your Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>
                </li>
                </ul>
                <button class="btn btn-secondary" type="submit">Sign In</button>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container text-center text-white">
            <div class="row">
                <div class="col-md-4">
                    <div class="hero-cl-01">
                        <div class="d1">
                            <h1>UI</h1>
                        </div>
                        <div class="d2">
                            <p>Beginner</p>
                        </div>
                        <div class="d3">
                            <ul class="custom-list">
                                <li>Become a <br>Pro-Designer</li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="col-md-4">
                    <img src="./img/Person.png" class="img-fluid" alt="UI Design">
                </div>
                <div class="col-md-4 hero-cl-02">
                    <h4>Start Guide for BEginner <br> Designer</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore .</p>
                    <div><button class="btn btn-primary" type="submit">Let's Start</button>
                        <button class="btn btn-outline" type="submit">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="challenges text-center text-white py-5">
        <div class="container">


            <?php

$counterArray = [
    [
        'id' => 1,
        'title' => 'Happy students',
        'count' => 150
    ],
    [
        'id' => 2,
        'title' => 'Certified courses',
        'count' => 50
    ],
    [
        'id' => 3,
        'title' => 'Awards received',
        'count' => 1000
    ],
];
echo  "<div class=\"row\">";
foreach ($counterArray as $counter) {
   
    echo  "<div class=\"col-md-4 d-flex justify-content-center align-items-center\">"; ?>
            <div class="d-flex align-items-center p-3"> <span class="material-symbols-outlined add-icon">add</span>
                <?php echo " <h1>" . $counter['count'] . "</h1> </div>";
    echo "<h5 class=\"text-start\">" . preg_replace('/\s+/', '<br>', $counter['title'], 1) . "</h5>";
    
    echo " </div>";
   
}
echo " </div>";

?>



            </div>
    </section>

    <section class="container">
        <div class="js-load">
            <h1 class="challenge-text" id="random-text"></h1>
        </div>
    </section>

    <section class=" container  courses py-5">
        <div class="container text-center">
            <h2>Find Your Course</h2>
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Single Slide with 6 Columns -->
                    <div class="carousel-item active">
                        <div class="carousel-slide">

                            <div class="col-md-3 col-sm-1 p-3">
                                <div class="slider-card">
                                    <p class="card-number">.01</p>
                                    <div class="card-body px-4 py-5">
                                        <h1 class="card-title">
                                            <span class="course">Course </span> <span class="number">01 </span>
                                        </h1>
                                        <hr class="styled-hr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et.</p>
                                        <button class="btn btn-primary"> Read More </button>
                                    </div>



                                </div>
                            </div>

                            <div class="col-md-3 col-sm-1  p-3">
                                <div class="slider-card">
                                    <p class="card-number">.02</p>
                                    <div class="card-body px-4 py-5">
                                        <h1 class="card-title">
                                            <span class="course">Course </span> <span class="number">02 </span>
                                        </h1>
                                        <hr class="styled-hr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et.</p>
                                        <button class="btn btn-primary"> Read More </button>
                                    </div>



                                </div>
                            </div>

                            <div class="col-md-3 col-sm-1 p-3">
                                <div class="slider-card">
                                    <p class="card-number">.03</p>
                                    <div class="card-body px-4 py-5">
                                        <h1 class="card-title">
                                            <span class="course">Course </span> <span class="number">03 </span>
                                        </h1>
                                        <hr class="styled-hr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et.</p>
                                        <button class="btn btn-primary"> Read More </button>
                                    </div>



                                </div>
                            </div>

                            <div class="col-md-3 col-sm-1 p-3">
                                <div class="slider-card">
                                    <p class="card-number">.04</p>
                                    <div class="card-body px-4 py-5">
                                        <h1 class="card-title">
                                            <span class="course">Course </span> <span class="number">04 </span>
                                        </h1>
                                        <hr class="styled-hr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et.</p>
                                        <button class="btn btn-primary"> Read More </button>
                                    </div>



                                </div>
                            </div>

                            <div class="col-md-3 col-sm-1 p-3">
                                <div class="slider-card">
                                    <p class="card-number">.05</p>
                                    <div class="card-body px-4 py-5">
                                        <h1 class="card-title">
                                            <span class="course">Course </span> <span class="number">05 </span>
                                        </h1>
                                        <hr class="styled-hr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et.</p>
                                        <button class="btn btn-primary"> Read More </button>
                                    </div>



                                </div>
                            </div>
                            <div class="col-md-3 col-sm-1 p-3">
                                <div class="slider-card">
                                    <p class="card-number">.06</p>
                                    <div class="card-body px-4 py-5">
                                        <h1 class="card-title">
                                            <span class="course">Course </span> <span class="number">06 </span>
                                        </h1>
                                        <hr class="styled-hr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et.</p>
                                        <button class="btn btn-primary"> Read More </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </section>

    <footer class="bg-purple text-white text-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="footer-tag">About</h4>
                    <ul class="list-unstyled">
                        <li>History</li>
                        <li>Our Team</li>
                        <li>Mission Statement</li>
                        <li>Terms & Condition</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-tag">What we do</h4>
                    <ul class="list-unstyled">
                        <li>News and stories</li>
                        <li>Publications</li>
                        <li>Take action</li>
                        <li>Recomendations</li>
                        <li>Help</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4 class="newsletter-tag">Sign Up To Receive <br> Our Newsletter</h4>
                    <form class="d-flex justify-content-center">
                        <input type="email" class="form-control me-2 news-input" placeholder="Your Email">
                    </form>
                    <div class="social-icons mt-3 d-flex align-items-center">
                        <p>follow us</p>
                        <a href="https://www.example.com" target="_blank">
                        <img class="s-icons" src="./icons/facebook-f-brands-solid.svg" alt="SVG Icon">
                        </a>
                        <a href="https://www.example.com" target="_blank">
                        <img class="s-icons" src="./icons/instagram-brands-solid.svg" alt="SVG Icon">
                        </a>
                        <a href="https://www.example.com" target="_blank">
                        <img class="s-icons" src="./icons/youtube-brands-solid.svg" alt="SVG Icon" >
                        </a>
                      
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="./data.js"></script>
</body>

</html>