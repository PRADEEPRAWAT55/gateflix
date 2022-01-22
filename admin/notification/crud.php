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
        
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style3.css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
            <div class="logo"><a style="text-decoration: none;" href="../../indx.php">Gateflix</a></div>
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
                        <a href="../admin.php">
                            <span class="icon"><i class="fa fa-qrcode"></i></span>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="../upload/upload.php">
                            <span class="icon"><i class="fa fa-upload"></i></span>
                            <span class="text">Upload</span>
                        </a>
                    </li>
                    <li>
                        <a href="crud.php">
                            <span class="icon"><i class="fa fa-eye"></i></span>
                            <span class="text">Notification</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fa fa-book"></i></span>
                            <span class="text">Event</span>
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
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Admin Control</h2>
                    <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Notification</a>
                </div>
                    <?php
                    $context ="crud.php";
                    require_once "../config/config.php";
                    
                    $sql = "SELECT * FROM notif";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>title</th>";
                                        echo "<th>link</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        $tabName="notif";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['title'] . "</td>";
                                        echo "<td>" . $row['link'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='.$row['id'].'&tabName='.$tabName.'&context='.$context.'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
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
</body>
<script type="text/javascript">
    var li_items = document.querySelectorAll(".sidebar ul li");
    var hamburger = document.querySelector(".hamburger");
    var wrapper = document.querySelector(".wrapper");


    li_items.forEach((li_item) => {
        li_item.addEventListener("mouseenter", () => {
            li_item.closest(".wrapper").classList.remove("hover_collapse");

        })
    })

    li_items.forEach((li_item) => {
        li_item.addEventListener("mouseleave", () => {
            li_item.closest(".wrapper").classList.add("hover_collapse");
        })
    })

    hamburger.addEventListener("click", () => {
        hamburger.closest(".wrapper").classList.toggle("hover_collapse");
    })
</script>

</html>