<?php

require_once "../config/config.php";
 
$title = $lnk ="";
$title_err = $lnk_err = "";
 
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate title
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter a title.";
    } else{
        $title = $input_title;
    }

    $input_lnk = trim($_POST["link"]);
    if(empty($input_lnk)){
        $lnk_err = "Please enter an lnk.";     
    } else{
        $lnk = $input_lnk;
    }
    
    if(empty($title_err) && empty($lnk_err)){
        // Prepare an update statement
        $sql = "UPDATE notif SET title=?, link=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "ssi", $param_title, $param_lnk, $param_id);
            
            $param_title = $title;
            $param_lnk = $lnk;
            $param_id = $id;
            
            if(mysqli_stmt_execute($stmt)){
                
                header("location: crud.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }

    mysqli_close($link);
} else{
   
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
      
        $id =  trim($_GET["id"]);
        
        $sql = "SELECT * FROM notif WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            $param_id = $id;
            
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    $title = $row["title"];
                    $lnk = $row["link"];
                } else{
                    
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        mysqli_stmt_close($stmt);
        
        mysqli_close($link);
    }  else{

        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                    <h2 class="mt-5">Update Notificatiion</h2>
                    <p>Please edit the input values and submit to update.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>title</label>
                            <input type="text" name="title" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title; ?>">
                            <span class="invalid-feedback"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>link</label>
                            <textarea name="link" class="form-control <?php echo (!empty($lnk_err)) ? 'is-invalid' : ''; ?>"><?php echo $lnk; ?></textarea>
                            <span class="invalid-feedback"><?php echo $lnk_err;?></span>
                        </div>
                    
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="crud.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>