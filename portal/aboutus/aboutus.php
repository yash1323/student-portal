<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css">
  <!-- Our Custom CSS style sheet -->
  <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="css/style.css">
  <title>About Us - Student Portal</title>
  <style>
  footer{
         
        padding:30px;
        text-align:center;
        font-size:25px;
      
        background-color:skyblue;
       font-family:times;
       font-weight:bold;
        color:black;
    
    }
  </style>
</head>
<!-- xs<576 | 576<sm<768 | 768<md<992 | 992<lg<1200 | 1200<xl -->

<body>
<div class="title">
        <a href="Home.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">Student Portal</span>
        <a href="../logout.php" style="color: white; text-decoration:none;"><span class="fa fa-sign-out"></span> Logout</a>
    </div>

    <div class="nav">
        <ul>
            <li class="details" onclick="toggleDisplay('1')">
                <a href="../display_details.php" class="displaybtn">Student Details &nbsp
                    
                </a>
            </li>
			
			<li>
                <a href="../home.php">Homepage</a>
            </li>
            
            <li class="result" onclick="toggleDisplay('2')">
                <a href="../student.php" class="resultbtn">Result &nbsp
                    
                </a>
            </li>
            <li class="document" onclick="toggleDisplay('3')">
                <a href="../documents_download.php" class="documentbtn">Documents &nbsp
                   
                </a>
            </li>
			<li class="aboutus" onclick="toggleDisplay('4')">
                <a href="../aboutus/aboutus.php" class="aboutbtn">About us &nbsp
                    
                </a>
            </li>
			<li class="document" onclick="toggleDisplay('5')">
                <a href="../contact_us.php" class="contactbtn">Contact us &nbsp
                    
                </a>
            </li>
        </ul>
    </div>
  
    <!-- <div class="p-1" id="topHeader">
      <div class="container">
        <div class="row">
          <div class="col-12 text-right">
            <a class="p-1" href="tel:+919090909090"> <i class="fas fa-phone"></i> +(91) 756845678 </a>
            <a class="p-1" href="mailto:desaitarang1965@gmail.com  "> <i class="fas fa-envelope"></i>
              desaitarang1965@gmail.com </a>
          </div>
        </div>
      </div>
    </div> -->
    <!-- <div id="bottomHeader">
      <div class="container-fluid">
        <nav class="navbar navbar-dark navbar-expand-md" style="background-color:#004d80;">
          <a class="navbar-brand" href="">
            <img src="imgs/logo_text_white_small.png" width="250px" alt="">
          </a>
          <button data-toggle="collapse" data-target="#navbarToggler" type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="default.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" href="#">Services</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="webdesigning.html">Web Designing</a>
                  <a class="dropdown-item" href="webdevelopment.html">Web Development</a>
                  <a class="dropdown-item" href="seoservices.html">SEO Services</a>
                  <a class="dropdown-item" href="softwaredevelopment.html">Software Development</a>
                  <a class="dropdown-item" href="mobileapps.html">Mobile App Development</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Graphic Designing</a>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="portfolio.html">Portfolio</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="aboutus.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>

      </div>
    </div> -->

  <!-- </header>
  <section class="breadcrumbs-section">
    <div class="container p-1 p-sm-3">
      <div class="row">
        <div class="col-12">
          <h2>About Us</h2>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
            <li class="breadcrumb-item active">About Us</li>
          </ol>
        </div>
      </div>
    </div> -->

  </section>

  <section class="about-company-section">
    <div class="container p-1 p-sm-3">
      <div class="row">
        <div class="col-12 text-center">
          <h2>About Student Portal</h2>
          <hr />
        </div>

        <div class="col-md-3">
          <img class="img-fluid" src="imgs/new_logo_black.png" alt="">

        </div>

        <div class="col-md-9">
          <p>
            The main objective behind construction of this portal is to provide a single place to students from where they can do all study related activities without login to different websites. 
In other words, to provide a single place for all kinds of jobs.
Main objective of proposed system is not only to be useful to students of the college but also staff members and administrators’ persons of the college. 
System objective is being useful in significant way by providing most basic and most essential functionalities and features to its users in efficient and effective manner.
Simple database is maintained.
Easy operations for the operator of the system. 
User interfaces are user accommodating and attractive; it takes very less time for the operator to use the system.
Student have accessed the more facilities.

          </p>

        </div>
      </div>
    </div>
  </section>

  <!-- START : Home page 5rd section - Newsletter section -->
  <!-- <section class="home-newsletter p-2 pt-md-2 pb-md-2">
    <div class="row">
      <div class="col-12 text-center">
        <h3>
          Subscribe to our Newsletter
        </h3>
        <div class="input-group p-3">
          <input type="email" class="form-control" placeholder="Enter your email">
          <span class="input-group-btn">
            <button class="btn btn-theme" type="submit">Subscribe</button>
          </span>
        </div>
      </div>
    </div>
  </section> -->
  <!-- END : Home page 5th section - Newsletter section -->


  <!-- START :  Home page 6th section - Our services -->
  <section class="pt-3 pb-4">
      <div class="container">
          <div class="row mt-4">
            <div class="col text-center">
              <h3>
                Our awesome team
              </h3>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4 text-center">
              <img class="img-fluid qualities-img p-4" src="imgs/team/CEO.png">
              <h5>
                
              </h5>
              <p>
                <i>- Tarang Desai</i>
              </p>
    
            </div>
            <div class="col-md-4 text-center">
              <img class="img-fluid qualities-img p-4" src="imgs/team/CEO.png">
              <h5>
             
              </h5>
              <p>
                <i>- Yash Akhani</i>
              </p>
    
            </div>
            <div class="col-md-4 text-center">
                
                <img class="img-fluid qualities-img p-4" src="imgs/team/CEO.png">
                <h5>
                  
                </h5>
                <p>
                  <i>- Kaushal Dave</i>
                </p>
            </div>
          </div>
    
          <div class="row mb-md-3">
            <div class="col-md-4 text-center">
                <img class="img-fluid qualities-img p-4" src="imgs/team/CEO.png">
                <h5>
                
                </h5>
                <p>
                  <i>- Pruthvish Dutt</i>
                </p>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-fluid qualities-img p-4" src="imgs/team/CEO.png">
                <h5>
                
                </h5>
                <p>
                  <i>- Jay Chavda</i>
                </p>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-fluid qualities-img p-4" src="imgs/team/CEO.png">
                <h5>
            
                </h5>
                <p>
                  <i>-Kirtan Bhavsar</i>
                </p>
            </div>
          </div>
  </section>
  <!-- END : Home page 6th section - Our services -->

<!-- START :  Home page 7th section - clients -->

  <!-- END : Home page 7th section - clients -->


  <!-- <footer class="full-footer">
    <div class="container top-footer p-md-3 p-1">
      <div class="row">
        <div class="col-md-3 pl-4 pr-4">
          <img class="img-fluid" src="imgs/logo_text_white_small.png" alt="">
          <p>
            Simple Snippets is a Tech-Educational Channel / Platform / Blog / Medium for anyone and everyone ...<a href="#">Read
              more...</a>
          </p>
          <a style="color:silver;" class="p-1" href="#"><i class="fab fa-2x fa-facebook-square"></i></a>
          <a style="color: silver;" class="p-1" href="#"><i class="fab fa-2x fa-google-plus-square"></i></a>
          <a style="color: silver;" class="p-1" href="#"><i class="fab fa-2x fa-twitter-square"></i></a>
          <a style="color: silver;" class="p-1" href="#"><i class="fab fa-2x fa-instagram"></i></a>
        </div>

        <div class="col-md-3  pl-4 pr-4">
          <h3>Important Links</h3>
          <a href="#">Privacy Policy</a><br>
          <a href="#">Youtube Channel Link </a><br>
          <a href="#">Blog Articles </a><br>
          <a href="#">Social Media</a>
        </div>

        <div class="col-md-3  pl-4 pr-4">
          <h3>Our Services</h3>
          <a href="webdesigning.html">Web Designing </a><br>
          <a href="webdevelopment.html">Web Development </a><br>
          <a href="seoservices.html">SEO services </a><br>
          <a href="softwaredevelopment.html">Software Development </a>
          <a href="mobileapps.html">Mobile App Development </a>
          <a href="graphicdesign.html">Graphic Designing</a>
        </div>

        <div class="col-md-3  pl-4 pr-4">
          <h3>Contact Us</h3>
          <a href="#"><i class="fas fa-phone"></i> +(91) 9090909090 </a><br>
          <a href="mailto:simplesnippetsinfo@gmail.com  "><i class="fas fa-envelope"></i> abc@gmail.com </a><br>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.64333236168!2d72.74110193617271!3d19.082522317332813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1547151374329"
              frameborder="0"></iframe>
          </div>

        </div>
      </div>
    </div>
    <div class="container-fluid bottom-footer pt-2">
      <div class="row">
        <div class="col-12 text-center">
          <p>Copyrights © 2018 - All rights reserved</p>
        </div>
      </div>
    </div>

  </footer> -->


  <footer>
&copy Copyrights - Student Portal
</footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>