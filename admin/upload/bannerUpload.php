<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)){?> <script> alert( "Error: Please select a valid file format.")</script>
    <?php
        }

        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize){?> <script> alert( "Error: File size is larger than the allowed limit.")</script>
    <?php
    }
        
        if(in_array($filetype, $allowed)){
            
            if(file_exists("../banner/" . $filename)){?>
                <script> alert( "file already exists.")</script> 
            <?php
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "../banner/" . $filename);
                ?>
                <script> alert("Your file was uploaded successfully.")</script>
                <?php } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>File Upload Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Upload Banner</h2>
            
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="file">File:</label>
                            <input type="file" name="photo" class="form-control" id="fileSelect" >
                        </div>

                        <p style="color:red" class="form-control"><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p><br>
                        <input type="submit" name="submit" class="btn btn-primary" value="Upload">
                        <a href="upload.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>