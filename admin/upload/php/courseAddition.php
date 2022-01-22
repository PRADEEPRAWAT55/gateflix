<?php

$filename="";

if(isset($_FILES["photo"])){
    $filename = $_FILES["photo"]["name"];
}

if(isset($_POST['addUnit'])){
    echo "successful";
    $uName = $_POST["unitName"];
    $cId   = $_POST["courseId"];

    if($uName && $cId){
    $link = mysqli_connect('localhost', "root", "", 'example');
    $sql = "INSERT INTO units (courseId, unitName) VALUES  ('$cId', '$uName')";
        
    if (mysqli_query($link, $sql)){
        header("location: ../addNewCourse.php");
    }
    else
        echo "Error: ".mysqli_error($link);
        mysqli_close($link);
    }
}
else
if(isset($_POST['course'])){

    $cName = $_POST["cname"];
    $cId   = $_POST["cid"];
    $dis  = $_POST["dis"];
    $points  = $_POST["points"];
    $tname  = $_POST["tname"];
    $oprice = $_POST["oprice"];
    $sprice= $_POST["sprice"];
         
        $link = mysqli_connect('localhost', "root", "", 'example');
        $sql = "INSERT INTO courses (courseId, courseName, thumbnail, description, points, teacher, oprice, sprice) VALUES  ('$cId', '$cName', '$filename', '$dis', '$points', '$tname', '$oprice', '$sprice')";
        
        if (mysqli_query($link, $sql)){
            move_uploaded_file($_FILES["photo"]["tmp_name"], "../courseThumbnails/".$filename);
            header("location: ../addNewCourse.php");
        }
        else
            echo "Error: ".mysqli_error($link);
        mysqli_close($link);
}
else
if(isset($_POST['addChapter'])){

    $title = $_POST["title"];
    $unit   = $_POST["unitId"];
    $lnk  = $_POST["link"];
    $dis  = $_POST["dis"];
    
        $link = mysqli_connect('localhost', "root", "", 'example');
        $sql = "INSERT INTO chapters (unitId, title, link, description ) VALUES  ('$unit', '$title', '$lnk', '$dis')";
        
        if (mysqli_query($link, $sql)){
            header("location: ../addNewCourse.php");
        }
        else
            echo "Error: ".mysqli_error($link);
        mysqli_close($link);
}