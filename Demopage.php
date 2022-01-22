<?php
include "config/config.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>I-Gate</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/styleDemopage.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/indexModule.css'>

</head>
<body onload='showDetails()'>
<header>
    <nav class="navbar navbar-expand-lg py-1 nav-color fixed-top navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="indx.php">Gateflix</a>
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

                  <a href="live-video.html" class="text-dark btn btn-outline-success w-100">Login</a>
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

    <div class="container" style="margin-top:60px;">
        <div class="row">
            <div class="col-lg-8">
                <div>
                            <?php
                                $id = $_GET['id'];
                                $link1 = mysqli_connect('localhost', "root", "", 'example');
                                $sql1 = "SELECT * FROM courses where courseId =".$id;
      
                                if($result1 = mysqli_query($link1, $sql1)){  
                                  if(mysqli_num_rows($result1) > 0){
                                    $row = mysqli_fetch_array($result1);?>
                                    <input type="hidden" value="<?php echo $row['points'];?>"</p>
                                    <input id="prices" type="hidden" data-dis-value="<?php echo $row['description'];?>" data-sp-value="<?php echo $row['sprice'];?>" data-op-value="<?php echo $row['oprice']?>" value="">
                                  <?php
                                  }
                                  else echo "no data";
                                  mysqli_free_result($result1);
                                }
                                else
                                echo "no result found";
                                mysqli_close($link1);

                                $link1 = mysqli_connect('localhost', "root", "", 'gateflix');
                                $sql = "SELECT * FROM demovideos where courseId=".$id;

                                if($result = mysqli_query($link, $sql)){
                                    if(mysqli_num_rows($result) > 0){
                                            $row = mysqli_fetch_array($result);

                                            $lnk ="https://www.youtube.com/embed/";
                                            $lnk1 = $row['link'];
                                            $lnk1 = explode("/",$lnk1);
                                            $lnk1 = $lnk1[count($lnk1)-1];

                                          //   function getDuration($url){
                                                
                                          //     $data=@file_get_contents('http://gdata.youtube.com/feeds/api/videos/'.$url.'?v=2&alt=jsonc');
                                          //     if (false===$data) return false;

                                          //     $obj=json_decode($data);

                                          //     return $obj->data->duration;
                                          // }

                                          // $duration = getDuration($lnk1);

                                            $lnk = $lnk.$lnk1;
                                            ?>
                                              <iframe id="if1" class="responsive" name="if1" width="100%" height="400" src="<?php echo $lnk ?>" title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                              <a style="font-size: large; font-weight: bold; margin-top: 10px;" type="" id="playVideo" class ="btn-md bg-transperent text-dark" target="if1">
                                                
                                              </a>
                                        <?php
        
                                        mysqli_free_result($result);
                                    }       
                                    else
                                        echo '<div class="alert alert-danger"><em>No Demo Videos.</em></div>';
                                } 
                                  mysqli_close($link);
                                  ?>
                          <hr>

                          <!--######################################################-->


                        <br>
                        
                    
                    
                    <div style="padding:20px;" class="container text border border-1">
                    <h4>things to learn</h4><br>
                    <?php
                      $link = mysqli_connect('localhost', "root", "", 'example');

                      $sql = "select points from courses where courseId=".$id;
                      if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){

                          $row = mysqli_fetch_array($result); 
                          $points =$row['points'];
                          $points = explode("!",$points);
                          $count=count($points);

                          for ($x = 0; $x < $count-1; $x++) {?>
                                <div style="font-size:13px;" class="row">
                                  <div class="col-md-6">
                                    <?php echo $points[$x++]."."; ?>
                                  </div>
                                  <div class="col-md-6">
                                  <?php echo $points[$x]."."; ?>
                                  </div>
                                </div>
                                <br>
                          <?php
                          } 
                        }
                      }
                      ?>
                      </div>                             

                    <!--#####################################################################-->
                    <br><br>
                    <h4>Course Content</h4><br>
                    <p>2 uints <strong>.</strong> 5 lectures <strong>.</strong> 2h 15m total</p> 
                    <div class="accordion" id="accordionExample">
                     <?php
                      $link = mysqli_connect('localhost', "root", "", 'example');

                      $sql = "select * from units where courseId=".$id;
                      if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){

                          while($row = mysqli_fetch_array($result)){ ?>      
                            <div class="accordion-item">
                           
                                <button class="accordion-button fa fa-plus text-dark" style="font-size:13px;" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo "#".$row['unitName'];?>" aria-expanded="true" aria-controls="<?php echo $row['unitName'];?>">
                                  <?php echo "  ".$row['unitName'];?> <span style="float:right; font-size:10px" class="text-dark"><?php echo $row['unitId'];?> lectures <strong>.</strong> <?php echo 5*$row['unitId'];?>m total</span> 
                                </button>
                          
                              <div id="<?php echo $row['unitName'];?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <ul style="list-style-type: none; margin: 0; padding: 0;">
                                <?php
                                  $link1 = mysqli_connect('localhost', "root", "", 'example');

                                  $sql1 = "select * from chapters where unitId=".$row['unitId'];

                                  if($result1 = mysqli_query($link1, $sql1)){
                                    ?>
                                    <?php if(mysqli_num_rows($result1) > 0){
                                      
                                      while($row1 = mysqli_fetch_array($result1)){ 

                                        $lnk ="https://www.youtube.com/embed/";
                                            $lnk1 = $row1['link'];
                                            $lnk1 = explode("/",$lnk1);
                                            $lnk1 = $lnk1[count($lnk1)-1];
                                            $lnk = $lnk.$lnk1;
                                        ?>
                                        <li><a  id="playVideo" href="<?php echo $lnk ?>" class ="text-dark" target="if1"><span style="" class="fa fa-play center text-danger"></span><?php echo "     ".$row1['title'];?></a><li><br>
                                      <?php
                                      }
                                      mysqli_free_result($result1);
                                    }
                      
              
                                  }
                                  mysqli_close($link1);
                                  ?>  
                                  </ul>
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
                    
                    <!--#####################################################################-->
                </div>
              </div>
            <div class="col-md-4">
                <div class="card" style="size:30rem; border-radius: 10px;">
                    <?php $image = "admin/upload/courseThumbnails/".$_GET['image'];  //echo $image ?>
                    <img src="<?php echo $image?>" class="card-img-top" alt="..." style="height: 200px;">
                    <div class="card-body">
                        <h6 id="op" style="text-decoration: line-through; color: darkorange; ">Real Price = </h6>
                        <h5 id="sp" style="color: #4CAF50;">Offer price = </h5>
                        <a href="#" class="btn">Buy Now</a>
                    </div>
                    <h4>about course</h4>
                        <p id="para" style="padding:5px 7px " >
                        </p>
                </div>
               
                    <br>
                    <h1>Recommendation</h1>
                    <ul class="list-group">
                        <li class="list-group-item">computer science Engineering <span class="badge rounded-pill">buy Now</span></li>  
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
  <!--##########################################################################-->
  <section>
      <footer style="margin-top: 30px; background-image: url(./img/wavesOpacity.svg); ">
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

    <script>

        function showDetails() {

        lnk = document.getElementById("playVideo");

        price = document.getElementById("prices");

        var data = price.getAttribute("data-dis-value");
        var sp = price.getAttribute("data-sp-value");
        var op = price.getAttribute("data-op-value");
        
        document.getElementById("para").innerHTML =  data;
        document.getElementById("op").innerHTML  =  "Original Price = "+op+"RS/-";
        document.getElementById("sp").innerHTML   = "Offer Price = "+sp+"RS/-";
      }

    </script>

</body>
</html>