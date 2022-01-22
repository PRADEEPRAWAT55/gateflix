<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <cName>Gateflix</cName>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

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

    <link rel='stylesheet' type='text/css' media='screen' href='../css/style3.css'>

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <style>
        .container{
            width: 600px;
            margin: 0 auto;
        }
    </style>
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
                        <a href="upload.php">
                            <span class="icon"><i class="fa fa-upload"></i></span>
                            <span class="text">Upload</span>
                        </a>
                    </li>
                    <li>
                        <a href="../notification/crud.php">
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
                    <h2 class="pull-left">Course Control</h2>
                    <a href="addNewCourse.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Course</a>
                </div>    
            </div>
        </div>
        <!--##################################################################-->

        <hr style="height:3px; border-width:0">

        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Banner Control</h2>
                    <a href="bannerUpload.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Banner</a>
                </div>    
            </div>
        </div>

        <!--##################################################################-->
        
        <!--##################################################################-->
    </div>
<script type="text/javascript">
    var li_items = document.querySelectorAll(".sidebar ul li");
    var hamburger = document.querySelector(".hamburger");
    var wrapper = document.querySelector(".wrapper");
    
    $(document).ready(function (){ 

        $("#demo").click(function(){
            document.getElementById('show').style.display = 'none';
            document.getElementById('paidButton').style.display = 'none';
            document.getElementById('demoButton').style.display = 'block';
        });
        
        $("#paid").click(function(){
            document.getElementById('show').style.display = 'block';
            document.getElementById('demoButton').style.display = 'none';
            document.getElementById('paidButton').style.display = 'block';
        });
    });

    $("#courseName").change(function() {
    var str = "",str1="";
    $("select option:selected" ).each(function() {
      str = $( this ).attr("id");
      str1 = $( this ).attr("value");
    });
    document.getElementById("courseId").setAttribute('value',str);
    document.getElementById("id1").setAttribute('value',str1);
    })
    .trigger( "change" );

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
</body>
</html>
