<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Font Icon -->
    <link
      rel="stylesheet"
      href="assets/fonts/material-icon/css/material-design-iconic-font.min.css"
    />
    <title>Sign Up</title>

    <!-- Additional CSS Files -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/bootstrap.min.css"
    />

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css" />

    <link rel="stylesheet" href="assets/css/owl-carousel.css" />

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/signup-style.css" />
  </head>
  <body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.html" class="logo row">
                <img src="assets/images/ncl-logo.png" />
                <img src="assets/images/logo-new.jpeg" />
                <!-- <h4 class="main-logohead"><b>A-Eye Diagnostics</b></h3> -->
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li class="scroll-to-section">
                  <a href="#top" class="active">Home</a>
                </li>
                <!-- <li class="scroll-to-section"><a href="#about">About</a></li> -->

                <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                <li class="scroll-to-section"><a href="#menu">Research</a></li>
                <li class="scroll-to-section"><a href="#chefs">Team</a></li>
                <!-- <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li> -->
                <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                <li class="scroll-to-section">
                  <a href="#reservation">Contact Us</a>
                </li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- <div class="overlay"></div> -->

    <div class="main">
      <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container-div">
          <div class="signup-content">
            <form method="POST" id="signup-form" class="signup-form">
              <h2 class="form-title">Create account</h2>
              <div class="form-group">
                <input
                  type="text"
                  class="form-input"
                  name="name"
                  id="name"
                  placeholder="Your Name"
                />
              </div>
              <div class="form-group">
                <input
                  type="email"
                  class="form-input"
                  name="email"
                  id="email"
                  placeholder="Your Email"
                />
              </div>
              <div class="form-group">
                <input
                  type="password"
                  class="form-input"
                  name="password"
                  id="password"
                  placeholder="Password"
                />
                <span
                  toggle="#password"
                  class="zmdi zmdi-eye-off field-icon toggle-password"
                ></span>
              </div>
              <div class="form-group">
                <input
                  type="checkbox"
                  name="agree-term"
                  id="agree-term"
                  class="agree-term"
                />
                <label for="agree-term" class="label-agree-term"
                  ><span><span></span></span>I agree all statements in
                  <a href="#" class="term-service">Terms of service</a></label
                >
              </div>
              <div class="form-group">
                <input
                  type="submit"
                  name="submit"
                  id="submit"
                  class="form-submit"
                  value="Sign up"
                />
              </div>
            </form>
            <p class="loginhere">
              Already have an account ?
              <a href="signin.html" class="loginhere-link">Login here</a>
            </p>
          </div>
        </div>
      </section>
    </div>

    <!-- ***** Footer Start ***** -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-xs-12">
            <div class="right-text-content">
              <ul class="social-icons">
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="logo row">
              <a href="index.html"
                ><img class="resize" alt="" />
                <img src="assets/images/ncl-logo.png" />
                <img src="assets/images/logo-new.jpeg"
              /></a>
            </div>
          </div>
          <div class="col-lg-4 col-xs-12">
            <div class="left-text-content">
              <p>
                © Copyright NCAI.

                <br />NED UNIVERSITY
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>
    

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/signup.js"></script>
  </body>
</html>
