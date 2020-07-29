<?php
  require_once('./includes/database.php');
  require_once('./includes/functions.php');
  if(isset($_POST['enroll'])){
    enroll($conn);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- seo IMPLEMENTATION -->
  <meta name="keywords"
    content="startNg, hotel.ng,HNG, Africa,Technology, software-engineering, front end, Backend, UI/UX, full-stack ">
  <meta name="description"
    content="A Nigerian based software-engineering training provider with the goal of crafting the next generation of highly capable and competent software engineers and solution providers.Our core focus are frontend, backend UI/UX and mobile app developers " />
  <meta name="rating" content="General" />
  <meta name="ROBOTS" content="ALL" />
  <meta name="geo.region" CONTENT="Nigeria S/W, Lagos">
  <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
  <title>Register</title>
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
    integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/enrollment.css">

  <!-- This CSS link is for my CUSTOM CSS -->
  <link rel="stylesheet" type="text/css" href="./css/techies.css">

  <link rel="stylesheet" href="./css/header.css">

  <link rel="stylesheet" href="./css/footer.css">
</head>

<body>
  <!-- Header -->
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light navigation py-5 px-1">
        <a class="navbar-brand" href="./index.html"><img src="./images/past-techies/Group 12.png" alt="logo"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
          aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"> <i
            style="color: #E7332B;" class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link ml-lg-3" href="./index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-lg-3" href="./curriculumn-v1.html">Curriculum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-lg-3" href="pastTechies.html">Previous Techies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-lg-3" href="./mentors.html">Mentors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-lg-3" href="./contact_page.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn mt-3 mt-lg-0 h-btn px-4 text-white" href="./enrollment.html">Join
                StartNG</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="section-1">
      <div class="container">
        <div class="intro-text">
          <p>ENTER YOUR DETAILS TO ENROLL</p>
          <h2>Gain enough knowledge to help scale through the tech industry for free.</h2>
        </div>
      </div>
    </div>
  </header>

  <!-- section-1 -->


  <!-- section-2 -->
  <div class="section-2">
    <div class="container">
      <div class="form-container">
        <form method="post" id="enrollment">
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="fullname" class="form-control">
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group select-box" >
            <label>Track</label>
            <div class="options-container 1">
              <div class="option">
                <input type="radio" class="radio" id="front-end" value="Front-End" name="track" />
                <label for="front-end">Front-End</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="back-end" value="Back-End" name="track" />
                <label for="back-end">Back-End</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="mobile" value="Mobile Development" name="track" />
                <label for="machine">Mobile Development</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="design" value="UI/UX Design" name="track" />
                <label for="design">UI/UX Design</label>
              </div>
            </div>

            <div class="selected" id="track">
              Choose Track
            </div>
          </div>
          <div class="form-group select-box">
            <label>Course</label>
            <div class="options-container 2">
              <div class="option">
                <input type="radio" class="radio" id="javascript" value="JavaScript" name="course" />
                <label for="javascript">JavaScript</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="java" value="Java" name="course" />
                <label for="java">Java</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="python" value="Python" name="course" />
                <label for="python">Python</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="golang" value="Golang" name="course" />
                <label for="golang">Golang</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="flutter" value="Flutter" name="course" />
                <label for="flutter">Flutter</label>
              </div>
            </div>

            <div class="selected" id="course">
              Choose Course
            </div>
          </div>
          <!-- Radio Buttons -->
          <div class="form-group">
            <label class="level">Level</label>
            <div class="radios">
              <label class="radio-container">Beginner
                <input type="radio" name="level" value="Beginner">
                <span class="checkmark"></span>
              </label>
              <br />
              <label class="radio-container">Intermediate
                <input type="radio" name="level" value="Intermediate">
                <span class="checkmark"></span>
              </label>
            </div>
          </div>
          <div class="form-group form-btn mt-5">
            <button type="submit" name="enroll">Enroll</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ################################################################# -->
  <!-- THIS IS FOR THEN IMAGE OVERLAY.............. -->

  <div class="section-3 container">
    <div class="content container">
      <h2 class="mb-5 fonty">Break into the tech industry like a pro</h2>
      <button>Enroll Today</button>
    </div>
  </div>

  <!-- ################################################################# -->
  <!-- ################################################################# -->


  <!-- Footer Section -->
  <footer class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-2 pb-4">
        <a href="#"><img src="images/Header/header-img.png" alt="logo"></a>
      </div>

      <!-- Quick Links -->
      <div class="col-sm-6 col-lg-3 pb-4">
        <h4>Quick Links</h4>
        <ul class="navbar-nav">
          <div class="row">
            <div class="col-6">

              <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="courses.html">Courses</a></li>
              <li class="nav-item"><a class="nav-link" href="curriculum-v1.html">Curriculum</a></li>
              <li class="nav-item"><a class="nav-link" href="mentors.html">Mentors</a></li>
              <li class="nav-item"><a class="nav-link" href="certificate-request.html">Request
                  Certificates</a></li>
            </div>
            <div class="col-6">
              <li class="nav-item"><a class="nav-link" href="FAQ.html">FAQ</a></li>
              <li class="nav-item"><a class="nav-link" href="pastTechies.html">Previous Techies</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Past Projects</a></li>
              <li class="nav-item"><a class="nav-link" href="forum.html">Forum</a></li>
              <li class="nav-item"><a class="nav-link" href="policy.html">Privacy Policy</a></li>
              <li class="nav-item"><a class="nav-link" href="Terms&Conditions.html">Terms and
                  Conditions</a></li>
            </div>
          </div>
        </ul>
      </div>

      <!-- Contact Us -->
      <div class="col-sm-6 col-lg-2 pb-4">
        <h4>Contact Us</h4>
        <div>Hello@start.ng</div>
      </div>

      <!-- Office Address -->
      <div class="col-sm-6 col-lg-3 pb-4">
        <h4>Office Address</h4>
        <address>
          <p>92 Wolverine Avenue,<br>
            Ikeja,<br>
            Lagos State, Nigeria.
          </p>
        </address>
      </div>

      <!-- Follow Us -->
      <div class="col-lg-2 pb-4">
        <h4>Follow Us</h4>

        <a class="facebook-link d-inline-block mr-3" href="https://www.facebook.com" target="_blank">
          <span>
            <span class="fab fa-facebook-square" aria-hidden="true"></span>
            <span class="sr-only">Facebook</span>
          </span>
        </a>

        <a class="twitter-link d-inline-block" href="https://www.twitter.com" target="_blank">
          <span>
            <span class="fab fa-twitter" aria-hidden="true"></span>
            <span class="sr-only">Twitter</span>
          </span>
        </a>
      </div>
    </div>

    <!-- Copyright -->
    <div class="row">
      <div class="copyright col-12">
        <p class="text-center"> &copy; 2020 StartNG</p>
      </div>
    </div>
  </footer>



  <!-- JS, Popper.js, and jQuery -->
  <script src="./js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/enrollment.js"></script>
</body>

</html>