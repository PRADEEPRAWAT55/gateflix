<?php

if(!empty($_POST['unitId'])){
        
        $link = mysqli_connect('localhost', "root", "", 'example');
        $unit =$_POST['unitId'];
        $sql1 = "select * from chapters where unitId =".$unit;
        echo $sql1;
        if($result = mysqli_query($link, $sql1)){
            if(mysqli_num_rows($result) > 0){

                echo '<option>--chapters--</option>';
                while($row = mysqli_fetch_array($result)){ 
                    echo '<option id='.$row[id].'>'.$row['title'].'</option>';
                }
                mysqli_free_result($result);
            }
            else
                echo '<option>no chapters added yet</option>';
        }
        else
        echo "Error: ".mysqli_error($link);
        
        mysqli_close($link);
}
?>