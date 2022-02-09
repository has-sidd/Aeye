<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300'>
    
    <!-- Font Icon -->
    <link
      rel="stylesheet"
      href="assets/fonts/material-icon/css/material-design-iconic-font.min.css"
    />
    <title>Upload</title>

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
    <link rel="stylesheet" href="./assets/css/styleUpload.css">
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

    <!-- ***** Tech Dashboard Area Start ***** -->
    <section class="section" id="upload">
      <div class="upload">
        <div class="upload-files">
          <div class="first">
            <p>
              <i class="fa fa-cloud-upload" aria-hidden="true"></i>
              <span class="up">A-Eye&nbsp;</span>
              <span class="load">Diagnostics</span> <br>
              <button type="button" class="btn btn-primary">
                Images <span class="badge"></span>
              </button>
            </p>
          </div>
          <form method="post" enctype="multipart/form-data" action="./assets/php/file-upload.php">
            <div class="body" id="drop">
              <i class="fa fa-file-text-o pointer-none" aria-hidden="true"></i>
              <p class="pointer-none">
                <!-- <b>Drag and drop</b> files here <br />
                or  -->
                <a href="" id="triggerFile">browse</a> to begin the upload
              </p>
              <input type="file" name="images[]" multiple />
            </div>
            <div class="second">
              <div class="divider">
                <span><AR>FILES</AR></span>
              </div>
              <div class="list-files">
                <!--   template   -->
              </div>
              <div class="row justify-content-center">
                  <div class="col-md-2">
                      <button class="importar">RESET</button>
                  </div>
                  
                  <div class="col-md-2">
                      <button type="submit" name='submit' value="Submit" class="importar submit">UPLOAD</button>
                  </div>
              </div>
              
            </div>
          </form>
          
        </div>
      </div>
    </section>
    <!-- ***** Tech Dashboard Area End ***** -->

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
    <!-- ***** Footer Ends ***** -->

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
    <!-- <script src="assets/js/custom.js"></script> -->
    <script src="assets/js/scriptUpload.js"></script>
  </body>
</html>
