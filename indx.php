<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Gateflix</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!-- Bootstrap CSS cdn-->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- font awesome icons cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel='stylesheet' type='text/css' media='screen' href='css/indexModule.css'>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg py-2 nav-color fixed-top navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Gateflix</a>
        <button class="navbar-toggler toggle-btn" data-toggle="collapse" data-type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="fas fa-bars"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav nav-list  my-2 my-lg-0 navbar-nav-scroll">
            <li class="nav-item dropdown">
              <a class="nav-link nav-link-text dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Courses
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Gate (6 Months)</a></li>
                <li><a class="dropdown-item" href="#">Gate (12 Months)</a></li>
                <li><a class="dropdown-item" href="#">Gate (24 Months)</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle nav-link-text " href="#" id="navbarScrollingDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Syllabus
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Gate (6 Months)</a></li>
                <li><a class="dropdown-item" href="#">Gate (12 Months)</a></li>
                <li><a class="dropdown-item" href="#">Gate (24 Months)</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-text" href="Test-series.html" id="navbarScrollingDropdown"
                aria-expanded="false">
                Test series
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link nav-link-text dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                PYQ
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item nav-link-text" href="#">under construction</a></li>
              </ul>
            </li>
          </ul>

          <form class="d-flex ms-5">
            <button type="button" class="btn nav-login" data-bs-toggle="modal" data-bs-target="#myModal1">
              LOGIN
            </button>
            <!-- <button type="button" class="btn nav-login" data-bs-toggle="modal" data-bs-target="#myModal2">
              SIGN-UP
            </button> -->
          </form>

        </div>
      </div>
    </nav>
    <section>
      <div class="modal fade " id="myModal1">
        <div class="modal-dialog modal-md">
          <div class="modal-content modal-design">

            <div class="modal-header text-center">
              <h4 class="modal-title w-100 ">Login Here</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <div class="container">
                <form class=" registration-form" style="margin-top: 10px;">
                  <div class="registration-input-container">
                    <i class="fa fa-user registration-icon"></i>
                    <input class="registration-input-field from-control" type="email" placeholder="Email" name="usrnm">
                  </div>

                  <div class="registration-input-container">
                    <i class="fa fa-key registration-icon"></i>
                    <input class="registration-input-field form-control" type="password" placeholder="password"
                      name="pass">
                  </div>

                  <a href="admin/admin.php" class="text-dark btn btn-outline-success w-100">Login</a>
                </form>
              </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <P class="modal-p-signup">New Here ? <a href="#" data-bs-toggle="modal" data-bs-target="#myModal2">sign
                  up</a></P>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-md">
          <div class="modal-content modal-design">

            <!-- Modal Header -->
            <div class="modal-header text-center">
              <h4 class="modal-title w-100">Register Here</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>


            <div class="modal-body">
              <div class="container">
                <form class=" registration-form">

                  <div class="registration-input-container">
                    <i class="fa fa-user registration-icon"></i>
                    <input class="registration-input-field from-control" type="text" placeholder="Username" name="name">
                  </div>


                  <div class="registration-input-container">
                    <i class="fa fa-envelope registration-icon"></i>
                    <input class="registration-input-field from-control" type="email" placeholder="Email" name="email">
                  </div>

                  <div class="registration-input-container">
                    <i class="fa fa-phone registration-icon"></i>
                    <input class="registration-input-field form-control" type="text" placeholder="Phone number"
                      name="phonenumber">
                  </div>

                  <div class="registration-input-container">
                    <i class="fa fa-key registration-icon"></i>
                    <input class="registration-input-field form-control" type="password" placeholder="password"
                      name="pass">
                  </div>
                  <button type="submit" class="registration-btn">Register</button>
                </form>
              </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <P class="modal-p-signup">already registered ! <a href="#" data-bs-toggle="modal"
                  data-bs-target="#myModal1">Login</a></P>
            </div>

          </div>
        </div>
      </div>
    </section>
  </header>

  <!--#######################################################top module############################################################################# -->
  <section>
    <div class="container-fluid" style="margin-top: 5rem;">
      <div class="row">
        <div class="col-md-12  mb-4 mb-md-0">
          <div id="demo" class="carousel slide" data-bsx-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
              <?php
              $count=0;
              $handle = opendir(dirname(realpath(__FILE__)).'/admin/banner/');
              while($file = readdir($handle)){
                $count++;
                if($count>2){
                $path ="admin/banner/";
                $path = $path.$file;
                
                if($count==3){?>
                <div class="carousel-item active">
                  <img src="<?php echo $path ?>" alt="slidebar_img" class="d-block" style="width:100%" />'
                </div>
              <?php
                }
                if($count>3){?>
                  <div class="carousel-item ">
                  <img src="<?php echo $path ?>" alt="slidebar_img" class="d-block" style="width:100%" />'
                </div>
                <?php
                }
              }
            }
            ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
        <!-- <div class="col-md-3 ">
      </div> -->
      </div>
    </div>
  </section>
  <!-- ################################################################ second module#################################################################### -->
  <section>
    <div class="container-fluid" style="margin-top:20px; background-image: url(./img/triangleNegative.svg); ">
      <div class="container" style="margin-top: 10px;">
        <div class="col text-center feedback-text">
          <h3 class="main-heading"> What <span class="info feedback-hadding"> Will you Get ? </span> </h3>
        </div>
        <div class="row row-cols row-cols-md-3 g-4 mt-4">
          <div class="col-md-3">
            <div class="card h-100 card-design">
              <img src="img/live-video2.png" class="card-img-top" alt="..." style=" align-self: center;">
              <div class="card-body">
                <h5 class="card-title">Gate Live</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, illo. Eum optio
                  accusantium ullam voluptatibus ea deleniti unde debitis animi.</p>
              </div>
              <div class="card-footer">
                <a href="live-video.html" class="text-dark btn course-btn w-100">View</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 card-design">
              <img src="img/recorded-video.png" class="card-img-top" alt="..." style=" align-self: center;">
              <div class="card-body">
                <h5 class="card-title">Live Record</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, illo. Eum optio
                  accusantium ullam voluptatibus ea deleniti unde debitis animi.</p>
              </div>
              <div class="card-footer">
                <a href="recorded-video.html" class="text-dark btn course-btn  w-100">View</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 card-design">
              <img src="img/test-serice.png" class="card-img-top" alt="..." style="align-self: center;">
              <div class="card-body">
                <h5 class="card-title">Test Series</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, illo. Eum optio
                  accusantium ullam voluptatibus ea deleniti unde debitis animi.</p>
              </div>
              <div class="card-footer">
                <a href="Test-series.html" class="text-dark btn course-btn w-100">View</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 card-design">
              <img src="img/material.png" class="card-img-top" alt="..." style=" align-self: center;">
              <div class="card-body">
                <h5 class="card-title">material</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, illo. Eum optio
                  accusantium ullam voluptatibus ea deleniti unde debitis animi.</p>
              </div>
              <div class="card-footer">
                <a href="" class="text-dark btn course-btn  w-100">View</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- ################################################################ third module#################################################################### -->

  <section id="team">
    <div class="testimonial-box">
      <div class="container">
        <h3 class="main-heading"> Our <span class="info feedback-hadding"> Course </span> </h3>
        <div class="row mt-lg-4 mt-md-3 ">
          <div class="col-lg-12 mt-3">
            <div class="team-slider owl-carousel owl-theme">
            <?php
                $link = mysqli_connect('localhost', "root", "", 'example');

                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                $sql1 = "select * from courses";
                  if($result = mysqli_query($link, $sql1)){
                    if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_array($result)){ 
                        $image = "admin/upload/courseThumbnails/".$row['thumbnail'];
                        ?>
                        <div class="single-box course-card ">
                          <div class="img-area"><img alt="" class="img-fluid  img-thumbnail" src="<?php echo $image ?>"
                          style=" align-self: center;"></div>
                          <div class="info-area">
                            <h4><?php echo $row['courseName']?></h4>
                            <p><?php echo $row['teacher']?></p>
                            <div class="card-ratings">
                              5.0&nbsp
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              &nbsp(2,345)
                            </div>
                            <h5><span>&#8377;</span><?php echo $row['sprice']?> &nbsp;<del>&#8377;<?php echo $row['oprice']?></del></h5>
                          </div>
                          <div class="details">
                            <div class="center" onclick="location.href='demopage.php?id=<?php echo $row['courseId']?>&image=<?php echo $row['thumbnail']?>'" style="cursor:pointer">
                              <h1><?php echo $row['courseName']?><br></h1>
                              <p>
                                <?php
                                 $show = $row['description'];
                                 //echo $show;
                                 $show = explode(" ",$show);

                                 //$count = count($show);
                                 for($x=0;$x<20;$x++) echo $show[$x]." ";?>
                                 </p>
                              <button class="btn btn-success w-65">Add to cart</button> &nbsp;
                              <span class="fa fa-heart fa-brand"></span>
                            </div>
                          </div>
                        </div>
                    <?php
                      }
                      mysqli_free_result($result);
                    }
                  }
                  mysqli_close($link);
              ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ################################################################ fourth module#################################################################### -->
  <section>
    <div class="container-fluid"
      style="margin-top: 60px;    background: linear-gradient( 0deg,#fff 3%,hsla(0,0%,100%,0)),linear-gradient(-257deg,#aaf2e1,#93edf5 50%,#dbebff);">
      <hr style="height:3px; border-width:0" class="hr">

      <div class="container">
        <div class="row">
          <br />
          <div class="col text-center feedback-text">
            <h3 class="main-heading">Online Gate Exam <span class="info feedback-hadding"> Coaching Platform </span>
            </h3>
          </div>
        </div>
        </br>
        <div class="row text-center">
          <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="counter">
              <i class="fa fa-user fa-2x "></i>
              <h3 class="timer count-title count-number" data-to="100" data-speed="1500">103599</h3>
              <p class="count-text ">Total User</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="counter">
              <i class="fa fa-video fa-2x "></i>
              <h3 class="timer count-title count-number" data-to="1700" data-speed="1500">6339</h3>
              <p class="count-text ">Total Videos</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="counter">
              <i class="fab fa-android fa-2x "></i>
              <h3 class="timer count-title count-number" data-to="11900" data-speed="1500">22.4k+</h3>
              <p class="count-text ">App Download</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="counter">
              <i class="fa fa-users fa-2x  "></i>
              <h3 class="timer count-title count-number" data-to="157" data-speed="1500">50k+</h3>
              <p class="count-text ">monthly Users</p>
            </div>
          </div>
        </div>
      </div>

      <!-- ################################################################ fifth module#################################################################### -->

      <div class="container" style="margin-top:60px">
        <div class="row">
          <div class="col-md-7">

            <h4 style="padding-bottom:30px; color:#0E101A; letter-spacing: 2px; font-family: 'Staatliches',cursive ; ">
              Why GATEFLIX
              Online Coaching Classes</h4>
            <div class="row">

              <div class="col-md-1"><i class="fa-solid fa-check check-color"></i></div>
              <div class="col-md-11">
                <p class="fbb"> The only exclusive Gate online coaching platform which is providing Personal Mentor</p>
              </div>

              <div class="col-md-1"> <i class="fa-solid fa-check check-color"></i></div>
              <div class="col-md-11">
                <p class="fbb"> 1500+ hrs of live lectures in GATE 2022-23</p>
              </div>


              <div class="col-md-1"> <i class="fa-solid fa-check check-color"></i></div>
              <div class="col-md-11">
                <p class="fbb"> Weekend Batches (Sat-Sun)</p>
              </div>


              <div class="col-md-1"> <i class="fa-solid fa-check check-color"></i></div>
              <div class="col-md-11">
                <p class="fbb">Exclusive Test Series(Full-Length Test - Subject Test - Sessional Test)</p>
              </div>


              <div class="col-md-1"> <i class="fa-solid fa-check check-color"></i></div>
              <div class="col-md-11">
                <p class="fbb"> Complementary E-Material(Theory Book - Exercise Book - Questions Bank)</p>
              </div>

              <div class="col-md-1"> <i class="fa-solid fa-check check-color"></i></div>
              <div class="col-md-11">
                <p class="fbb"> Saves Valuable travel time of Students & Working Professional</p>
              </div>

              <div class="col-md-1"> <i class="fa-solid fa-check check-color"></i></div>
              <div class="col-md-11">
                <p class="fbb"> Live doubt solving sessions & Live Chat options</p>
              </div>
            </div>
            <div class="col-md-8" style="margin-top:40px;">
              <h4
                style="padding-bottom:20px;  color:#0E101A; letter-spacing: 2px; font-family: 'Staatliches',cursive ;">
                GATE 2020 Students'
                Feedback</h4>
              <div class="alert size"
                style="display: flex; justify-content: space-between;   background-color: transparent; border: 3px solid #8189a9;  ">
                <div><strong>Course </strong>
                </div>
                <div class="card-ratings">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  &nbsp; 5.0
                </div>
                <div><strong>|</strong>
                </div>
                <div><strong>Faculty</strong>
                </div>
                <div class="card-ratings">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  &nbsp; 5.0
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5" style="border-radius: 10px;  ">
            <img src="img/green-done.svg" alt="" style="width:100%; align-self: center;">
            <br>
          </div>
        </div>
      </div>
      <br><br>
      <!-- <hr style="height:3px; border-width:0" class="hr"> -->
      <div></div>
    </div>
  </section>
  <!-- ################################################################ sixth module#################################################################### -->
  <section>
    <div class="container" style="margin-top:30px;  background-image: url(./img/tilt.svg); ">
      <h3 class="main-heading" style="padding-top:25px">Feedback Of Online Classes For <span
          class="info feedback-hadding"> Gate Exams</span> </h3>

      <div class="row" style="margin-top:45px">
        <div class="col-md-6">
          <p class="fp">Course</p>
          <div class="alert alert-light size" style="display: flex;
        justify-content: space-between; border: 1px solid rgb(182, 177, 177);">
            <div><strong>Quality of the session </strong>
            </div>
            <div>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              &nbsp; 4.8
            </div>
          </div>
          <div class="alert alert-light size" style="display: flex;
        justify-content: space-between; border: 1px solid rgb(182, 177, 177);">
            <div><strong>Ease of access to classes </strong>
            </div>
            <div>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              &nbsp; 4.7
            </div>
          </div>
          <div class="alert alert-light size" style="display: flex;
        justify-content: space-between; border: 1px solid rgb(182, 177, 177);">
            <div><strong>Quality of e-book content </strong>
            </div>
            <div>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              &nbsp; 4.5
            </div>
          </div>
          <div class="alert alert-light size" style="display: flex;
        justify-content: space-between; border: 1px solid rgb(182, 177, 177);">
            <div><strong>User-friendly Platform</strong>
            </div>
            <div>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              &nbsp; 4.7
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <p class="fp">Faculty</p>
          <div class="alert alert-light size" style="display: flex;
        justify-content: space-between; border: 1px solid rgb(182, 177, 177);">
            <div><strong>Student engagement </strong>
            </div>
            <div>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              &nbsp; 4.9
            </div>
          </div>
          <div class="alert alert-light size" style="display: flex;
        justify-content: space-between; border: 1px solid rgb(182, 177, 177);">
            <div><strong>Subject Expertise </strong>
            </div>
            <div>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              &nbsp; 5.0
            </div>
          </div>
          <div class="alert alert-light size" style="display: flex;
        justify-content: space-between; border: 1px solid rgb(182, 177, 177);">
            <div><strong>Quality of Content </strong>
            </div>
            <div>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              &nbsp; 4.8
            </div>
          </div>
          <div class="alert alert-light size" style="display: flex;
        justify-content: space-between; border: 1px solid rgb(182, 177, 177);">
            <div><strong>Clarification of doubts </strong>
            </div>
            <div>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              &nbsp; 5.0
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ################################################################ seventh module#################################################################### -->

    <div class="container" style="margin-top: 30px;">
      <!-- <hr style="height:3px; border-width:0"> -->
      <!-- <h3 class="main-heading"> What You Will Get ?</h3> -->

      <h3 class="main-heading">India's Best Online<span class="info feedback-hadding"> Learning Platform</span>
      </h3>
      <p style="text-align:center; " class="fp">GATEFLIX - A Gateway to Affordable Education</p>
      <div style="margin-top:15px;">
        <p style="text-align:center; padding:20px; color:rgb(49, 49, 49);" class="fp">Gateflix provides best online
          video
          lectures for GATE,
          CAT,
          Bank and
          various other exams.Dedicated to all the hard
          working students in need of best guidance to achieve great grades. The gates for success are open only at
          GATEFLIX.
          Unlock your destiny.</p>
      </div>
      <div class="row fp">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <a href="About.html">
            <P class="read-more">Read More</P>
          </a>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </section>
  <!-- ################################################################ eighth module#################################################################### -->
  <section>
    <div class="container-fluid" style="margin-top: 30px; background-image: url(./img/wavesOpacity.svg); ">
      <!-- <hr class="hr" style="height:3px; border-width:0"> -->
      <div class="container" style=" padding:30px">
        <div class="row">
          <div class="col-md-2">
            <p style="text-align:center; font-size: 15px;   color: #646464;" class="fp">Newsletter Sign Up</p>
            <p style="font-size: 11px; text-align: center;  color: #646464;" class="fp"> (Be updated with our latest
              news)
            </p>
          </div>
          <div class="col-md-5">
            <p style=" text-align: center ;font-size: 15px;   color: #646464;" class="fp">Join and become amongst the
              first
              ones to get
              latest news
              about
              discounts and
              offers.</p>
          </div>
          <div class=" col-md-5">
            <form class="example" action="action_page.php">
              <input type="text" placeholder="Your Email Address.." name="search">
              <button type="submit" class="fp">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
      <footer>
        <div class="container">
          <div class="row ">

            <div class="col-md-6 col-lg-3">
              <h5 class="fp">Get The App</h5>
              <hr style="height:3px; border-width:0" class="hr">
              <div class="d-inline-flex ">
                <P style="color: #445288;
              text-decoration: none;
              font-size: 14px;">
                  <span style="font-weight: 700; "> Gateflix</span> allows students to be thorough
                  with their choice of streams or subjects,
                  by enabling them to learn at their
                  comfortable time without losing out
                  on sessions and conveniently access
                  sessions from any given place.
                </P>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <h5 class="fp">Exams</h5>
              <hr style="height:3px; border-width:0" class="hr">
              <div class="d-inline-flex">
                <div class="">
                  <ul>
                    <li><a href=" ">GATE</a></li>
                    <li><a href=" ">GATE Exam</a></li>
                    <li><a href=" "> GATE Booster Course</a></li>
                    <li><a href=" ">CAT </a></li>
                    <li><a href=" ">Placement Training</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <h5 class="fp">About</h5>
              <hr style="height:3px;border-width:0;" class="hr">
              <div class="d-inline-flex">
                <ul>
                  <li><a href=" ">Blog</a></li>
                  <li><a href=" ">Support</a></li>
                  <li><a href=" ">Contact Us</a></li>
                  <li><a href=" ">Terms and Conditions</a></li>
                  <li><a href=" ">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <h5 class="fp">Contact</h5>
              <hr style="height:3px;border-width:0" class="hr">
              <div class="d-inline-flex">
                <div class="d-flex flex-column">
                  <div style="color: #445288; text-decoration: none; font-size: 14px;">
                    <p>Helpline Number</p>
                    <p> <i class="fas fa-phone"></i> : 91xxxxxx88 </p>
                    <p> <i class="fas fa-envelope"></i> : pradeep2000rawat@gmail.com </p>
                  </div>
                  <div class="">
                    <ul style="align-items: center;">
                      <li class="list-inline">
                        <a href="#"> <i class="fab fa-facebook  fa-brand"></i></a> &nbsp;
                        <a href="#"> <i class="fab fa-google  fa-brand"></i></a> &nbsp;
                        <a href="#"> <i class="fab fa-twitter fa-brand"></i></a> &nbsp;
                        <a href="#"> <i class="fab fa-linkedin fa-brand"></i></a> &nbsp;
                        <a href="#"> <i class="fab fa-instagram  fa-brand"></i></a>
                        <!-- <a href="#"> <i class="fab fa-youtube  fa-brand"></i></a> -->
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12 footer-color">
            <h4 style="text-align: center; font-size: 15px; padding: 14px; font-weight: 700; color: #fff;">2021
              Gateflix
              All rights
              reserved.</h4>
          </div>
        </div>
      </footer>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
  </script>
  <script>
    $('.team-slider').owlCarousel({
      nav: true,
      loop: true,
      margin: 20,
      lazyLoad: true,
      dots: false,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        991: {
          items: 3
        },
        1200: {
          items: 5
        },
        1920: {
          items: 5
        }
      }
    });
    $('.owl-carousel').find('.owl-nav').removeClass('disabled');
    $('.owl-carousel').on('changed.owl.carousel', function (event) {
      $(this).find('.owl-nav').removeClass('disabled');
    });
  </script>
</body>

</html>