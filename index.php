<?php
if(isset($_POST["send"])){
    $name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$msg = $_POST["message"];

    $to = "support@wixyco.com";
    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(!mail($to, $subject, $msg, $mailHeaders)) {
	    echo "<script>alert('Your contact information is not received');</script>";
	   
	}else{
	      echo "<script>alert('Your contact information is received successfully');</script>";
	}
    
}


?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIXYCO</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mdb/css/bootstrap.min.css">
    <link rel="stylesheet" href="mdb/css/mdb.min.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@900&display=swap" rel="stylesheet">

</head>

<body>
    <!--Main Navigation-->
    <header>
        <nav class="navbar navbar-expand-md shadow-0">
            <h1 class="navbar-brand brandname ml-4 p-0">WIXYCO</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="img/bar.png" alt="bar" width="25" height="25">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item navbaritems  navactive px-4">
                        <a class="nav-link navlinks" href="#">Home</a>
                    </li>
                    <li class="nav-item navbaritems  px-4">
                        <a class="nav-link navlinks" href="#Services">Services</a>
                    </li>
                    <li class="nav-item navbaritems  px-4">
                        <a class="nav-link navlinks" href="#projects">Projects</a>
                    </li>

                    <li class="nav-item  navbaritems px-4">
                        <a class="nav-link navlinks" href="#contactus">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- particles.js container -->

        <div class="view jarallax intro-2">
            <div id="particles-js">
                <div class="mask rgba-black-light flex-center">
                    <div class="container text-center white-text wow fadeInUp">
                        <h1 class="mb-3">Your Imagination Our Effort</h1>
                        <p class="mb-3">ABOUT US</p>
                        <h2 class="mb-4 text-capitalize">We offers <span class="typedelement text-warning"></span> Services</h2>

                        <h5 class="headinglines" style="position: relative;"> Wixyco is a digital product agency offering<br class="d-none d-md-block"> custom software, mobile, and web application development consulting. <br class="d-none d-md-block">Our firm provides exceptional professional services in strategy, user experience,<br class="d-none d-md-block">  design, and full stack engineering to bring brilliant digital ideas<br class="d-none d-md-block"> into being for forward-thinking clients</h5>

                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--Main Navigation-->

    <!--Main Layout-->
    <main class="text-center">
    <!-- Services -->
        <div class="container" id="Services">
            <!-- Section -->
            <section>
                <div class="neon-wrapper">
                    <span class="head_text" data-text="Services">Services</span>
                    <span class="gradient"></span>
                    <span class="dodge"></span>
                </div>


                <p class="text-center text-capitalize pt-2 mb-5 txt_des">In today’s digital world, your website is the first interaction consumers have with your business. We offer our client best of best
                    products. We offers services like web designing, web application developement, mobile application
                    development, digital marketing, and much more.
                </p>
                <div class="row p-5 my-5 mx-2 servicecards d-flex">
                    <div class="col-12 col-lg-8 col-md-8">
                        <h1 class="font-weight-bold">Web Design & Development</h1><br>
                        <p class="">We offer software development services to both large and small businesses to help
                            them make their workflow more efficient, straightforward and provide an excellent customer
                            experience. We achieve this by delivering high quality and affordable custom web application
                            development services. We design and develop web-based software products using HTML,CSS,
                            JAVASCRIPT, PHP, BOOTSTRAP, MYSQL, AND MANY MORE.</p>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 d-flex justify-content-center align-items-center">
                        <img class="img-fluid js-tilt servicesicons" src="img/frontend-development.svg" alt="servicesicons">
                    </div>

                </div>

                <div class="row p-5 my-5 mx-2 servicecards">
                    <div class="col-12 col-lg-4 col-md-4 mb-4 d-flex justify-content-center align-items-center">
                        <img class="img-fluid js-tilt servicesicons" src="img/pwadeveloper.svg" alt="servicesicons">
                    </div>

                    <div class="col-12 col-lg-8 col-md-8">
                        <h1 class="font-weight-bold">Mobile Application Development</h1><br>
                        <p class="align-items-center">We offer a full cycle of application design, integration and
                            management services.We
                            are living in a mobile-first society. More often than not, modern businesses require some
                            form of mobile app. Wixyco specializes in mobile-first design, and can develop and deploy
                            cutting-edge hybrid or native apps onto any app store.</p>
                    </div>

                </div>

                <div class="row p-5 my-5 mx-2 servicecards">


                    <div class="col-12 col-lg-8 col-md-8">
                        <h1 class="font-weight-bold">Digital Marketing</h1><br>
                        <p class="">We have a very strategic approach to Digital Marketing and consider all the
                            different ways to grow brands and drive sales online. With digital marketing, your business
                            can expand into new areas, hire additional team members, and achieve tremendous
                            accomplishments in your industry.</p>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 mb-4 d-flex justify-content-center align-items-center">

                        <img class="img-fluid js-tilt servicesicons" src="img/digital market.svg" alt="servicesicons">

                    </div>
                </div>

                <div class="row p-5 my-5 mx-2 servicecards">
                    <div class="col-12 col-lg-4 col-md-4 mb-4 d-flex justify-content-center align-items-center">
                        <img class="img-fluid js-tilt servicesicons" src="img/pwadeveloper.svg" alt="servicesicons">
                    </div>

                    <div class="col-12 col-lg-8 col-md-8 ">
                        <h1 class="font-weight-bold">Progressive Web Applications Development</h1><br>
                        <p class="">We offers progressive web application development for scalable and best quality
                            products for our customers.Progressive Web Applications combine advantages of both mobile
                            apps and the web, delivering more advanced user experiences. Businesses increasingly are
                            turning to PWAs to meet expectations of today’s sophisticated users while minimizing
                            development and maintenance costs.</p>
                    </div>

                </div>

            </section>
            <!-- Section -->

        </div>
        <!-- Services -->
        <!-- start life cycle coding -->

        <div class="container-fluid text-white px-0 overflow-hidden" id="life_cycle">
            <div class="mask rgba-black-strong">
                <div class="neon-wrapper py-5 d-none d-md-block">
                    <span class="head_text" data-text="Our software development cycle">Our software development cycle</span>
                    <span class="gradient"></span>
                    <span class="dodge"></span>
                </div>
                <div class=" py-5 d-block d-md-none">
                    <div class="neon-wrapper">
                        <span class="head_text" data-text="Our software">Our software</span>
                        <span class="gradient"></span>
                        <span class="dodge"></span>
                    </div><br>
                    <div class="neon-wrapper">
                        <span class="head_text" data-text="Development cycle">Development cycle</span>
                        <span class="gradient"></span>
                        <span class="dodge"></span>
                    </div>
                </div>
                

                <div class="row mb-0 mb-md-5">
                    <div class="col-md-4 mb-5">
                        <img src="img/life-cycle/understanding-requirement.png" alt="understanding-requirement">
                        <h5 class="mt-4 mb-2">STEP 1</h5>
                        <p>UNDERSTANDING REQUIREMENT</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <img src="img/life-cycle/defining-project.png" alt="defining-project">
                        <h5 class="mt-4 mb-2">STEP 1</h5>
                        <p>DEFINING PROJECT</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <img src="img/life-cycle/creating-wireframe.png" alt="creating-wireframe">
                        <h5 class="mt-4 mb-2">STEP 3</h5>
                        <p>CREATING WIREFRAME</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-5">
                        <img src="img/life-cycle/designing-initial-concept.png" alt="designing-initial-concept">
                        <h5 class="mt-4 mb-2">STEP 4</h5>
                        <p>DESIGNING INITIAL CONCEPT</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <img src="img/life-cycle/testing-delivery.png" alt="testing-delivery">
                        <h5 class="mt-4 mb-2">STEP 5</h5>
                        <p>TESTING AND DELIVERY</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <img src="img/life-cycle/free-maintenance.png" alt="free-maintenance">
                        <h5 class="mt-4 mb-2">STEP 6</h5>
                        <p>MAINTENANCE</p>
                    </div>
                </div>
            </div>
        </div>

    <!-- end life cycle coding -->

    <div style="height: 400px;"></div>

        <!-- PRoject DIV -->

        <div class="container-fluid py-5 d-none" id="projects ">
            <div class="neon-wrapper">
                <span class="head_text" data-text="OUR BEST PROJECTS">OUR BEST PROJECTS</span>
                <span class="gradient"></span>
                <span class="dodge"></span>
            </div>

            <p class="text-center text-capitalize pt-2 mb-5 txt_des">We Have Worked On Some Interesting Projects And
                We Have Created Some Great Products For Our Clients.
            </p>
            <div class="container">
                <div class="row">

                    <div class="grid">
                        <div class="col-12 col-lg-4 projectdiv mr-2 my-3">
                            <figure class="effect-sadie ">
                                <img src="img/AGRI.jpg" alt="img02" />
                                <figcaption>
                                    <h2 class="projectsname">MAX <span>RICE</span></h2>
                                    <p>how increase the productivity of rice</p>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="col-12 col-lg-4 projectdiv mr-2 my-3">
                            <figure class="effect-sadie">
                                <img src="img/COCO.png" alt="img14" />
                                <figcaption>
                                    <h2 class="projectsname">COMPARE COLLEGE</h2>
                                    <p>find the best nearest college </p>
                                </figcaption>
                            </figure>
                        </div>


                        <div class="col-12 col-lg-4 projectdiv my-3">
                            <figure class="effect-sadie">
                                <img src="img/pg-goo.jpg" alt="img14" />
                                <figcaption>
                                    <h2 class="projectsname">PG-GOO</h2>
                                    <p>Paying Guest Searching System</p>
                                </figcaption>
                            </figure>

                        </div>


                    </div>
                </div>

            </div>


        </div>
        <!-- PRoject DIV -->

        <!-- contact us -->
        <div class="container my-5 py-5 z-depth-2 text-white  d-none">


            <!--Section: Content-->
            <section class="text-center px-md-5 mx-md-5 dark-grey-text">

                <!-- Section heading -->
            <div class="neon-wrapper">
                <span class="head_text" data-text="Contact Us">Contact Us</span>
                <span class="gradient"></span>
                <span class="dodge"></span>
            </div>
                <!-- Section description -->
                <p class="text-center w-responsive mx-auto mb-5 txt_des">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit.
                    Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                    quisquam
                    eum porro a pariatur veniam.</p>

                <!-- Grid row -->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-8 col-xl-9">
                        <form id="myForm" action="#" method="post">
                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Your name" required />
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <input type="text" id="email" name="email" class="form-control"
                                            placeholder="Your email" required />
                                    </div>
                                </div>
                                <!--Grid column-->
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <input type="text" id="subject" name="subject" placeholder="Subject"
                                            class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <textarea type="text" name="message" id="body" class="md-textarea form-control"
                                            rows="3" placeholder="Your message" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-unique rounded-pill" type="submit" name="send" value="Send An Email">
                                Send <i class="fas fa-paper-plane-o ml-1"></i>
                            </button>
                            <!--Grid row-->
                            <!-- <div class="text-center text-md-left my-4">
  
                                                  </div> -->
                        </form>
                    </div>

                    <!--Grid column-->

                    <!-- Grid column -->
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <i class="fas fa-map-marker-alt fa-2x blue-text"></i>
                                <p>Guwahati, Assam</p>
                            </li>
                            <!-- <li>
                                <i class="fas fa-phone fa-2x mt-4 blue-text"></i>
                                <p><a href="tel:+80000000" class="text-muted">+91-25654546</a></p>
                            </li> -->
                            <li>
                                <i class="fas fa-envelope fa-2x mt-4 blue-text"></i>
                                <p class="mb-0"><a class="text-muted text-white"
                                        href="mailto:wixyco@support.com">wixyco@support.com</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!--Section: Content-->


        </div>
        <!-- contact us -->


    </main>
    <!--Main Layout-->
    <!-- Footer -->
    <footer class="page-footer font-small bg-transparent darken-1 d-none">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#"> Wixyco.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->




    <script src="mdb/js/jquery.min.js"></script>
    <script src="mdb/js/bootstrap.min.js"></script>
    <script src="mdb/js/mdb.min.js"></script>
    <script src="mdb/js/popper.min.js"></script>
    <script src="mdb/js/tilt.jquery.min.js"></script>
    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="typed.min.js"></script>
    <script src="script.js"></script>
    <script>
        var typed = new Typed('.type_txt', {
    stringsElement: ["dev","ram","pink"],
    typeSpeed : 50,
    backSpeed : 50,
    loop : true
  });
    </script>
</body>

</html>
