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
    <link rel='stylesheet' type='text/css' media='screen' href='css/videoPanel.css'>

    <style>
      .container-fluid{
        margin:20px;
      }

      .image-block {
      border: 3px solid white ;
      background-color: black;
      padding: 10px;    
      margin: 10px;
      height: 120px;
      text-align: center;
      vertical-align: bottom;
    }
    .image-block > p {
      width: 100%;
      height: 100%;
      font-weight: normal;
      font-size: 19px;
      padding-top: 100px;
      background-color: rgba(3,3,3,0.0);
      color: rgba(6,6,6,0.0);
    }
    .image-block:hover > p {
      background-color: rgba(3,3,3,0.5);    
      color: black;    
    }
    </style>
</head>
<body>
    <nav style="height: 60px;" class="navbar navbar-expand-sm navbar-light nav-color">
        <div class="container-fluid">
          <a class="navbar-brand" href="indx.php"><strong>Gateflix</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Exam
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Video lecture
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Test Series
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  
                </ul>
              </li>
            </ul>
                <a class="btn btn-outline-success bg-transparent text-black " onclick="document.getElementById('id01').style.display='block'" >Login</a>
                &nbsp;
                <a class="btn btn-outline-success bg-transparent text-black" onclick="document.getElementById('id02').style.display='block'" >Sing up</a>
          </div>
        </div>
      </nav>
      
      <!--#########################################################################-->

      <div class="container-fluid">
        <div class="row">
        <h4><?php echo $_GET['cName']; ?> </h4>

        <?php

        require_once "config/config.php";

        $cName = $_GET['cName'];
      
        $tabName="";
        $query = explode(" ",$cName);
        foreach($query as $p) $tabName = $tabName.$p;

        $sql = "SELECT * FROM ".$tabName."";

        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){?>

                  <div class="image-block col-sm-2 border border-3 rounded-3" style="background: url(banner/java.png) no-repeat center top;background-size:cover;">
                    
                    <p><a style="font-weight:bold;" href="demopage.php?id=<?php echo $row['id']?>&cName=<?php echo $cName ?> "><span style="" class="fa fa-play center text-danger"></span><?php echo $row['title'] ?></a></p>
                  </div>
              <?php
                }
                mysqli_free_result($result);
            }       
            else
              echo '<div class="alert alert-danger"><em>No videos found.</em></div>';
          } 
          else
            echo "Oops! Something went wrong. Please try again later.";
            mysqli_close($link);
            ?>    
            </div>
          </div>   
        </div>
      </div>
    
      <!--#########################################################################-->

      <br><br><br>
      <hr style="height:3px; border-width:0">
  
  
  <!--##########################################################################-->
    <footer>
    <div class="container">
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
        <div class="col-md-2 ">
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
                <p> <i class="fas fa-envelope"></i> : gairakamal7777@gmail.com </p>

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

    <div id="id01" class="modal">

        <form class="modal-content animate" action="" method ="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">×</span>
                <img src="/unnamed.png"
                    alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit" style="background-color: rgb(120, 29, 206);">Login</button>
                <input type="checkbox" checked="checked"> Remember me
            </div>

            <div class="container" style="background-color:#f1f1f1">
    
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>

    <div id="id02" class="modal">
        <form class="modal-content animate" action="/action_page.php" >
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close"
                    title="Close Modal">×</span>
                <img src="/unnamed.png"
                    alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
 
                <label><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                <input type="checkbox"> Remember me
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
 
                <div class="clearfix">
                    <button type="submit" class="signupbtn" style="background-color: rgb(120, 29, 206);">Sign Up</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>