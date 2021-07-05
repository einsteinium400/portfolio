<?php 

    //create a mySQL DB connection:
	$dbhost = "182.50.133.173";
	$dbuser = "studDB21a";
	$dbpass = "stud21DB1!";
	$dbname = "studDB21a";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    //testing connection success
    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
        );
    }
?>


<?php 

	//get data from DB
    $query 	= "SELECT * FROM portfolio_danashemtov order by projectID";
	$result = mysqli_query($connection, $query);

    if(!$result) {
        die("DB query failed.");
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dana shem tov portfolio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">Dana Shem-Tov</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#experience" class="nav-item nav-link">Experience</a>
                    <a href="#service" class="nav-item nav-link">Projects</a>
                    <!-- <a href="#contactme" class="nav-item nav-link">contact</a> -->
                    <!-- <a href="#price" class="nav-item nav-link">Price</a>
                    <a href="#review" class="nav-item nav-link">Review</a>
                    <a href="#team" class="nav-item nav-link">Team</a>
                    <a href="#blog" class="nav-item nav-link">Blog</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Hero Start -->
    <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <p>I'm</p>
                            <h1>Dana Shem-Tov</h1>
                            <h2></h2>
                            <div class="typed-text">Developer, Engineer</div>
                        </div>
                        <div class="hero-btn">
                            <a class="btn" href="">Hire Me</a>
                            <a class="btn" href="">Contact Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <!-- <img src="img/hero.jpg" alt="Hero Image"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->




    <!-- Experience Start -->
    <div class="experience" id="experience">
        <div class="container">
            <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>My Resume</p>
                <h2>Working Experience</h2>
            </header>
            <div class="timeline">
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2019-present</div>
                        <h2>Software Engineering student</h2>
                        <h4>Shenkar college</h4>
                        <p>
                            Knowledge in c, c++, python, css, html, js, SQL
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2019-2019</div>
                        <h2>Researcher</h2>
                        <h4>Prime minister office</h4>
                        <p>
                            classified
                        </p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2016-2018</div>
                        <h2>8200 graduate</h2>
                        <h4>IDF</h4>
                        <p>
                        Worked and developed with python as main scripting & programming language

                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2015-2016</div>
                        <h2>certified electronics technician</h2>
                        <h4>ort holon college</h4>
                        <p>
                            Electronics and computers Certified technician
                        </p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2010-2014</div>
                        <h2>Electronics major</h2>
                        <h4>ort holon college</h4>
                        <p>
                            High School studies in the subjects of electronics and computers
                        </p>
                    </div>
                    
                </div>
            </div>
                    <a class="clickpdf" href="danaCV2020.pdf">view pdf cv</a>

        </div>

    </div>
    <!-- Job Experience End -->




    <!-- Service Start -->
    <div class="service" id="service">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>What I do</p>
                <h2>Awesome Projects!</h2>
            </div>
            <div class="row">
            
          





            <!-- fetching data! -->
            <?php 
            while($row = mysqli_fetch_assoc($result)) {//results are in associative array. keys are cols names
                //output data from each row
              //  echo '<h2>'.$result. '</h2>';
                echo ' <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">';
                echo    '<div class="service-item">';
                echo    '<div class="service-icon">';
                echo    '<i class="fa fa-laptop"></i>';
                echo    '</div>';
                echo    '<div class="service-text">';
                echo    '<h3>'.$row["name"].'</h3>' ;
                //modal button
                echo '        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#'.$row["name"].'" >
                view description
                </button>
                <div class="modal fade'.$row["name"].'" id="'.$row["name"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="'.$row["name"].'" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    '.$row["description"].'
                    <br>
                        <a href= "'.$row["link"]. '">click for github</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>';

                echo    '</div> </div> </div>' ;
            }
            echo '</div>';  ?> 





            </div>
        </div>
    </div>
    <!-- Service End -->





    <!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.3s">
        <div class="container-fluid">
            <div class="container">
                <div class="footer-info">
                    <h2>Dana Shem-Tov</h2>
                    <!-- <h3>123 Street, New York, USA</h3> -->
                    <div class="footer-menu">
                        <p>0503794444</p>
                        <p>sdana1933@gmail.com</p>
                    </div>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/danna.danna.92/"><i class="fab fa-facebook-f"></i></a>
                        <!-- <a href="https://www.facebook.com/danna.danna.92/"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.facebook.com/danna.danna.92/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/danna.danna.92/"><i class="fab fa-linkedin-in"></i></a> -->
                        <a href="https://github.com/einsteinium400"><i class="fab fa-github"></i></a>

                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">Dana shem tov</a>, All Right Reserved | Designed By <a
                        href="https://htmlcodex.com">HTML Codex |</a>
                        <a href="https://www.shenkar.ac.il/he/departments/engineering-software-department">תואר ראשון בהנדסת תוכנה בשנקר</i></a>

                    </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to top button -->
    <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<?php

//close DB connection

mysqli_close($connection);

?>