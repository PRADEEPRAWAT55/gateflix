<?php 
    if(isset($_POST['courses']))
    echo $_POST['courses'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!--###########################font-awesome#######################-->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>    
    
    <link rel='stylesheet' type='text/css' media='screen' href='../css/course.css'>
    
    <!--############################################################################-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!--##########################################################-->

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class=" registration-form" action="php/courseAddition.php" method="post">
                    <h4 style="letter-spacing:1px ;padding-bottom:10px; text-align: center">Course Addition</h4>
                    <div class="registration-input-container">
                        <i class="fa fa-book registration-icon"></i>
                        <select class="registration-input-field text-center" onchange="unit(this)" id="courses" name="courses">
                            <option>--Courses--</option>
                            <?php
                                
                                $link = mysqli_connect('localhost', "root", "", 'example');

                                $sql1 = "select * from courses";
                                    if($result = mysqli_query($link, $sql1)){
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_array($result)){ ?>
                                                <option class="registration-input-field text-dark" 
                                                    data-img=""
                                                    data-dis=""
                                                    data-points=""
                                                    data-oprice=""
                                                    data-sprice=""
                                                    id="<?php echo $row['courseId']?>"
                                                    value="<?php echo $row['courseName']?>">
                                                    <?php echo $row['courseName']?>
                                                </option>
                                            <?php
                                            }
                                            mysqli_free_result($result);
                                        }
                                    }
                                    mysqli_close($link);
                                    ?>
                        </select>
                        <input id="courseId" name="courseId" type="hidden">
                        <a class="fa fa-plus registration" data-bs-toggle="modal" data-bs-target="#myModal2"></a>
                    </div>

                    <div class="registration-input-container">
                        <i class="fa fa-book-open registration-icon"></i>
                        <select class="registration-input-field text-center" onchange="chapter(this)" id="units" name="units">
                            <option>--Units--</option>
                        </select>
                        <a class="fa fa-plus registration" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"></a>
                    </div>

                    <div id="collapseExample" class="collapse registration-input-container">
                        <input class="registration-input-field" type="text" placeholder="add new unit" name="unitName">
                        <button type="submit" id="addUnit" name="addUnit" class="fa fa-save registration " title="Save" data-toggle="tooltip" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"></button>
                    </div>

                    <div class="registration-input-container">
                        <a class="fa fa-edit registration-icon" href="#"></a>
                        <select class="registration-input-field text-center" id="chapters" name="chapters">
                            <option>--Chapters--</option>
                        </select>
                        <a class="fa fa-add registration" data-bs-toggle="modal" data-bs-target="#myModal1" href="#"></a>
                    </div>

                    <a href="upload.php" class="text-dark btn course-btn w-100 btn-outline-success">Back</a>
                </form>
            </div>
            <div class="col-md-6 border border-4">
                <img>
            </div>
        </div>
    
        <!--#########################################################-->
    
        <section>
                    <div class="modal fade" id="myModal2">
                        <div class="modal-dialog mr-5 modal-md">
                            <div class="modal-content modal-design">

                            <!-- Modal Header -->
                                <!-- <div class="modal-header text-center">
                                    <h6 class="modal-title w-100">Add new course<h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div> -->
                                <div class="modal-body" style="padding: unset;">
                                <div class="container">
                                    <form class="registration-form" action="php/courseAddition.php" method="post" enctype="multipart/form-data"> 
                                        
                                    <div class="registration-input-container">
                                        <input class="registration-input-field from-control" type="text" placeholder="Course name" id="cname" name="cname">
                                    </div>

                                    <div class="registration-input-container">
                                        <input class="registration-input-field from-control" type="number" placeholder="Course ID" id="cid" name="cid">
                                    </div>

                                    <div class="registration-input-container">                              
                                        <input class="registration-input-field from-control" type="file" value="upload" placeholder="Short discription here" id="photo" name="photo">
                                    </div>

                                    <div class="registration-input-container">
                                        <textarea class="registration-input-field form-control" type="text" placeholder="Short discription here" id="dis" name="dis"></textarea>
                                    </div>

                                    <div class="registration-input-container">
                                        <textarea class="registration-input-field form-control" type="text" placeholder="Key learning points" onkeyup="handleInput(event)" id="points"  name="points"></textarea>
                                    </div>

                                    <div class="registration-input-container">
                                        <input class="registration-input-field from-control" type="text" placeholder="Tutor name" id="tname" name="tname">
                                    </div>

                                    <div class="registration-input-container">
                                        <input class="registration-input-field from-control" type="number" placeholder="Original price" id="oprice" name="oprice">
                                    </div>

                                    <div class="registration-input-container">
                                        <input class="registration-input-field from-control" type="number" placeholder="Selling price" id="sprice" name="sprice">
                                    </div>

                                    <button type="submit" id="course" name="course" class="registration-btn">upload</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="modal fade" id="myModal1">
                        <div class="modal-dialog mr-5 modal-md">
                            <div class="modal-content modal-design">

                                 <div class="modal-header text-center">
                                    <h4 class="modal-title w-100">Add new chapter<h4>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body" style="padding: unset;">
                                <div class="container">
                                    <form class="registration-form" action="php/courseAddition.php" method="post">

                                    <div class="registration-input-container">
                                        <input class="registration-input-field from-control" type="text" placeholder="Enter Title" id="title" name="title">
                                        <input id="unitId" name="unitId" type="hidden">
                                    </div>

                                    <div class="registration-input-container">
                                        <input class="registration-input-field from-control" type="text" placeholder="Enter video link" id="link" name="link">
                                    </div>

                                    <div class="registration-input-container">
                                        <textarea class="registration-input-field form-control" type="text" placeholder="Set discription here" id="dis" name="dis"></textarea>
                                    </div>

                                    <button type="submit" id="addChapter" name="addChapter" class="registration-btn">Upload</button>
                                    </form>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
        <!--#########################################################-->

    </div>

    <script type="text/javascript">

        const bullet = "\u2713";
        const bulletWithSpace = `${bullet} `;
        const enter = 13;

        const handleInput = (event) => {
        const { keyCode, target } = event;
        const { selectionStart, value } = target;
        
        if (keyCode === enter) {
           
            target.value = [...value]
            .map((c, i) => i === selectionStart - 1
                ? `\n${bulletWithSpace}`
                : c
            )
            .join('');
            
            
            target.selectionStart = selectionStart+bulletWithSpace.length;
            target.selectionEnd = selectionStart+bulletWithSpace.length;
        }
        
        if (value[0] !== bullet) {
            target.value = `${bulletWithSpace}${value}`;
        }
        }

        var str = "";

        function unit(id) {
            
            $("select option:selected" ).each(function() {
                str = $( this ).attr("id");
                return false;
            });

            document.getElementById("courseId").setAttribute('value',str);

            $.ajax({
                type:'post',
                url:'php/fetchUnitData.php',
                data : {courseID : str},
                success:function(data){
                    $('#units').html(data);
                }
            })
           }
           
           function chapter(context) {
               var id="",count=0;
            $("select option:selected" ).each(function() {
                count++;
                id = $( this ).attr("id");
                if(count==2)
                return false;
            });
            //alert(name+" "+str);
            $.ajax({
                type:'post',
                url:'php/fetchChapterData.php',
                data : {unitId :id},
                success:function(data){
                    //alert(id);
                    //alert(str+" "+name);
                    document.getElementById("unitId").setAttribute('value',id);
                    $('#chapters').html(data);
                }
            })
           }
    </script>
</body>
</html>