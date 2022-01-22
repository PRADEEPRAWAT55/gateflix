<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Gateflix</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Bootstrap CSS cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- font awesome icons cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> 

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link rel='stylesheet' type='text/css' media='screen' href='css/style3.css'>

    <style>
        .container{
            width:60%;
            margin-top: 100px;
        }
        table tr td:last-child{
            width: 120px;
        }
        
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper hover_collapse">
        <div class="top_navbar">
            <div class="logo"><a style="text-decoration: none;" href="../indx.php">Gateflix</a></div>
            <div class="menu">
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <div class="sidebar_inner">
                <ul>
                    <li>
                        <a href="admin.php">
                            <span class="icon"><i class="fa fa-qrcode"></i></span>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="upload/upload.php">
                            <span class="icon"><i class="fa fa-upload"></i></span>
                            <span class="text">Upload</span>
                        </a>
                    </li>

                    <li>
                        <a href="notification/crud.php">
                            <span class="icon"><i class="fa fa-eye"></i></span>
                            <span class="text">Notification</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span class="icon"><i class="fa fa-book"></i></span>
                            <span class="text">Events</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fa fa-question-circle"></i></span>
                            <span class="text">About</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fa fa-pen"></i></span>
                            <span class="text">Service</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fa fa-id-card"></i></span>
                            <span class="text">Contact</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <h3>Admin Control :</h3>
        <hr style="height:3px; border-width:0">
    <div class="accordion border border-3 rounded-3" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h4 class="pull-left text-dark">Total Added Course</h4>
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <div class="row">
                    <div class="col-md-12">
                        
                            <?php
                            $context="../admin.php";
                            require_once "config/config.php";
                            $tabName = "courses";
                            $sql = "SELECT * FROM ".$tabName."";
                            if($result = mysqli_query($link, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    echo '<table class="table table-bordered table-striped">';
                                        echo "<thead>";
                                            echo "<tr>";
                                                echo "<th>#</th>";
                                                echo "<th>Course ID</th>";
                                                echo "<th>Course Name</th>";
                                                echo "<th>Action</th>";
                                            echo "</tr>";
                                        echo "</thead>";
                                        echo "<tbody>";
                                        while($row = mysqli_fetch_array($result)){
                                            echo "<tr>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo "<td>" . $row['courseId'] . "</td>";
                                                echo "<td>" . $row['courseName'] . "</td>";
                                                
                                                echo "<td>";
                                                    echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                                    echo '<a href="notification/delete.php?id='. $row['id'] .'&tabName='.$tabName.'&context='.$context.'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                                echo "</td>";
                                            echo "</tr>";
                                        }
                                        echo "</tbody>";                            
                                    echo "</table>";
                                    // Free result set
                                    mysqli_free_result($result);
                                } 
                                else{
                                    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                                }
                            } else{
                                echo "Oops! Something went wrong. Please try again later.";
                            }

                            mysqli_close($link);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h4 class="pull-left text-dark">Total uploaded Demo Videos</h4>
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body show">
                <div class="row">
                    <div class="col-md-12">
                        
                            <?php
                            $link = mysqli_connect('localhost', "root", "", 'gateflix');
                            $tabName = "demovideos";
                            $sql = "SELECT * FROM ".$tabName."";
                            if($result = mysqli_query($link, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    echo '<table class="table table-bordered table-striped">';
                                        echo "<thead>";
                                            echo "<tr>";
                                                echo "<th>#</th>";
                                                echo "<th>Course ID</th>";
                                                echo "<th>Course Name</th>";
                                                echo "<th>Video Link</th>";
                                                echo "<th>Action</th>";
                                            echo "</tr>";
                                        echo "</thead>";
                                        echo "<tbody>";
                                        while($row = mysqli_fetch_array($result)){
                                            echo "<tr>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo "<td>" . $row['courseId'] . "</td>";
                                                echo "<td>" . $row['courseName'] . "</td>";
                                                echo "<td>" . $row['link'] . "</td>";
                                                
                                                echo "<td>";
                                                    echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                                    echo '<a href="notification/delete.php?id='. $row['id'] .'&tabName='.$tabName.'&context='.$context.'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                                echo "</td>";
                                            echo "</tr>";
                                        }
                                        echo "</tbody>";                            
                                    echo "</table>";
                                    // Free result set
                                    mysqli_free_result($result);
                                } 
                                else{
                                    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                                }
                            } else{
                                echo "Oops! Something went wrong. Please try again later.";
                            }

                            mysqli_close($link);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h4 class="pull-left text-dark">Total uploaded Banners</h4>
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body show">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
            </div>
        </div>
        </div>

    </div>
</body>
<script type="text/javascript">
     var li_items = document.querySelectorAll(".sidebar ul li");
    var hamburger = document.querySelector(".hamburger");
    var wrapper = document.querySelector(".wrapper");
    
    
    li_items.forEach((li_item)=>{
        li_item.addEventListener("mouseenter", ()=>{
    
    
                li_item.closest(".wrapper").classList.remove("hover_collapse");
    
        })
    })
    
    li_items.forEach((li_item)=>{
        li_item.addEventListener("mouseleave", ()=>{
    
                li_item.closest(".wrapper").classList.add("hover_collapse");
    
        })
    })
    
    hamburger.addEventListener("click", () => {
    
        hamburger.closest(".wrapper").classList.toggle("hover_collapse");
    })
    </script>
</html>