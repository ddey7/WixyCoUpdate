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
    <title>WixyCo</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mdb/css/bootstrap.min.css">
    <link rel="stylesheet" href="mdb/css/mdb.min.css">


</head>

<body>

  

    <!--Main Navigation-->
    <header>



        <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar py-3 z-depth-5">
            <h3 class="navbar-brand h1-responsive navbrand pl-5 brandname" data-tilt="">WIXYCO</h3>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="img/bar.png" alt="bar" width="25" height="25">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item navbaritems  navactive px-5">
                        <a class="nav-link navlinks" href="#">Home</a>
                    </li>
                    <li class="nav-item navbaritems  px-5">
                        <a class="nav-link navlinks" href="#Services">Services</a>
                    </li>
                    <li class="nav-item navbaritems  px-5">
                        <a class="nav-link navlinks" href="#projects">Projects</a>
                    </li>

                    <li class="nav-item  navbaritems px-5">
                        <a class="nav-link navlinks" href="#contactus">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- particles.js container -->

        <div class="view jarallax intro-2">
            <div class="full-bg-img ">

                <div id="particles-js">
                    <div class="mask rgba-black-light flex-center">
                        <div class="container text-center white-text wow fadeInUp">
                            <h1 class="typedelement wow animated fadeInUp" data-tilt></h1>

                            <h5 class="headinglines" style="position: relative;"> Wixyco is a digital product agency
                                offering custom software,
                                mobile, and web
                                application <br>
                                development consulting. Our firm provides exceptional professional services in
                                strategy,<br>
                                user experience, design, and full stack engineering to bring brilliant digital ideas
                                into being for forward-thinking clients</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--Main Navigation-->

    <!--Main Layout-->
    <main class="text-center ">



        <!-- Services -->
        <div class="container py-5 " id="Services">

            <!-- Section -->
            <section>

                <h1 class="font-weight-bold text-center text-uppercase dark-grey-text pb-2">Services</h1>

                <p class="text-center text-capitalize text-muted pt-2 mb-5">We offer our client best of best
                    products. We offers services like web designing, web application developement, mobile application
                    development, digital marketing, and much more.
                </p>

                <div class="row p-5 z-depth-5 m-5 servicecards d-flex">
                    <div class="col-12 col-lg-6 col-md-6">
                        <h2 class="font-weight-bold">Web Design & Development</h2><br>
                        <p class="">We offer software development services to both large and small businesses to help
                            them make their workflow more efficient, straightforward and provide an excellent customer
                            experience. We achieve this by delivering high quality and affordable custom web application
                            development services. We design and develop web-based software products using HTML,CSS,
                            JAVASCRIPT, PHP, BOOTSTRAP, MYSQL, AND MANY MORE.</p>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 " data-tilt>
                        <img class="img-fluid js-tilt servicesicons" src="img/frontend-development.svg" alt="">
                    </div>

                </div>

                <div class="row p-5 z-depth-5  m-5 servicecards">
                    <div class="col-12 col-lg-6 col-md-6 mb-4" data-tilt>
                        <img class="img-fluid js-tilt servicesicons" src="img/pwadeveloper.svg" alt="">
                    </div>

                    <div class="col-12 col-lg-6 col-md-6">
                        <h2 class="font-weight-bold">Mobile Application Development</h2><br>
                        <p class="align-items-center">We offer a full cycle of application design, integration and
                            management services.We
                            are living in a mobile-first society. More often than not, modern businesses require some
                            form of mobile app. Wixyco specializes in mobile-first design, and can develop and deploy
                            cutting-edge hybrid or native apps onto any app store.</p>
                    </div>

                </div>

                <div class="row p-5 z-depth-5  m-5 servicecards">


                    <div class="col-12 col-lg-6 col-md-6">
                        <h2 class="font-weight-bold">Digital Marketing</h2><br>
                        <p class="">We have a very strategic approach to Digital Marketing and consider all the
                            different ways to grow brands and drive sales online. With digital marketing, your business
                            can expand into new areas, hire additional team members, and achieve tremendous
                            accomplishments in your industry.</p>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 mb-4" data-tilt>

                        <img class="img-fluid js-tilt servicesicons" src="img/digital market.svg" alt="">

                    </div>
                </div>

                <div class="row p-5 z-depth-5  m-5 servicecards">
                    <div class="col-12 col-lg-6 col-md-6 mb-4" data-tilt>
                        <img class="img-fluid js-tilt servicesicons" src="img/pwadeveloper.svg" alt="">
                    </div>

                    <div class="col-12 col-lg-6 col-md-6 ">
                        <h2 class="font-weight-bold">Progressive Web Applications Development</h2><br>
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



        <!-- PRoject DIV -->

        <div class="container-fluid py-5" id="projects">
            <h1 class="font-weight-bold text-center text-uppercase dark-grey-text pb-2">OUR BEST PROJECTS</h1>

            <p class="text-center text-capitalize text-muted pt-2 mb-5">We Have Worked On Some Interesting Projects And
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
        <div class="container my-5 py-5 z-depth-2 text-white">


            <!--Section: Content-->
            <section class="text-center px-md-5 mx-md-5 dark-grey-text">

                <!-- Section heading -->
                <h3 class="font-weight-bold mb-4">Contact Us</h3>
                <!-- Section description -->
                <p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing
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
    <footer class="page-footer font-small bg-transparent darken-1">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#"> Wixyco.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    </div>


    <script src="mdb/js/jquery.min.js"></script>
    <script src="mdb/js/bootstrap.min.js"></script>
    <script src="mdb/js/mdb.min.js"></script>
    <script src="mdb/js/popper.min.js"></script>
    <script src="mdb/js/tilt.jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"></script>
    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
