<?php
    
    if($_POST['courseID']){
        $link = mysqli_connect('localhost', "root", "", 'example');
        
        $sql1 = "select * from units where courseId =".$_POST['courseID'];
        if($result = mysqli_query($link, $sql1)){
            if(mysqli_num_rows($result) > 0){

                echo '<option>--units--</option>';
                while($row = mysqli_fetch_array($result)){ 
                    
                    echo '<option id='.$row['unitId'].'>'.$row['unitName'].'</option>';
                }
                mysqli_free_result($result);
            }
            else
                echo '<option>no units added yet</option>';
        }
        mysqli_close($link);
    }
?>