<?php
include '../config/config.php';

if(isset($_POST['demoButton']))
{	 
    $cName = $_POST["id1"];
    $lnk   = $_POST["link"];
    $cId   = $_POST["courseId"];
    $desc  = $_POST["dis"];
    $price = $_POST["price"];
    $sprice= $_POST["sprice"];

    if(!empty($lnk) && !empty($cName)){

        $sql = "INSERT INTO demovideos (courseID, courseName, link, discription, oPrice, sPrice)
        VALUES ('$cId', '$cName', '$lnk','$desc','$price','$sprice')";

        if (mysqli_query($link, $sql))
            echo "New record created successfully !";
        else
            echo "Error: " . $sql . " " . mysqli_error($link);
        
        mysqli_close($link);
    }
    else
    $err ="please fill all the fields";
}
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Gateflix</title>
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
    </head>
    <body>
        <div class="container">   
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="mb-3 mt-3">
                            <label for="text">Course : </label>
                            <select class="form-control" id="courseName" style="text-align: center;">
                                <option>-----Select Course-----</option>
                                <?php 
                                    $sql1 = "select * from courses";
                                    if($result = mysqli_query($link, $sql1)){
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_array($result)){ ?>
                                                <option id="<?php echo $row['courseId']?>" value="<?php echo $row['courseName']?>"><?php echo $row['courseName']?></option>
                                                <?php
                                            }
                                            mysqli_free_result($result);
                                        }
                                    }
                                    mysqli_close($link);
                                ?>   
                            </select>
                            <input type="hidden" id="id1" name="id1">    
                        </div>

                        <div class="mb-3 mt-3">
                            <select>
                                <option>kml</option>
                                
                            </select>
                        </div>

                        <div class="mb-3 mt-3">
                    </div>
                    
                    <div id="lnkk" class="mb-3 mt-3">
                        <label for="file">Link : </label>
                        <input type="text" class="form-control" id="link" placeholder="Enter Link" name="link">
                        <span class="invalid-feedback"><?php echo $err;?></span>
                    </div>
                    
                    <div class="mb-3">
                        <label for="dis">Description :</label>
                        <input type="text" class="form-control" id="dis" placeholder="Enter Description" name="dis">
                    </div>
                    
                    <div id="op" class="mb-3">
                        <label for="dis">Original Price(MRP) :</label>
                        <input type="" class="form-control" id="price" placeholder="Enter Original Price" name="price">
                    </div>
                    
                    <div id="sp" class="mb-3">
                        <label for="dis">Selling Price :</label>
                        <input type="" class="form-control" id="sprice" placeholder="Enter Selling Price" name="sprice">
                    </div>
                    
                    <input type="text" class="form-control " style="color: red; visibility:collaps;" id="courseId" name="courseId">
                    <button type="submit" id="demoButton" name="demoButton" class="btn btn-success">Submit</button>
                    <a style="float:right" class="btn btn-secondary" href="upload.php">Cancel</a>
                                
                </div>
                <div class="col-md-2"></div>
                
            </div>
        </form>
    </div>
    <script type="text/javascript">
        var li_items = document.querySelectorAll(".sidebar ul li");
        var hamburger = document.querySelector(".hamburger");
        var wrapper = document.querySelector(".wrapper");
        
            
        $("#courseName").change(function() {
            var str = "",str1="";
            $("select option:selected" ).each(function() {
                str = $( this ).attr("id");
                str1 = $( this ).attr("value");
                alert(str1);
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

