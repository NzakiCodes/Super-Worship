<?php
include_once 'connection.php';
$sql ="SELECT * FROM background_image";
$result = $dbconn ->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
     echo "<div class=' w3-tiny w3-right ' ><br><br><div class='w3-white w3-card-4 w3-padding w3-container w3-border  w3-border-pink '><div class='w3-padding ' style='' id='main-cat'><br>";
    while($row = $result->fetch_assoc()) {
       
        $bg_image_id = $row["bg_image_id"];
        $bg_image_title = $row["bg_image_title"];
        $bg_image_alt = $row["bg_image_alt"]; 
        $bg_image_src = $row["bg_image_src"];
       
        echo "<a href='../..$bg_image_src'> <div  class='w3-btn w3-hover-border w3-padding-16 w3-border-top w3-border-pink' ><img title='$bg_image_title' style='width:100px;height:100px;' class='w3-image' src='../..$bg_image_src'><p>$bg_image_title</div>";
       
    }echo "<br></div></div>";
    
} else {
    echo "<script>alert('No Clothes Here')</script>";
}

?>