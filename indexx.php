<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Gateflix</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap CSS cdn-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
 
  <!-- font awesome icons cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel='stylesheet' type='text/css' media='screen' href='css/style2.css'>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light nav-color">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Gateflix</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              courses
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Gate (6 monts)</a></li>
              <li><a class="dropdown-item" href="videoPanel.php">Gate (12 months)</a></li>
              <li><a class="dropdown-item" href="#">Gate (24 months)</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Syllabus
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <?php

            define('DB_SERVER_NAME', 'localhost');
            define('DB_USER_NAME', 'root');
            define('DB_PASS', '');
            define('DBNAME', 'gateflix');
            
            $link1 = mysqli_connect(DB_SERVER_NAME, DB_USER_NAME, DB_PASS, DBNAME);
            
            if($link1 === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $sql1 = "select * from courses";
              if($result = mysqli_query($link1, $sql1)){

                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_array($result)){ 
                    ?>
                    <li><a class="dropdown-item" href="testSeries.php?&cName=<?php echo $row['courseName']?> "><?php echo $row['courseName']?></a></li>
                  <?php
                  }
                  mysqli_free_result($result);
                }
              }
              mysqli_close($link1);
              ?>    
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="videoPanel.php?" id="navbarScrollingDropdown" role="button" aria-expanded="false">
              Test Series
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
               aria-expanded="false">
              PYQ
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Computer Science Engineering</a></li>
            </ul>
            </li>
        </ul>

        <a class="btn btn-outline-success bg-transparent text-black " onclick="document.getElementById('id01').style.display='block'" >Login</a>
        &nbsp;
        <a class="btn btn-outline-success bg-transparent text-black" onclick="document.getElementById('id02').style.display='block'" >Sing up</a>
      </div>
    </div>
  </nav>

  <!--#################################################################################################################################### -->
  <div class="container" style="margin-top :30px;">
    
    <div class="row">

      <!-----------------------------col------------------------------------->

      <div class="col-md-3 border border-3 rounded-4" style="  background-image: linear-gradient(to right top, #2ef1e8,  #1eb1a9); border-radius: 10px;">
        
        <!-- item-1 -->

        <div class="btn-group dropend">
        <button style="" type="button" class="btn btn-trans bg-transparent" data-bs-toggle="dropdown" aria-expanded="false">gate online(live) classes</button><i class="dropdown-toggle"></i>          
          <ul class="dropdown-menu">
          <?php

            $link = mysqli_connect('localhost', "root", "", 'gateflix');

            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $sql1 = "select * from courses";
              if($result = mysqli_query($link, $sql1)){
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_array($result)){ ?>
                    <li><a class="dropdown-item" href="#"><?php echo $row['courseName']?></a></li>
                  <?php
                  }
                  mysqli_free_result($result);
                }
              }
              mysqli_close($link);
              ?>    
          </ul>
        </div>

        <!-----item2------->

        <div class="btn-group dropend bg-transparent" >
        <button style="" type="button" class="btn btn-trans bg-transparent " data-bs-toggle="dropdown" aria-expanded="false">
          gate live record cource
        </button>
        <i class="dropdown-toggle"></i>          
          
          <ul class="dropdown-menu">
          <?php

            $link = mysqli_connect('localhost', "root", "", 'gateflix');

            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $sql1 = "select * from courses";
              if($result = mysqli_query($link, $sql1)){
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_array($result)){ ?>
                    <li><a class="dropdown-item" href="#"><?php echo $row['courseName']?></a></li>
                  <?php
                  }
                  mysqli_free_result($result);
                }
              }
              mysqli_close($link);
              ?>
          </ul>
        </div>

        <!-------------item3-------------------->
        <div class="btn-group dropend">
          <button style="" type="button" class="btn btn-trans bg-transparent" data-bs-toggle="dropdown" aria-expanded="false">
            gate record lecture(Hindi)
          </button>
          <i class="dropdown-toggle"></i>          

          <ul class="dropdown-menu">
            <?php

            $link = mysqli_connect('localhost', "root", "", 'gateflix');

            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $sql1 = "select * from courses";
              if($result = mysqli_query($link, $sql1)){
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_array($result)){ ?>
                    <li><a class="dropdown-item" href="#"><?php echo $row['courseName']?></a></li>
                  <?php
                  }
                  mysqli_free_result($result);
                }
              }
              mysqli_close($link);
              ?>          
            </ul>
        </div>

        <!---------item4------------>

        <div class="btn-group dropend">
        <button style="" type="button" class="btn btn-trans bg-transparent" data-bs-toggle="dropdown" aria-expanded="false">
            gate test series
          </button>
          <i class="dropdown-toggle"></i>          

          <ul class="dropdown-menu">
            <?php
            $link = mysqli_connect('localhost', "root", "", 'gateflix');

            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $sql1 = "select * from courses";
              if($result = mysqli_query($link, $sql1)){
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_array($result)){ ?>
                    <li><a class="dropdown-item" href="#"><?php echo $row['courseName']?></a></li>
                  <?php
                  }
                  mysqli_free_result($result);
                }
              }
              mysqli_close($link);
              ?>
          </ul>
        </div>

        <!--------item5----------->

        <div class="btn-group dropend">
        <button style="" type="button" class="btn btn-trans bg-transparent" data-bs-toggle="dropdown" aria-expanded="false">
            gate material
          </button>
          <i class="dropdown-toggle"></i>          

          <ul class="dropdown-menu">
            <?php
            $link = mysqli_connect('localhost', "root", "", 'gateflix');

            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $sql1 = "select * from courses";
              if($result = mysqli_query($link, $sql1)){
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_array($result)){ ?>
                    <li><a class="dropdown-item" href="#"><?php echo $row['courseName']?></a></li>
                  <?php
                  }
                  mysqli_free_result($result);
                }
              }
              mysqli_close($link);
              ?>
          </ul>
        </div>
      </div>
      
      <!----------------------------col-2-------------------------------->
      
      <div class="col-lg-6">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
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
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        
        </div>
        
      </div>

      <!---------------------------col-3--------------------------------->

      <div class="col">
        <ol class="list-group ">
          <div>
            <span class="badge bg-transparent rounded-circle d-sm-block">
              <img class="anim" style="width: 45px; height: 45px; float: left;" class="fa-angle-left"
                src="img/anim.jpeg" alt="">
            </span>
            <h5 style="transform:translateY(40%);">NOITIFICATION</h5>
          </div>
          <table class="wrap" >
                  <?php
                    require_once "config/config.php";
                    $sql = "SELECT * FROM notif";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){?>
                                    <tr>
                                      <td class="icon"><i class="fas fa-bell m-lg-1"></td>
                                      <td >
                                        <a style="font-size: medium; color:green" href="<?php echo $row['link'] ?>"><?php echo $row['title']?></a>
                                        
                                      </td> 
                                    </tr>
                                    
                                <?php
                                }
                            mysqli_free_result($result);
                        } else
                            echo '<div class="alert alert-danger"><em>No Notificatiion.</em></div>';
                        
                    } else{
                        echo '<div class="alert alert-danger"><em>try after some time.</em></div>';
                    }
                    mysqli_close($link);
                  ?>
          </table>   
        </ol>
      </div>
    </div>
  </div>

  <!--############################################################################################################################# -->

  <div style="padding:60px; padding-bottom:0px;" class="row ">
      
      <?php
            $link = mysqli_connect('localhost', "root", "", 'gateflix');

            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $sql1 = "select * from courses";
              if($result = mysqli_query($link, $sql1)){
                if(mysqli_num_rows($result) > 0){

                  while($row = mysqli_fetch_array($result)){ ?>
                  <div  class="col-sm-3">
                    <a style="margin:5px; margin-top:0px; width: 100%; padding:20px" class="btn btn-outline-success" href="testSeries.php?&cName=<?php echo $row['courseName'] ?>"><strong><?php echo $row['courseName']?></strong></a>
                  </div>  
                  <?php
                  }
                  mysqli_free_result($result);
                }
              }
              mysqli_close($link);
              ?>
  </div>

  <!--############################################################################################################################# -->

  <div class="container" style="margin-top: 30px;">
    <div class="row">
      <br />
      <div class="col text-center feedback-text">
        <h3>Online Gate Exam <span style="color: rgb(247, 130, 130);" class="feedback-hadding"> Coaching Platform</span>
        </h3>
      </div>
    </div>
    </br>
    <div class="row text-center text-black-50">
      <div class="col">
        <div class="counter">
          <i class="fa fa-user fa-2x count-icon-color"></i>
          <h3 class="timer count-title count-number text-black-50" data-to="100" data-speed="1500">103599</h3>
          <p class="count-text text-dark">Total User</p>
        </div>
      </div>
      <div class="col">
        <div class="counter">
          <i class="fa fa-video fa-2x count-icon-color"></i>
          <h3 class="timer count-title count-number text-black-50" data-to="1700" data-speed="1500">6339</h3>
          <p class="count-text text-dark">Total Videos</p>
        </div>
      </div>
      <div class="col">
        <div class="counter">
          <i class="fab fa-android fa-2x count-icon-color"></i>
          <h3 class="timer count-title count-number text-black-50" data-to="11900" data-speed="1500">22.4k+</h3>
          <p class="count-text text-dark">App Download</p>
        </div>
      </div>
      <div class="col">
        <div class="counter">
          <i class="fa fa-users fa-2x  count-icon-color"></i>
          <h3 class="timer count-title count-number text-black-50" data-to="157" data-speed="1500">50k+</h3>
          <p class="count-text text-dark">monthly Users</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top:60px">
    <div class="row">
      <div class="col-md-8">
        <h4 style="letter-spacing:1px ;padding-bottom:30px;">Why GATEFLIX Online Coaching Classes</h4>
        <p class="fbb"> <i class="fa-solid fa-check check-color"></i>&nbsp; &nbsp; The only exclusive Gate online
          coaching platform which is providing Personal Mentor</p>
        <p class="fbb"> <i class="fa-solid fa-check check-color"></i>&nbsp; &nbsp; 1500+ hrs of live lectures in
          GATE 2022-23</p>
        <p class="fbb"> <i class="fa-solid fa-check check-color"></i>&nbsp; &nbsp; Weekend Batches (Sat-Sun)</p>
        <p class="fbb"> <i class="fa-solid fa-check check-color"></i>&nbsp; &nbsp; Exclusive Test
          Series(Full-Length Test – Subject Test – Sessional Test)</p>
        <p class="fbb"> <i class="fa-solid fa-check check-color"></i>&nbsp; &nbsp; Complementary
          E-Material(Theory Book – Exercise Book – Questions Bank)</p>
        <p class="fbb"> <i class="fa-solid fa-check check-color"></i>&nbsp; &nbsp; Live doubt solving sessions &
          Live Chat options</p>
        <p class="fbb"> <i class="fa-solid fa-check check-color"></i>&nbsp; &nbsp; Saves Valuable travel time of
          Students & Working Professional</p>
      </div>
      <div class="col-md-4">
        <form class=" registration-form">
          <h4 style="letter-spacing:1px ;padding-bottom:10px; text-align: center">Register Form</h4>
          <div class="registration-input-container">
            <i class="fa fa-user registration-icon"></i>
            <input class="registration-input-field" type="text" placeholder="Username *" name="usrnm">
          </div>

          <div class="registration-input-container">
            <i class="fa fa-envelope registration-icon"></i>
            <input class="registration-input-field" type="text" placeholder="Email *" name="email">
          </div>

          <div class="registration-input-container">
            <i class="fa fa-phone registration-icon"></i>
            <input class="registration-input-field" type="text" placeholder="Contact Number *" name="number">
          </div>

          <div class="registration-input-container">
            <select class="form-select registration-input-container " aria-label="Default select example">
              <option class="registration-input-field" >Open this select menu</option>
              
              <?php
              $link = mysqli_connect('localhost', "root", "", 'gateflix');

              if($link === false){
                  die("ERROR: Could not connect. " . mysqli_connect_error());
              }

              $sql1 = "select * from courses";
                if($result = mysqli_query($link, $sql1)){
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){ ?>
                      <option class="registration-input-field text-dark" ><?php echo $row['courseName']?></option>
                    <?php
                    }
                    mysqli_free_result($result);
                  }
                }
                mysqli_close($link);
                ?>
            </select>
          </div>
          <button type="submit" class="registration-btn">Register</button>
        </form>
      </div>
    </div>
  </div>

  <!--#################################################################################################################################### -->
  <!-- <div class="container" style="margin-top: 50px;">
    <h2 style="color:rgb(247, 130, 130); text-decoration: underline; font-weight: 600;" class="feedback-hadding">Mock text</h2>
    
    <div class="owl-carousel">
      
      
        <div class="card border-0 shadow-sm" >
          <div class="card-header bg-transparent border-0">
            <span class="dot">SALE</span>
          </div>
          <div class="card-body text-success">

            <img style="width: 85px; height: 85px;" class="img" src="img/sb1.jpeg"><br>
            <p class="text-black sb-para">All India mock test
            </p>
          </div>
          <div class="card-footer bg-transparent ">
            <p class="text-black size">Mechanical Engineering</p>
            <a href="#" class="payment btn ">start now</a>
          </div>
        </div>
      
        <div class="card border-0 shadow-sm" style="max-width: 18rem;">
          <div class="card-header bg-transparent border-0">
            <span class="dot">SALE</span>
          </div>
          <div class="card-body text-success">

            <img style="width: 85px; height: 85px;" class="img" src="img/sb2.jpeg"><br>
            <p class="text-black sb-para">All India mock test
            </p>
          </div>
          <div class="card-footer bg-transparent ">
            <p class="text-black  size ">Chemical Engineering </p>
            <a href="#" class="payment btn ">start now</a>
          </div>
        
      </div>


        <div class="card border-0 shadow-sm" style="max-width: 16rem;">
          <div class="card-header bg-transparent border-0">
            <span class="dot">SALE</span>
          </div>
          <div class="card-body text-success">

            <img style="width: 85px; height: 85px;" class="img" src="img/sb3.jpeg"><br>
            <p class="text-black sb-para">All India mock test
            </p>
          </div>
          <div class="card-footer bg-transparent ">
            <p class="text-black size">Instrumentation Eng</p>
            <a href="#" class="payment btn ">start now</a>
          </div>
        
      </div>

      
        <div class="card border-0 shadow-sm" style="max-width: 16rem;">
          <div class="card-header bg-transparent border-0">
            <span class="dot">SALE</span>
          </div>
          <div class="card-body text-success">
            <img style="width: 85px; height: 85px;" class="img" src="img/sb4.jpeg"><br>
            <p class="text-black sb-para">All India mock test</p>
          </div>
          <div class="card-footer bg-transparent ">
            <p style="text-align:center" class="text-black  size">Electrical Engineering</p>
            <a href="#" class="payment btn ">start now</a>
          </div>
        
      </div>
      
        <div class="card border-0 shadow-md" style="max-width: 16rem;">
          <div class="card-header bg-transparent border-0">
            <span class="dot">SALE</span>
          </div>
          <div class="card-body text-success">
            <img style="width: 85px; height: 85px;" class="img" src="img/sb5.jpeg"><br>
            <p class="text-black sb-para">All India mock test</p>
          </div>
          <div class="card-footer bg-transparent ">
            <p style="text-align:center" class="text-black  size">Civil Engineering</p>
            <a href="#" class="payment btn ">start now</a>
          </div>
        </div>
     

        <div class="card border-0 shadow-sm" style="max-width: 16rem;">
          <div class="card-header bg-transparent border-0">
            <span class="dot">SALE</span>
          </div>
          <div class="card-body text-success">
            <img style="width: 85px; height: 85px;" class="img" src="img/sb6.jpeg"><br>
            <p class="text-black sb-para">All India mock test</p>
          </div>
          <div class="card-footer bg-transparent ">
            <p style="text-align:center" class="text-black  size">Computer Science</p>
            <a href="#" class="payment btn ">start now</a>
          </div>
        </div>
        
    </div>
  </div> -->

  <!--#################################################################################################################################### -->

  <div class="container">
    <p class="feedback-text">FEEDBACK OF</br><span class="feedback-hadding">Online Classes For Gate Exams</span></p>
    <div class="row">
      <div class="col-md-6">
        <p class="fp">Course</p>
        <div class="alert alert-light size" style="border: 1px solid rgb(182, 177, 177);">
          <strong>Quality of the session
            <p style="text-align: right;">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              4.8
            </p>
          </strong>
        </div>
        <div class="alert alert-light size" style="border: 1px solid rgb(182, 177, 177);">
          <strong>Ease of access to classes
            <p style="text-align: right;">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              4.7
            </p>
          </strong>
        </div>
        <div class="alert alert-light size" style="border: 1px solid rgb(182, 177, 177);">
          <strong>Quality of e-book content
            <p style="text-align: right;">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              4.5
            </p>
          </strong>
        </div>
        <div class="alert alert-light size" style="border: 1px solid rgb(182, 177, 177);">
          <strong>User-friendly Platform
            <p style="text-align: right;">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              4.8
            </p>
          </strong>
        </div>
      </div>
      <div class="col-md-6">
        <p class="fp">Faculty</p>
        <div class="alert alert-light size" style="border: 1px solid rgb(182, 177, 177);">
          <strong>Student engagement
            <p style="text-align: right;">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              3.9
            </p>
          </strong>
        </div>
        <div class="alert alert-light size" style="border: 1px solid rgb(182, 177, 177);">
          <strong>Subject Expertise</strong>
          <p style="text-align: right;">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            4.5
          </p>
        </div>
        <div class="alert alert-light size" style="border: 1px solid rgb(182, 177, 177);">
          <strong>Quality of Content
            <p style="text-align: right;">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              5.0
            </p>
          </strong>
        </div>
        <div class="alert alert-light size" style="border: 1px solid rgb(182, 177, 177);">
          <strong>Clarification of doubts
            <p style="text-align: right;">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              4.9
            </p>
          </strong>
        </div>
      </div>
    </div>
  </div>

  <!--#################################################################################################-->

  <div class="container" style="margin-top: 30px;">
    <h3 style="font-weight: 500; text-align: center" class="feedback-text">India’s Best Online<span class="info feedback-hadding"> Learning Platform</span>
    </h3>
    <p style="text-align: center; " class="fp">GATEFLIX – A Gateway to Affordable Education</p>
    <div style="margin-top:15px;">
      <p style="text-align: center; padding:20px" class="fp">Gateflix provides best online video lectures for GATE,
        CAT,
        Bank and
        various other exams.Dedicated to all the hard
        working students in need of best guidance to achieve great grades. The gates for success are open only at
        GATEFLIX.
        Unlock your destiny.</p>
    </div>
  </div>

  <!-- ################################################################################################################### -->

  <hr style="height:3px; border-width:0">

  <div class="container" style="margin:30px">
    <div class="row">
      <div class="col-md-2">
        <p class="fp" style="text-align:center;">Newsletter Sign Up</p>
        <p style="font-size: 11px; text-align: center;"> (Be updated with our latest news)</p>
      </div>
      <div class="col-md-5">
        <p style=" text-align: center;font-size: 15px;">Join and become amongst the first ones to get latest news
          about
          discounts and
          offers.</p>
      </div>
      <div class=" col-md-5">
        <form class="example" action="action_page.php">
    
          <input type="text" placeholder="Your Email Address.." name="search">
          <button type="submit">Subscribe</button>
                 
        </form>
      </div>
    </div>
  </div>
  <footer class=" bg-secondary">
    <div  style="padding-top:20px;" class="container">
      <div class="row ">

        <div class="col-md-3 ">
          <h5>Get The App</h5>
          <hr style="height:3px; border-width:0" class="hr">
          <div class="d-inline-flex ">
            <P style="font-size: 16px; padding:15px">
              <span style="font-weight: 700;"> Gateflix</span> allows students to be thorough
              with their choice of streams or subjects,
              by enabling them to learn at their
              comfortable time without losing out
              on sessions and conveniently access
              sessions from any given place.
            </P>
          </div>
        </div>
        <div class="col-md-4  ">
          <h5>Exams</h5>
          <hr style="height:3px; border-width:0" class="hr">
          <div class="d-inline-flex p-3">
            <div class="p-2">
              <ul>
                <li><a href=" ">GATE</a></li>
                <li><a href=" ">GATE Exam</a></li>
                <li><a href=" ">IES</a></li>
                <li><a href=" ">G.K by V.k</a></li>
                <li><a href=" ">UPPSC</a></li>
                <li><a href=" "> GATE Booster Course</a></li>
              </ul>
            </div>
            <div class="p-2">
              <ul>
                <li><a href=" ">IELTS</a></li>
                <li><a href=" ">Banking Exams</a></li>
                <li><a href=" ">Aptitude Exams </a></li>
                <li><a href=" ">CLAT/IPM Classes</a></li>
              </ul>
            </div>
            <div class="p-2">
              <ul>
                <li><a href=" ">CAT </a></li>
                <li><a href=" ">Placement Training</a></li>
                <li><a href=" ">State-PSC (Technical Exams)</a></li>
              </ul>
            </div>

          </div>
        </div>
        <div class="col-md-2   ">
          <h5>About</h5>
          <hr style="height:3px;border-width:0;" class="hr">
          <div class="d-inline-flex">
            <ul>
              <li><a href=" ">About DemoPage</a></li>
              <li><a href=" ">Blog</a></li>
              <li><a href=" ">Support</a></li>
              <li><a href=" ">Contact Us</a></li>
              <li><a href=" ">Terms and Conditions</a></li>
              <li><a href=" ">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <h5>Contact</h5>
          <hr style="height:3px;border-width:0" class="hr">
          <div class="d-inline-flex">
            <div class="d-flex flex-column">
              <div class="p-2">
                <p style=" font-size: 16px;">Helpline Number : </p>
                <p> <i class="fas fa-phone"></i> : 91xxxxxx88 </p>
                <p> <i class="fas fa-phone"></i> : 95xxxxxx11 </p>
                <p> <i class="fas fa-phone"></i> : 91xxxxxx21 </p>
                <p> <i class="fas fa-envelope"></i> : pradeep2000rawat@gmail.com </p>

              </div>
              <div class="p-2">
                <ul>
                  <li class="list-inline">
                    <a href="#"> <i class="fab fa-facebook fa-2x" style=" color:blue ;"></i></a> &nbsp;
                    <a href="mailto:gairakamal7777@gmail.com"> <i class="fab fa-google fa-2x" style=" color: red;"></i></a> &nbsp;
                    <a href="https://api.whatsapp.com/send?phone=+919528969611"> <i class="fab fa-whatsapp fa-2x" style=" color:green ;"></i></a> &nbsp;
                    <a href="#"> <i class="fab fa-linkedin fa-2x" style=" color: blue ;"></i></a> &nbsp;
                    <a href="#"> <i class="fab fa-github fa-2x" style=" color: black ;"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 footer-color">
        <h4 style="text-align: center; font-size: 15px; padding: 14px; font-weight: 700">2021 Gateflix All rights
          reserved.</h4>
      </div>
    </div>
  </footer>

  <!--##########################################################################-->
   
  <div id="id01" class="modal">

        <form class="modal-content animate" action="" method ="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">×</span>
                <img src="/unnamed.png"
                    alt="Avatar" class="avatar">
            </div>

            <div class="wrapper">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                
                <input type="checkbox" checked="checked"> Remember me
                <br>
                <br>
                <div class="clearfix">
                    <a href="admin/admin.php" type="submit" id="signupbtn" class="signupbtn" style="align-self:center;">Sign In</a>
                </div>                
            </div>
            <div class="wrapper" style="background-color:#f1f1f1">
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>

    <div id="id02" class="modal">
        <form class="modal-content animate" action="/action_page.php" >
            <div class="imgwrapper">
                <span onclick="document.getElementById('id02').style.display='none'" class="close"
                    title="Close Modal">×</span>
                <img src="/unnamed.png"
                    alt="Avatar" class="avatar">
            </div>

            <div class="wrapper">
                <label><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
 
                <label><b>Confirm Password</b></label>
                <input type="password" placeholder="Confirm Password" name="psw-repeat" required>
                <input type="checkbox"> Remember me
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
 
                <div class="clearfix">
                    <button type="submit" id="signupbtn" class="signupbtn" style="">Sign Up</button>
                </div>
            </div>
        </form>
    </div>

</body>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
  integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
  integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">


  $('.owl-carousel').owlCarousel({
    
    loop: true,
    margin: 30,
    autoplay: true,
    autoplayTimeout: 4000,
    stagePadding: 20,


    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 2
      },
      800: {
        items: 3
      },
      900: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  })
</script> -->
</html>