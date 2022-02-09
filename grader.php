<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300" />

  <!-- Font Icon -->
  <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css" />
  <title>Grader</title>

  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />

  <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css" />

  <link rel="stylesheet" href="assets/css/owl-carousel.css" />

  <!-- Main css -->
  <link rel="stylesheet" href="./assets/css/grader.css" />
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
  <section class="grader">
    <div class="container">
      <div class="row wrapper justify-content-around">
        <div class="col-lg-8 p-0">
          <h1 class="heading text-center m-auto">Grader</h1>
        </div>
        <?php 
          $mysqli = new mysqli('localhost', 'root', '', 'aeye-diagnostics');  

          $grader_id = 1;

          $result1 = $mysqli->query("SELECT `grader_id`, COUNT(*) as `count` FROM `grade` WHERE `grader_id` = '$grader_id'") or die($mysqli->error);

          $count_data = $result1->fetch_assoc();
          
          echo "
          <div class='col-lg-4 count-btn text-center'>
            <button type='button' class='btn btn-primary badge-btn'>
              Images Graded <span class='badge'>{$count_data['count']}</span>
            </button>
          </div>
          ";
          
        ?>
        
        <form method="POST" onsubmit="return gradeValidate()" class="row justify-content-around" action="./assets/php/grading.php">
          <?php
            

            $result = $mysqli->query("SELECT * FROM `uploads` WHERE `graded` = 0 LIMIT 1") or die($mysqli->error);
            $data = $result->fetch_assoc();

            if (is_null($data)) 
            {
              echo "
              <div class='col-lg-12 '>
                
                <h4>All images are graded!</h4>
                
              </div>";
            } 

            else 
            {
              $id = $data['id'];
              
              echo "
                <input type='hidden' name='grader_id' value='{$grader_id}' />
                <input type='hidden' name='id' value='{$id}' />
                <div class='col-md-5 image text-center'>
                  <img src='{$data['img_dir']}' class='card-img-top' alt='...' />
                  <div class='col-12'>
                    <span class='filename'>{$data['image_name']}</span>
                  </div>
                </div>
                <div class='col-md-5 select text-center'>
        
                  <div class='form-check form-check-inline'>
                    <input class='form-check-input grade' type='radio' name='grade' id='grade1' value='1' />
                    <label class='form-check-label' for='grade1'>1</label>
                  </div>
                  <div class='form-check form-check-inline'>
                    <input class='form-check-input grade' type='radio' name='grade' id='grade2' value='2' />
                    <label class='form-check-label' for='grade2'>2</label>
                  </div>
                  <div class='form-check form-check-inline'>
                    <input class='form-check-input grade' type='radio' name='grade' id='grade3' value='3' />
                    <label class='form-check-label' for='grade3'>3</label>
                  </div>
                  <div class='form-check form-check-inline'>
                    <input class='form-check-input grade' type='radio' name='grade' id='grade4' value='4' />
                    <label class='form-check-label' for='grade4'>4</label>
                  </div>
                  <div class='form-check form-check-inline'>
                    <input class='form-check-input grade' type='radio' name='grade' id='grade5' value='5' />
                    <label class='form-check-label' for='grade5'>5</label>
                  </div> 
                  <div id='gradeError' class='form-text invalid-feedback error'>cxvxvcasd
                  </div>
                  <button id='submit' type='submit' name='submit' class='btn btn-primary'>Submit</button>
              </div>";
            }
          ?>
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
            <a href="index.html"><img class="resize" alt="" />
              <img src="assets/images/ncl-logo.png" />
              <img src="assets/images/logo-new.jpeg" /></a>
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
  <script src="assets/js/grader.js"></script>
</body>

</html>