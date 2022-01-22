<?php

require_once "../config/config.php";
 
$title = $lnk = "";
$title_err = $lnk_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter a title.";
    } else{
        $title = $input_title;
    }
    
    $input_lnk = trim($_POST["link"]);
    if(empty($input_lnk)){
        $lnk_err = "Please enter an link.";     
    } else{
        $lnk = $input_lnk;
    }
    if(empty($title_err) && empty($lnk_err)){
      
        $sql = "INSERT INTO notif (title, link) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "ss", $title, $lnk);
            
            $para_title = $title;
            $para_lnk = $lnk;
            
            if(mysqli_stmt_execute($stmt)){
                
                header("location: crud.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Notificatiion</title>
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
                    <h2 class="mt-5">Add Notificatiion</h2>
            
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <textarea name="link" class="form-control <?php echo (!empty($lnk_err)) ? 'is-invalid' : ''; ?>"></textarea>
                            <span class="invalid-feedback"><?php echo $lnk_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="crud.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>